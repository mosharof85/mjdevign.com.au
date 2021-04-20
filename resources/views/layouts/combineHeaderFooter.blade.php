

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

{{--    <title>MJ DEVIGN</title>--}}

    @if (Route::getFacadeRoot()->current()->uri()==('home')
            or Route::getFacadeRoot()->current()->uri()=='/')
        <title>MJDEVIGN - Digital Design & Development Agency</title>
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('websites'))
        <title>MJDEVIGN - Website Design & Development</title>
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('landingpage'))
        <title>MJDEVIGN - Landing Page Design & Development</title>
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('dropshipping'))
        <title>MJDEVIGN - Dropshipping Store Design & Development</title>
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('mobileapp'))
        <title>MJDEVIGN - Mobile App Development</title>
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('webapp'))
        <title>MJDEVIGN- Web app Development</title>
    @endif

    <link rel="stylesheet" href="{{ asset ( 'main/css/style.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/header.css' ) }}">
    <!--<link rel="stylesheet" href="{{ asset ( 'main/css/sec-hero.css' ) }}">-->
    
    <link rel="preload" href="{{ asset ( 'main/css/sec-hero.css' ) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset ( 'main/css/sec-hero.css' ) }}"></noscript>

    @if (Route::getFacadeRoot()->current()->uri()!=('home')
            or Route::getFacadeRoot()->current()->uri()!='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-quality.css' ) }}">
    @endif

    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-info.css' ) }}">

    @if (Route::getFacadeRoot()->current()->uri()!=('home')
            or !Route::getFacadeRoot()->current()->uri()!='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-process.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='websites'
            or Route::getFacadeRoot()->current()->uri()==('landingpage')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-package.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('home')
            or Route::getFacadeRoot()->current()->uri()=='/')
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-services.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('home')
            or Route::getFacadeRoot()->current()->uri()=='/'
            or Route::getFacadeRoot()->current()->uri()==('websites')
            or Route::getFacadeRoot()->current()->uri()==('landingpage')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-newyear.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='websites'
            or Route::getFacadeRoot()->current()->uri()==('landingpage')
            or Route::getFacadeRoot()->current()->uri()==('dropshipping'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-pricing.css' ) }}">
    @endif


    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-faq.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/sec-support.css' ) }}">
    <link rel="stylesheet" href="{{ asset ( 'main/css/footer.css' ) }}">

    @if (Route::getFacadeRoot()->current()->uri()==('webapp') or Route::getFacadeRoot()->current()->uri()==('mobileapp'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-contact.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()=='/' or Route::getFacadeRoot()->current()->uri()==('home'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/index.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('websites'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/website.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('webapp'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/webapp.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('mobileapp'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/mobileapp.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('landingpage'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/landingpage.css' ) }}">
    @endif

    @if (Route::getFacadeRoot()->current()->uri()==('dropshipping'))
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-desc.css' ) }}">
        <link rel="stylesheet" href="{{ asset ( 'main/css/sec-calculator.css' ) }}">
        <link rel="stylesheet" href="{{ asset ( 'main/css/others/dropshipping.css' ) }}">
    @endif

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"></noscript>
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />-->
    <!--<link rel="stylesheet" href="{{ asset ( 'main/themify-icons/themify-icons.css' ) }}">-->
    <link rel="icon" href="{{ asset ( 'main/images/diamond.ico' ) }}">

    <!--<link href="{{ asset('css/modal.css') }}" rel="stylesheet">-->
    
    <link rel="preload" href="{{ asset('css/modal.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/modal.css') }}"></noscript>
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
                <p class="info2">Digital Development Agency</p>
            </div>
        </div>

        <span class="toggler"></span>

        <nav>
            <ul class="f-montserrat-medium">
                <li class="nav-link"><a href="/home">Home</a></li>

                <li class="nav-link">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="/websites">Website Development</a></li>
                        <li><a href="/landingpage">Landing Page</a></li>
                        <li><a href="/dropshipping">Dropshipping Store</a></li>
                        <li><a href="/mobileapp">Mobile App</a></li>
                        <li><a href="/webapp">Web App</a></li>
                    </ul>
                </li>

                @if (Route::getFacadeRoot()->current()->uri() == ('/') or Route::getFacadeRoot()->current()->uri() == ('home'))
                    <li class="nav-link"><a href="#sec-info">About</a></li>
                @endif

                @if (Route::getFacadeRoot()->current()->uri() != ('/'))
                    @if(Route::getFacadeRoot()->current()->uri() != ('home'))
                        @if(Route::getFacadeRoot()->current()->uri() != ('mobileapp'))
                            @if(Route::getFacadeRoot()->current()->uri() != ('webapp'))
                                <li class="nav-link"><a href="#sec-package">Package</a></li>
                                <li class="nav-link"><a href="#sec-pricing">Pricing</a></li>
                            @endif
                        @endif
                    @endif
                @endif

                @if (Route::getFacadeRoot()->current()->uri() == ('mobileapp') or Route::getFacadeRoot()->current()->uri() == ('webapp'))
                    <li class="nav-link"><a href="#sec-info">About</a></li>
                    <li class="nav-link"><a href="#sec-contact">Free Quote</a></li>
                @endif

                @if(Route::getFacadeRoot()->current()->uri() != ('mobileapp'))
                    @if(Route::getFacadeRoot()->current()->uri() != ('webapp'))
                        <li class="nav-link"><a href="#sec-faq">FAQ</a></li>
                    @endif
                @endif



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
                        {{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{--                            {{ Auth::user()->name }}--}}
                        {{--                        </a>--}}
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/account" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('My Account') }}
                        </a>
                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                            <a lass="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Log Out') }}
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
            <a href="#" class="btn-contact" data-toggle="modal" data-target="#contactModal">Contact Us</a>
        </div>
    </div>
</section>

<style>

    #contactModal .modal-dialog,
    #contactModal .modal-content
    {
        max-width: 600px;
        width: 100%;
    }

    #contactModal .modal-header{
        flex-direction: column;
        position: relative;
    }

    #contactModal .modal-header .block1{
        display: grid;
        grid-template-columns: auto 1fr;
    }

    #contactModal .modal-header .block1 p{
        font-family: fira_sansbold, sans-serif;
        font-size: 27px;
        color: #333333;
        margin-left: 20px;
        position: relative;
        justify-content: flex-start;
        padding: 0;
    }

    #contactModal .modal-header .block1 p::after{
        position: absolute;
        content: '';
        width: 100%;
        height: 1px;
        bottom: 7px;
        left: 0;
        display: inline-block;
        background-color: rgb(51,51,51);
    }

    #contactModal .modal-header .block2{
        font-family: montserratregular, sans-serif;
        color: #000000;
        font-size: 14px;
        font-weight: 700;
        padding: 30px 0;
        text-align: left;
        line-height: 1.3;
    }

    /*.contact-popup{*/
    /*    position: fixed;*/
    /*    top: 0;*/
    /*    left: 0;*/
    /*    z-index: 99;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*}*/

    /*.contact-popup .inner{*/
    /*    max-width: 600px;*/
    /*    width: 100%;*/
    /*}*/
    .contact-textarea{
        width:100%;
        height:200px;
    }
    .text-left{
        text-aligh:left!important;
    }
    .spinner {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99;
        display: none;
        align-items: center;
        justify-content: center;
        background-color: rgba(0,0,0,.25);
    }

    .spinner.active{
        display: flex;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
    }
    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }
    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    #contactModal form .row{
        margin-bottom: 20px;
    }

    #contactModal form .row.submit{
        text-align: right;
    }

    #contactModal form .input-group{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    #contactModal form .input-group label{
        font-family: montserratmedium, sans-serif;
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 8px;
    }

    #contactModal form .input-group input,
    #contactModal form .input-group textarea{
        min-height: 42px;
        border: 1px solid #B6B6B6;
        border-radius: 5px;
        background-color: #F4F6F9;
        padding: 3px 3px 3px 12px;
        font-size: 14px;
        line-height: 40px;
        outline: none;
        color: #6d6d6d;
        width: 100%;
    }

    #contactModal form .input-group textarea{
        font-family: open_sansregular, sans-serif;
    }

    #contactModal form .input-group input:hover,
    #contactModal form .input-group textarea:hover{
        background-color: #FFFFFF;
    }

    #contactModal form .input-group textarea{
        min-height: 200px;
        resize: none;
    }

    #contactModal input::placeholder,
    #contactModal textarea::placeholder{
        font-family: open_sansregular, sans-serif;
    }

    #contactModal textarea::placeholder{
        /*line-height: 190px;*/
        padding-left: 10px;
    }

    #contactModal form input[type="submit"]{
        width: 121px;
        height: 36px;
        background-color: #3D387D;
        font-size: 12px;
        letter-spacing: 1.2px;
        font-weight: 600;
        color: #FFFFFF;
        display: inline-block;
        border-radius: 5px;
        text-transform: uppercase;
        font-family: open_sansregular, sans-serif;
        outline: none;
        border-width: 0;
        cursor: pointer !important;
        line-height: initial;
    }

</style>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="block1">
                    <img src="main/images/email-success.png" alt="">
                    <p><span>Contact Us</span></p>
                </div>
                <p class="block2">
                    You can chat with us live by clicking the chat icon on the bottom left hand side of this page. Alternatively, fill out the form below and we will get back to you via email ASAP.
                </p>
{{--                <a href=""  class="btn btn-danger close" ><span aria-hidden="true">Back</span></a>--}}
            </div>
            <div class="modal-body">
                   <form id="contactForm" method="POST" action="{{url('/contact/send')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-group">
                                <label class="text-left" for="name">name*</label>
                                <input type="text" name="name" placeholder="First name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <label  class="text-left" for="email">Email*</label>
                                <input type="text" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <label  class="text-left" for="mobile">Mobile</label>
                                <input type="text" name="mobile" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <label  class="text-left" for="idea">Message*</label>
                                <textarea type="text" name="message" class="contact-textarea" placeholder="Tell us about your query and we will get back to you as soon as possible!" required></textarea>
                            </div>
                        </div>
                        <div class="row submit">
                            <input type="submit" style="cursor:pointer" value="Submit">
                        </div>
                    </form>
                    
                    <div class="success" style="display:none">
                        <img src="main/images/email-success.png" alt="">
                        <p>Your message has been received and is under review!</p>
                        <p>We will contact you as soon as possible.</p>
                    </div>
            </div>

            <div class="spinner">
                <div class="lds-dual-ring"></div>
            </div>
        </div>

        <script>
            const form = document.querySelector('#contactForm');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                document.querySelector('#contactModal .spinner').classList.add('active');
                const formData = new FormData(form);


                fetch("{{url('/contact/send')}}", {
                    method: 'post',
                    body: formData
                }).then(data => {
                    document.querySelector('#contactModal .spinner').classList.remove('active');
                    form.style.display = 'none';
                    document.querySelector('#contactModal .modal-header .block1 p').innerText = 'Message received';
                    document.querySelector('#contactModal .modal-header .block2').innerText = 'Your message has been received. We will respond to you as soon as possible!';
                    // form.nextElementSibling.style.display = 'block';
                })
            })
        </script>
    </div>
</div>

<div class="contact-popup">
    <div class="inner">

    </div>
</div>

<footer>
    <div class="section-container">
        <div class="col one">
            <div class="part1">
                <img src="main/images/diamond.png" alt="">
                <div class="col-title">
                    <p class="info1">MJ DEVIGN</p>
                    <p class="info2">Digital Development Agency</p>
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
                    <li><a href="/websites">Website Development</a></li>
                    <li><a href="/landingpage">Landing Page</a></li>
                    <li><a href="/dropshipping">Dropshipping Store</a></li>
                    <li><a href="/mobileapp">Mobile App</a></li>
                    <li><a href="/webapp">Web App</a></li>
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
@if (Route::getFacadeRoot()->current()->uri()==('dropshipping'))
    <script src="{{ asset ( 'main/js/profit-calculator.js' ) }}"></script>
    <script src="{{ asset ( 'main/js/dropshippingAccordion.js' ) }}"></script>
@endif
<script src="{{ asset ( 'main/js/sectionInfo.js' ) }}"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>

<script>
    if(document.querySelector('#navbarDropdown')){
        document.querySelector('#navbarDropdown').addEventListener('click', function(e){
            e.preventDefault();
            window.open(this.getAttribute('href'), "_self");
            return;
        })
    }
</script>



</body>
</html>
