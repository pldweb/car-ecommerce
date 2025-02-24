<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;
use ReflectionMethod;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->map();
    }

    public function map()
    {
        $this->mapDynamicRoutes();
    }

    public function mapDynamicRoutes()
    {
        $controllerPath = app_path('Http/Controllers');
        $namespace = 'App\Http\Controllers';

        $this->registerRoutesFromFolder($controllerPath, $namespace);
    }

    public function registerRoutesFromFolder($folder, $namespace, $prefix = '')
    {
        foreach (scandir($folder) as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $fullPath = $folder . DIRECTORY_SEPARATOR . $file;
            $className = pathinfo($file, PATHINFO_FILENAME);

            if (is_dir($fullPath)) {
                // ✅ Memastikan pemanggilan metode benar
                $this->registerRoutesFromFolder($fullPath, $namespace . '\\' . $className, $prefix . strtolower($className) . '/');
            } elseif (str_ends_with($file, 'Controller.php')) {
                // ✅ Pastikan hanya file controller yang diproses
                $controllerClass = $namespace . '\\' . $className;
                if (class_exists($controllerClass)) {
                    $this->registerRoutesFromController($controllerClass, $prefix);
                }
            }
        }
    }

    protected function registerRoutesFromController($controllerClass, $prefix)
    {
        $reflection = new ReflectionClass($controllerClass);
        $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($methods as $method) {
            if ($method->class !== $controllerClass || $method->isConstructor()) {
                continue;
            }

            $methodName = $method->name;
            preg_match('/^(get|post|put|delete|patch)(.+)$/', $methodName, $matches);

            if (count($matches) === 3) {
                [$fullMatch, $httpVerb, $name] = $matches;
                $routeName = strtolower(preg_replace('/([a-z])([A-Z])/', '$1-$2', $name));

                // Jika method adalah "getIndex", buat route "/"
                if ($routeName === 'index') {
                    $routeName = '';
                }

                if ($routeName === '') {
                    Route::match(strtolower($httpVerb), $prefix, [$controllerClass, $methodName]);
                } else {
                    Route::match(strtolower($httpVerb), $prefix . $routeName . '/{params?}', [$controllerClass, $methodName])
                        ->where('params', '.*');
                }
            }
        }
    }

}
