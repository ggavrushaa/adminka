<?php

namespace App\View\Components;

use Closure;
use App\Models\Article;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BlogArticlesComponent extends Component
{
    public $articles;
    public function __construct()
    {
        $this->articles = Article::where('show_on_site', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(7);
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-articles-component');
    }
}
