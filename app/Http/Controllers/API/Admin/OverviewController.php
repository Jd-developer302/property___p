<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Overview;
use Illuminate\Http\Response;

class OverviewController extends Controller
{
    public function index()
    {
        
        
        $overviews = Overview::with(['project'])->get();
        return response()->json($overviews);
    }
    public function store(Request $request)
    {
        $request->validate([
            'logo1' => 'required|image|mimes:jpg,png,jpeg,gif',
            'logo2' => 'required|image|mimes:jpg,png,jpeg,gif',
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['description', 'project_id']);

        // Handle file uploads
        if ($request->hasFile('logo1')) {
            $data['logo1'] = $request->file('logo1')->store('overview', 'public');
        }

        if ($request->hasFile('logo2')) {
            $data['logo2'] = $request->file('logo2')->store('overview', 'public');
        }

        $overview = Overview::create($data);

        // Append URL for logos
        $overview->logo1_url = Storage::url($overview->logo1);
        $overview->logo2_url = Storage::url($overview->logo2);

        return response()->json($overview, Response::HTTP_CREATED);
    }

    public function show($id)
{
    $overview = Overview::with('project')->findOrFail($id);

    // Access the project name
    $projectName = $overview->project->name;

    return view('overview.show', compact('overview', 'projectName'));
}
public function update(Request $request, Overview $overview)
{
    $request->validate([
        'logo1' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        'logo2' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        'description' => 'required|string',
        'project_id' => 'required|exists:projects,id',
    ]);

    $data = $request->only(['description', 'project_id']);

    // Handle file uploads
    if ($request->hasFile('logo1')) {
        // Delete old file
        Storage::delete('public/' . $overview->logo1);
        $data['logo1'] = $request->file('logo1')->store('overview', 'public');
    }

    if ($request->hasFile('logo2')) {
        // Delete old file
        Storage::delete('public/' . $overview->logo2);
        $data['logo2'] = $request->file('logo2')->store('overview', 'public');
    }

    $overview->update($data);

    // Append URL for logos
    $overview->logo1_url = Storage::url($overview->logo1);
    $overview->logo2_url = Storage::url($overview->logo2);

    return response()->json($overview);
}

    public function destroy(Overview $overview)
    {
        // Delete files
        Storage::delete($overview->logo1);
        Storage::delete($overview->logo2);

        $overview->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
