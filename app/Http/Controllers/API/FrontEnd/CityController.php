<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::with('state')->paginate(10); 
        return response()->json($cities);
    }
    public function show($slug)
{
    $city = City::where('slug', $slug)->with('state')->firstOrFail();
    return response()->json($city);
}
}
