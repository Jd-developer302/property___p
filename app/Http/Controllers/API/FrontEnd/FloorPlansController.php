<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FloorPlan;
use Illuminate\Http\Response;

class FloorPlansController extends Controller
{
    public function showBySlug($slug)
    {
        $floorplan = FloorPlan::with('project')->where('slug', $slug)->first();
    
        if (!$floorplan) {
            return response()->json(['message' => 'FloorPlan not found'], Response::HTTP_NOT_FOUND);
        }
    
        return response()->json($floorplan, Response::HTTP_OK); 
    }
}
