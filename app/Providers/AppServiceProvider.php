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
        // Scan setiap file di dalam folder controller
        foreach (scandir($folder) as $file) {

            // Skip . pada nama file
            if ($file === '.' || $file === '..') {
                continue;
            }

            $fullPath = $folder . DIRECTORY_SEPARATOR . $file;
            $className = pathinfo($file, PATHINFO_FILENAME);

            if (is_dir($fullPath)) {

                // Memastikan pemanggilan metode benar
                $this->registerRoutesFromFolder($fullPath, $namespace . '\\' . $className, $prefix . strtolower($className) . '/');

            } elseif (str_ends_with($file, 'Controller.php')) {

                // Pastikan hanya file controller yang diproses
                $controllerClass = $namespace . '\\' . $className;

                // Cek apakah ada class
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

        // Ambil nama kelas tanpa namespace
        $controllerName = $reflection->getShortName();

        // Jika controller adalah HomeController, gunakan root URL
        if ($controllerName === 'HomeController') {
            $prefix = '/';
        } else {
            // Jika bukan HomeController, tambahkan nama controller ke prefix
            $controllerName = str_replace('Controller', '', $controllerName);
            $controllerName = strtolower($controllerName);
            $prefix .= $controllerName . '/';
        }

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

                // Gabungkan prefix dan nama method
                $fullRoute = $prefix . $routeName;

                if ($routeName === '') {
                    Route::match(strtolower($httpVerb), $prefix, [$controllerClass, $methodName]);
                } else {
                    Route::match(strtolower($httpVerb), $fullRoute . '/{params?}', [$controllerClass, $methodName])
                        ->where('params', '.*');
                }
            }
        }
    }

}
