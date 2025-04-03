<?php

namespace App\View\Components;

use Closure;
use App\Models\TechStack;
use App\Models\TechCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TechStackComponent extends Component
{
    public $stacks;
    public $categories;
    public $page;
    public function __construct($page = null)
    {
        $this->page = $page;
        $this->stacks = TechStack::where('show_on_site', 1)->get();
        $this->categories = TechCategory::with('techStacks')->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.tech-stack-component');
    }
}
