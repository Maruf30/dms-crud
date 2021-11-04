<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel 8.x CRUD from Scratch</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>

        </nav>

        <!-- <div class="text-center" style="margin: 50px 0 50px 0;"><a href="{{url("products")}}"><img
                src="{{asset("logo.png")}}" alt="Logo"></a><br>Laravel 8.x  CRUD from Scratch
    </div> -->
        <div class="container">
            @yield('content')
            {{-- <button class="btn btn-outline-info" id="button">Conver to PDF</button> --}}
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    {{-- <script>
        window.jsPDF = window.jspdf.jsPDF;
        
        var button = document.getElementById("button")
        var ChassisNo = document.getElementById("ChassisNo").textContent        

        button.onclick = ()=>{
        var doc = new jsPDF();
        doc.text(ChassisNo, 10, 10);
        doc.save("a4.pdf");
        }
    </script> --}}
</body>

</html>