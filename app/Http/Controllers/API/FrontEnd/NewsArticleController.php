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
 
}
