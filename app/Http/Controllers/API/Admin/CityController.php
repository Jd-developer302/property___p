<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('state')->get();
        return response()->json($cities);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'country_state_id' => 'required|exists:country_states,id',
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255', // Slug will be generated if not provided
            'status' => 'required|integer|between:0,1',
            'total_area' => 'nullable|numeric',
            'density' => 'nullable|numeric',
            'population' => 'nullable|integer',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Generate unique slug if not provided
        if (empty($validatedData['slug'])) {
            $validatedData['slug'] = $this->generateUniqueSlug($validatedData['name']);
        }

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/cities', $imageName);
            $validatedData['image'] = $imageName;
        }

        $city = City::create($validatedData);

        return response()->json($city, 201);
    }

    public function edit($id)
    {
        $city = City::with('state')->findOrFail($id);
        return response()->json($city);
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'country_state_id' => 'required|integer|exists:country_states,id',
                'title' => 'required|string|max:255',
                'slug' => ['required', 'string', 'max:255', Rule::unique('cities', 'slug')->ignore($id)],
                'status' => 'required|boolean',
                'total_area' => 'nullable|numeric',
                'density' => 'nullable|numeric',
                'population' => 'nullable|integer',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $city = City::findOrFail($id);

            // Generate unique slug if it's different from the current one
            if ($city->slug !== $validatedData['slug']) {
                $validatedData['slug'] = $this->generateUniqueSlug($validatedData['name']);
            }

            $city->fill($validatedData);

            if ($request->hasFile('image')) {
                if ($city->image) {
                    Storage::delete('public/cities/' . $city->image);
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/cities', $imageName);
                $city->image = $imageName;
            }

            $city->save();
            return response()->json(['message' => 'City updated successfully'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal server error'], 500);
        }
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);

        // Delete the image file if it exists
        if ($city->image) {
            Storage::delete('public/cities/' . $city->image);
        }

        $city->delete();

        return response()->json(null, 204);
    }

    /**
     * Generate a unique slug for the city.
     *
     * @param string $name
     * @return string
     */
    protected function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = City::where('slug', 'like', "$slug%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
