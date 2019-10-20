<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap:START --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Bootstrap:STOP --}}

    {{-- jquery Import:start --}}
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    {{-- Jquery Import:Stop --}}
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark" >
        <a class="navbar-brand" href="#">
                <img class="img-fluid img-thumbnail rounded"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE1bP3zHCnE2Yqr4itJFCF1mx5PWSxRWvI_HqhTkLxMP9yzinVaw" width="30" height="30" class="d-inline-block align-top" alt="">
                Book Keeping
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                    @auth
                        <li class="nav-item active">
                                <a class="nav-link" href="{{url('/userList')}}">User List </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/transactions')}}">Upload CSV</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/uploadCSV')}}">Transactions</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
        
                        </li>   
                    @else
                        @if (Route::has('login'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                





            </ul>
            
        </div>
    </nav>
    <div class="container">
            
        {{-- Section:START --}}
        @yield('login')
        @yield('userList')
        @yield('uploadCSV')
        @yield('transactions')
        @yield('content')
        {{-- Section:STOP --}}
</body>
</html>
