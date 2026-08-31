<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }
}