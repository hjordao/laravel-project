<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    
/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)
*/
    // GET /projects (index)
    public function index() {
    	$projects = Project::all();
    	return view('projects.index', compact('projects'));
    } 

    // GET /projects/create (create)
    public function create() {
    	return view('projects.create');
    }

    // GET /projects/1 (show)
    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    // POST /projects (store)
    public function store() { 
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
    	return redirect('/projects');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        //dd(request()->all());
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
        //return view('projects.update');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect('/projects');
    }
}
