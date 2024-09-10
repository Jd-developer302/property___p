<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\FloorPlan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class FloorPlanController extends Controller
{
    public function index()
    {
        $floorPlans = FloorPlan::with(['project'])->get();
        return response()->json($floorPlans);
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
            $data['image'] = $request->file('image')->store('floorplans', 'public');
        }

        $floorPlan = FloorPlan::create($data);

        return response()->json($floorPlan, Response::HTTP_CREATED);
    }
    public function show(FloorPlan $floorPlan)
    {
        return response()->json($floorPlan);
    }
    public function update(Request $request, FloorPlan $floorPlan)
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
            if ($floorPlan->image) {
                Storage::disk('public')->delete($floorPlan->image);
            }
            $data['image'] = $request->file('image')->store('floorplans', 'public');
        }
    
        $floorPlan->update($data);
    
        return response()->json($floorPlan);
    }
    
    public function destroy(FloorPlan $floorPlan)
    {
        // If there's an image, delete it from storage
        if ($floorPlan->image) {
            Storage::disk('public')->delete($floorPlan->image);
        }

        // Delete the floor plan record from the database
        $floorPlan->delete();

        return response()->json([
            'message' => 'Floor Plan deleted successfully',
        ], Response::HTTP_OK);
    }

}
