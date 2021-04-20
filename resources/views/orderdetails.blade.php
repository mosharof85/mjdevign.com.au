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
    <link rel="stylesheet" href="/css/clientportal/services-original.css">
    <link rel="stylesheet" href="/css/clientportal/account.css">
    <link rel="stylesheet" href="/css/clientportal/deliver.css">
    <link rel="stylesheet" href="/css/clientportal/checkout.css">

    <link rel="stylesheet" href="/css/dropshipping/page54.css">

    <link rel="stylesheet" href="{{ asset ( 'main/css/footer.css' ) }}">
 
    <title>Package Details</title>

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

        .details .topbar{
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }

        .details .topbar .left .one{
            font-size: 16px;
            line-height: 26px;
            font-weight: 700;
        }

        .details .topbar .left .two{
            color: #595959;
            font-size: 14px;
            line-height: 20px;
            margin-top: 15px;
            margin-bottom: 25px;
        }

        .details .topbar .right{
            margin-bottom: 25px;
        }

        .details .topbar .right a button{
            display: inline-block;
            width: 130px;
            height: 40px;
            font-size: 14px;
            font-weight: 700;
            line-height: 20px;
            border: none;
            outline: none;
            text-align: center;
            border-radius: 8px;
            color: #ffffff;
        }

        .details .topbar .right a.receipt button{
            background-color: #E94466;
        }

        .details .topbar .right a.delivery button{
            background-color: #6B4FFC;
        }

        #box.website .services{
            padding-left: 0;
            padding-right: 0;
        }

        #box.website .icon-info{
            left: 0;
        }

        #box.website .bg{
            background-color: #fdfdfb;
            padding: 0 20px 30px 20px;
        }

        footer p{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="{{env('APP_URL')}}/main/images/Logo.png" alt="">
        <div class="info">
            <div class="name">MJ DEVIGN</div>
            <div class="tag">Digital Development Agency</div>
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
        <section class="container-holder">
            <div class="nav">
                <ul>
                    <li><a href="/account/?id=0"><img src="{{env('APP_URL')}}/images/my-orders.png" alt=""><span style="font-weight: 700">My Orders</span></a>
                    </li>
                    <li><a href="/account/?id=1"><img src="{{env('APP_URL')}}/images/add-ons.png" alt=""><span>Add ons</span></a></li>
                    <li><a href="/account/?id=2"><img src="{{env('APP_URL')}}/images/services.png" alt=""><span>Services</span></a></li>
                    <li><a href="/account/?id=3"><img src="{{env('APP_URL')}}/images/mt-account.png" alt=""><span>My Account</span></a></li>
                </ul>
            </div>
        @foreach ($webformdetails as $webformdetail)
            @foreach ($invoices as $invoice)

            <div class="details">
                <div class="topbar">
                    <div class="left">
                        <p class="one">My Orders</p>
                        <p class="two">Order Details</p>
                    </div>
                    <div class="right">
                        <a class="content-img receipt" href={{url("receipt/".$invoice->id)}}><button  class="btn btn-primary">Receipt</button></a>
                        @if(isset($invoice->image[9]))
                            <a class="content-img delivery" href = {{url("delivery/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
                        @endif
                    </div>
                </div>


                <!--website package-->
                <div id="box" class="website">
                    <div class="box-container">
                        <div class="option s__services default">


                            <div class="services">
                                <div class="dropshipping-package border-bottom">
                                    <div class="title">{{$invoice->type}}</div>
                                    <div class="my-order overflow-controller">
                                        <div class="grid overflow-holder">
                                            <div>Invoice: <b>#{{$invoice->id}}</b></div>
                                            <div>Price: <b>${{$invoice->price}}</b></div>
                                            <div>Due date: <b>{{$invoice->due_date}}</b></div>
                                            <div class="spacer"></div>
                                            <div>Date ordered: <b>{{$invoice->created_at->format('Y-m-d')}}</b></div>
                                            <div>Payment method: <b>{{$invoice->payment}}</b></div>
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                            <div class="spacer"></div>
                                        </div>
                                    </div>
                                </div>

                                <!--Domain Section-->
                                <div class="icon-info">Domain</div>
                                <div class="bg">
                                    @if ($webformdetail->existing_domain)
                                        <div class="store-info">
                                            <div class="title">Existing Domain:</div>
                                            <div class="content input-area">{{$webformdetail->existing_domain}}</div>
                                        </div>
                                        <div class="store-info">
                                            <div class="title">Domain Provider:</div>
                                            <div class="content input-area">{{$webformdetail->domain_provider}}</div>
                                        </div>
                                    @else
                                        <div class="domain-name">
                                            <div class="title">Domain:</div>
                                            <div class="content input-area"><b>{{$webformdetail->domain_name}}</b></div>
                                        </div>
                                    @endif
                                    @if ($webformdetail->hosting)
                                        <div class="store-info">
                                            <div class="title">I have my own hosting:</div>
                                            <div class="content">
                                                <p class="checkbox-area {{$webformdetail->hosting? "checked" : ""}}">{{$webformdetail->hosting? "Yes" : "No"}}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!--website information section-->
                                <div class="icon-info">Website Information</div>
                                <div class="bg">
                                    @if ($webformdetail->web_name)
                                        <div class="store-info">
                                            <div class="title">Name Of Your Business, Organisation Or Idea:</div>
                                            <div class="content input-area">{{$webformdetail->web_name}}</div>
                                        </div>
                                    @endif

                                    <div class="store-info">
                                        <div class="title">Website Logo</div>
                                        @if (is_null($webformdetail->isLogo))
                                            <div class="content input-area">Create one for me</div>
                                        @else
                                            <div class="content">
                                                <div class="list-item">
                                                    @for ($i = 0; $i < sizeof(($logoimage)); $i++)
                                                        @if($logoimage[$i]!="N/A")
                                                            <div class="db-img">
                                                                @if(substr($logoimage[$i],strrpos($logoimage[$i], "."))=='.png' ||
                                                                    substr($logoimage[$i],strrpos($logoimage[$i], "."))=='.jpeg')
                                                                    <img src={{url("/downloads/".substr($logoimage[$i],7))}} alt="">
                                                                @else
                                                                    <img src="/images/files.webp" alt="">
                                                                @endif
                                                                <div class="url">
                                                                    <a class="content-img" href = {{url("/downloads/".substr($logoimage[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    @if ($webformdetail->about_business)
                                        <div class="store-info">
                                            <div class="title">Tell Us About Your Business, Organisation Or Idea:</div>
                                            <div class="content text-area">{{$webformdetail->about_business}}</div>
                                        </div>
                                    @endif
                                    @if ($webformdetail->web_for)
                                        <div class="store-info">
                                            <div class="title">What Will Your Website Be Used For?</div>
                                            <div class="content text-area">{{$webformdetail->web_for}}</div>
                                        </div>
                                    @endif
                                </div>

                                <!--Pages&Content Section-->

                                <!--home page-->
                                <div class="icon-info">Pages & Content</div>
                                <div class="bg">
                                    @if ($pagedataarray['homepagecontent'])
                                        <div class="icon-info alt">Home Page</div>
                                        <div class="store-info">
                                            <div class="title">Text Content:</div>
                                            <div class="content text-area">{{$pagedataarray['homepagecontent']}}</div>
                                        </div>
                                        @if($pagedataarray['homepageimage'])
                                            <div class="store-info">
                                                <div class="title">Upload:</div>
                                                <div class="list-item">
                                                    @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++)
                                                        @if($pagedataarray['homepageimage'][$i] != "N/A")
                                                            <div class="db-img">
                                                                @if(substr($pagedataarray['homepageimage'][$i],strrpos($pagedataarray['homepageimage'][$i], "."))=='.png' ||
                                                                    substr($pagedataarray['homepageimage'][$i],strrpos($pagedataarray['homepageimage'][$i], "."))=='.jpeg')
                                                                    <img src={{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}} alt="">
                                                                @else
                                                                    <img src="/images/files.webp" alt="">
                                                                @endif
                                                                <div class="url">
                                                                    <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        @endif
                                    @endif

                                    @if ($includedata)
                                        <div class="store-info">
                                            <div class="title">Includes on Homepage:</div>
                                            @for ($i = 0; $i < sizeof($includedata); $i++)
                                                <div class="content">
                                                    <p class="checkbox-area checked">{{$includedata[$i]}}</p>
                                                </div>
                                            @endfor
                                        </div>
                                    @endif
                                </div>

                                <!--page2-->
                                <div class="bg">
                                    <div class="icon-info alt">Page 2</div>
                                    <div class="store-info">
                                        <div class="title">Page Type:</div>
                                        <div class="content text-area">{{$pagedataarray['page2title']}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Text Content:</div>
                                        <div class="content text-area">{{$pagedataarray['page2content'] == null ? 'N/A' : $pagedataarray['page2content']}}</div>
                                    </div>
                                    @if($pagedataarray['page2image'])
                                        <div class="store-info">
                                            <div class="title">Upload:</div>
                                            <div class="list-item">
                                                @for ($i = 0; $i < sizeof(($pagedataarray['page2image'])); $i++)
                                                    @if($pagedataarray['page2image'][$i] != "N/A")
                                                        <div class="db-img">
                                                            @if(substr($pagedataarray['page2image'][$i],strrpos($pagedataarray['page2image'][$i], "."))=='.png' ||
                                                                substr($pagedataarray['page2image'][$i],strrpos($pagedataarray['page2image'][$i], "."))=='.jpeg')
                                                                <img src={{url("/downloads/".substr($pagedataarray['page2image'][$i],7))}} alt="">
                                                            @else
                                                                <img src="/images/files.webp" alt="">
                                                            @endif
                                                            <div class="url">
                                                                <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page2image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!--page3-->
                                <div class="bg">
                                    <div class="icon-info alt">Page 3</div>
                                    <div class="store-info">
                                        <div class="title">Page Type:</div>
                                        <div class="content text-area">{{$pagedataarray['page3title']}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Text Content:</div>
                                        <div class="content text-area">{{$pagedataarray['page3content'] == null ? 'N/A' : $pagedataarray['page3content']}}</div>
                                    </div>
                                    @if($pagedataarray['page3image'])
                                        <div class="store-info">
                                            <div class="title">Upload:</div>
                                            <div class="list-item">
                                                @for ($i = 0; $i < sizeof(($pagedataarray['page3image'])); $i++)
                                                    @if($pagedataarray['page3image'][$i] != "N/A")
                                                        <div class="db-img">
                                                            @if(substr($pagedataarray['page3image'][$i],strrpos($pagedataarray['page3image'][$i], "."))=='.png' ||
                                                                substr($pagedataarray['page3image'][$i],strrpos($pagedataarray['page3image'][$i], "."))=='.jpeg')
                                                                <img src={{url("/downloads/".substr($pagedataarray['page3image'][$i],7))}} alt="">
                                                            @else
                                                                <img src="/images/files.webp" alt="">
                                                            @endif
                                                            <div class="url">
                                                                <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page3image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!--page4-->
                                <div class="bg">
                                    <div class="icon-info alt">Page 4</div>
                                    <div class="store-info">
                                        <div class="title">Page Type:</div>
                                        <div class="content text-area">{{$pagedataarray['page4title']}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Text Content:</div>
                                        <div class="content text-area">{{$pagedataarray['page4content'] == null ? 'N/A' : $pagedataarray['page4content']}}</div>
                                    </div>
                                    @if($pagedataarray['page4image'])
                                        <div class="store-info">
                                            <div class="title">Upload:</div>
                                            <div class="list-item">
                                                @for ($i = 0; $i < sizeof(($pagedataarray['page4image'])); $i++)
                                                    @if($pagedataarray['page4image'][$i] != "N/A")
                                                        <div class="db-img">
                                                            @if(substr($pagedataarray['page4image'][$i],strrpos($pagedataarray['page4image'][$i], "."))=='.png' ||
                                                                substr($pagedataarray['page4image'][$i],strrpos($pagedataarray['page4image'][$i], "."))=='.jpeg')
                                                                <img src={{url("/downloads/".substr($pagedataarray['page3image'][$i],7))}} alt="">
                                                            @else
                                                                <img src="/images/files.webp" alt="">
                                                            @endif
                                                            <div class="url">
                                                                <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page4image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!--page5-->
                                <div class="bg">
                                    <div class="icon-info alt">Page 5</div>
                                    <div class="store-info">
                                        <div class="title">Page Type:</div>
                                        <div class="content text-area">{{$pagedataarray['page5title']}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Text Content:</div>
                                        <div class="content text-area">{{$pagedataarray['page5content'] == null ? 'N/A' : $pagedataarray['page5content']}}</div>
                                    </div>
                                    @if($pagedataarray['page5image'])
                                        <div class="store-info">
                                            <div class="title">Upload:</div>
                                            <div class="list-item">
                                                @for ($i = 0; $i < sizeof(($pagedataarray['page5image'])); $i++)
                                                    @if($pagedataarray['page5image'][$i] != "N/A")
                                                        <div class="db-img">
                                                            @if(substr($pagedataarray['page5image'][$i],strrpos($pagedataarray['page5image'][$i], "."))=='.png' ||
                                                                substr($pagedataarray['page5image'][$i],strrpos($pagedataarray['page5image'][$i], "."))=='.jpeg')
                                                                <img src={{url("/downloads/".substr($pagedataarray['page5image'][$i],7))}} alt="">
                                                            @else
                                                                <img src="/images/files.webp" alt="">
                                                            @endif
                                                            <div class="url">
                                                                <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page5image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <hr>

                                <div class="bg">
                                    @if ($featuredata)
                                        <div class="icon-info">Optional Features</div>
                                        <div class="store-info op-features">
                                            @for ($i = 0; $i < sizeof($featuredata); $i++)
                                                <div class="feature">
                                                    <div class="left">
                                                        <img src="/images/{{explode("~",$featuredata[$i])[1]}}" alt="">
                                                        <p class="content">{{explode("~",$featuredata[$i])[0]}}</p>
                                                    </div>
                                                    <div class="right">
                                                        <p class="content">{{explode("~",$featuredata[$i])[0]}}</p>
                                                        <p class="details">{{explode("~",$featuredata[$i])[2]}}</p>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
            
        @foreach ($landingpagedetails as $landingpagedetail)
            @foreach ($invoices as $invoice)

            <div class="details">
                <div class="topbar">
                    <div class="left">
                        <p class="one">My Orders</p>
                        <p class="two">Order Details</p>
                    </div>
                    <div class="right">
                        <a class="content-img receipt" href={{url("receipt/".$invoice->id)}}><button  class="btn btn-primary">Receipt</button></a>
                        @if(isset($invoice->image[9]))
                            <a class="content-img delivery" href = {{url("delivery/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
                        @endif
                    </div>
                </div>

                <!--landingpage package-->
                <div id="box">
                    <div class="box-container">
                        <div class="option s__services default">


                            <div class="services">
                                <div class="dropshipping-package border-bottom">
                                    <div class="title">{{$invoice->type}}</div>
                                    <div class="my-order overflow-controller">
                                        <div class="grid overflow-holder">
                                            <div>Invoice: #{{$invoice->id}}</div>
                                            <div>Price: ${{$invoice->price}}</div>
                                            <div>Price: ${{$invoice->due_date}}</div>
                                            <div class="spacer"></div>
                                            <div>Date ordered: {{$invoice->created_at->format('Y-m-d')}}</div>
                                            <div>Payment method: {{$invoice->payment}}</div>
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                            <div class="spacer"></div>
                                        </div>
                                    </div>
                                </div>
                                @if ($landingpagedetail->existing_domain)
                                    <div class="store-info">
                                        <div class="title">Existing Domain:</div>
                                        <div class="content input-area">{{$landingpagedetail->existing_domain}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Domain Provider:</div>
                                        <div class="content input-area">{{$landingpagedetail->domain_provider}}</div>
                                    </div>
                                @else
                                    <div class="domain-name">
                                        <div class="title">Domain:</div>
                                        <div class="content input-area"><b>{{$landingpagedetail->domain_name}}</b></div>
                                    </div>
                                @endif

                                @if ($landingpagedetail->hosting)
                                    <div class="store-info">
                                        <div class="title">I have my own hosting:</div>
                                        <div class="content">
                                            <p class="checkbox-area {{$landingpagedetail->hosting? "checked" : ""}}">{{$landingpagedetail->hosting? "Yes" : "No"}}</p>
                                        </div>
                                    </div>
                                @endif

                                <!--website information section-->
                                <div class="icon-info">Landing Page Information</div>
                                @if ($landingpagedetail->web_name)
                                <div class="store-info">
                                    <div class="title">Name Of Your Business, Organisation Or Idea:</div>
                                    <div class="content input-area">{{$landingpagedetail->web_name}}</div>
                                </div>
                                @endif

                                <div class="store-info">
                                    <div class="title">Website Logo</div>
                                    @if ($landingpagedetail->isLogo==0)
                                        <div class="content input-area">Create one for me</div>
                                    @else
                                        <div class="content">
                                            <div class="list-item">
                                                @for ($i = 0; $i < sizeof(($logoimage)); $i++)
                                                    @if($logoimage[$i]!="N/A")
                                                        <div class="db-img">
                                                            @if(substr($logoimage[$i],strrpos($logoimage[$i], "."))=='.png' ||
                                                                substr($logoimage[$i],strrpos($logoimage[$i], "."))=='.jpeg')
                                                                <img src={{url("/downloads/".substr($logoimage[$i],7))}} alt="">
                                                            @else
                                                                <img src="/images/files.webp" alt="">
                                                            @endif
                                                            <div class="url">
                                                                <a class="content-img" href = {{url("/downloads/".substr($logoimage[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                @if ($landingpagedetail->about_business)
                                <div class="store-info">
                                    <div class="title">Tell Us About Your Business, Organisation Or Idea:</div>
                                    <div class="content text-area">{{$landingpagedetail->about_business}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->web_for)
                                <div class="store-info">
                                    <div class="title">What Will Your Landing Page Be Used For?</div>
                                    <div class="content text-area">{{$landingpagedetail->web_for}}</div>
                                </div>
                                @endif

                                <div class="icon-info">Landingpage Information</div>
                                <div class="store-info">
                                    <div class="title">Text Content:</div>
                                    <div class="content text-area">{{$pagedataarray['homepagecontent']}}</div>
                                </div>
                                @if($pagedataarray['homepageimage'])
                                    <div class="store-info">
                                    <div class="title">Upload:</div>
                                    <div class="list-item">
                                        @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++)
                                            @if($pagedataarray['homepageimage'][$i] != "N/A")
                                                <div class="db-img">
                                                    @if(substr($pagedataarray['homepageimage'][$i],strrpos($pagedataarray['homepageimage'][$i], "."))=='.png' ||
                                                        substr($pagedataarray['homepageimage'][$i],strrpos($pagedataarray['homepageimage'][$i], "."))=='.jpeg')
                                                        <img src={{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}} alt="">
                                                    @else
                                                        <img src="/images/files.webp" alt="">
                                                    @endif
                                                    <div class="url">
                                                        <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                @endif

                                @if ($includedata)
                                    <div class="store-info">
                                        <div class="title">Includes on Landingpage:</div>
                                        @for ($i = 0; $i < sizeof($includedata); $i++)
                                            <div class="content">
                                                <p class="checkbox-area checked">{{$includedata[$i]}}</p>
                                            </div>
                                        @endfor
                                    </div>
                                @endif

                                @if ($featuredata)
{{--                                    <div class="icon-info">Optional Features</div>--}}
{{--                                    <div class="store-info op-features">--}}
{{--                                        @for ($i = 0; $i < sizeof($featuredata); $i++)--}}
{{--                                            <div class="feature">--}}
{{--                                                <p class="content">{{explode("~",$featuredata[$i])[0]}}</p>--}}
{{--                                                <p class="details">{{explode("~",$featuredata[$i])[2]}}</p>--}}
{{--                                            </div>--}}
{{--                                        @endfor--}}
{{--                                    </div>--}}

                                    <div class="icon-info">Optional Features</div>
                                    <div class="store-info op-features">
                                        @for ($i = 0; $i < sizeof($featuredata); $i++)
                                            <div class="feature">
                                                <div class="left">
                                                    <img src="/images/{{explode("~",$featuredata[$i])[1]}}" alt="">
                                                    <p class="content">{{explode("~",$featuredata[$i])[0]}}</p>
                                                </div>
                                                <div class="right">
                                                    <p class="content">{{explode("~",$featuredata[$i])[0]}}</p>
                                                    <p class="details">{{explode("~",$featuredata[$i])[2]}}</p>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endif

                                @if ($addonsdata)
                                    <div class="icon-info">Add-ons</div>
                                    <div class="store-info op-features">
                                        @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                            <div class="feature">
                                                <p class="content">{{$addonsdata}}</p>
                                            </div>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            @endforeach
            @endforeach

        @foreach ($dropshippingdetails as $dropshippingdetail)
        @foreach ($invoices as $invoice)

        <div class="details">


            <div class="topbar">
                <div class="left">
                    <p class="one">My Orders</p>
                    <p class="two">Order Details</p>
                </div>
                <div class="right">
                    <a class="content-img receipt" href={{$invoice->receipt_url}}><button  class="btn btn-primary">Receipt</button></a>
                    @if(isset($invoice->image[9]))
                        <a class="content-img delivery" href = {{url("delivery/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
                    @endif
                </div>
            </div>
            <!--dropshipping package-->
            <div id="box" class="website">
                <div class="box-container">
                    <div class="option s__services default">


                        <div class="services">
                            <div class="dropshipping-package border-bottom">
                                <div class="title">{{$invoice->type}}</div>
                                <div class="my-order overflow-controller">
                                    <div class="grid overflow-holder">
                                        <div>Invoice: #{{$invoice->id}}</div>
                                        <div>Price: ${{$invoice->price}}</div>
                                        <div>Due date: <b>{{$invoice->due_date}}</b></div>
                                        <div class="spacer"></div>
                                        <div>Date ordered: {{$invoice->created_at->format('Y-m-d')}}</div>
                                        <div>Payment method: {{$invoice->payment}}</div>
                                        <div class="text-normal td-status {{$invoice->status}}" >Status: <span >{{$invoice->status}}</span></div>
                                    </div>
                                </div>
                            </div>

                            <!--Domain Section-->
                            <div class="icon-info">Domain</div>
                            <div class="bg">
                                @if ($dropshippingdetail->existing_domain)
                                    <div class="store-info">
                                        <div class="title">Existing Domain:</div>
                                        <div class="content input-area">{{$dropshippingdetail->existing_domain}}</div>
                                    </div>
                                    <div class="store-info">
                                        <div class="title">Domain Provider:</div>
                                        <div class="content input-area">{{$dropshippingdetail->domain_provider}}</div>
                                    </div>
                                @else
                                    <div class="domain-name">
                                        <div class="title">Domain:</div>
                                        <div class="content input-area"><b>{{$dropshippingdetail->domain_name}}</b></div>
                                    </div>
                                @endif
                                @if ($dropshippingdetail->hosting)
                                    <div class="store-info">
                                        <div class="title">I have my own hosting:</div>
                                        <div class="content">
                                            <p class="checkbox-area {{$dropshippingdetail->hosting ? "checked" : ""}}">{{$dropshippingdetail->hosting? "Yes" : "No"}}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!--Products&Profit-->
                            <div class="icon-info">Products & Profit</div>
                            <div class="bg">
                                <div class="products">
                                    <div class="title">Products:</div>
                                    <div class="overflow-controller">
                                        <div class="grid-container overflow-holder">
                                            <div class="grid heading border-bottom">
                                                <div>Category:</div>
                                                <div>Type:</div>
                                                <div>Number of products:</div>
                                                <div>Profit margin:</div>
                                            </div>

                                            @for ($i = 0; $i < sizeof($productCategory); $i++)
                                                <div class="grid data">
                                                    <div class="categoty">{{$productCategory[$i]}}</div>
                                                    <div class="type">{{$productType[$i]}}</div>
                                                    <div class="quantity"><span>{{$noOfProducts[$i]}}</span></div>
                                                    <div class="profit"><span>{{$profitMargin[$i]}}</span></div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Store Information-->
                            <div class="icon-info">Store Information</div>
                            <div class="bg">
                                @if ($dropshippingdetail->store_name)
                                    <div class="store-info">
                                        <div class="title">Store Name:</div>
                                        <div class="content input-area">{{$dropshippingdetail->store_name}}</div>
                                    </div>
                                @endif

                                @if ($dropshippingdetail->store_description)
                                    <div class="store-info">
                                        <div class="title">Store Description:</div>
                                        <div class="content text-area">{{$dropshippingdetail->store_description}}</div>
                                    </div>
                                @endif

                                @if ($dropshippingdetail->additional_notes)
                                    <div class="store-info">
                                        <div class="title">Additional notes:</div>
                                        <div class="content text-area">{{$dropshippingdetail->additional_notes}}</div>
                                    </div>
                                @endif

                                @if ($image)

                                    <div class="store-info">
                                        <div class="title">Uploads:</div>

                                        <div class="list-item">
                                            @for ($i = 0; $i < sizeof(($image)); $i++)
                                                @if($image[$i]!="N/A")
                                                    <div class="db-img">
                                                        @if(substr($image[$i],strrpos($image[$i], "."))=='.png' ||
                                                            substr($image[$i],strrpos($image[$i], "."))=='.jpeg')
                                                            <img src={{url("/downloads/".substr($image[$i],7))}} alt="">
                                                        @else
                                                            <img src="/images/files.webp" alt="">
                                                        @endif
                                                        <div class="url">
                                                            <a class="content-img" href = {{url("/downloads/".substr($image[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>

                                @endif
                            </div>

                            <!--additional features-->
                            <hr>

                            <div class="bg">
                                @if ($addonsdata)
                                    <div class="icon-info">Optional Features</div>
                                    <div class="store-info op-features">
                                        @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                            <div class="feature">
                                                <div class="left">
                                                    <img src="/images/{{explode("~",$addonsdata[$i])[1]}}" alt="">
                                                    <p class="content">{{explode("~",$addonsdata[$i])[0]}}</p>
                                                </div>
                                                <div class="right">
                                                    <p class="content">{{explode("~",$addonsdata[$i])[0]}}</p>
                                                    <p class="details">{{explode("~",$addonsdata[$i])[2]}}</p>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
             

                </div>
            </div>
        </div>
        @endforeach
        @endforeach

        @if(count($addonsOrderData)>0)
        @foreach ($invoices as $invoice)

            <div class="details">
            @if(isset($invoice->image[9]))
                <a class="content-img" href = {{url("delivery/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
             @endif
             <a class="content-img" href={{url("receipt/".$invoice->id)}}><button  class="btn btn-primary">Receipt</button></a>

                <div id="box">
                    <div class="box-container">
                        <div class="option s__services default">


                            <div class="services">
                                <div class="dropshipping-package border-bottom">
                                    <div class="title">{{$invoice->type}}</div>
                                    <div class="my-order overflow-controller">
                                        <div class="grid overflow-holder">
                                            <div>Invoice: #{{$invoice->id}}</div>
                                            <div>Price: ${{$invoice->price}}</div>
                                            <div>Due date: <b>{{$invoice->due_date}}</b></div>

                                            <div class="spacer"></div>
                                            <div>Date ordered: {{$invoice->created_at->format('Y-m-d')}}</div>
                                            <div>Payment method: {{$invoice->payment}}</div>
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span >{{$invoice->status}}</span></div>
                                        </div>
                                    </div>
                                </div>

                              
                                @for($i=0;$i<count($addonsOrderData['types']);$i++)
                                    <div class="domain-name">
                                        <div class="title">Type:</div>
                                        <div class="content">{{$addonsOrderData['types'][$i]}}</div>
                                    </div>
                               
                               
                                    <div class="store-name">
                                        <div class="title">Description :</div>
                                        <div class="content">{{$addonsOrderData['descriptions'][$i]}}</div>
                                    </div>

                                    <hr>
                                
                                @endfor

                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            @endforeach
            @endif



        </section>
    </section>

</main>

<footer>
    <div class="section-container">
        <div class="col one">
            <div class="part1">
                <img src="{{env('APP_URL')}}/main/images/diamond.png" alt="">
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

<script src="/js/jquery-3.5.1.js"></script>
<script src="/js/responsiveness.js"></script>
{{--<script src="/js/nav-controller.js"></script>--}}
<script src="/js/account-settings.js"></script>

</body>
</html>