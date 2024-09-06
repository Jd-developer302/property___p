<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::with('category')->get();
        return response()->json($articles);
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'meta_title' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'slug' => 'nullable|string|max:255|unique:articles,slug', // Allow null but must be unique if provided
        'description' => 'nullable|string',
        'yt_iframe' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        'status' => 'boolean',
        'created_by' => 'required|exists:users,name',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'The given data was invalid.',
            'errors' => $validator->errors()
        ], 422);
    }

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('articles', 'public');
    }

    $user = \App\Models\User::where('name', $request->input('created_by'))->firstOrFail();

    $article = new Article();
    $article->name = $request->input('name');
    $article->meta_title = $request->input('meta_title');
    $article->category_id = $request->input('category_id');
    $article->slug = $request->input('slug') ?: Str::slug($request->input('name')); // Generate slug if not provided
    $article->description = $request->input('description');
    $article->yt_iframe = $request->input('yt_iframe');
    $article->meta_description = $request->input('meta_description');
    $article->meta_keywords = $request->input('meta_keywords');
    $article->image = $imagePath;
    $article->status = $request->input('status') ? 1 : 0;
    $article->created_by = $user->id; 
    $article->save();

    return response()->json($article, 201);
}

    



    public function show(Article $article)
    {
        return response()->json($article);
    }

    public function update(Request $request, $id)
{
    dd($request->all());
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'meta_title' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'slug' => 'nullable|string|max:255|unique:articles,slug,' . $id,
        'description' => 'nullable|string',
        'yt_iframe' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'boolean',
        'created_by' => 'required|exists:users,name',
    ]);
    

    if ($validator->fails()) {
        return response()->json([
            'message' => 'The given data was invalid.',
            'errors' => $validator->errors()
        ], 422);
    }

    $article = Article::find($id);

    if (!$article) {
        return response()->json(['error' => 'Article not found'], 404);
    }

    // Update fields
    $article->name = $request->input('name');
    $article->meta_title = $request->input('meta_title');
    $article->category_id = $request->input('category_id');
    $article->slug = $request->input('slug');
    $article->description = $request->input('description');
    $article->meta_description = $request->input('meta_description');
    $article->meta_keywords = $request->input('meta_keywords');
    $article->status = $request->input('status') ? 1 : 0;

    // Check if 'created_by' exists in the 'users' table
    $user = User::where('name', $request->input('created_by'))->first();
    if ($user) {
        $article->created_by = $user->id;
    } else {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('articles', 'public');
        $article->image = $imagePath;
    }

    $article->save();

    return response()->json($article);
}

    
    


    

    

    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
