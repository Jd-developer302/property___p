<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCommunityRequest;
use App\Http\Requests\UpdateCommunityRequest;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 15);
        $communities = Community::paginate($perPage);
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
        $community = Community::findOrFail($id);
        $community->name = $request->name;
        $community->slug = Str::slug($request->name);
        $community->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $community->image = $imagePath;
        }

        $community->video = $request->video;
        $community->save();

        return response()->json($community);
    }

    public function destroy($id)
    {
        $community = Community::findOrFail($id);
        $community->delete();
        return response()->json(null, 204);
    }
}
