<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
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
        $emps = Employee::all();
        return view('employee/list', ['message' => "", 'employees' => $emps]);
    }

    public function edit($id) {
        $emp = Employee::find($id);
        return view('employee/edit', ['message' => "", 'employee' => $emp]);
    }

    public function update(Request $request, $id) {
        $emp = Employee::find($id);
        $emp->name = $request->name;
        $emp->street = $request->street;
        $emp->city = $request->city;
        $emp->salary = $request->salary;
        $emp->routingnumber = $request->routingnumber;
        $emp->accountnumber = $request->accountnumber;
        $emp->save();
        $emps = Employee::all();
        return view('employee/list', ['message' => "Employee updated", 'employees' => $emps]);
    }

    public function delete($id) {
        $emp = Employee::find($id);
        return view('employee/delete', ['message' => "", 'employee' => $emp]);
    }

    public function dodelete($id) {
        $emp = Employee::find($id);
        $emp->delete();
        $emps = Employee::all();
        return view('employee/list', ['message' => "Employee deleted", 'employees' => $emps]);
    } 
    
    public function create() {
        $emp = new Employee;
        return view('employee/create', ['message' => "", 'employee' => $emp]);
    } 
    
    public function docreate(Request $request) {
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->street = $request->street;
        $emp->city = $request->city;
        $emp->salary = $request->salary;
        $emp->routingnumber = $request->routingnumber;
        $emp->accountnumber = $request->accountnumber;
        $emp->save();
        $emps = Employee::all();
        return view('employee/list', ['message' => "new Employee created", 'employees' => $emps]);
    }   
}
