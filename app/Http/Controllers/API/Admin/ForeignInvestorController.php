<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ForeignInvestor;

class ForeignInvestorController extends Controller
{
    public function index(Request $request)
    {

        $perPage = $request->get('per_page', 10); 
        $investors = ForeignInvestor::paginate($perPage);
    
        return response()->json($investors);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'title', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $investor = ForeignInvestor::create($data);

        return response()->json($investor, 201);
    }
    public function show($id)
    {
        return ForeignInvestor::findOrFail($id);
    }

    public function update(Request $request, $id)
{
    
    Log::info('Update request received:', $request->all());

    $request->validate([
        'name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'nullable|string',
    ]);

    $investor = ForeignInvestor::findOrFail($id);
    $data = $request->only(['name', 'title', 'slug', 'description']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('images', 'public');
    }

    $investor->update($data);

    return response()->json($investor);
}


    public function destroy($id)
    {
        ForeignInvestor::destroy($id);

        return response()->json(null, 204);
    }
}
