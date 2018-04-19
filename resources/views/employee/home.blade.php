@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Managment</h1>
    
    <div class="row">
        <ul class="nav nav-pills col-3 flex-column">
        <li class="nav-item mb-1">
            <a class="btn btn-primary" href="{{ route('employee/edit') }}">Edit Employee</a>
        </li>
        <li class="nav-item  mb-1">
            <a class="btn btn-primary" href="{{ route('employee/create') }}">Create Employee</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('employee/delete') }}">Delete Employee</a>
        </li>
        </ul>
        <div class="col-8 card">

        </div>
    </div>
</div>
 @endsection   