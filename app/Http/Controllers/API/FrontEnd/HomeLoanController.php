<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mortgage;

class HomeLoanController extends Controller
{
    public function index()
    {
        $homeLoans = Mortgage::all(); 
        return response()->json($homeLoans);
    }
}
