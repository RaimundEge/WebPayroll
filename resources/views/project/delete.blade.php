@extends('layouts.main', ['page' => "project"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Project Management</h1>
    <h3 class="my-3">Delete Project Data</h3>
    
    <form method="POST" action="{{ '/projdelete/' . $project->id }}">
        {{ csrf_field() }}
        <div class="form-group col-8 form-row">
            <label for="title" class="col-2">Title</label>
            <input type="text" class="form-control col" id="title" name="title" value="{{ $project->title }}" read-only>
        </div>
        <div class="form-group col-8 form-row">
            <label for="expense" class="col-2">Expense</label>
            <input type="text" class="form-control col" id="expense" name="expense" value="{{ $project->expense }}" read-only>
        </div>
        <input type="submit" value="Confirm Delete">
    </form>

</div>
 @endsection   