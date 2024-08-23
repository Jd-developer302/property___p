<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'sometimes|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'navbar_status' => 'required|boolean',
            'status' => 'required|boolean',
            'created_by' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $categoryData = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $categoryData['image'] = $imagePath;
        }

        $categoryData['slug'] = Str::slug($request->name);
        $category = Category::create($categoryData);

        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    
   
    public function update(Request $request, $id)
{
    try {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'image' => 'sometimes|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'meta_title' => 'sometimes|required|string|max:255',
            'meta_description' => 'sometimes|required|string',
            'meta_keywords' => 'sometimes|required|string',
            'navbar_status' => 'sometimes|required|boolean',
            'status' => 'sometimes|required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $category = Category::findOrFail($id);
        $category->update($request->only(['name', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'navbar_status', 'status']));

        return response()->json(['message' => 'Category updated successfully', 'data' => $category], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Internal server error', 'error' => $e->getMessage()], 500);
    }
}

    


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // Delete the image if necessary
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        $category->delete();

        return response()->json(null, 204);
    }
}
