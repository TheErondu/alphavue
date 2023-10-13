<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->starting_price = $request->starting_price;
        $project->unit_choices = $request->unit_choices;
        $project->completion = $request->completion;
        $project->location = $request->location;
        $project->details = $request->post_body;
        $project->slug = Str::slug($request->title);

        $imagePaths = [];
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('project/images'),$imageName);
                $imagePaths[] = $imageName;
            }
        }
        // Save the image filenames as JSON in the database
        $project->project_images = json_encode($imagePaths);
        $project->seo_tag = Str::slug($request->title);
        $project->meta_desc = $request->title;
       // dd($project->project_images);
        $project->save();
        return redirect()->route('admin.projects.index')->with('success','Project added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project =  Project::find($project->id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project =  Project::find($project->id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project =  Project::find($project->id);
        $project->title = $request->title;
        $project->starting_price = $request->starting_price;
        $project->unit_choices = $request->unit_choices;
        $project->completion = $request->completion;
        $project->location = $request->location;
        $project->details = $request->post_body;
        $project->slug = Str::slug($request->title);

        $imagePaths = [];
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('project/images'),$imageName);
                $imagePaths[] = $imageName;
            }
        }
        $project->project_images = json_encode($imagePaths);
        $project->seo_tag = Str::slug($request->title);
        $project->meta_desc = $request->title;
       // dd($project->project_images);
        $project->save();
        return redirect()->route('admin.projects.edit',$project->id)->with('success','Project modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project =  Project::find($project->id);
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success','Projected deleted!');
    }
}
