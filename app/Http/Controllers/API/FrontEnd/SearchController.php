<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;
use App\Models\Community;
use App\Models\Location; 
use App\Models\ForeignInvestor;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type');

        if (!$query || !$type) {
            return response()->json(['message' => 'Query and type are required'], 400);
        }

        switch ($type) {
            case 'projects':
                return $this->searchProjects($query);
            case 'developers':
                return $this->searchDevelopers($query);
            case 'communities':
                return $this->searchCommunities($query);
            case 'locations':
                return $this->searchLocations($query);
            case 'investors':
                return $this->searchInvestors($query);
            default:
                return response()->json(['message' => 'Invalid search type'], 400);
        }
    }

    private function searchProjects($query)
    {
        $projects = Project::where(function ($q) use ($query) {
            $q->where('name', 'like', "%$query%")
              ->orWhere('slug', 'like', "%$query%")
              ->orWhere('apartments', 'like', "%$query%")
              ->orWhere('payment_plan', 'like', "%$query%")
              ->orWhere('down_payment', 'like', "%$query%")
              ->orWhere('handover', 'like', "%$query%")
              ->orWhere('starting_price', 'like', "%$query%");
        })
        ->with(['community', 'developer'])
        ->paginate(10);

        $projects->getCollection()->transform(function ($project) {
            $project->type = 'Project';
            $project->url = url("/projects/{$project->slug}"); // Generate URL for the project
            return $project;
        });

        return response()->json($projects);
    }

    private function searchDevelopers($query)
    {
        $developers = Developer::where(function ($q) use ($query) {
            $q->where('name', 'like', "%$query%")
              ->orWhere('slug', 'like', "%$query%")
              ->orWhere('description', 'like', "%$query%");
        })
        ->paginate(10);

        $developers->getCollection()->transform(function ($developer) {
            $developer->type = 'Developer';
            $developer->url = url("/developers/{$developer->slug}"); // Generate URL for the developer
            return $developer;
        });

        return response()->json($developers);
    }

    private function searchCommunities($query)
    {
        $query = htmlspecialchars($query);

        $communities = Community::where(function ($q) use ($query) {
            $q->where('name', 'like', "%$query%")
              ->orWhere('slug', 'like', "%$query%")
              ->orWhere('description', 'like', "%$query%");
        })
        ->paginate(10);

        $communities->getCollection()->transform(function ($community) {
            $community->type = 'Community';
            $community->url = url("/communities/{$community->slug}"); // Generate URL for the community
            return $community;
        });

        return response()->json($communities);
    }

    private function searchLocations($query)
    {
        $query = htmlspecialchars($query);

        $locations = Location::where(function ($q) use ($query) {
            $q->where('name', 'like', "%$query%")
              ->orWhere('address', 'like', "%$query%")
              ->orWhere('postal_code', 'like', "%$query%");
        })
        ->paginate(10);

        $locations->getCollection()->transform(function ($location) {
            $location->type = 'Location';
            $location->url = url("/locations/{$location->id}"); // Generate URL for the location
            return $location;
        });

        return response()->json($locations);
    }

    private function searchInvestors($query)
    {
        $query = htmlspecialchars($query);

        $investors = ForeignInvestor::where(function ($q) use ($query) {
            $q->where('name', 'like', "%$query%")
              ->orWhere('slug', 'like', "%$query%")
              ->orWhere('title', 'like', "%$query%")
              ->orWhere('description', 'like', "%$query%");
        })
        ->paginate(10);

        $investors->getCollection()->transform(function ($investor) {
            $investor->type = 'Investor';
            $investor->url = url("/investors/{$investor->slug}"); // Generate URL for the investor
            return $investor;
        });

        return response()->json($investors);
    }

}
