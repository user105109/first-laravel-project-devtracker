<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $projects = Project::query()->where('user_id', Auth::id())->get();
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->projects()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'status' => $validated['status']
        ]);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validatedUpdatedData = $request->validated();

        $project->update([
            'title' => $validatedUpdatedData['title'],
            'description' => $validatedUpdatedData['description'],
            'status' => $validatedUpdatedData['status']
        ]);

        return redirect("/projects/$project->id");
    }

    /**
     * Show the form for removing specified resource.
     */

    public function delete(Project $project)
    {
        return view('projects.delete', [
            'project' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
