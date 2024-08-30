<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        $developers = Developer::orderBy('created_at', 'desc')->paginate(10);
        return response()->json($developers);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        $developer = Developer::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $logoPath,
        ]);

        return response()->json(['message' => 'Developer created successfully', 'developer' => $developer]);
    }


    public function show($id)
    {
        $developer = Developer::findOrFail($id);
        return response()->json($developer);
    }


    public function update(Request $request, $id)
{
    $developer = Developer::find($id);
    
    if (!$developer) {
        return response()->json(['error' => 'Developer not found'], 404);
    }

    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:developers,slug,' . $id,
        'description' => 'nullable|string',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    try {
        $developer->name = $request->input('name');
        $developer->slug = $request->input('slug');
        $developer->description = $request->input('description');

        // Handle file upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage'), $filename);
            $developer->logo = $filename;
        }

        $developer->save();

        return response()->json(['message' => 'Developer updated successfully']);
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return response()->json(['error' => 'An error occurred'], 500);
    }
}








    public function destroy($id)
    {
        $developer = Developer::findOrFail($id);
        

        if ($developer->logo) {
            Storage::disk('public')->delete($developer->logo);
        }

        $developer->delete();

        return response()->json(['message' => 'Developer deleted successfully']);
    }
}
