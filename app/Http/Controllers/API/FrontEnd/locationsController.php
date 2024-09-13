<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectLocation;
use Illuminate\Http\Response;

class locationsController extends Controller
{
    public function showBySlug($slug)
    {
        $location = ProjectLocation::with('project')->where('slug', $slug)->first();
    
        if (!$location) {
            return response()->json(['message' => 'ProjectLocation not found'], Response::HTTP_NOT_FOUND);
        }
    
        return response()->json($location, Response::HTTP_OK); 
    }
}
