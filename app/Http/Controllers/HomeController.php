<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{

    public function getIndex()
    {
//        $categories = Category::take(6)->get();
//        $products = Product::with('galleries')->take(8)->get();
//
        $params = [
            'title' => 'Penyedia Mobil Handal',
        ];
        return view('landing-page.index', $params);
    }

    public function getTentangKami()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('landing-page.about', $params);
    }

    public function getHubungiKami()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];

        return view('landing-page.contact', $params);
    }

    public function getTim()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('landing-page.team', $params);
    }

    public function getBooking()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('landing-page.booking', $params);
    }

    public function getTestimonial()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('landing-page.testimonial', $params);
    }

    public function getLayanan()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('landing-page.service', $params);
    }

    public function getLogin()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('auth.login', $params);
    }

    public function getRegister()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('auth.register', $params);
    }
    public function getResetPassword()
    {
        $params = ['title' => 'Penyedia Mobil Handal'];
        return view('auth.forgot-password', $params);
    }
}
