<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogFilterComponent extends Component
{
    public $tags;
    public function __construct()
    {
        $this->tags = \App\Models\Tag::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-filter-component');
    }
}
