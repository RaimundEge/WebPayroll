@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Managment</h1>
    <h3 class="my-3">Create new Employee</h3>
    
    <form method="POST" action="{{ '/empcreate/' . $employee->id }}">
        {{ csrf_field() }}
        <div class="form-group col-8 form-row">
            <label for="name" class="col-2">Name</label>
            <input type="text" class="form-control col" id="name" name="name" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group col-8 form-row">
            <label for="street" class="col-2">Street</label>
            <input type="text" class="form-control col" id="street" name="street" value="{{ $employee->street }}" required>
        </div>
        <div class="form-group col-8 form-row">
            <label for="city" class="col-2">City</label>
            <input type="text" class="form-control col" id="city" name="city" value="{{ $employee->city }}" required>
        </div>
        <div class="form-group col-8 form-row">
            <label for="salary" class="col-2">Salary</label>
            <input type="text" class="form-control col" id="salary" name="salary" value="{{ $employee->salary }}" required>
        </div>
        <div class="form-group col-8 form-row">
            <label for="routingnumber" class="col-2">Routing #</label>
            <input type="text" class="form-control col" id="routingnumber" name="routingnumber" value="{{ $employee->routingnumber }}" required>
        </div>
        <div class="form-group col-8 form-row">
            <label for="accountnumber" class="col-2">Account #</label>
            <input type="text" class="form-control col" id="accountnumber" name="accountnumber" value="{{ $employee->accountnumber }}" required>
        </div>
        <input type="submit" value="Create">
    </form>

</div>
 @endsection   