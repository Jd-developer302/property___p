<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Overview;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class OverviewController extends Controller
{
    public function index()
    {
        $overviews = Overview::with('project')->get();
        return response()->json($overviews, Response::HTTP_OK);
    }

    public function show($id)
    {
        $overview = Overview::with('project')->find($id);
    
        if (!$overview) {
            return response()->json(['message' => 'Overview not found'], Response::HTTP_NOT_FOUND);
        }
    
        // Ensure URLs are returned correctly
        if ($overview->logo1) {
            $overview->logo1 = url('storage/' . $overview->logo1);
        }
        if ($overview->logo2) {
            $overview->logo2 = url('storage/' . $overview->logo2);
        }
    
        return response()->json($overview, Response::HTTP_OK);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_id' => 'required|exists:projects,id',
        ]);

        // Handle file uploads
        $logo1Path = $request->file('logo1') ? $request->file('logo1')->store('overview', 'public') : null;
        $logo2Path = $request->file('logo2') ? $request->file('logo2')->store('overview', 'public') : null;

        $overview = Overview::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'project_id' => $request->project_id,
            'logo1' => $logo1Path,
            'logo2' => $logo2Path,
        ]);

        return response()->json($overview, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $overview = Overview::find($id);

        if (!$overview) {
            return response()->json(['message' => 'Overview not found'], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_id' => 'required|exists:projects,id',
        ]);

        // Handle file uploads
        if ($request->hasFile('logo1')) {
            // Delete the old logo if it exists
            if ($overview->logo1) {
                Storage::disk('public')->delete($overview->logo1);
            }
            $overview->logo1 = $request->file('logo1')->store('overview', 'public');
        }

        if ($request->hasFile('logo2')) {
            // Delete the old logo if it exists
            if ($overview->logo2) {
                Storage::disk('public')->delete($overview->logo2);
            }
            $overview->logo2 = $request->file('logo2')->store('overview', 'public');
        }

        // Update other fields
        $overview->name = $request->name;
        $overview->slug = Str::slug($request->name);
        $overview->description = $request->description;
        $overview->project_id = $request->project_id;
        $overview->save();

        return response()->json($overview, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $overview = Overview::find($id);

        if (!$overview) {
            return response()->json(['message' => 'Overview not found'], Response::HTTP_NOT_FOUND);
        }

        // Delete the logos from storage
        if ($overview->logo1) {
            Storage::disk('public')->delete($overview->logo1);
        }
        if ($overview->logo2) {
            Storage::disk('public')->delete($overview->logo2);
        }

        $overview->delete();

        return response()->json(['message' => 'Overview deleted'], Response::HTTP_OK);
    }
}
