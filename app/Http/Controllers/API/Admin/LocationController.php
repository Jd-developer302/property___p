<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::with(['state', 'city', 'country'])->get();
        return response()->json($locations);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'state_id' => 'nullable|exists:country_states,id',
            'city_id' => 'nullable|exists:cities,id',
            'country_id' => 'nullable|exists:countries,id',
            'address' => 'nullable|string',
            'postal_code' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $location = Location::create($request->all());
        return response()->json($location, 201);
    }

    public function show($id)
    {
        try {
            $location = Location::with(['state', 'city', 'country'])->findOrFail($id);
            return response()->json($location);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }

    public function edit($id)
    {
        try {
            $location = Location::with(['state', 'city', 'country'])->findOrFail($id);
            return response()->json($location);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        \Log::info('Update Request Data:', $request->all());
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'state_id' => 'nullable|exists:country_states,id',
            'city_id' => 'nullable|exists:cities,id',
            'country_id' => 'nullable|exists:countries,id',
            'address' => 'nullable|string',
            'postal_code' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        try {
            $location = Location::findOrFail($id);
            $location->update($request->all());
            return response()->json($location);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }
    

    public function destroy($id)
    {
        try {
            $location = Location::findOrFail($id);
            $location->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }
}
