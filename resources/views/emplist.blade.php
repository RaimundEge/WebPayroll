@extends('layouts.main', ['page' => "employee"])

@section('content')
<div class="container">
    
    <h1 class="my-3">Employee Managment</h1>
    <div class="row mb-2">
        <p class="col-6 lead"> {{ $message }} </p>
        <a class="btn btn-primary" href="{{ route('empcreate') }}">Create new Employee</a>
    </div>
    
    <table class="table">
    <tr><th>Name</th><th>Street</th><th>City</th></tr>

    @foreach ($employees as $emp)

        <tr><td>{{ $emp->name }} </td><td>{{ $emp->street }} </td><td>{{ $emp->city }} </td>
        <td class="row">
            <form class="col-2" method='GET' action="{{ '/empedit/' . $emp->id }}">
                <input type="submit" value="Edit">
            </form>
            &nbsp;
            <form class="col-2" method='GET' action="{{ '/empdelete/' . $emp->id }}">
                <input type="submit" value="Delete">
            </form>
        </td>
        </tr>

    @endforeach

    </table>
</div>
 @endsection   