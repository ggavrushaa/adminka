<?php

namespace App\View\Components;

use Closure;
use App\Models\Review;
use App\Models\ReviewSource;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ReviewsComponent extends Component
{
    public $sources;
    public $reviews;

    public function __construct()
    {
        $this->sources = ReviewSource::all();
        $this->reviews = Review::where('show_on_site', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.reviews-component');
    }
}
