<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:countries,slug',
            'status' => 'required|integer',
        ]);

        // Generate slug if not provided
        if (empty($validatedData['slug'])) {
            $validatedData['slug'] = Str::slug($validatedData['name']);
        }

        $country = Country::create($validatedData);
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
