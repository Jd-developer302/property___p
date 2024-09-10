<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectLocation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProjectLocationController extends Controller
{
    public function index()
    {

        $projectLocations = ProjectLocation::with(['project'])->get();
        return response()->json($projectLocations);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('project_locations', 'public');
        }

        $projectLocation = ProjectLocation::create($data);

        return response()->json($projectLocation, Response::HTTP_CREATED);
    }
    public function show(ProjectLocation $projectLocation)
    {
        return response()->json($projectLocation);
    }
    public function update(Request $request, ProjectLocation $projectLocation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($projectLocation->image) {
                Storage::delete($projectLocation->image);
            }
            $data['image'] = $request->file('image')->store('project_locations', 'public');
        }

        $projectLocation->update($data);

        return response()->json($projectLocation);
    }
    
    public function destroy($id)
    {
        $projectLocation = ProjectLocation::findOrFail($id);
    
        Log::info('Deleting master plan: ' . $projectLocation->id);
    
        // Delete the image file
        if ($projectLocation->image) {
            Storage::delete($projectLocation->image);
        }
    
        $projectLocation->delete();
    
        Log::info('Master plan deleted successfully.');
    
        return response()->json(null, 204);
    }
}
