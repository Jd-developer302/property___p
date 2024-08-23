<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::paginate(10); // Change 10 to the number of items you want per page
        return response()->json($about);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'discription' => 'required|string', // Using 'discription' as per your request
            'vision' => 'required|string',
            'mission' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $about = new About($request->only(['title', 'discription', 'vision', 'mission']));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('about_images', 'public');
            $about->image = $path;
        }

        $about->save();

        return response()->json($about, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = About::findOrFail($id);
        return response()->json($about);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'discription' => 'required|string', // Corrected field name
        'vision' => 'required|string',
        'mission' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $about = About::findOrFail($id);
    $about->title = $request->input('title');
    $about->discription = $request->input('discription'); // Corrected field name
    $about->vision = $request->input('vision');
    $about->mission = $request->input('mission');
    
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $imagePath = $request->file('image')->store('images', 'public');
        $about->image = $imagePath;
    }

    $about->save();

    return response()->json($about, 200);
}

    

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return response()->json(null, 204);
    }
}
