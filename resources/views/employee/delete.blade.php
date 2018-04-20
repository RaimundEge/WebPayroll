@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Management</h1>
    <h3 class="my-3">Delete Employee Data</h3>
    
    <form method="POST" action="{{ '/empdelete/' . $employee->id }}">
        {{ csrf_field() }}
        <div class="form-group col-8 form-row">
            <label for="name" class="col-2">Name</label>
            <input type="text" class="form-control col" id="name" name="name" value="{{ $employee->name }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="street" class="col-2">Street</label>
            <input type="text" class="form-control col" id="street" name="street" value="{{ $employee->street }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="city" class="col-2">City</label>
            <input type="text" class="form-control col" id="city" name="city" value="{{ $employee->city }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="salary" class="col-2">Salary</label>
            <input type="text" class="form-control col" id="salary" name="salary" value="{{ $employee->salary }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="routingnumber" class="col-2">Routing #</label>
            <input type="text" class="form-control col" id="routingnumber" name="routingnumber" value="{{ $employee->routingnumber }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="accountnumber" class="col-2">Account #</label>
            <input type="text" class="form-control col" id="accountnumber" name="accountnumber" value="{{ $employee->accountnumber }}" read-only>
        </div>
        <input type="submit" value="Confirm Delete">
    </form>

</div>
 @endsection   