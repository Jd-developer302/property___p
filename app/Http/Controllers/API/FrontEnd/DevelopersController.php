<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DevelopersController extends Controller
{
    public function findDeveloperBySlug($slug)
    {
        $developer = Developer::where('slug', $slug)->firstOrFail();
        
        return response()->json($developer);
    }
    
    public function index(Request $request)
{
    $perPage = $request->input('per_page', 15);
    $developers = Developer::withCount('projects')->paginate($perPage);
    return response()->json($developers);
}

public function getAllProjectsByDeveloper($slug)
    {
        // Fetch developer by slug
        $developer = Developer::where('slug', $slug)->first();

        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }

        // Fetch projects for this developer
        $projects = Project::where('developer_id', $developer->id)
            ->with('developer', 'community') 
            ->get();


        if ($projects->isEmpty()) {
            return response()->json(['message' => 'No projects found for this developer'], 404);
        }
        

        return response()->json($projects);
    }

// Fetch new launches for a developer by slug
public function getNewLaunchesByDeveloper($slug)
    {
        $developer = Developer::where('slug', $slug)->firstOrFail();
        $projects = $developer->projects()->orderBy('created_at', 'desc')->get();

        return response()->json([
            'developer' => $developer,
            'projects' => $projects
        ]);
    }


// Fetch near completion projects for a developer by slug
// Fetch near completion projects for a developer by slug
public function getNearCompletionProjectsByDeveloper($slug)
{
    $developer = Developer::where('slug', $slug)->first();

    if (!$developer) {
        return response()->json(['message' => 'Developer not found'], 404);
    }

    // Get the current date and add 6 months to get near-completion date
    $nearCompletionDate = Carbon::now()->addMonths(6);

    // Fetch near-completion projects for this developer, ordered by 'created_at'
    $nearCompletionProjects = Project::where('developer_id', $developer->id)
        ->where('apartments', '<=', $nearCompletionDate)
        ->with('developer', 'community') 
        ->orderBy('created_at', 'desc')
        ->get();

    // Log the query result for debugging
    if ($nearCompletionProjects->isEmpty()) {
        Log::info("No near-completion projects found for developer with ID: " . $developer->id);
        Log::info("Near completion date: " . $nearCompletionDate);
        return response()->json(['message' => 'No near-completion projects found for this developer'], 404);
    }

    return response()->json([
        'developer' => $developer,
        'projects' => $nearCompletionProjects
    ]);
}



}
