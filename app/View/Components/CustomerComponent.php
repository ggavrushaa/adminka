<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomerComponent extends Component
{
    public $customers;
    public $page;
    public function __construct($page = null)
    {
        $this->page = $page;
        $this->customers = \App\Models\Customer::where('show_on_site', 1)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.customer-component');
    }
}
