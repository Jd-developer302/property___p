<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Overview;
use Illuminate\Http\Response;

class OverviewsController extends Controller
{
    public function index(Request $request)
    {
        // Get the project_id from the request
        $projectId = $request->query('project_id');
        
        // Fetch the overviews for the given project_id
        $query = Overview::with(['project']);

        if ($projectId) {
            $query->where('project_id', $projectId);
        }

        $overviews = $query->get();
        
        // Ensure the logo1 is returned with the full URL path
        $overviews->each(function ($overview) {
            if ($overview->logo1) {
                $overview->logo1 = url('storage/' . $overview->logo1);
            }
        });
        
        return response()->json($overviews);
    }
    public function showBySlug($slug)
{
    $overview = Overview::with(['project'])->where('slug', $slug)->first();

    if (!$overview) {
        return response()->json(['message' => 'Overview not found'], Response::HTTP_NOT_FOUND);
    }

    // Ensure the logo path is correct
    if ($overview->logo1) {
        $overview->logo1 = url('overview/' . $overview->logo1);
    }
    if ($overview->logo2) {
        $overview->logo2 = url('overview/' . $overview->logo2);
    }

    return response()->json($overview);
}

}
