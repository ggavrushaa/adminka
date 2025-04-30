<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $directions = \App\Models\Direction::where('show_on_site', 1)->orderBy('order_column')->get();
        return view('form', compact('directions'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'direction' => 'required',
            'message' => 'required',
        ]);

    }
}
