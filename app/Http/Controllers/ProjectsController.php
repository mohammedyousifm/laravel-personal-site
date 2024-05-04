<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Information;
use App\Models\visitors;

class ProjectsController extends Controller
{
    public function projects()
    {

        $projects = DB::table('projects')->get();
        return view('dashboard/projects', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'link' => 'required|url',
            'image' => 'required|image',
        ]);

        $project = new Projects();
        $project->project_name = $request->input('name');
        $project->description = $request->input('description');
        $project->link = $request->input('link');

        $imageName = time() . '.' . $request->image->extension();
        $imagePath = $request->image->move(public_path('images'), $imageName);
        $project->image = 'images/' . $imageName;

        if ($project->save()) {
            return back()->with('success', 'Project added successfully');
        } else {
            return back()->with('error', 'Failed to add project');
        }
    }
}
