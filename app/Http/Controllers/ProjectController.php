<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct() {

    	$this->middleware('auth')->except('index', 'show');

    }

    public function index() {

        return view('projects.index', [

        	'projects' => Project::latest()->paginate()

        ]);
    }


    public function show(Project $project) {

        return view('projects.show', [

        	'project' => $project

        ]);
    }


    public function create() {
    	return view('projects.create');
    } 


    public function store(SaveProjectRequest $request) {

    	Project::create($request->validated());

    	return redirect()->route('projects.index')->with('toast_success', 'El proyecto fue creado correctamente.');
    }


    public function edit(Project $project) {

    	return view('projects.edit', [

        	'project' => $project

        ]);
    }


    public function update(Project $project, SaveProjectRequest $request) {

    	$project->update($request->validated());

    	return redirect()->route('projects.show', $project)->with('toast_success', 'El proyecto fue actualizado correctamente.');

    }


    public function destroy(Project $project) {

    	$project->delete();

    	return redirect()->route('projects.index')->with('toast_success', 'El proyecto fue eliminado correctamente.');
    }	
}
