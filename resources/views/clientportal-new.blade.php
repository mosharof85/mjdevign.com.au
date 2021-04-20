<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset ( 'main/images/diamond.ico' ) }}">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="/css/clientportal/style.css">
    <link rel="stylesheet" href="/css/clientportal/header.css">
    <link rel="stylesheet" href="/css/clientportal/sub-main.css">
    <link rel="stylesheet" href="/css/clientportal/my-order.css">
    <link rel="stylesheet" href="/css/clientportal/add-ons.css">
    <link rel="stylesheet" href="/css/clientportal/messages.css">
    <link rel="stylesheet" href="/css/clientportal/services.css">
    <link rel="stylesheet" href="/css/clientportal/account.css">
    <link rel="stylesheet" href="/css/clientportal/deliver.css">
    <link rel="stylesheet" href="/css/clientportal/checkout.css">

    <link rel="stylesheet" href="/css/dropshipping/page54.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
        a:hover {
            text-decoration: none !important;
            }

        .s__account .btn-secondary{
            margin-left: 20px;
        }

        .s__add-ons .addonlist .offer p{
            text-align: center;
        }
    </style>
    <title>MJDevign - Dashboard</title>

    <!-- STRIPE JS SDK -->
    <script src="https://js.stripe.com/v3/"></script>



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
        page_id="109991891133809">
      </div>


@include('components.login')
@include('components.register')





<header>
    <div class="logo">
        <img src="./images/diamond.png" alt="">
        <div class="info">
            <div class="name">MJ DEVIGN</div>
            <div class="tag">Design & Development Agency</div>
        </div>
    </div>

    <div class="login">
        <div class="bell">
{{--            <img src="./images/bell.png" alt="">--}}
        </div>
        <svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><g><path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g></svg>
        <!-- Authentication Links -->
        <ul>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-link sign-in">
                        <a
                                style="cursor: pointer" 
                                data-toggle="modal" 
                                data-target="#loginModal">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    
                @else
                    <li class="nav-item dropdown">
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
                    </li>
                @endguest
            </ul>

    </div>
</header>
<main>


    <section class="sub-main">
        <section class="container-fluid">
            <div class="row">
                <div class="nav w-100 h-25">
                    <ul>
                        <li><a href="#"><img src="{{env('APP_URL')}}/images/my-orders.png" alt=""><span style="font-weight: 700">My Orders</span></a>
                        </li>
                        <li><a href="#"><img src="{{env('APP_URL')}}/images/add-ons.png" alt=""><span>Add ons</span></a></li>
                        <li><a href="#"><img src="{{env('APP_URL')}}/images/services.png" alt=""><span>Services</span></a></li>
                        <li><a href="#"><img src="{{env('APP_URL')}}/images/mt-account.png" alt=""><span>My Account</span></a></li>
                    </ul>
                </div>
                <div class="details">
                    <div id="box">
                        <div class="box-container">
                            <div class="option s__my-order default">
                                <div class="heading1">My Orders</div>
                                <div class="heading2">My Orders</div>
                                <!-- <div class="checkout-btn">
                                    <a href="./order-checkout.html" class="btn-1 f-montserrat">Checkout</a>
                                </div> -->
                                <div class="my-order overflow-controller">
                                    <div class="grid-table overflow-holder">
                                    
                                    <div class="data">

                                        <div class="text-bold">Description:</div>
                                        <div class="text-bold">Invoice:</div>
                                        <!-- <div class="text-bold">Transaction id</div> -->
                                        <div class="text-bold">Status:</div>
                                        <div class="text-bold">Price:</div>
                                        <div class="text-bold">Payment:</div>
                                        <div class="text-bold">Order Date:</div>
                                        <div class="text-bold">Due Date:</div>
                                        <div class="text-bold">Details:</div>
                                    </div>
                                    @foreach ($invoices as $invoice)
                                        <div class="data border-top border-bottom padding-extra">
                                            <div class="text-normal">{{$invoice->type}}</div>
                                            <div class="text-normal">#{{$invoice->id}}</div>
                                            <!-- <div class="text-normal">{{$invoice->transaction_id}}</div> -->

                                            <div class="text-normal td-status {{$invoice->status}}"><span>{{$invoice->status}}</span></div>

                                            <div class="text-normal">${{$invoice->price}}</div>

                                            <div class="text-normal">{{$invoice->payment}}</div>

                                            <div class="text-normal"><img src="/images/callender.png" alt=""><span>{{$invoice->created_at->format('Y-m-d')}}</span></div>
                                            <div class="text-normal"><img src="/images/callender.png" alt=""><span>{{$invoice->due_date}}</span></div>
                                        </tbody>
                                            <div class="text-normal td-details"><a href="/order-details/{{$invoice->id}}">View Details</a></div>
                                        </table>
                                    </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="option s__add-ons" style="position: relative;">
                            <!-- <div class="option s__add-ons" > -->

                            <style>
                                .LoadingHolder{
                                    width: 100%;
                                    height: 100vh;
                                    position: absolute;
                                    top: 0%;
                                    left: 0%;
                                    z-index: 1000000;
                                    background-color: rgba(0,0,0,0.4);
                                    color: #821f4e;
                                    justify-content: center;
                                }
                                .makeItHidden{
                                    display : none !important;
                                }
                                .makeItShown{
                                    display: block !important;
                                }
                                </style>
                                <div class="LoadingHolder makeItHidden d-flex align-items-center">
                                        <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                        </div>
                                </div>



                                <div class="heading1">Additional Features</div>
                                <form id="addonsform" method="POST" action="{{url('/client-portal/addons/store')}}" enctype="multipart/form-data">
                                @csrf
                                <div id="AdOnDiv" style="position: absolute;">
                                <!-- <div id="AdOnDiv" > -->
                                    <div class="heading2">You can add additional features to your package at any time.</div>
                                        <div class="add-ons overflow-controller">
                                            <div class="overflow-holder">
                                                <div class="topbar">
                                                    <div class="select">
                                                        <select name="invoice_id" id="addons">
                                                            <option value="" disabled hidden selected>Choose Your Package</option>
                                                            @foreach ($invoices as $invoice)
                                                                <option value="{{$invoice->id}}">#{{$invoice->id}} - {{$invoice->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="cart">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjrizd6i svg [data-color="1"] {fill: #3B368C;}</style></defs>
                                                            <g>
                                                                <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                                                <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                                                <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2F54DD" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="order-count">Cart (0)</span>
                                                        <p class="bold total top-total-amt">AU$ 00.00</p></span></p>
                                                        @guest
                            
                                                            <!-- <p style="color: red">You're not logged in!</p> -->

                                                            <a class="btn_checkout">
                                                                <button class="cart-btn1" id="loginModalBtn" value="checkout">Checkout</button>
                                                            </a>
                                                            
                                                            <script type="text/javascript">
                                                                document.getElementById("loginModalBtn").addEventListener("click", function(event){
                                                                        event.preventDefault();
                                                                        $('#loginModal').modal('show');
                                                                });
                                                            </script>
                                                        @else
                                                            <button class="cart-btn1" id="checkout-btn" value="checkout">Checkout</button>
                                                        @endguest
                                                    </div>
                                                </div>
                                                <div class="addonlist">
                                                    @foreach ($addons as $addon)
                                                    <div class="offer">
                                                        <div class="left">
                                                            @if ($addon->image != "")
                                                                <img src="../images/{{$addon->image}}" alt="addon's logo">
                                                            @endif
                                                            <p>
                                                                {{$addon->addonsname}}
                                                            </p>
                                                        </div>
                                                        <div class="right">
                                                            <p class="heading">
                                                                {{$addon->addonsname}}
                                                            </p>
                                                            @if ($addon->addonsname == "Product Title & Description Editing")
                                                                <div class="checkBox d-flex">
                                                                    <input style="display: none" class = "addons" type="checkbox" name="addons[]" value=""
                                                                    price = "0">
                                                                    <select id= "Product Title & Description Editing">
                                                                        <option value="" hidden selected disabled>Choose an option</option>  
                                                                        <option value='"{\"price\":30,\"description\":\"Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information.\",\"name\":\"Product Title & Description Editing x 50\"}"'>
                                                                            Product Editing x 50 - $30
                                                                        </option>
                                                                        <option value='"{\"price\":60,\"description\":\"Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information.\",\"name\":\"Product Title & Description Editing x 100\"}"'>
                                                                            Product Editing x 100 - $60
                                                                        </option>
                                                                        <option value='"{\"price\":90,\"description\":\"Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information.\",\"name\":\"Product Title & Description Editing x 150\"}"'>
                                                                            Product Editing x 150 - $90
                                                                        </option>
                                                                        <option value='"{\"price\":120,\"description\":\"Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information.\",\"name\":\"Product Title & Description Editing x 200\"}"'>
                                                                            Product Editing x 200 - $120
                                                                        </option>
                                                                        <option value='"{\"price\":240,\"description\":\"Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information.\",\"name\":\"Product Title & Description Editing x 400\"}"'>
                                                                            Product Editing x 400 - $240
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <script type="text/javascript">
                                                                        document.getElementById('Product Title & Description Editing').addEventListener('change', (ev) =>{
                                                                                var data = JSON.parse(JSON.parse(ev.target.value));
                                                                                var prev_el = ev.target.previousElementSibling;
                                                                                prev_el.checked = false;
                                                                                prev_el.dispatchEvent(new Event('change'));
                                                                                prev_el.setAttribute('price', data.price); 
                                                                                prev_el.setAttribute('value', '{"name":"'+data.name+'","description":"'+data.description+'"}');
                                                                                prev_el.setAttribute('display', data.name);
                                                                                prev_el.checked = true;
                                                                                prev_el.dispatchEvent(new Event('change'));
                                                                        });
                                                                </script>
                                                            @else
                                                                <div class="checkBox d-flex">
                                                                    <input class = "addons" type="checkbox" name="addons[]" display="{{$addon->addonsname}}" value='{"name":"{{$addon->addonsname}}","description":"{{$addon->description}}"}'
                                                                        id="addons_{{$addon->addonsname}}" price = "{{$addon->price == null ? 0.00 : $addon->price}}">
                                                                    <label for="addons_{{$addon->addonsname}}">


                                                                        ${{$addon->price}} - <span id="package_stat_{{$addon->addonsname}}">Add To Package</span>
                                                                    </label>
                                                                    
                                                                </div>
                                                            @endif
                                                            <p class="content">

                                                                {{$addon->description}}
                                                            </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="orderSummary" id="checkoutDiv" style="z-index:-5; position: relative; visibility: hidden;">
                                    <!-- <div class="orderSummary" id="checkoutDiv"> -->
                                        <div class="s__checkout default">
                                            <div class="heading2">Checkout</div>
                                            <div class="cart-box">
                                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjk4iz69 svg [data-color="1"] {fill: #3B368C;}</style></defs>
                                                    <g>
                                                        <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                                        <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                                        <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2F54DD" data-color="1"></path>
                                                    </g>
                                                </svg>
                                                <span class="order-count">Cart(0)</span>
                                            </div>
                                            <div class="checkout">
                                                <div class="left">
                                                    <div class="checkout-title">Checkout</div>
                                                    <div class="checkout-msg">Select your payment method</div>
                                                        <div class="left-box">
                                                            @include('components.payment')

                                                            <button class="btn btn-primary" type="submit" placeholder="">checkout</button>
                                                        </div>
                                                </div>

                                                <div class="right">
                                                    <div class="right-container">
                                                        <div class="orderbox-title">
                                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjk4iz69 svg [data-color="1"] {fill: #3B368C;}</style></defs>
                                                                <g>
                                                                    <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                                                    <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                                                    <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2F54DD" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                            <span>Order Summary</span>
                                                        </div>
                                                        <div class="orderContainer">
                                                            <div class="orderbox-content">
                                                                <div class="orderList">
                                                                </div>
                                                                <div class="part2">
                                                                    <div class="orderbox-note">
                                                                        <img src="./images/cards/note.webp" alt="">
                                                                        <span>Add a note </span>
                                                                    </div>
                                                                    <textarea class="orderbox-note-input" name="note" placeholder="Write you note here"></textarea>
                                                                </div>
                                                                <div class="part3">
                                                                    <div>
                                                                        <span>Subtotal:</span><p class="bold sub-total-amt">AU$ 00.00<span class="aus"></span></p>
                                                                    </div>
                                                                    <div><span>Discount:</span><p class="bold discount-amt">AU$ 00.00<span class="aus"></span></p></div>
                                                                    <div><span>GST:</span><p class = "bold gst-amt">AU$ 00.00<span class="aus"></span></p></div>
                                                                </div>
                                                            </div>
                                                            <div class="orderbox-footer">
                                                                <span>Total:</span>
                                                                <input type="hidden" value="" name="price" class="bold total total-amt"><h4 class="bold total total-amt" style="font-weight:700">AU$ 00.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </form>
                                    </div>

                                </div>

                            <div class="option s__services">

                                <div class="heading flex-column section-container">
                                    <p class="sub">Website Design & Development</p>
                                    <p class="title mb-20">Services We Offer</p>
                                    <div class="red-border mb-20"></div>
                                    <p class="description">Getting your website up and running couldn't be easier with MJ Digital Development Agency.</p>
                                </div>
                                <div class="section-container services">
                                    <div class="service">
                                        <img src="main/images/others/index/service1.png" alt="">
                                        <p class="one">Website Development</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="/websites">Check it out
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                    <div class="service">
                                        <img src="main/images/others/index/service2.png" alt="">
                                        <p class="one">Dropshipping Store</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="/dropshipping">Check it out
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                    <div class="service">
                                        <img src="main/images/others/index/service3.png" alt="">
                                        <p class="one">Landing Page</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="/landingpage">Check it out
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                    <div class="service">
                                        <img src="main/images/others/index/service4.png" alt="">
                                        <p class="one">Mobile App</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="/mobileapp">Check it out
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                    <div class="service">
                                        <img src="main/images/others/index/service5.png" alt="">
                                        <p class="one">Web Application</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="/webapps">Check it out
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                    <div class="service">
                                        <img src="main/images/others/index/service6.png" alt="">
                                        <p class="one">Website Renovation</p>
                                        <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                                        <a href="#">Comming Soon
                                            <img src="main/images/others/index/arrow.png" alt="" class="normal">
                                            <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="option s__account">
                                <div class="heading1">My Account</div>
                                <div class="heading2">Account Settings</div>
                                <div class="account overflow-controller">
                                    <div class="overflow-holder">
                                        <div class="ac-name">
                                        @foreach ($userdetails as $userdetail)
                                            @if($userdetail->provider)
                                            <p>Modification of Facebook user details is prohibited.</p>
                                            <div class="overflow-holder">
                                                <div class="ac-name padding-border">
                                                    <div class="data">
                                                        <div class="heading display-flex mb-20">
                                                            <div class="part1 style1">Name:</div>
                                                            <div class="part2 style1">Email:</div>
                                                        </div>
                                                        <div class="vlaue display-flex mb-20">
                                                            <div class="part1 style2">{{$userdetail->name}}</div>
                                                            <div class="part2 style2">{{$userdetail->email}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if(!$userdetail->provider)
                                            <form id="update" method="POST" action="{{url('/userdetail/update/'.$userdetail->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <a class="btn_checkout">
                                                <button class="btn btn-secondary" type="submit">
                                                    Save
                                                </button>
                                            </a>
                                            <div class="overflow-holder">
                                                <div class="ac-name padding-border">
                                                    <div class="data">
                                                        <div class="heading display-flex mb-20">
                                                            <div class="part1 style1">First name:</div>
                                                            <div class="part2 style1">Surname:</div>
                                                        </div>
                                                        <div class="vlaue display-flex mb-20">
                                                            <div class="part1 style2">{{$userdetail->name}}</div>
                                                            <div class="part2 style2">{{$userdetail->lastname}}</div>
                                                        </div>
                                                        <div class="button display-flex mb-20">
                                                            <div class="part1 style3"><span>Edit</span></div>
                                                            <div class="part2 style3"><span>Edit</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="action display-flex mb-20">
                                                        <div class="part1">
                                                            <p class="style1 mb-20">First name:</p>
                                                            <input type="text" name="name" placeholder="{{$userdetail->name}}" class="input">
                                                        </div>
                                                        <div class="part2">
                                                            <p class="style1 mb-20">Surname:</p>
                                                            <input type="text" name="lastname" placeholder="{{$userdetail->lastname}}"  class="input">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="ac-email one-col padding-border">
                                                    <div class="data">
                                                        <div class="heading mb-20">
                                                            <div class="part1 style1">Email::</div>
                                                        </div>
                                                        <div class="vlaue mb-20">
                                                            <div class="part1 style2">{{$userdetail->email}}</div>
                                                        </div>
                                                        <div class="button mb-20">
                                                            <div class="part1 style3"><span>Edit</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="action display-flex mb-20">
                                                        <div class="part1">
                                                            <p class="style1 mb-20">New Email:</p>
                                                            <input type="text" name="email" placeholder="{{$userdetail->email}}" class="input input-2">
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                <div class="ac-mobile one-col padding-border">
                                                    <div class="data">
                                                        <div class="heading mb-20">
                                                            <div class="part1 style1">Mobile::</div>
                                                        </div>
                                                        <div class="vlaue mb-20">
                                                            <div class="part1 style2">{{$userdetail->phonenumber}}</div>
                                                        </div>
                                                        <div class="button mb-20">
                                                            <div class="part1 style3"><span>Edit</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="action display-flex mb-20">
                                                        <div class="part1">
                                                            <p class="style1 mb-20">Mobile number:</p>
                                                            <input type="text" name="phonenumber" placeholder="{{$userdetail->phonenumber}}" class="input input-2">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="ac-country padding-border">
                                                    <div class="data">
                                                        <div class="heading display-flex mb-20">
                                                            <div class="part1 style1">Country:</div>
                                                            <div class="part2 style1">City:</div>
                                                        </div>
                                                        <div class="vlaue display-flex mb-20">
                                                            <div class="part1 style2">{{$userdetail->country}}</div>
                                                            <div class="part2 style2">{{$userdetail->city}}</div>
                                                        </div>
                                                        <div class="button display-flex mb-20">
                                                            <div class="part1 style3"><span>Edit</span></div>
                                                            <div class="part2 style3"><span>Edit</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="action display-flex mb-20">
                                                        <div class="part1">
                                                            <p class="style1 mb-20">Country:</p>
                                                            <input type="text" name="country" placeholder="{{$userdetail->country}}" class="input">
                                                        </div>
                                                        <div class="part2">
                                                            <p class="style1 mb-20">City:</p>
                                                            <input type="text" name="city" placeholder="{{$userdetail->city}}"  class="input">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="ac-password padding-border">
                                                    <div class="data">
                                                        <div class="heading mb-20">
                                                            <div class="part1 style1">Password:</div>
                                                            <div class="part2"></div>
                                                        </div>
                                                        <div class="vlaue mb-20">
                                                            <div class="part1 style2">**********</div>
                                                            <div class="part2"></div>
                                                        </div>
                                                        <div class="button mb-20">
                                                            <div class="part1 style3"><span>Reset Password</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="action display-flex mb-20">
                                                        <div class="part1">
                                                            <p class="style1 mb-20">Password:</p>
                                                            <p>A password reset link has been sent to your email.</p>
                                                        </div>
                                                        <div class="btn"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </form>
                                            @endif
                                            
                                        
                                        
                                        
                                        
                                        @endforeach
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orderSummary" id="checkoutDiv" style="display:none;">
                        <div class="option s__checkout default">
                            <div class="heading2">Checkout</div>
                            <div class="cart-box">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjk4iz69 svg [data-color="1"] {fill: #3B368C;}</style></defs>
                                    <g>
                                        <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                        <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                        <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2F54DD" data-color="1"></path>
                                    </g>
                                </svg>
                                <span>Cart(0)</span>
                            </div>
                            <div class="checkout">
                                <div class="left">
                                    <div class="checkout-title">Checkout</div>
                                    <div class="checkout-msg">Select your payment method</div>
                                        <div class="left-box">
                                            <!-- <div class="input-one">
                                                <div class="input">
                                                    <input type="radio" id="card" name="card">
                                                    <label for="card">Credit / Debit Card</label>
                                                </div>
                                                <div class="img"><img src="./images/cards/credit-card%20(1).webp" alt=""></div>
                                            </div> -->
                                            <!-- <div class="input-two">
                                                <div class="input">
                                                    <input type="radio" id="afterpay" name="card">
                                                    <label for="afterpay">AfterPay</label>
                                                </div>
                                                <div class="img"><img src="./images/cards/Afterpay.webp" alt=""></div>
                                            </div> -->
                                            <!-- <div class="card-info">credt card details</div> -->
                                            @include('components.payment')

                                        </div>
                                        
                                </div>

                                <div class="right">
                                    <div class="right-container">
                                        <div class="orderbox-title">
                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125" viewBox="28.5 37.5 142.999 125" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><defs><style>#comp-kjk4iz69 svg [data-color="1"] {fill: #3B368C;}</style></defs>
                                                <g>
                                                    <path d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z" fill="#2F54DD" data-color="1"></path>
                                                    <path d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z" fill="#2F54DD" data-color="1"></path>
                                                    <path d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z" fill="#2F54DD" data-color="1"></path>
                                                </g>
                                            </svg>
                                            <span>Order Summary</span>
                                        </div>
                                        <div class="orderbox-content">
                                            <div class="part1">
                                                <div>
                                                    <span>Business Email Address</span>
                                                    <span>AU$149.00</span>
                                                    <img src="./images/trash.webp" alt="">
                                                </div>
                                                <div>
                                                    <span>Marketing Campaign</span>
                                                    <span>AU$179.00</span>
                                                    <img src="./images/trash.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="part2">
                                                <div>
                                                    <img src="./images/cards/promo.webp" alt="">
                                                    <span>Enter a promo code</span>
                                                </div>
                                                <div class="orderbox-note">
                                                    <img src="./images/cards/note.webp" alt="">
                                                    <span>Add a note </span>
                                                </div>
                                                <textarea class="orderbox-note-input" placeholder="Write you note here"></textarea>
                                            </div>
                                            <div class="part3">
                                                <div><span>Subtotal:</span><span>AU$249.00</span></div>
                                                <div><span>Discount:</span><span>AU$00.00</span></div>
                                                <div><span>GST:</span><span>AU$00.00</span></div>
                                            </div>
                                        </div>
                                        <div class="orderbox-footer">
                                            <span>Total:</span>
                                            <span>$249.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

    </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</main>

<!-- <script src="/js/jquery-3.5.1.js"></script> -->
<script src="/js/validate.js"></script>

<script src="/js/responsiveness.js"></script>
<script src="/js/nav-controller.js"></script>
<script src="/js/account-settings.js"></script>
<script src="/js/order.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/payment.js"></script>
@guest
<script type="text/javascript">$('#loginModal').modal({backdrop: 'static', keyboard: false}) ;</script>
@endguest
<script type="text/javascript">
    document.getElementById("checkout-btn").addEventListener("click", function(event){
        event.preventDefault();
        
        var addons_count = 0;
        
        if(! (validation.validate(document.getElementById('addonsform') ) ) ){
            return;
        }   

        Array.from(document.getElementsByClassName('addons')).forEach((el) => {
            if(el.checked){
                addons_count++;
            }
        });

        if(addons_count < 1){
            alert('Please select an Additional Feature');
            return;
        }

        document.getElementById("AdOnDiv").style.zIndex = "-5";
        document.getElementById("AdOnDiv").style.visibility = "hidden";
        document.getElementById("checkoutDiv").style.zIndex = "1";
        document.getElementById("checkoutDiv").style.visibility = "visible";
        payment.load();        
    });
</script>

<script>
    document.querySelectorAll('.s__services .service').forEach(item=>{
        item.addEventListener('click', function(e){
            window.open(item.querySelector('a').getAttribute('href'), "_blank");
        })
    })
</script>






</body>
</html>
