<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Http\Response;

class FeaturesController extends Controller
{
    public function showBySlug($slug)
{
    $feature = Feature::with('project')->where('slug', $slug)->first();

    if (!$feature) {
        return response()->json(['message' => 'Feature not found'], Response::HTTP_NOT_FOUND);
    }

    return response()->json($feature, Response::HTTP_OK);
}

}
