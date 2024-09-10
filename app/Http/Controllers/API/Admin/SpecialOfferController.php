<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
class SpecialOfferController extends Controller
{
    public function index()
    {
        $specialOffers = SpecialOffer::with(['project'])->get();
        return response()->json($specialOffers);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        $specialOffer = SpecialOffer::create($data);

        return response()->json($specialOffer, Response::HTTP_CREATED);
    }
    public function show(SpecialOffer $specialOffer)
    {
        return response()->json($specialOffer);
    }
    public function update(Request $request, SpecialOffer $specialOffer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $data = $request->only(['name', 'description', 'project_id']);

        $specialOffer->update($data);

        return response()->json($specialOffer);
    }

    public function destroy($id)
    {
        $specialOffer = SpecialOffer::findOrFail($id);
    
        Log::info('Deleting master plan: ' . $specialOffer->id);
    

    
        $specialOffer->delete();
    
        Log::info('Master plan deleted successfully.');
    
        return response()->json(null, 204);
    }
}
