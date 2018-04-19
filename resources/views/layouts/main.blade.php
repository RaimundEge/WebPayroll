<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">   
    <title>Payroll Demonstration Project</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <span class="navbar-brand">Payroll Management</span>           
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>            
        <div class="collapse navbar-collapse" id="mainCollapse">       
            <a class="nav-link p-1 @if ($page=="home") mark @endif" href="{{ route('home') }}">Home</a>        
            @guest        
                <span class="navbar-text p-1 mr-auto">&nbsp;</span> 
                <a class="nav-link p-1" href="{{ route('login') }}">
                    <span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;Sign in
                </a>                 
            @else
                <a class="nav-link p-1 ml-2 @if ($page=="employee") mark @endif" href="{{ route('employee') }}">Employees</a>      
                <a class="nav-link p-1 ml-2 mr-auto @if ($page=="project") mark @endif" href="{{ route('project') }}">Projects</a>      
                <span class="navbar-text p-1">{{ Auth::user()->name }}&nbsp;</span>       
                <a class="nav-link p-1" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                    <span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;Logout
                </a> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>    
            @endif
        </div>       
    </nav>

    @yield('content')

    <hr/>
    <div class="container">
        <p class="text-center"><a href="//laravel.com" target="_blank">Developed with PHP Laravel Framework</a> &nbsp; &copy; <a href=//www.ege.com>2018 Ege Consulting Inc.</a>
        </p>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>