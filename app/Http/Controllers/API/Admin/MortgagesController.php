<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mortgage;

class MortgagesController extends Controller
{
    public function index()
{
    $mortgage = Mortgage::first(); 
    if ($mortgage) {
        return response()->json([
            'data' => [$mortgage],
            'current_page' => 1,
            'last_page' => 1
        ]);
    } else {
        return response()->json([
            'data' => [],
            'current_page' => 1,
            'last_page' => 1
        ]);
    }
}


    // Store a new mortgage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $mortgage = Mortgage::create($request->all());
        return response()->json($mortgage, 201);
    }

    // Show a specific mortgage
    public function show($id)
    {
        $mortgage = Mortgage::findOrFail($id);
        return response()->json($mortgage);
    }

    // Update a specific mortgage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $mortgage = Mortgage::findOrFail($id);
        $mortgage->update($request->all());
        return response()->json($mortgage);
    }

    // Delete a specific mortgage
    public function destroy($id)
    {
        Mortgage::destroy($id);
        return response()->json(null, 204);
    }
}
