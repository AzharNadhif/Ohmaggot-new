<?php

namespace App\Http\Controllers;

use App\Models\Product;
class ProductController extends Controller
{
    public function show(){
        $data = Product::all();
        return view('product', ["produk" => $data]);
    }
}
