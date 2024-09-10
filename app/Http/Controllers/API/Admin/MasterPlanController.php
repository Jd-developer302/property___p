<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\MasterPlan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class MasterPlanController extends Controller
{
    public function index()
    {
        $masterPlans = MasterPlan::with(['project'])->get();
        return response()->json($masterPlans);
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
            $data['image'] = $request->file('image')->store('masterplans', 'public');
        }

        $masterPlan = MasterPlan::create($data);

        return response()->json($masterPlan, Response::HTTP_CREATED);
    }
    public function show(MasterPlan $masterPlan)
    {
        return response()->json($masterPlan);
    }
    public function update(Request $request, MasterPlan $masterPlan)
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
            if ($masterPlan->image) {
                Storage::delete($masterPlan->image);
            }
            $data['image'] = $request->file('image')->store('masterplans', 'public');
        }

        $masterPlan->update($data);

        return response()->json($masterPlan);
    }
   
    public function destroy($id)
{
    $masterPlan = MasterPlan::findOrFail($id);

    Log::info('Deleting master plan: ' . $masterPlan->id);

    // Delete the image file
    if ($masterPlan->image) {
        Storage::delete($masterPlan->image);
    }

    $masterPlan->delete();

    Log::info('Master plan deleted successfully.');

    return response()->json(null, 204);
}

    
    
}
