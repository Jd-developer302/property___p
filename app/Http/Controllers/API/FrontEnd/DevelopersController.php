<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;
use Carbon\Carbon;

class DevelopersController extends Controller
{
    public function index(Request $request)
{
    $perPage = $request->input('per_page', 15);
    $developers = Developer::withCount('projects')->paginate($perPage);
    return response()->json($developers);
}

    public function getAllProjectsByDeveloper($developerId)
    {
        
        $projects = Project::where('developer_id', $developerId)
            ->with('developer')
            ->get();

        if ($projects->isEmpty()) {
            return response()->json(['message' => 'No projects found for this developer'], 404);
        }

        return response()->json($projects);
    }
    public function getNewLaunchesByDeveloper($developerId)
    {
       
        $newLaunches = Project::where('developer_id', $developerId)
            ->where('is_new_launch', true) 
            ->with('developer') 
            ->get();

        if ($newLaunches->isEmpty()) {
            return response()->json(['message' => 'No new launches found for this developer'], 404);
        }

        return response()->json($newLaunches);
    }
    public function getNearCompletionProjectsByDeveloper($developerId)
    {
        
        $nearCompletionDate = Carbon::now()->addMonths(6);

        
        $nearCompletionProjects = Project::where('developer_id', $developerId)
            ->where('handover', '<=', $nearCompletionDate) 
            ->with('developer') 
            ->get();

        if ($nearCompletionProjects->isEmpty()) {
            return response()->json(['message' => 'No near completion projects found for this developer'], 404);
        }

        return response()->json($nearCompletionProjects);
    }
}
