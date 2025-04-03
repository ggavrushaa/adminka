<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TechnologyComponent extends Component
{
    public $categories;
    public function __construct()
    {
        $this->categories = \App\Models\TechCategory::with('techStacks')->get();
    }


    public function render(): View|Closure|string
    {
        return view('components.technology-component');
    }
}
