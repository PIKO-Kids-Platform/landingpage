<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleTag;
use App\Tag;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        return view('blog-detail', compact('article'));
    }

    public function list()
    {
        $articles = Article::paginate(4)->onEachSide(1);                
        return view('blog-list', compact('articles'));
    }
}
