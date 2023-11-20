<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function show() {
        if(Auth::check()){
            // $admin = User::where('id')->get();
            $data = User::where('role', 'user')->get();
            $produk = Product::all();
            $artikel = Article::all();

            return view('admin', [
                "tes" => $data,
                "produk" => $produk,
                "artikel" => $artikel,
                // "admin" => $admin
                
            ]);

        }else{
            return redirect('/sign-in');
        }
    }

    public function deleteproduct(string $id){
        $produk = Product::find($id);

        $response = Http::delete('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/deleteProductById?id='.$produk->id);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin#section2');
            // Gantilah 'admin' dengan nama rute yang sesuai
        }
    }

    public function deletearticle(string $id){
        $artikel = Article::find($id);

        $response = Http::delete('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/deleteArticleById?id='.$artikel->id);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin#section2');
            // Gantilah 'admin' dengan nama rute yang sesuai
        }
    }



    

    
        
}

