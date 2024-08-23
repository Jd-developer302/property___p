<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CountryStateController extends Controller
{
    public function index()
    {
        $states = State::with('country')->get(); 
        return response()->json($states);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:country_states,slug',
            'status' => 'required|integer|between:0,1',
        ]);

        // Generate slug if not provided
        if (empty($validatedData['slug'])) {
            $validatedData['slug'] = Str::slug($validatedData['name']);
        }

        $state = State::create($validatedData);
        return response()->json($state, 201);
    }

    public function show($id)
    {
        $state = State::findOrFail($id);
        return response()->json($state);
    }

    public function update(Request $request, $id)
    {
        try {
            $state = State::findOrFail($id);
            $validatedData = $request->validate([
                'country_id' => 'sometimes|required|exists:countries,id',
                'name' => 'sometimes|required|string|max:255',
                'slug' => [
                    'sometimes',
                    'nullable',
                    'string',
                    'max:255',
                    Rule::unique('country_states', 'slug')->ignore($id),
                ],
                'status' => 'sometimes|required|integer|between:0,1',
            ]);

            if (empty($validatedData['slug']) && !empty($validatedData['name'])) {
                $validatedData['slug'] = Str::slug($validatedData['name']);
            }
            $state->update($validatedData);
            return response()->json($state);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();
        return response()->json(null, 204);
    }
}
