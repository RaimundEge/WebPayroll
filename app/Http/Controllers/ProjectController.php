<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projs = Project::all();
        return view('project/list', ['message' => "", 'projects' => $projs]);
    }

    public function create() {
        $proj = new Project;
        return view('project/create', ['message' => "", 'project' => $proj]);
    } 

    public function docreate(Request $request) {
        $proj = new Project;
        $proj->title = $request->title;
        $proj->expense = $request->expense;
        $proj->save();
        $projs = Project::all();
        return view('project/list', ['message' => "new Project created", 'projects' => $projs]);
    }  
    
    public function edit($id) {
        $proj = Project::find($id);
        return view('project/edit', ['message' => "", 'project' => $proj]);
    }  
    
    public function update(Request $request, $id) {
        $proj = Project::find($id);
        $proj->title = $request->title;
        $proj->expense = $request->expense;
        $proj->save();
        $projs = Project::all();
        return view('project/list', ['message' => "Project updated", 'projects' => $projs]);
    }

    public function delete($id) {
        $proj = Project::find($id);
        return view('project/delete', ['message' => "", 'project' => $proj]);
    }

    public function dodelete($id) {
        $proj = project::find($id);
        $proj->delete();
        $projs = Project::all();
        return view('project/list', ['message' => "Project deleted", 'projects' => $projs]);
    }    
}
