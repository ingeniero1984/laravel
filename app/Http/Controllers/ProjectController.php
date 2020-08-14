<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
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

    	$project = new Project($request->validated());

        $project->image = $request->file('image')->store('images', 'public');

        $project->save();

        $image = Image::make(storage::get($project->image, 'public'))
            ->widen(600)
            ->limitColors(255)
            ->encode();

        Storage::put($project->image, (string) $image);

    	return redirect()->route('projects.index')->with('toast_success', 'El proyecto fue creado correctamente.');
    }


    public function edit(Project $project) {

    	return view('projects.edit', [

        	'project' => $project

        ]);
    }


    public function update(Project $project, SaveProjectRequest $request)
    {

        if($request->hasfile('image')) {

            storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images', 'public');

            $project->save();

            $image = Image::make(storage::get($project->image, 'public'))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($project->image, (string) $image);

        } else {

            $project->update(array_filter($request->validated()));

        }

    	return redirect()->route('projects.show', $project)->with('toast_success', 'El proyecto fue actualizado correctamente.');

    }


    public function destroy(Project $project) {

        storage::delete($project->image);

    	$project->delete();

    	return redirect()->route('projects.index')->with('toast_success', 'El proyecto fue eliminado correctamente.');
    }	
}
