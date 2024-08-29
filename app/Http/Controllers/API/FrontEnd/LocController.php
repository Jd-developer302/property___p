<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;


class LocController extends Controller
{
    public function index(Request $request)
    {
        $locations = City::with('state')->paginate(10); 
        return response()->json($locations);
    }
}
