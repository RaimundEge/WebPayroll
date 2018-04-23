@extends('layouts.main', ['page' => "project"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Project Management</h1>
    <div class="row">
        <div class="col-6">
            <h3 class="my-3">Update Project Data</h3>
    
            <form method="POST" action="{{ '/projupdate/' . $project->id }}">
                {{ csrf_field() }}
                <div class="form-group col-8 form-row">
                    <label for="title" class="col-3">Title</label>
                    <input type="text" class="form-control col" id="title" name="title" value="{{ $project->title }}" required>
                </div>
                <div class="form-group col-8 form-row">
                    <label for="expense" class="col-3">Expense</label>
                    <input type="text" class="form-control col" id="expense" name="expense" value="{{ $project->expense }}" required>
                </div>
                <input type="submit" value="Update">
            </form>
        </div>
        <div class="col-6">
            <h3 class="my-3" >Project Employeess</h3>               
            <table class="table">
            @foreach ($employees as $emp)
                <tr><td>{{ $emp->name}}</td>
                <td>
                    <form method='GET' action="{{ '/projempremove/' . $project->id . '/' . $emp->id }}">
                        <input class="btn btn-primary btn-mini" type="submit" value="Remove">
                    </form>
                </td></tr>
            @endforeach
            </table>
            <h3>Available Employees</h3>
            <form method="POST" action="{{ '/projempadd/' . $project->id }}">
                {{ csrf_field() }}
                <select name="employee">
                @foreach ($all as $emp)
                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
                </select>
                <input type="submit" value="Add Employee">
            </form>
        </div>        
    </div>
</div>
 @endsection   