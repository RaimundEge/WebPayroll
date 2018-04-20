@extends('layouts.main', ['page' => "project"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Project Management</h1>
    <div class="row mb-2">
        <p class="col-6 lead"> {{ $message }} </p>
        <a class="ml-auto btn btn-primary" href="/projcreate">Create new Project</a>
    </div>
    
    <table class="table">
    <tr><th>Title</th><th>Expense</th></tr>

    @foreach ($projects as $proj)

        <tr><td>{{ $proj->title }} </td><td>{{ $proj->expense }} </td>
        <td class="row">
            <form class="col-2" method='GET' action="{{ '/projedit/' . $proj->id }}">
                <input class="btn btn-primary btn-mini" type="submit" value="Edit">
            </form>
            &nbsp;&nbsp;
            <form class="col-2" method='GET' action="{{ '/projdelete/' . $proj->id }}">
                <input class="btn btn-primary btn-mini" type="submit" value="Delete">
            </form>
        </td>
        </tr>

    @endforeach

    </table>
</div>
 @endsection   