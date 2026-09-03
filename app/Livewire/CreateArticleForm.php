<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateArticleForm extends Component
{
    public $title = '';

    public $description = '';

    public $price = '';

    public $category_id = '';

    public $article;

    protected function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', __('ui.successArticle'));

        $this->reset([
            'title',
            'description',
            'price',
            'category_id',
        ]);
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}