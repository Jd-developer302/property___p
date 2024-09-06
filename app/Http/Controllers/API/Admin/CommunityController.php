<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCommunityRequest;
use App\Http\Requests\UpdateCommunityRequest;
use Illuminate\Support\Facades\Storage;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $communities = Community::all();
        return response()->json($communities);
    }

    public function store(StoreCommunityRequest $request)
{
    $community = new Community();
    $community->name = $request->name;
    $community->slug = Str::slug($request->name);
    $community->description = $request->description;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $community->image = $imagePath;
    }

    if ($request->hasFile('video')) {
        $videoPath = $request->file('video')->store('videos', 'public');
        $community->video = $videoPath;
    }

    $community->save();

    return response()->json($community, 201);
}


    public function show($id)
    {
        $community = Community::findOrFail($id);
        return response()->json($community);
    }

    public function update(UpdateCommunityRequest $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|unique:communities,slug,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10000',
        ]);
    
        // Find the community or fail
        $community = Community::findOrFail($id);
    
        // Update community properties
        $community->name = $validatedData['name'];
        $community->slug = Str::slug($validatedData['name']);
        $community->description = $validatedData['description'];
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($community->image) {
                Storage::disk('public')->delete($community->image);
            }
            // Store new image
            $community->image = $request->file('image')->store('images', 'public');
        }
    
        // Handle video upload
        if ($request->hasFile('video')) {
            // Delete old video if exists
            if ($community->video) {
                Storage::disk('public')->delete($community->video);
            }
            // Store new video
            $community->video = $request->file('video')->store('videos', 'public');
        }
    
        // Save the updated community
        $community->save();
    
        // Return updated community as JSON
        return response()->json($community);
    }
    


    public function destroy($id)
    {
        $community = Community::findOrFail($id);
        $community->delete();
        return response()->json(null, 204);
    }
}
