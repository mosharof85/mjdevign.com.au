
<!-- including login and register modals -->
@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="/css/clientportal/style.css">
<link rel="stylesheet" href="/css/clientportal/services-original.css">
    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>   
<main>
<section class="sub-main">

        
    <section class="container">    
    @foreach ($webformdetails as $webformdetail)
            @foreach ($invoices as $invoice)
            <form id="" method="POST" action="{{url('/admin/upload/'.$invoice->id)}}" enctype="multipart/form-data">
            @csrf 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
            Upload
            </button>

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="uploadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadLabel">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p>Zip/rar supported too.</p><br>
            <input  class="browse image" name="image[]" files=true type="file"  required >
            <br>
            <input  class="form-control" name="filename"  type="text" placeholder="Enter Filename." required >
            <br>
            <input  class="form-control" name="description"  type="text" placeholder="Enter Description." required >

                                                    
        </div>
        <div class="modal-footer">
            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </div>
  </div>
</div>  
            <div class="details">
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
                                            <div>Due date: <b>{{$invoice->due_date}}</b></div>
                                            <div class="spacer"></div>
                                            <div>Date ordered: <b>{{$invoice->created_at->format('Y-m-d')}}</b></div>
                                            <div>Payment method: <b>{{$invoice->payment}}</b></div>
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                            <div class="spacer"></div>
                                            <div>Transaction ID: <b>{{$invoice->transaction_id}}</b></div>
                                            <a class="status" href={{$invoice->receipt_url}}>Receipt Url</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Domain Section-->
                                <div class="icon-info">Domain</div>
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


                            <!--website information section-->
                                <div class="icon-info">Website Information</div>
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


                            <!--home page-->
                                <div class="icon-info">Pages & Content</div>
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

                            <!--page2-->
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

                            <!--page3-->
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

                            <!--page4-->
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

                            <!--page5-->
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
                                <hr>

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

                                <div class="store-info">
                                @if ($addonsdata)
                                    <div class="title">Add Ons:</div>
                                    @for ($i = 0; $i < sizeof($addonsdata); $i++)
                                    <li class="content">{{$addonsdata[$i]}}</li>
                                    @endfor
                                @endif
                                </div>

                                <div class="store-info">
                                <div class="title">Admin Uploads:</div>
                                @foreach ($invoices as $invoice)
                                @if (isset($uploadimage))
                                @for ($i = 0; $i < sizeof(($uploadimage)); $i++)
                                    @if($uploadimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($uploadimage[$i],7))}}><span class="fname"> {{$filename[$i]}}</span></a>

                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                    @endif
                                @endforeach

                                </div>
                                
                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            </form>
            @endforeach
            @endforeach
            
            @foreach ($landingpagedetails as $landingpagedetail)
            @foreach ($invoices as $invoice)
            <form id="" method="POST" action="{{url('/admin/upload/'.$invoice->id)}}" enctype="multipart/form-data">
                @csrf 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
            Upload
            </button>

<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="uploadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uploadLabel">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p>Zip/rar supported too.</p><br>
            <input  class="browse image" name="image[]" files=true type="file"  required >
            <br>
            <input  class="form-control" name="filename"  type="text" placeholder="Enter Filename." required >
            <br>
            <input  class="form-control" name="description"  type="text" placeholder="Enter Description." required >

                                                    
        </div>
        <div class="modal-footer">
            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </div>
  </div>
</div>  
            <div class="details">
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
                                            <div>Transaction ID: <b>{{$invoice->transaction_id}}</b></div>
                                            <a class="status" href={{$invoice->receipt_url}}>Receipt Url</a>
                                    
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
                               
          
                                <div class="store-info">
                                <div class="title">Admin Uploads:</div>
                                @foreach ($invoices as $invoice)
                                @if (isset($uploadimage))
                                @for ($i = 0; $i < sizeof(($uploadimage)); $i++) 
                                    @if($uploadimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($uploadimage[$i],7))}}><span class="fname"> {{$filename[$i]}}</span></a>
                                            
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                    @endif
                                @endforeach
                                    
                                </div>
                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            </form>
            @endforeach
            @endforeach

            
         

            @foreach ($dropshippingdetails as $dropshippingdetail)
        @foreach ($invoices as $invoice)
        <form id="" method="POST" action="{{url('/admin/upload/'.$invoice->id)}}" enctype="multipart/form-data">
        @csrf 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
        Upload
        </button>

        <!-- Modal -->
        <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="uploadLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadLabel">Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Zip/rar supported too.</p><br>
                    <input  class="browse image" name="image[]" files=true type="file"  required >
                    <br>
                    <input  class="form-control" name="filename"  type="text" placeholder="Enter Filename." required >
                    <br>
                    <input  class="form-control" name="description"  type="text" placeholder="Enter Description." required >

                                                            
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
        </div>  
        <div class="details">
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
                                        <div class="spacer"></div>
                                        <div>Transaction ID: <b>{{$invoice->transaction_id}}</b></div>
                                        <a class="status" href={{$invoice->receipt_url}}>Receipt Url</a>
                                    
                                    </div>
                                </div>
                            </div>
                            <!--Domain Section-->
                            <div class="icon-info">Domain</div>
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

                        <!--Products&Profit-->
                            <div class="icon-info">Products & Profit</div>
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


                            <!--Store Information-->
                            <div class="icon-info">Store Information</div>
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

                        <!--additional features-->
                            <hr>

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




                            <div class="store-info">
                                <div class="title">Admin Uploads:</div>
                                @foreach ($invoices as $invoice)
                                @if (isset($uploadimage))
                                @for ($i = 0; $i < sizeof(($uploadimage)); $i++)
                                    @if($uploadimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($uploadimage[$i],7))}}><span class="fname"> {{$filename[$i]}}</span></a>

                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
             

                </div>
            </div>
        </div>
        </form>
        @endforeach
        @endforeach

        
        @if(count($addonsOrderData)>0)
        @foreach ($invoices as $invoice)
        <form id="" method="POST" action="{{url('/admin/upload/'.$invoice->id)}}" enctype="multipart/form-data">
        @csrf 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
        Upload
        </button>

        <!-- Modal -->
        <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="uploadLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadLabel">Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Zip/rar supported too.</p><br>
                    <input  class="browse image" name="image[]" files=true type="file"  required >
                    <br>
                    <input  class="form-control" name="filename"  type="text" placeholder="Enter Filename." required >
                    <br>
                    <input  class="form-control" name="description"  type="text" placeholder="Enter Description." required >
                                            
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
        </div>  
            <div class="details">
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
                                            <div class="text-normal td-status {{$invoice->status}}" >Status: <span>{{$invoice->status}}</span></div>
                                            <div class="spacer"></div>
                                            <div>Transaction ID: <b>{{$invoice->transaction_id}}</b></div>
                                            <a class="status" href={{$invoice->receipt_url}}>Receipt Url</a>
                                    
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
                                
                                <div class="store-info">
                                <div class="title">Admin Uploads:</div>
                                @foreach ($invoices as $invoice)
                                @if (isset($uploadimage))
                                @for ($i = 0; $i < sizeof(($uploadimage)); $i++) 
                                    @if($uploadimage[$i]!="N/A")

                                    <div class="list-item">
                                        <img src="/images/files.webp" alt="">
                                        <div class="info">
                                        <a class="content-img" href = {{url("/downloads/".substr($uploadimage[$i],7))}}><span class="fname"> {{$filename[$i]}}</span></a>
                                            
                                        </div>
                                    </div>
                                    @endif
                                    @endfor
                                    @endif

                                @endforeach
                                    
                                </div>

                            </div>
                        </div>
                 

                    </div>
                </div>
            </div>
            </form>
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
@endsection