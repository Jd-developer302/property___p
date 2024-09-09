<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 15);
        $projects = Project::with(['community', 'developer'])->paginate($perPage);

        return response()->json($projects);
    }
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'community_id' => 'required|exists:communities,id',
        'developer_id' => 'required|exists:developers,id',
        'name' => 'required|string|max:255',
        'apartments' => 'nullable|string',
        'payment_plan' => 'nullable|string',
        'down_payment' => 'nullable|string',
        'handover' => 'nullable|string',
        'starting_price' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images/projects', 'public');
    }

    $project = Project::create([
        'community_id' => $request->community_id,
        'developer_id' => $request->developer_id,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'apartments' => $request->apartments,
        'payment_plan' => $request->payment_plan,
        'down_payment' => $request->down_payment,
        'handover' => $request->handover,
        'starting_price' => $request->starting_price,
        'image' => $imagePath, 
    ]);

    $project->load(['community', 'developer']); // Load related community and developer

    return response()->json($project, 201);
}

public function update(Request $request, Project $project)
{
    // Debugging: dump request data
    // dd($request->all(), $project);

    $validator = Validator::make($request->all(), [
        'community_id' => 'required|integer|exists:communities,id',
        'developer_id' => 'required|integer|exists:developers,id',
        'name' => 'required|string|max:255',
        'apartments' => 'nullable|string',
        'payment_plan' => 'nullable|string',
        'down_payment' => 'nullable|string',
        'handover' => 'nullable|string',
        'starting_price' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $project = Project::find($project->id);

    if (!$project) {
        return response()->json(['message' => 'Project not found'], 404);
    }

    $imagePath = $project->image;
    if ($request->hasFile('image')) {
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }
        $imagePath = $request->file('image')->store('images/projects', 'public');
    }

    $project->update([
        'community_id' => $request->community_id,
        'developer_id' => $request->developer_id,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'apartments' => $request->apartments ?? $project->apartments,
        'payment_plan' => $request->payment_plan ?? $project->payment_plan,
        'down_payment' => $request->down_payment ?? $project->down_payment,
        'handover' => $request->handover ?? $project->handover,
        'starting_price' => $request->starting_price ?? $project->starting_price,
        'image' => $imagePath, 
    ]);

    $project->load(['community', 'developer']); 

    return response()->json($project);
}




    public function show($id)
    {
        $project = Project::with(['community', 'developer'])->find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($project);
    }



public function destroy($id)
{
    $project = Project::find($id);

    if (!$project) {
        return response()->json(['message' => 'Project not found'], 404);
    }

    $project->delete();

    return response()->json(['message' => 'Project deleted successfully']);
}

}
