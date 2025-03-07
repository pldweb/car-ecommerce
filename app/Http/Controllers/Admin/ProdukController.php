<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brand;
use App\Product;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('admin.produk.index');
    }

    public function getTambahProduk()
    {
        return view('admin.produk.create');
    }

    public function postTambahProdukAction(Request $request)
    {
        dd($request);
    }

    public function postKategoriBrand(Request $request)
    {
        $query = $request->input('title');
        $brand = Brand::where('nama', 'like', '%' . $query . '%')->get();
        return response()->json($brand);
    }

}
