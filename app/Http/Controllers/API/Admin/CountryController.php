<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:countries,slug',
            'status' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        // Ensure slug is generated if not provided
        $slug = $request->input('slug') ?: Str::slug($request->input('name'));

        // Create and save the new country
        $country = Country::create([
            'name' => $request->input('name'),
            'slug' => $slug,
            'status' => $request->input('status') ? 1 : 0,
        ]);

        return response()->json($country, 201);
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return response()->json($country);
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'slug' => 'sometimes|nullable|string|max:255|unique:countries,slug,' . $country->id,
            'status' => 'sometimes|required|integer',
        ]);

        // Generate slug if not provided
        if (empty($validatedData['slug']) && isset($validatedData['name'])) {
            $validatedData['slug'] = Str::slug($validatedData['name']);
        }

        // Update the country with the validated data
        $country->update($validatedData);
        return response()->json($country);
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return response()->json(null, 204);
    }
}
