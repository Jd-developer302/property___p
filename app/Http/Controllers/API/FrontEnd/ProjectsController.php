<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(Request $request){
        
         $request->validate([
            'community_id' => 'required|integer|exists:communities,id',
            'developer_id' => 'required|integer|exists:developers,id',
        ]);

        $communityId = $request->input('community_id');
        $developerId = $request->input('developer_id');

       
        $projects = Project::where('community_id', $communityId)
            ->where('developer_id', $developerId)
            ->with(['community', 'developer'])
            ->get();

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
    }

