@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Management</h1>

    <div class="row">
        <div class="col-6">
            <h3 class="my-3">Update Employee Data</h3>
            
            <form method="POST" action="{{ '/empupdate/' . $employee->id }}">
                {{ csrf_field() }}
                <div class="form-group col-12 form-row">
                    <label for="name" class="col-3">Name</label>
                    <input type="text" class="form-control col" id="name" name="name" value="{{ $employee->name }}" required>
                </div>
                <div class="form-group col-12 form-row">
                    <label for="street" class="col-3">Street</label>
                    <input type="text" class="form-control col" id="street" name="street" value="{{ $employee->street }}" required>
                </div>
                <div class="form-group col-12 form-row">
                    <label for="city" class="col-3">City</label>
                    <input type="text" class="form-control col" id="city" name="city" value="{{ $employee->city }}" required>
                </div>
                <div class="form-group col-12 form-row">
                    <label for="salary" class="col-3">Salary</label>
                    <input type="text" class="form-control col" id="salary" name="salary" value="{{ $employee->salary }}" required>
                </div>
                <div class="form-group col-12 form-row">
                    <label for="routingnumber" class="col-3">Routing #</label>
                    <input type="text" class="form-control col" id="routingnumber" name="routingnumber" value="{{ $employee->routingnumber }}" required>
                </div>
                <div class="form-group col-12 form-row">
                    <label for="accountnumber" class="col-3">Account #</label>
                    <input type="text" class="form-control col" id="accountnumber" name="accountnumber" value="{{ $employee->accountnumber }}" required>
                </div>
                <input type="submit" value="Update">
            </form>
        </div>
        <div class="col-6">
            <h3 class="my-3" >Project Memberships</h3>               
            <table class="table">
            @foreach ($projects as $proj)
                <tr><td>{{ $proj->title}}</td>
                <td>
                    <form method='GET' action="{{ '/empprojremove/' . $employee->id . '/' . $proj->id }}">
                        <input class="btn btn-primary btn-mini" type="submit" value="Remove">
                    </form>
                </td></tr>
            @endforeach
            </table>
            <h3>Available Projects</h3>
            <form method="POST" action="{{ '/empprojadd/' . $employee->id }}">
                {{ csrf_field() }}
                <select name="project">
                @foreach ($all as $proj)
                    <option value="{{ $proj->id }}">{{ $proj->title }}</option>
                @endforeach
                </select>
                <input type="submit" value="Add Project">
            </form>
        </div>
    </div>
</div>
 @endsection   