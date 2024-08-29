<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ForeignInvestor;

class InvestorsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $investors = ForeignInvestor::paginate($perPage);

        return response()->json($investors);
    }

    public function showBySlug($slug)
    {
        $investor = ForeignInvestor::where('slug', $slug)->firstOrFail();

        return response()->json($investor);
    }
}
