<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaComponent extends Component
{
    public $media;
    public function __construct()
    {
        $this->media = \App\Models\Media::where('show_on_site', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.media-component');
    }
}
