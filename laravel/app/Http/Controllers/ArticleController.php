<?php

namespace App\Http\Controllers;

//==========ここから追加==========
use App\Article;
//==========ここまで追加==========

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {

        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
        // return view('articles.index')->with(['articles' => $articles]);
        // return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.create');
    }
}
