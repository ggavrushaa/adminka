<?php

namespace App\View\Components;

use App\Models\Work;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CasesSliderComponent extends Component
{
    public $works;

    public function __construct()
    {
        $this->works = Work::where('show_in_work_block', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.cases-slider-component');
    }
}
