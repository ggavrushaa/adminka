<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($locale, $id)
    {
        $article = Article::findOrFail($id);
        $articles = Article::where('show_on_site', 1)->take(3)->get();

        return view('blog.show', compact('article', 'articles'));
    }
}
