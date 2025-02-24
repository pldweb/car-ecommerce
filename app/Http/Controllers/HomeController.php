<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getIndex()
    {
        $categories = Category::take(6)->get();
        $products = Product::with('galleries')->take(8)->get();

        $params = [
            'categories' => $categories,
            'products' => $products
        ];
        return view('pages.home', $params);
    }

    public function index()
    {

    }
}
