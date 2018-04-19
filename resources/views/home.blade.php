@extends('layouts.main', ['page' => "home"])

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title">Payroll Management Web Application: Welcome</h3>
            <p class="card-text"> {{ $message }} </p>
            <p class="lead">
            This demonstration project is implemented using the PHP Laravel framework, Boostrap 4 and the MySQL database.
            <div>
            @guest
            To proceed to our valuable content you need to 
            <a class="btn btn-primary" href="{{ route('login') }}">
                <span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;Sign in
            </a>
            or
            <a class="btn btn-primary" href="{{ route('login') }}">
                <span class="fa fa-user-plus" aria-hidden="true"></span>&nbsp;Register
            </a>            
            @else
            Please select a Employee or Project operation from the menus above.
            </a>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection