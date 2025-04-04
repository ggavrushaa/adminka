<?php

namespace App\View\Components;

use App\Models\Work;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CasesSliderComponent extends Component
{
    public $works;
    public $page;

    public function __construct($page = null)
    {
        $this->page = $page;
        $this->works = Work::where('show_on_site', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.cases-slider-component');
    }
}
