<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::with(['project'])->get();
        return response()->json($features);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        $feature = Feature::create($data);

        return response()->json($feature, Response::HTTP_CREATED);
    }
    public function show(Feature $feature)
    {
        return response()->json($feature);
    }
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        // Update the slug if the name changes
        if ($request->has('name') && $request->input('name') !== $feature->name) {
            $data['slug'] = Str::slug($request->input('name'));
        }

        $feature->update($data);

        return response()->json($feature);
    }
    public function destroy(Feature $feature)
    {
        $feature->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
