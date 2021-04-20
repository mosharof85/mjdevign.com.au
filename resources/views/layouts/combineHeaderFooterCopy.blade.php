

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

    @if (Route::getFacadeRoot()->current()->uri()!=('home')
            or Route::getFacadeRoot()->current()->uri()!='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-quality.css' ) }}">
    @endif

    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-info.css' ) }}">

    @if (Route::getFacadeRoot()->current()->uri()!=('home')
            or !Route::getFacadeRoot()->current()->uri()!='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-process.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='website-page'
            or Route::getFacadeRoot()->current()->uri()==('landingpage-page')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-package.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('home')
            or Route::getFacadeRoot()->current()->uri()=='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-services.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('home')
            or Route::getFacadeRoot()->current()->uri()=='/'
            or Route::getFacadeRoot()->current()->uri()==('website-page')
            or Route::getFacadeRoot()->current()->uri()==('landingpage-page')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-newyear.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='website-page'
            or Route::getFacadeRoot()->current()->uri()==('landingpage-page')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-pricing.css' ) }}">
    @endif


    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-faq.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-support.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/footer.css' ) }}">

    @if (Route::getFacadeRoot()->current()->uri()==('webapp-page') or Route::getFacadeRoot()->current()->uri()==('mobileapp-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-contact.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='/' or Route::getFacadeRoot()->current()->uri()==('home'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/index.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('website-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/website.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('webapp-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/webapp.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('mobileapp-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/mobileapp.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('landingpage-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/landingpage.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('dropshipping-page'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-desc.css' ) }}">
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-calculator.css' ) }}">
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/dropshipping.css' ) }}">
    @endif

    <link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">
    <link rel="icon" href="{{ asset ( 'main/images/diamond.ico' ) }}">

    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <style>
        a:hover {
            text-decoration: none !important;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        width: 95px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #E80566;
        color: #ffffff;
        border-radius: 8px;
        font-size: 15px;

        }

        .dropdown:hover .dropdown-content {
        display: block;
        }
    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="109991891133809"
	theme_color="#1A104A"
	greeting_dialog_delay="30">
      </div>


<a href="{{Route::getFacadeRoot()->current()->uri()}}"></a>

@include('components.login')
@include('components.register')
<header>

    <div class="section-container">

        <div class="logo">
            <img class="mr-10" src="{{ asset ( 'main/images/Logo.png' ) }}" alt="logo">
            <div class="logo-info">
                <p class="info1">MJ DEVIGN</p>
                <p class="info2">Design Development Agency</p>
            </div>
        </div>

        <span class="toggler"></span>

        <nav>
            <ul class="f-montserrat-medium">
                <li class="nav-link"><a href="/home">Home</a></li>
                <li class="nav-link"><a href="/about">About</a></li>
                <li class="nav-link"><a href="/packages">Package</a></li>
                <li class="nav-link"><a href="/pricing">Pricing</a></li>
                <li class="nav-link"><a href="/faq">FAQ</a></li>

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
                @else


                    <li class="nav-link dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a lass="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
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
        </nav>
    </div>
</header>

@yield('content')

<section class="sec-support">
    <div class="section-container">
        <div class="left">
            <img src="main/images/customer-service.png" alt="">
        </div>
        <div class="right">
            <div class="content">
                <p class="line1">Can't find what you're looking for?</p>
                <p class="line2 text-black3">We will respond to you as soon as possible.</p>
            </div>
            <a href="#" class="btn-contact">Contact Us</a>
        </div>
    </div>
</section>

<footer>
    <div class="section-container">
        <div class="col one">
            <div class="part1">
                <img src="main/images/diamond.png" alt="">
                <div class="col-title">
                    <p class="info1">MJ DEVIGN</p>
                    <p class="info2">Design Development Agency</p>
                </div>
            </div>
            <p class="info">We are an Australian based agency here to develop your vision!</p>
            <div class="social-links">
                <span class="ti-facebook"></span>
                <span class="ti-twitter"></span>
                <span class="ti-linkedin"></span>
            </div>
        </div>
        <div class="col two">
            <p class="col-title">SERVICES</p>
            <div class="col-content">
                <ul>
                    <li><a href="/website-page">Website Development</a></li>
                    <li><a href="/landingpage-page">Landing Page</a></li>
                    <li><a href="/dropshipping-page">Dropshipping Store</a></li>
                    <li><a href="/mobileapp-page">Mobile App</a></li>
                    <li><a href="/webapp-page">Web App</a></li>
                </ul>
            </div>
        </div>
        <div class="col three">
            <p class="col-title">LEGAL</p>
            <div class="col-content">
                <ul>
                    <li><a href="/terms-page">Terms of Service</a></li>
                    <li><a href="/privacy-page">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="col four">
            <p class="col-title">GET IN TOUCH</p>
            <div class="col-content">
{{--                <div class="address">--}}
{{--                    <span class="fas fa-map-marker-alt mr-2"></span>--}}
{{--                    <p>1234 Street Name, City Name, USA</p>--}}
{{--                </div>--}}
                <div class="email">
                    <span class="fas fa-envelope mr-2"></span>
                    <p>support@mjdevign.com.au</p>
                </div>
                <div class="subscribe">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" style="pointer-events: all; cursor: pointer;"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset ( 'main/js/header.js' ) }}"></script>
<script src="{{ asset ( 'main/js/package-controller.js' ) }}"></script>
<script src="{{ asset ( 'main/js/faq.js' ) }}"></script>
@if (Route::getFacadeRoot()->current()->uri()==('dropshipping-page'))
    <script src="{{ asset ( 'main/js/profit-calculator.js' ) }}"></script>
    <script src="{{ asset ( 'main/js/dropshippingAccordion.js' ) }}"></script>
@endif
<script src="{{ asset ( 'main/js/sectionInfo.js' ) }}"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>





</body>
</html>
