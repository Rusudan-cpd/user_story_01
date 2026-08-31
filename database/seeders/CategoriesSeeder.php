<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Salute e bellezza',
        'Casa e giardinaggio',
        'Giocattoli',
        'Sport',
        'Animali Domestici',
        'Libri e riviste',
        'Accessori',
        'Motori',
    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([ 'name' => $category,]);
        }
    }
}