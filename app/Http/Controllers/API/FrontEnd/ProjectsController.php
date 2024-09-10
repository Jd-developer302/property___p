<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::with(['community', 'developer'])->paginate(10);
return response()->json($projects);

    }
    public function getTotalProjectsByCommunity()
    {
        
        $communityProjectCounts = Project::selectRaw('community_id, COUNT(*) as total_projects')
            ->groupBy('community_id')
            ->with('community') 
            ->get();

        return response()->json($communityProjectCounts);
    }
    public function getTotalProjectsByDeveloper()
    {
        
        $developerProjectCounts = Project::selectRaw('developer_id, COUNT(*) as total_projects')
            ->groupBy('developer_id')
            ->with('developer') 
            ->get();

        return response()->json($developerProjectCounts);
    }
    public function getProjectBySlug($slug)
{
    $project = Project::where('slug', $slug)->first();

    if (!$project) {
        return response()->json(['message' => 'Project not found'], 404);
    }

    return response()->json($project, 200);
}

    }

