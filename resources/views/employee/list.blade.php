@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Management</h1>
    <div class="row mb-2">
        <p class="col-6 lead"> {{ $message }} </p>
        <a class="ml-auto btn btn-primary" href="/empcreate">Create new Employee</a>
    </div>
    
    <table class="table">
    <tr><th>Name</th><th>Street</th><th>City</th></tr>

    @foreach ($employees as $emp)

        <tr><td>{{ $emp->name }} </td><td>{{ $emp->street }} </td><td>{{ $emp->city }} </td>
        <td class="row">
            <form class="col-2" method='GET' action="{{ '/empedit/' . $emp->id }}">
                <input class="btn btn-primary btn-mini" type="submit" value="Edit">
            </form>
            &nbsp;&nbsp;
            <form class="col-2" method='GET' action="{{ '/empdelete/' . $emp->id }}">
                <input class="btn btn-primary btn-mini" type="submit" value="Delete">
            </form>
        </td>
        </tr>

    @endforeach

    </table>
</div>
 @endsection   