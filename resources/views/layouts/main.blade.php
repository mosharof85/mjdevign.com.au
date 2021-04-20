

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>MJ DEVIGN</title>

    <link rel="stylesheet" href="{{ asset ( 'main/css/style.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/header.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-hero.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-quality.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-info.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-process.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-package.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-newyear.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-pricing.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-faq.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-support.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <style>
        a:hover {
            text-decoration: none !important;
            }
    </style>
    <!-- <script src="{{ asset ( 'main/js/jquery-3.5.1.js' ) }}"></script> -->

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    @include('components.login')
    @include('components.register')
<header>
        
    <div class="section-container">
        
        <div class="logo">
            <img class="mr-10" src="{{ asset ( 'main/images/diamond.png' ) }}" alt="logo">
            <div class="logo-info">
                <p class="text-20px text-700 text-white">MJ DEVIGN</p>
                <p class="text-16px text-400 text-white">Design & Development Agency</p>
            </div>
        </div>

        <span class="toggler"></span>

        <nav>
            <ul>
                <li class="nav-link"><a href="/home">Home</a></li>
                <li class="nav-link"><a href="/about">About</a></li>
                <li class="nav-link"><a href="/packages">Package</a></li>
                <li class="nav-link"><a href="/pricing">Pricing</a></li>
                <li class="nav-link"><a href="/faq">FAQ</a></li>
                <!-- <li class="nav-link sign-in"><a href="#">Sign in</a></li> -->
                
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-link sign-in" >
                        <a id="Login_li_btn"
                                style="cursor: pointer" 
                                data-toggle="modal" 
                                data-target="#loginModal">{{ __('Sign In') }}</a>
                        </li>
                    @endif
                    
                    <!-- @if (Route::has('register'))
                        <li class="nav-link sign-in">
                        <a 
                                style="cursor: pointer" 
                                data-toggle="modal" 
                                data-target="#registerModal">{{ __('Register') }}</a>
                           
                        </li>
                    @endif -->
                @else
                    <li class="nav-link sign-in">
                    <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li> -->
                @endguest
            </ul>


        </nav>
    </div>
</header>


    @yield('content')


<footer></footer>
<script src="{{ asset ( 'main/js/header.js' ) }}"></script>
<script src="{{ asset ( 'main/js/package-controller.js' ) }}"></script>
<script src="{{ asset ( 'main/js/faq.js' ) }}"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>





</body>
</html>
