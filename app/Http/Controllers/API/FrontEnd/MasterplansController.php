<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterPlan;
use Illuminate\Http\Response;

class MasterplansController extends Controller
{
    public function showBySlug($slug)
    {
        $masterplan = MasterPlan::with('project')->where('slug', $slug)->first();
    
        if (!$masterplan) {
            return response()->json(['message' => 'MasterPlan not found'], Response::HTTP_NOT_FOUND);
        }
    
        return response()->json($masterplan, Response::HTTP_OK); 
    }
}
