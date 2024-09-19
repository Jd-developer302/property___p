<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Log;


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
        // Fetch top 10 articles ordered by 'created_at' in descending order (latest first)
        $topArticles = Article::select('slug', 'name as title', 'created_at') // Adjusted 'name' to 'title'
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return response()->json($topArticles);
    }


    public function similarArticles($slug)
    {
        // Fetch the article by slug
        $article = Article::where('slug', $slug)->firstOrFail();
    
        // Fetch similar articles from the same category, excluding the current article
        $similarArticles = Article::where('category_id', $article->category_id)
            ->where('id', '!=', $article->id) // Exclude the current article
            ->orderBy('created_at', 'desc')  // Order by newest articles
            ->take(5)  // Limit to 5 similar articles
            ->get(['slug', 'name as title', 'description', 'category_id', 'created_at']); // Adjust fields
    
        return response()->json($similarArticles);
    }


 
}
