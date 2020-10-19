<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
class Articles extends Component
{
    public $articles;
    public function render()
    {
        $this->articles = Article::all();
        return view('livewire.articles');
    }
}
