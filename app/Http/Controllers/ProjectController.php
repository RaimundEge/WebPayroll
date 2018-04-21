<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Employee;

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
        $emps = $proj->employees;
        $all = Employee::all();
        return view('project/edit', ['message' => "", 'project' => $proj, 'employees' => $emps, 'all' => $all]);
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
    
    public function addemployee(Request $request, $id) {
        $proj = Project::find($id);
        $emp = Employee::find($request->employee);
        if (!$proj->employees->contains($emp->id)) {
            $proj->employees()->save($emp);
        }
        return $this->edit($id);
    }  
    
    public function removeemployee($id, $eid) {
        $proj = Project::find($id);
        $proj->employees()->detach($eid);
        return $this->edit($id);
    }  

}
