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
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/my-orders.png" alt=""><span style="font-weight: 700">My Orders</span></a>
                    </li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/add-ons.png" alt=""><span>Add ons</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/messages.png" alt=""><span>Messages</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/services.png" alt=""><span>Services</span></a></li>
                    <li><a href="{{route('client.portal')}}"><img src="{{env('APP_URL')}}/images/mt-account.png" alt=""><span>My Account</span></a></li>
                </ul>
            </div>
            @foreach ($webformdetails as $webformdetail)
            @foreach ($invoices as $invoice)

            <div class="details">
            @if(isset($invoice->image[9]))
  
<!--            <a class="content-img" href = {{url("download/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
 -->            
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
                                            <div>Invoice: <b>#{{$invoice->id}}</b></div>
                                            <div>Price: <b>${{$invoice->price}}</b></div>
                                            <div class="spacer"></div>
                                            <div>Date ordered: <b>{{$invoice->created_at->format('Y-m-d')}}</b></div>
                                            <div>Payment method: <b>{{$invoice->payment}}</b></div>
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                            <div class="spacer"></div>
                                            <div>Due date: <b>{{$invoice->due_date}}</b></div>

                                         
                                        </div>
                                    </div>
                                </div>
                                @if ($webformdetail->domain_name)
                                <div class="domain-name">
                                    <div class="title">Domain Name:</div>
                                        <div class="content"><b>{{$webformdetail->domain_name}}</b></div>
                                    </div>
                                @endif
                                @if ($webformdetail->existing_domain)
                                    <div class="store-name">
                                        <div class="title">Existing Domain:</div>
                                        <div class="content">{{$webformdetail->existing_domain}}</div>
                                    </div>
                                @endif
                                @if ($webformdetail->domain_provider)
                                    <div class="store-name">
                                        <div class="title">Domain Provider:</div>
                                        <div class="content">{{$webformdetail->domain_provider}}</div>
                                    </div>
                                @endif
                                @if ($webformdetail->hosting)
                                    <div class="store-info">
                                        <div class="title">Hosting needed?</div>
                                        <div class="content">{{$webformdetail->hosting? "Yes" : "No"}}</div>
                                    </div>
                                @endif
                                @if ($webformdetail->web_name)
                                    <div class="store-info">
                                        <div class="title">Website Name:</div>
                                        <div class="content">{{$webformdetail->web_name}}</div>
                                    </div>
                                @endif
                                <div class="store-info">
                                    <div class="title">Logo required?</div>
                                    <div class="content">
                                        @if ($webformdetail->isLogo)
                                            <div class="content">Yes</div>
                                        @else
                                            <div class="content">No</div>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="store-info">
                                    <!-- @for ($i = 0; $i < sizeof(($logoimage)); $i++) 
                                        @if($logoimage[$i]!="N/A")
                                            <div class="title">Logo Image</div>

                                            <div class="content">
                                                <img class="content-img" src = {{url("/images/uploads/".$logoimage[$i])}}>
                                            </div>
                                        @endif
                                            
                                    @endfor -->
                                    @for ($i = 0; $i < sizeof(($logoimage)); $i++) 
                                    @if($logoimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($logoimage[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                        
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                </div>                               
                                @if ($webformdetail->about_business)
                                    <div class="store-info">
                                        <div class="title">About:</div>
                                        <div class="content">{{$webformdetail->about_business}}</div>
                                    </div>
                                @endif
                                @if ($webformdetail->web_for)
                                    <div class="store-info">
                                        <div class="title">Website For:</div>
                                        <div class="content">{{$webformdetail->web_for}}</div>
                                    </div>
                                @endif
                                @if ($pagedataarray['homepagecontent'])
                                <div class="store-info">
                                    <div class="title">Home Page:</div>
                                    <div class="content"><b>Content:</b> {{$pagedataarray['homepagecontent']}}</div>
                                    @if($pagedataarray['homepagecontent'])
                                        Picture: 
                                        @endif
                                    <!-- @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++) 
                                        <div class="content">
                                            @if($pagedataarray['homepageimage'][$i] != "N/A")
                                                <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['homepageimage'][$i])}}>
                                            @endif
                                        </div>
                                    @endfor -->
                                    @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++)
                                        @if($pagedataarray['homepageimage'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                </div>
                                @endif
                                <div class="store-info">
                                @if ($includedata)
                                    <div class="title">Includes on Homepage:</div>
                                    @for ($i = 0; $i < sizeof($includedata); $i++)
                                    <li class="content">{{$includedata[$i]}}</li>
                                    @endfor
                                @endif
                                </div>
                                @if ($pagedataarray['page2content'])
                                    <div class="store-info">
                                        <div class="title">Page2:</div>
                                        <div class="content"><b>Content:</b> {{$pagedataarray['page2content']}}</div>
                                        @if($pagedataarray['page2image'])
                                        Picture: 
                                        @endif
                                        <!-- @for ($i = 0; $i < sizeof(($pagedataarray['page2image'])); $i++) 
                                            <div class="content">
                                                @if($pagedataarray['page2image'][$i] != "N/A")
                                                    <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['page2image'][$i])}}>
                                                @endif
                                            </div>
                                        @endfor -->

                                        @for ($i = 0; $i < sizeof(($pagedataarray['page2image'])); $i++)
                                        @if($pagedataarray['page2image'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page2image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                @endif
                                @if ($pagedataarray['page3content'])
                                    <div class="store-info">
                                        <div class="title">Page3:</div>
                                        <div class="content"><b>Content:</b> {{$pagedataarray['page3content']}}</div>
                                        @if($pagedataarray['page3image'])
                                        Picture: 
                                        @endif
                                        <!-- @for ($i = 0; $i < sizeof(($pagedataarray['page3image'])); $i++) 
                                            <div class="content">
                                            @if($pagedataarray['page3image'][$i] != "N/A")
                                                <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['page3image'][$i])}}>
                                            @endif
                                            </div>
                                        @endfor
 -->
                                        @for ($i = 0; $i < sizeof(($pagedataarray['page3image'])); $i++)
                                        @if($pagedataarray['page3image'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page3image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                @endif
                                @if ($pagedataarray['page4content'])
                                    <div class="store-info">
                                        <div class="title">Page4:</div>
                                        <div class="content"><b>Content:</b> {{$pagedataarray['page4content']}}</div>
                                        @if($pagedataarray['page4image'])
                                        Picture: 
                                        @endif
                                        <!-- @for ($i = 0; $i < sizeof(($pagedataarray['page4image'])); $i++) 
                                            <div class="content"> 
                                                @if($pagedataarray['page4image'][$i] != "N/A")
                                                    <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['page4image'][$i])}}>
                                                @endif
                                            </div>
                                        @endfor  -->  
                                        
                                        @for ($i = 0; $i < sizeof(($pagedataarray['page4image'])); $i++)
                                        @if($pagedataarray['page4image'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page4image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor 
                                    </div>
                                @endif
                                @if ($pagedataarray['page5content'])
                                    <div class="store-info">
                                        <div class="title">Page5:</div>
                                        <div class="content"><b>Content:</b> {{$pagedataarray['page5content']}}</div>
                                        @if($pagedataarray['page5image'])
                                        Picture: 
                                        @endif
                                        <!-- @for ($i = 0; $i < sizeof(($pagedataarray['page5image'])); $i++) 
                                            <div class="content">
                                                @if($pagedataarray['page5image'][$i] != "N/A")
                                                    <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['page5image'][$i])}}>
                                                @endif        
                                            </div>
                                        @endfor -->

                                        @for ($i = 0; $i < sizeof(($pagedataarray['page5image'])); $i++)
                                        @if($pagedataarray['page5image'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['page5image'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                @endif
                                <hr>
                                <div class="store-info">
                                @if ($featuredata)
                                    <div class="title">Features:</div>
                                    @for ($i = 0; $i < sizeof($featuredata); $i++)
                                    <li class="content">{{$featuredata[$i]}}</li>
                                    @endfor
                                @endif
                                </div>
                                <div class="store-info">
                                @if ($addonsdata)
                                    <div class="title">Add Ons:</div>
                                    @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                    <li class="content">{{$addonsdata[$i]}}</li>
                                    @endfor
                                @endif
                                </div>
                                <div class="store-info">
                                    <div class="uploads">
                                        <div class="title">Upload:</div>
                                    </div>
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
            @if(isset($invoice->image[9]))
            <!--            <a class="content-img" href = {{url("download/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
 -->            
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
                                            <div class="spacer"></div>
                                            <div>Date ordered: {{$invoice->created_at->format('Y-m-d')}}</div>
                                            <div>Payment method: {{$invoice->payment}}</div>
                                            <div class="spacer"></div>
                                            <div>Due date: <b>{{$invoice->due_date}}</b></div>


                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                        </div>
                                    </div>
                                </div>
                                @if ($landingpagedetail->domain_name)
                                <div class="domain-name">
                                    <div class="title">Domain Name:</div>
                                    <div class="content">{{$landingpagedetail->domain_name}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->existing_domain)
                                <div class="store-name">
                                    <div class="title">Existing Domain:</div>
                                    <div class="content">{{$landingpagedetail->existing_domain}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->domain_provider)
                                <div class="store-name">
                                    <div class="title">Domain Provider:</div>
                                    <div class="content">{{$landingpagedetail->domain_provider}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->hosting)
                                <div class="store-info">
                                    <div class="title">Hosting needed?</div>
                                    <div class="content">{{$landingpagedetail->hosting? "Yes" : "No"}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->web_name)
                                <div class="store-info">
                                    <div class="title">Website Name:</div>
                                    <div class="content">{{$landingpagedetail->web_name}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->isLogo)
                                <div class="store-info">
                                    <div class="title">Logo required?</div>
                                    <div class="content">
                                        @if ($landingpagedetail->isLogo)
                                            <div class="content">Yes</div>
                                        @else
                                            <div class="content">No</div>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                <div class="store-info">
                                    
                                    <!-- @for ($i = 0; $i < sizeof(($logoimage)); $i++) 
                                    @if($logoimage[$i]!="N/A")
                                    <div class="title">Logo Image</div>

                                    <div class="content">
                                                <img class="content-img" src = {{url("/images/uploads/".$logoimage[$i])}}>
                                            </div>
                                    @endif
                                            
                                        @endfor -->
                                        @for($i = 0; $i < sizeof(($logoimage)); $i++) 
                                        @if($logoimage[$i]!="N/A")
                                        <div class="title">Logo Image</div>
                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($logoimage[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                </div>
                                
                                @if ($landingpagedetail->about_business)
                                <div class="store-info">
                                    <div class="title">About:</div>
                                    <div class="content">{{$landingpagedetail->about_business}}</div>
                                </div>
                                @endif
                                @if ($landingpagedetail->web_for)
                                <div class="store-info">
                                    <div class="title">Website For:</div>
                                    <div class="content">{{$landingpagedetail->web_for}}</div>
                                </div>
                                @endif
                                <div class="store-info">
                                    <div class="title">Home Page:</div>
                                    <div class="content">Content: {{$pagedataarray['homepagecontent']}}</div>
                                    
                                        Picture:
                                        <!-- @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++) 
                                        @if($pagedataarray['homepageimage'][$i] != "N/A")
                                            <div class="content">
                                                <img class="content-img" src = {{url("/images/uploads/".$pagedataarray['homepageimage'][$i])}}>
                                            </div>
                                            @endif
                                        @endfor  -->

                                        @for ($i = 0; $i < sizeof(($pagedataarray['homepageimage'])); $i++)
                                        @if($pagedataarray['homepageimage'][$i] != "N/A")

                                        <div class="list-item">
                                            <img src="/images/files.webp" alt="">
                                            <div class="info">
                                            <a class="content-img" href = {{url("/downloads/".substr($pagedataarray['homepageimage'][$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                            
                                            </div>
                                        </div>
                                        @endif
                                        @endfor
                                        
                                    
                                </div>
                                <div class="store-info">
                                @if ($features)
                                    <div class="title">Features:</div>
                                    @for ($i = 0; $i < sizeof($features); $i++)
                                    <div class="content">{{$features[$i]->featurename}}</div>
                                    @endfor
                                @endif
                                </div>
                                <div class="store-info">
                                @if ($includedata)
                                    <div class="title">Includes:</div>
                                    @for ($i = 0; $i < sizeof($includedata); $i++)
                                    <div class="content">{{$includedata[$i]}}</div>
                                    @endfor
                                @endif
                                </div>
                                <div class="store-info">
                                @if ($addonsdata)
                                    <div class="title">Add Ons:</div>
                                    @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                    <div class="content">{{$addonsdata[$i]}}</div>
                                    @endfor
                                @endif
                                </div>
                               
          
                                <div class="upload">
                                    <div class="title">Upload:</div>
                                </div>
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
        @if(isset($invoice->image[9]))
        <!--            <a class="content-img" href = {{url("download/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
 -->            
                <a class="content-img" href = {{url("delivery/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>

         @endif
         <a class="content-img" href={{$invoice->receipt_url}}><button  class="btn btn-primary">Receipt</button></a>

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
                            @if ($dropshippingdetail->domain_name)
                            <div class="domain-name">
                                <div class="title">Domain Name:</div>
                                <div class="content">{{$dropshippingdetail->domain_name}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->existing_domain)
                            <div class="store-name">
                                <div class="title">Existing Domain:</div>
                                <div class="content">{{$dropshippingdetail->existing_domain}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->domain_provider)
                            <div class="store-name">
                                <div class="title">Domain Provider:</div>
                                <div class="content">{{$dropshippingdetail->domain_provider}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->hosting)
                            <div class="store-info">
                                <div class="title">Hosting needed?</div>
                                <div class="content">{{$dropshippingdetail->hosting? "Yes" : "No"}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->web_name)
                            <div class="store-info">
                                <div class="title">Website Name:</div>
                                <div class="content">{{$dropshippingdetail->web_name}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->isLogo)
                            <div class="store-info">
                                <div class="title">Logo required?</div>
                                <div class="content">{{$dropshippingdetail->isLogo}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->about_business)
                            <div class="store-info">
                                <div class="title">About:</div>
                                <div class="content">{{$dropshippingdetail->about_business}}</div>
                            </div>
                            @endif
                                @if ($dropshippingdetail->web_for)
                            <div class="store-info">
                                <div class="title">Website For:</div>
                                <div class="content">{{$dropshippingdetail->web_for}}</div>
                            </div>
                            @endif
                            <div class="store-info">
                            @if ($addonsdata)
                                <div class="title">Add Ons:</div>
                                @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                <div class="content">{{$addonsdata[$i]}}</div>
                                @endfor
                            @endif
                            
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
                            <div class="store-info">
                                <div class="title">Uploads:</div>
                                
                                @for ($i = 0; $i < sizeof(($image)); $i++) 
                                    @if($image[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($image[$i],7))}}><span class="fname"> Upload {{$i+1}}</a>
                                        
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
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
            <!--<a class="content-img" href = {{url("download/".$invoice->id)}}><button  class="btn btn-primary">Delivery</button></a>
 -->            
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

<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/responsiveness.js"></script>
<script src="./js/nav-controller.js"></script>
<script src="./js/account-settings.js"></script>

</body>
</html>