<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::latest()->paginate(6);

        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function category(Category $category)
    {
        $articles = Article::where('category_id', $category->id)->latest()->paginate(6);

        return view('article.category', compact('articles', 'category'));
    }
}