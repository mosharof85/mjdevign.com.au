
<!-- including login and register modals -->
@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="/css/clientportal/style.css">
<link rel="stylesheet" href="/css/clientportal/services.css">
    
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
                                    <div class="title">Logo Image</div>
                                        @endfor -->
                                        @for($i = 0; $i < sizeof(($logoimage)); $i++) 
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
                                @if ($featuredata)
                                    <div class="title">Features:</div>
                                    @for ($i = 0; $i < sizeof($featuredata); $i++)
                                    <div class="content">{{$featuredata[$i]}}</div>
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