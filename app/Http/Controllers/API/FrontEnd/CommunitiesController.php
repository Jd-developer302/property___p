<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunitiesController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 15);
        $communities = Community::withCount('projects')->paginate($perPage);
        return response()->json($communities);
    }
    public function topCommunities(Request $request)
    {
        $perPage = $request->input('per_page', 15);

        $topCommunities = Community::withCount('projects')
            ->orderBy('projects_count', 'desc')
            ->limit(5) 
            ->paginate($perPage);

        return response()->json($topCommunities);
    }
    public function featuredCommunities(Request $request)
    {
        $perPage = $request->input('per_page', 15);
        $featuredThreshold = 10; 

        $featuredCommunities = Community::withCount('projects')
            ->having('projects_count', '>', $featuredThreshold)
            ->orderBy('projects_count', 'desc')
            ->paginate($perPage);

        return response()->json($featuredCommunities);
    }
    public function getBySlug(Request $request, $slug)
    {
        $community = Community::where('slug', $slug)->withCount('projects')->first();

        if (!$community) {
            return response()->json(['message' => 'Community not found'], 404);
        }

        return response()->json($community);
    }

}
