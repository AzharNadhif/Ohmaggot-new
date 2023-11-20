<?php

namespace App\Http\Controllers;
use App\Models\Article;


class ArticleController extends Controller
{
    public function show(){
        
        $artikel = Article::all();
        return view('article',[
            "artikel" => $artikel
        ]

    );
    }
}
