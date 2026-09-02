<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->latest()->paginate(6);

        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function category(Category $category)
    {
        $articles = Article::where('category_id', $category->id)->where('is_accepted', true)->latest()->paginate(6);

        return view('article.category', compact('articles', 'category'));
    }

   public function search(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return redirect()->route('article.index');
    }

     $articles = Article::search($query)->where('is_accepted', true)->paginate(6);

    return view('article.searched', compact('articles', 'query'));
}
}