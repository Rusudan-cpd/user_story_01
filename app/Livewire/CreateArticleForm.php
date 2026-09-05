<?php

namespace App\Livewire;

use App\Jobs\ResizeImage;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $title = '';

    public $description = '';

    public $price = '';

    public $category_id = '';

    public $article;

    public $images = [];

    public $temporary_images;

    protected function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function updatedTemporaryImages()
    {
        $this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6',
        ]);

        $this->images = [];

        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
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

        if ($this->images) {

            foreach ($this->images as $image) {

                $newFileName = "articles/{$this->article->id}";

                $path = $image->store($newFileName, 'public');

                $newImage = $this->article->images()->create([
                    'path' => $path,
                ]);

                dispatch(new ResizeImage(300, 300, $newImage->path));
            }
        }

        session()->flash('success', __('ui.successArticle'));

        $this->reset([
            'title',
            'description',
            'price',
            'category_id',
            'images',
            'temporary_images',
        ]);
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}