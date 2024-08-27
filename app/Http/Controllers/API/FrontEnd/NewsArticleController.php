<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;


class NewsArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();
        return response()->json($articles);
    }
    public function show($slug)
{
    $article = Article::with('category')->where('slug', $slug)->firstOrFail();
    
    return response()->json($article);
}
public function topArticles()
{
    $topArticles = Article::select('slug', 'title')->orderBy('views', 'desc')->take(10)->get();
    return response()->json($topArticles);
}

 
}
