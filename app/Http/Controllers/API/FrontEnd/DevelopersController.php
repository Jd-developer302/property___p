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

    public function getNewLaunchesByDeveloper($slug)
    {
        $developer = Developer::where('slug', $slug)->firstOrFail();
        
        // Fetch new launches for this developer, including the community relationship
        $projects = $developer->projects()
            ->with('community') // Include community data
            ->orderBy('created_at', 'desc')
            ->get();
    
        return response()->json([
            'developer' => $developer,
            'projects' => $projects
        ]);
    }
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

public function getNearCompletionProjectsByDeveloperAll()
{
    $nearCompletionDate = Carbon::now()->addMonths(6);

    $nearCompletionProjects = Project::where('apartments', '<=', $nearCompletionDate)
        ->with(['developer', 'community'])  // Include developer and community
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

    if ($nearCompletionProjects->isEmpty()) {
        Log::info("No near-completion projects found.");
        return response()->json(['message' => 'No near-completion projects found'], 404);
    }

    return response()->json([
        'projects' => $nearCompletionProjects
    ]);
}

public function countProjectStatusByDeveloper($slug)
    {
        $developer = Developer::where('slug', $slug)->firstOrFail();

        // Define the criteria for each project status
        $now = Carbon::now();

        // Count projects with status "New Launch" (for example, projects added within the last 3 months)
        $newLaunchCount = Project::where('developer_id', $developer->id)
            ->where('created_at', '>=', $now->subMonths(3)) // New launches in the last 3 months
            ->count();

        // Count projects "Under Construction" (where the handover date is in the future)
        $underConstructionCount = Project::where('developer_id', $developer->id)
            ->where('handover', '>', $now) // Projects that are still under construction
            ->count();

        // Count projects "Ready to Move" (projects where the handover date is in the past)
        $readyToMoveCount = Project::where('developer_id', $developer->id)
            ->where('handover', '<=', $now) // Projects that are ready to move in
            ->count();

        return response()->json([
            'developer' => $developer->name,
            'new_launch' => $newLaunchCount,
            'under_construction' => $underConstructionCount,
            'ready_to_move' => $readyToMoveCount,
        ]);
    }

}
