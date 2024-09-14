<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpecialOffer;
use Illuminate\Http\Response;

class SpecialOffersController extends Controller
{
    public function showBySlug($slug)
    {
        $special = SpecialOffer::with('project')->where('slug', $slug)->first();
    
        if (!$special) {
            return response()->json(['message' => 'SpecialOffers not found'], Response::HTTP_NOT_FOUND);
        }
    
        return response()->json($special, Response::HTTP_OK); 
    }
}
