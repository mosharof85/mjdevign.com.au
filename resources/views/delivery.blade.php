<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
 
    <title>Uploads</title>

    <style>
        .sub-main .container-holder{
            display: grid;
            grid-template-columns: 1fr 4fr;
            grid-column-gap: 25px;
        }

        @media screen and (max-width: 1279px) {
            .sub-main .container-holder{
                grid-template-columns: 1fr;
                grid-row-gap: 50px;
            }
        }

        .sub-main .nav ul{
            height: fit-content;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="/images/diamond.png" alt="">
        <div class="info">
            <div class="name">MJ DEVIGN</div>
            <div class="tag">Design & Development Agency</div>
        </div>
    </div>

    <div class="login">
        <div class="bell">
{{--            <img src="/images/bell.png" alt="">--}}
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
        <section class="container-holder">
            <div class="nav">
            <ul>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/my-orders.png" alt=""><span style="font-weight: 700">My Orders</span></a>
                    </li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/add-ons.png" alt=""><span>Add ons</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/messages.png" alt=""><span>Messages</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/services.png" alt=""><span>Services</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/mt-account.png" alt=""><span>My Account</span></a></li>
                </ul>
            </div>
            <div class="details">
                <div id="box">
                    <div class="box-container">
                        <div class="option s__my-order">
                            <div class="heading1">My Orders</div>
                            <div class="heading2">My Orders</div>
                            <div class="my-order overflow-controller">
                                <div class="grid-table overflow-holder">
                                    <div class="data">
                                        <div class="text-bold">Description:</div>
                                        <div class="text-bold">Invoice:</div>
                                        <div class="text-bold">Status:</div>
                                        <div class="text-bold">Price:</div>
                                        <div class="text-bold">Payment:</div>
                                        <div class="text-bold">Order Date:</div>
                                        <div class="text-bold">Due Date:</div>
                                        <div class="text-bold">Details:</div>
                                    </div>
                                    <div class="data border-top border-bottom padding-extra">
                                        <div class="text-normal">Dropshipping Package</div>
                                        <div class="text-normal">#1100</div>
                                        <div class="text-normal td-status"><span>Inspecting</span></div>
                                        <div class="text-normal">$999.00</div>
                                        <div class="text-normal"><img src="/images/cards/visa.webp" alt=""></div>
                                        <div class="text-normal"><img src="/images/callender.webp" alt=""><span>10/10/2020</span></div>
                                        <div class="text-normal"><img src="/images/callender.webp" alt=""><span>10/10/2020</span></div>
                                        <div class="text-normal td-details"><a href="./order-details.html">View Details</a></div>
                                    </div>

                                    <div class="data">
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal td-status bg-blue"><span>Developing</span></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"><img src="/images/mastercard.webp" alt=""></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                    </div>

                                    <div class="data">
                                        <div class="text-normal">Website Package<br>Landing Page Package</div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal td-status bg-pest"><span>Complete</span></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal">AfterPay</div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                    </div>

                                    <div class="data">
                                        <div class="text-normal">Custom Package</div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal td-status bg-red"><span>Refunded</span></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                    </div>

                                    <div class="data">
                                        <div class="text-normal">Additional Features</div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"><span></span></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                        <div class="text-normal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option s__add-ons">
                            <div class="heading1">Additional Features</div>
                            <div class="heading2">You can add additional features to your package at any time.</div>
                            <div class="add-ons overflow-controller">
                                <div class="overflow-holder">
                                    <div class="topbar">
                                        <div class="select">
                                            <select name="addons" id="addons">
                                                <option>Chose Your Package</option>
                                                <option>Dropshipping Package</option>
                                                <option value="saab">Website Package</option>
                                                <option value="mercedes">Landing Page Package</option>
                                                <option value="audi">Other Package</option>
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
                                            <span>Cart (0)</span>
                                            <a href="./order-checkout.html" class="cart-btn1">CHECKOUT</a>
                                            <a href="./order-checkout.html" class="cart-btn2">CHECKOUT</a>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/mail.webp" alt="">
                                            <span>Custom Email<br>Address</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Business Email Address</p>
                                            <div class="checkbox"><input type="checkbox" id="offer1" name="offer1">
                                                <label for="offer1">$150.00 - Add to cart</label></div>
                                            <p class="content">A personalised email address with 1 year hosting & a professional template design to match your store. We also help you connect it to all of your devices. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/customer-account.webp" alt="">
                                            <span>Customer<br>Account</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Customer Account</p>
                                            <div class="checkbox"><input type="checkbox" id="offer2" name="offer2">
                                                <label for="offer2">$100.00 - Add to cart</label></div>
                                            <p class="content">Enable your customers to create an account on your store to view and track their orders. Alternatively, this information will be sent to them by email. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/marketing-campeign.webp" alt="">
                                            <span>Marketing<br>Campaign</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Marketing Campaign</p>
                                            <div class="checkbox"><input type="checkbox" id="offer3" name="offer3">
                                                <label for="offer3">$179.00 - Add to cart</label></div>
                                            <p class="content">We will set up a marketing campaign for Google & Facebook ads, targeting your audiences with a $100 voucher to get started. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/social-media.webp" alt="">
                                            <span>Social Media<br>Package</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Social Media Peckage</p>
                                            <div class="checkbox"><input type="checkbox" id="offer4" name="offer4">
                                                <label for="offer4">$130.00 - Add to cart</label></div>
                                            <p class="content">We will set your store up with a Facebook, Instagram and Twitter account and design appealing  banners and content. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/multilingual.webp" alt="">
                                            <span>Multilingual &<br>Multicurrencies</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Multilingual & Multicurrencies</p>
                                            <div class="checkbox"><input type="checkbox" id="offer5" name="offer5">
                                                <label for="offer5">$199.00 - Add to cart</label></div>
                                            <p class="content">A plugin where customers can switch between currencies and automatically displays their native currency based on geolocation. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/product-title.webp" alt="">
                                            <span>Product Title &<br> Description Editing</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Product Title & Description Editing</p>
                                            <div class="checkbox">
                                                <select>
                                                    <option selected>Choose an option</option>
                                                    <option value="Product Editing x 50 - $30">Product Editing x 50 - $30</option>
                                                    <option value="Product Editing x 100 - $60">Product Editing x 100 - $60</option>
                                                    <option value="Product Editing x 150 - $90">Product Editing x 150 - $90</option>
                                                    <option value="Product Editing x 200 - $30">Product Editing x 200 - $30</option>
                                                    <option value="Product Editing x 400 - $300">Product Editing x 400 - $300</option>
                                                </select>
                                            </div>
                                            <p class="content">Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="left">
                                            <img src="/images/promotional-video.webp" alt="">
                                            <span>Custom Email<br>Address</span>
                                        </div>
                                        <div class="right">
                                            <p class="heading">Business Email Address</p>
                                            <div class="checkbox"><input type="checkbox" id="offer7" name="offer7">
                                                <label for="offer7">$249.00 - Add to cart</label></div>
                                            <p class="content">A minute long appealing promotional video that can be integrated into your website and social media to help boost sales. <span style="text-decoration:underline">Learn more</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option s__messages">
                            <div class="heading1">Messages</div>
                            <div class="heading2">My Messages</div>
                            <div class="messages">
                                LEAVE BLANK
                            </div>
                        </div>
                        <div class="option s__deliver default">
                            <div class="heading1">My Services</div>
                            <div class="heading2">My Services</div>
                            <div class="deliver-btns">
                               
                            </div>
                            <div class="deliver">
                                <div class="deliver-title">Delivery Files</div>
                                <div class="deliver-border"></div>
                                <div class="list">
                                    
                                @foreach ($invoices as $invoice)
                                @for ($i = 0; $i < sizeof(($uploadimage)); $i++) 
                                    @if($uploadimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($uploadimage[$i],7))}}><span class="fname"> {{$filename[$i]}}</span></a>
                                            <span class="finfo">{{$description[$i]}}</span>
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="option s__account">
                            <div class="heading1">My Account</div>
                            <div class="heading2">Account Settings</div>
                            <div class="account overflow-controller">
                                <div class="overflow-holder">
                                    <div class="ac-name padding-border">
                                        <div class="data">
                                            <div class="heading display-flex mb-20">
                                                <div class="part1 style1">First name:</div>
                                                <div class="part2 style1">Surname:</div>
                                            </div>
                                            <div class="vlaue display-flex mb-20">
                                                <div class="part1 style2">Jane</div>
                                                <div class="part2 style2">Smith</div>
                                            </div>
                                            <div class="button display-flex mb-20">
                                                <div class="part1 style3"><span>Edit</span></div>
                                                <div class="part2 style3"><span>Edit</span></div>
                                            </div>
                                        </div>
                                        <div class="action display-flex mb-20">
                                            <div class="part1">
                                                <p class="style1 mb-20">First name:</p>
                                                <input type="text" placeholder="Jane" class="input">
                                            </div>
                                            <div class="part2">
                                                <p class="style1 mb-20">Surname:</p>
                                                <input type="text" placeholder="Smith"  class="input">
                                            </div>
                                            <div class="btn">
                                                <a href="#">SAVE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ac-email one-col padding-border">
                                        <div class="data">
                                            <div class="heading mb-20">
                                                <div class="part1 style1">Email::</div>
                                            </div>
                                            <div class="vlaue mb-20">
                                                <div class="part1 style2">Jane@gmail.com</div>
                                            </div>
                                            <div class="button mb-20">
                                                <div class="part1 style3"><span>Edit</span></div>
                                            </div>
                                        </div>
                                        <div class="action display-flex mb-20">
                                            <div class="part1">
                                                <p class="style1 mb-20">New Email:</p>
                                                <input type="text" placeholder="jane@gmail.com" class="input input-2">
                                            </div>
                                            <div class="btn">
                                                <a href="#">SAVE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ac-mobile one-col padding-border">
                                        <div class="data">
                                            <div class="heading mb-20">
                                                <div class="part1 style1">Mobile::</div>
                                            </div>
                                            <div class="vlaue mb-20">
                                                <div class="part1 style2">+61 4123 099 899</div>
                                            </div>
                                            <div class="button mb-20">
                                                <div class="part1 style3"><span>Edit</span></div>
                                            </div>
                                        </div>
                                        <div class="action display-flex mb-20">
                                            <div class="part1">
                                                <p class="style1 mb-20">Mobile number:</p>
                                                <input type="text" placeholder="040004000400" class="input input-2">
                                            </div>
                                            <div class="btn">
                                                <a href="#">SAVE</a>
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
                                                <div class="part1 style2">Australia</div>
                                                <div class="part2 style2">Sydney, 3000</div>
                                            </div>
                                            <div class="button display-flex mb-20">
                                                <div class="part1 style3"><span>Edit</span></div>
                                                <div class="part2 style3"><span>Edit</span></div>
                                            </div>
                                        </div>
                                        <div class="action display-flex mb-20">
                                            <div class="part1">
                                                <p class="style1 mb-20">Country:</p>
                                                <input type="text" placeholder="Country" class="input">
                                            </div>
                                            <div class="part2">
                                                <p class="style1 mb-20">City:</p>
                                                <input type="text" placeholder="City"  class="input">
                                            </div>
                                            <div class="btn">
                                                <a href="#">SAVE</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</main>

<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/responsiveness.js"></script>
<script src="./js/nav-controller.js"></script>
<script src="./js/account-settings.js"></script>

</body>
</html>