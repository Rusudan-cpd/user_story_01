<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::where('is_accepted', true)->latest()->take(6)->get();

        return view('home', compact('articles'));
    }

    public function setLanguage($lang)
 {
    session()->put('locale', $lang);

    return redirect()->back();
  }
}