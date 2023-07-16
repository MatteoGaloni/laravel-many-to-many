<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $types = Type::all();
        $response = [
            'projects' => $projects,
            'types' => $types
        ];
        return response()->json($response);
    }
}
