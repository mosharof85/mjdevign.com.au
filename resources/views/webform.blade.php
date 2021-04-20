
@extends('layouts.web')


@section('content')
<!-- content section -->
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

<form id="webform" method="POST" action="{{url('/webform/store')}}" enctype="multipart/form-data">
@csrf
<div class="content">
    <div class="col1">
        <div class="colTop">
            <div class="logo-image_1">
                <img src={{"/images/web-development.png"}} alt="drop">
                <div class="form-info">
                    <p class="form-title"><b>Website Development Package</b></p>
                    @include('modals.loginmodal')
                </div>
            </div>
            <div class="d-flex">
                <a href="#">

                </a>
            </div>
        </div>


        <div class="stepsMain">

            @include('components.chooseDomain')

            <div class="stepActive" id = "webform">
                <div class="activeTop">
                    <h6 class="sBold">2.</h6>
                    <div class="activeImg">
                        <img src={{"/images/report.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">

                            STEP 2
                        </p>
                        <p class="slight">
                            Website Details
                        </p>
                    </div>
                </div>
                <div class="bodyContainer">
                    <div class="activeBody">

                        <div class="category">
                            <!--  <div class="heading">
                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="43.5 62 113 76.001"
                                        viewBox="43.5 62 113 76.001" height="200" width="200"
                                        xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                                        <g>
                                            <path
                                                d="M153.128 131.287H127.49c.007-.065.021-.129.021-.196V86.632c0-.061-.013-2.362-.019-2.421l-3.872 1.901v44.979c0 .067.013.131.021.196h-14.004c.007-.062.02-.122.02-.185V92.908l-3.89 1.91v36.283c0 .064.013.123.02.185H91.802V101.28l-.653.32a3.377 3.377 0 0 1-3.237-.146v29.833H72.599V95.213l-3.89 2.222v33.852H50.245v-22.324l.554-1.235.226-2.402.104-3.283-.883-.82V65.357c0-1.854-1.51-3.357-3.373-3.357S43.5 63.503 43.5 65.357v69.287a3.365 3.365 0 0 0 3.373 3.357h106.255c1.863 0 3.372-1.503 3.372-3.357s-1.51-3.357-3.372-3.357z"
                                                fill="#363535" data-color="1" />
                                            <path
                                                d="M146.656 72.912a3.373 3.373 0 0 0-2.5-1.727l-16.769-2.327a3.374 3.374 0 0 0-3.25 1.43 3.342 3.342 0 0 0-.158 3.534l3.029 5.383-33.93 16.66.119-13.345a3.352 3.352 0 0 0-1.669-2.926 3.383 3.383 0 0 0-3.382-.014l-37.901 21.644v7.74L68.709 98.42l3.89-2.222L86.4 88.316l-.115 12.942a3.352 3.352 0 0 0 1.579 2.872c.015.01.033.013.048.022a3.377 3.377 0 0 0 3.237.146l.653-.32 13.964-6.856 3.89-1.91 13.964-6.856 3.872-1.901 2.817-1.383 3.38 6.006a3.374 3.374 0 0 0 3.062 1.714 3.374 3.374 0 0 0 2.932-1.925l7.06-14.927a3.35 3.35 0 0 0-.087-3.028zm-10.286 9.194l-.005-.009.012-.006-.007.015z"
                                                fill="#BAD2FF" data-color="2" />
                                        </g>
                                    </svg>

                                    <br />

                                </div>---->
                            <h2 class="websites-info ">
                                Website Information
                            </h2>
                            <div class="container-fluid">
                                <div class="sec-space">


                                    <div class="form-sec">
                                        <div class="names">
                                            <p class="busniess">
                                                Name Of Your Business, Organisation Or Idea:

                                            </p>

                                            <label for="names" value="No - Create one for me (Free)"><b></b></label>
                                            <div class="width_manage">
                                                <input  type="text" placeholder="Website Name" name="businessName" id="name">
                                            </div>

                                        </div>
                                        @include('components.logo')



                                        </div>


                                        <div class="names">
                                            <p class="busniesss">
                                                Tell Us About Your Business, Organisation Or Idea:
                                            </p>

                                            <label for="name" value="No - Create one for me (Free)"><b></b></label>

                                            <textarea  id="name" class="_1qIig has-custom-focus" name="aboutBusiness" rows="4" cols="113" placeholder="Help us tailor our design and development approach by providing information about your business, organisation or idea."></textarea>
                                        </div>
                                        <div class="names">
                                            <p class="busniess">
                                                What Will Your Website Be Used For?


                                            </p>

                                            <label for="name" value="No - Create one for me (Free)"><b></b></label>

                                            <textarea  id="name" class="_1qIig has-custom-focus" name="webUsedFor" rows="4" cols="113" placeholder="Tell us what you want to achieve from your website. For example: to sell products, create a blog, take online bookings, provide businss information, promotion."></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="nextBtn">
                        <a style="margin-right: 5px;" href="./page2.html" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>
                        <a href="./page3.html" class="next_action">
                            <button class="button">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="stepActive" id = "webform">
                <div class="activeTop">
                    <h6 class="sBold">3.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step3Head.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 3
                        </p>
                        <p class="slight head">
                            Website Pages &amp; Content
                        </p>
                    </div>
                </div>
                <div class="bodyContainer">
                    <div class="step3">

                        <p class="sBold homes">
                            <span class="page1"> Page 1.</span><span class="pageshome"> Home Page</span>
                        </p>
                    </div>
                    <div class="step3 bg-gray border-bottom2">

                        <!-- <form action="" class="form"> -->
                            <div class="bg-gray border-bottom2">
                                <div class="width">

                                    <div class="activeBody no text-cont">
                                        <div class="width-50">
                                            <p class="bold mt-2 mt-2s">
                                                Text Content:
                                            </p>
                                            <textarea  id="text-content" name="textContent" rows="6" cols="50" placeholder="Write what text content and any other information you would like displayed on your home page. Alternitively, we can professionally write the content for all of your pages with our content writing add on." class="text-place"></textarea>
                                        </div>
                                        <div class="width-50 medias">
                                            <p class="bold mt-2 uploads">Upload Media:</p>
                                            <span class="media">Upload any media such as images, videos or ideas
                                            that you would like included on this page. Alternatively, we
                                            will research and source content based on the
                                            Informationormationormationon you have provided.</span><br>
                                            <p>You can select multiple files.</p><br>
                                            <!-- <label for="image"  class="browse image">
                                                BROWSE
                                            </label> -->
                                            <input   class="browse image" name="image[]" type="file" files=true  multiple>

                                        </div>

                                    </div>
                                </div>

                                @include('components.includePages')

                            <!-- dropdown page 2 -->
                            <div class="dropdown-view bors border-bottom">
                                <!-- start dropdown -->
                                <div class="dropdown d_for_step3">
                                    <label for="cars" class="page1">Page 2.</label>
                                    <select class="pagetypes form-control col-4"  page-no="2" name="page_2[pageType]" id="lable-page-p2" onchange="toggledropdown(this)">
                                        <option  value="hide">Select option</option>
                                        @foreach ($pagetypes as $pagetype)
                                            <option price = "{{$pagetype->price == null ? 0.00 : $pagetype->price}}" description="{{$pagetype->description}}" value="{{$pagetype->pagetypes}}">
                                                {{$pagetype->pagetypes}} @if ($pagetype->price != null) - ${{$pagetype->price}} @endif
                                            </option>
                                        @endforeach
                                        <option price = "0" value="Leave blank for now">Leave blank for now
                                        </option>
                                        <option price = "0" value="Not sure? Let us decide for you">Not sure?
                                            Let us decide for you</option>
                                    </select>
                                    <div class="pageTypeCheckbox table_on-staep_3">
                                        <input type="checkbox" id="page_2[checkbox]" name="page_2[checkbox]">
                                        <label for="page_2[checkbox]"> Note sure? Leave it to us.</label><br>
                                    </div>
                                </div>
                                <!--page dropdown -->
                                <div class="page-type-dropdown dropdown-content">
                                    <div class="prices-portion">
                                        <span class="title"></span>
                                        <span class="description"></span>
                                        <a href="#">Remove this feature</a>
                                    </div>
                                    <div class="step3 bg-gray">
                                        <div class="bg-gray">
                                            <div class="width borss">
                                                <div class="activeBody text-cont">
                                                    <div class="width-50">
                                                        <p class="bold mt-2 mt-2s">
                                                            Text Content:
                                                        </p>
                                                        <textarea rows="6" cols="50" name="page_2" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                    </div>
                                                    <div class="width-50 medias">
                                                        <p class="bold mt-2 uploads">Upload Media:</p>
                                                        <span class="media">
                                                            Upload any media such as images, videos or ideas
                                                            that you would like included on this page.
                                                            Alternatively, we will research and source content
                                                            based on the Informationormationormationon you have
                                                            provided.
                                                        </span>
                                                        <p>You can select multiple files.</p><br>
                                                        <!-- <label for="image2"  class="browse image">
                                                            BROWSE
                                                        </label> -->
                                                        <input  class="browse image" name="page2Image" files=true type="file"  multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end dropdown -->

                            <!-- dropdown page 3 -->
                            <div class="dropdown-view bors border-bottom">
                                <!-- start dropdown -->
                                <div class="dropdown d_for_step3">
                                    <label for="cars" class="page1">Page 3.</label>
                                    <select class="pagetypes form-control col-4" page-no="3" name="page_3[pageType]" id="lable-page-p3" onchange="toggledropdown(this)">
                                        <option  value="hide">Select option</option>
                                        @foreach ($pagetypes as $pagetype)
                                            <option price = "{{$pagetype->price == null ? 0.00 : $pagetype->price}}" description="{{$pagetype->description}}" value="{{$pagetype->pagetypes}}">
                                                {{$pagetype->pagetypes}} @if ($pagetype->price != null) - ${{$pagetype->price}} @endif
                                            </option>
                                        @endforeach
                                        <option price = "0" value="Leave blank for now">Leave blank for now
                                        </option>
                                        <option price = "0" value="Not sure? Let us decide for you">Not sure?
                                            Let us decide for you</option>
                                    </select>
                                    <div class="pageTypeCheckbox table_on-staep_3">
                                        <input type="checkbox" id="page_3[checkbox]" name="page_3[checkbox]">
                                        <label for="page_3[checkbox]"> Note sure? Leave it to us.</label><br>
                                    </div>
                                </div>
                                <!--page dropdown -->
                                <div class="page-type-dropdown dropdown-content">
                                    <div class="prices-portion">
                                        <span class="title"></span>
                                        <span class="description"></span>
                                        <a href="#">Remove this feature</a>
                                    </div>
                                    <div class="step3 bg-gray">
                                        <div class="bg-gray">
                                            <div class="width borss">
                                                <div class="activeBody text-cont">
                                                    <div class="width-50">
                                                        <p class="bold mt-2 mt-2s">
                                                            Text Content:
                                                        </p>
                                                        <textarea rows="6" cols="50" name="page_3" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                    </div>
                                                    <div class="width-50 medias">
                                                        <p class="bold mt-2 uploads">Upload Media:</p>
                                                        <span class="media">
                                                        Upload any media such as images, videos or ideas
                                                        that you would like included on this page.
                                                        Alternatively, we will research and source content
                                                        based on the Informationormationormationon you have
                                                        provided.
                                                    </span>
                                                    <p>You can select multiple files.</p><br>
                                                        <!-- <label for="image3"  class="browse image">
                                                            BROWSE
                                                        </label> -->
                                                        <input   class="browse image" name="page_3" files=true type="file"  multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end dropdown -->

                            <!-- dropdown page 4 -->
                            <div class="dropdown-view bors border-bottom">
                                <!-- start dropdown -->
                                <div class="dropdown d_for_step3">
                                    <label for="cars" class="page1">Page 4.</label>
                                    <select class="pagetypes form-control col-4" page-no="4" name="page_4[pageType]" id="lable-page-p4" onchange="toggledropdown(this)">
                                        <option  value="hide">Select option</option>
                                        @foreach ($pagetypes as $pagetype)
                                            <option price = "{{$pagetype->price == null ? 0.00 : $pagetype->price}}" description="{{$pagetype->description}}" value="{{$pagetype->pagetypes}}">
                                                {{$pagetype->pagetypes}} @if ($pagetype->price != null) - ${{$pagetype->price}} @endif
                                            </option>
                                        @endforeach
                                        <option price = "0" value="Leave blank for now">Leave blank for now
                                        </option>
                                        <option price = "0" value="Not sure? Let us decide for you">Not sure?
                                            Let us decide for you</option>
                                    </select>
                                    <div class="pageTypeCheckbox table_on-staep_3">
                                        <input type="checkbox" id="page_4[checkbox]" name="page_4[checkbox]">
                                        <label for="page_4[checkbox]"> Note sure? Leave it to us.</label><br>
                                    </div>
                                </div>
                                <!--page dropdown -->
                                <div class="page-type-dropdown dropdown-content">
                                    <div class="prices-portion">
                                        <span class="title"></span>
                                        <span class="description"></span>
                                        <a href="#">Remove this feature</a>
                                    </div>
                                    <div class="step3 bg-gray">
                                        <div class="bg-gray">
                                            <div class="width borss">
                                                <div class="activeBody text-cont">
                                                    <div class="width-50">
                                                        <p class="bold mt-2 mt-2s">
                                                            Text Content:
                                                        </p>
                                                        <textarea rows="6" cols="50" name="page_4" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                    </div>
                                                    <div class="width-50 medias">
                                                        <p class="bold mt-2 uploads">Upload Media:</p>
                                                        <span class="media">
                                                        Upload any media such as images, videos or ideas
                                                        that you would like included on this page.
                                                        Alternatively, we will research and source content
                                                        based on the Informationormationormationon you have
                                                        provided.
                                                    </span>
                                                        <br>
                                                        <p>You can select multiple files.</p><br>
                                                        <input  class="browse image" name="page_4" files=true type="file"  multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end dropdown -->

                            <!-- dropdown page 5 -->
                            <div class="dropdown-view bors">
                                <!-- start dropdown -->
                                <div class="dropdown d_for_step3">
                                    <label for="cars" class="page1">Page 5.</label>
                                    <select class="pagetypes form-control col-4" page-no="5" name="page_5[pageType]" id="lable-page-p5" onchange="toggledropdown(this)">
                                        <option  value="hide">Select option</option>
                                        @foreach ($pagetypes as $pagetype)
                                            <option price = "{{$pagetype->price == null ? 0.00 : $pagetype->price}}" description="{{$pagetype->description}}" value="{{$pagetype->pagetypes}}">
                                                {{$pagetype->pagetypes}} @if ($pagetype->price != null) - ${{$pagetype->price}} @endif
                                            </option>
                                        @endforeach
                                        <option price = "0" value="Leave blank for now">Leave blank for now
                                        </option>
                                        <option price = "0" value="Not sure? Let us decide for you">Not sure?
                                            Let us decide for you</option>
                                    </select>
                                    <div class="pageTypeCheckbox table_on-staep_3">
                                        <input type="checkbox" id="page_5[checkbox]" name="page_5[checkbox]">
                                        <label for="page_5[checkbox]"> Note sure? Leave it to us.</label><br>
                                    </div>
                                </div>
                                <!--page dropdown -->
                                <div class="page-type-dropdown dropdown-content">
                                    <div class="prices-portion">
                                        <span class="title"></span>
                                        <span class="description"></span>
                                        <a href="#">Remove this feature</a>
                                    </div>
                                    <div class="step3 bg-gray">
                                        <div class="bg-gray">
                                            <div class="width borss">
                                                <div class="activeBody text-cont">
                                                    <div class="width-50">
                                                        <p class="bold mt-2 mt-2s">
                                                            Text Content:
                                                        </p>
                                                        <textarea rows="6" cols="50" name="page_5" placeholder="Tell us what sort of online bookings you want on your website." class="text-place"></textarea>
                                                    </div>
                                                    <div class="width-50 medias">
                                                        <p class="bold mt-2 uploads">Upload Media:</p>
                                                        <span class="media">
                                                        Upload any media such as images, videos or ideas
                                                        that you would like included on this page.
                                                        Alternatively, we will research and source content
                                                        based on the Informationormationormationon you have
                                                        provided.
                                                    </span>
                                                        <br>
                                                        <p>You can select multiple files.</p><br>
                                                        <input  class="browse image" name="page_5" files=true type="file"  multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end dropdown -->
                        <!-- </form> -->
                    </div>

                    @include('components.additionalFeatures')

                    <div id="comp-kj85kbqc" class="bors"></div>
                    <div class="nextBtn">
                        <a href="./page2.html" class="prev_action">
                            <button class="back-button mt-2">
                                BACK
                            </button>
                        </a>
                        <a href="./page4.html" class="next_action">
                            <button class="button mt-2">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="stepActive" id = "webform">
                <div class="activeTop">
                    <h6 class="sBold">4.</h6>
                    <div class="activeImg">
                        <img src={{"/images/step6.png"}} alt="step1">
                    </div>
                    <div class="activeDesc">
                        <p class="sBold">
                            STEP 4
                        </p>
                        <p class="slight">
                            Checkout
                        </p>
                    </div>
                </div>
                <div class="activeBody bodyContainer stores">
                    @include('components.payment')
                    <div class="nextBtn hasPadding ssl">
                        <img src="images/ssl.png" alt="" class="ssl-img">
                        <a style="margin-right: 5px;" href="" class="prev_action">
                            <button class="btn2">
                                BACK
                            </button>
                        </a>

                        <a class="btn_checkout">
                            <button class="button" type="submit">
                                Checkout
                            </button>
                        </a>

                        <div class="footer">
                            <p>By checking out you agree to our <a href="/terms-page" target="_blank">Terms of Service</a> and
                                <a href="/privacy-page">Privacy Policy</a> .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col2">

        <div class="orderSummary">
            <div class="orderContainer">
                <div class="orderTop">
                    <p class="bolds cart">
                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.5 37.5 142.999 125"
                                viewBox="28.5 37.5 142.999 125" height="200" width="200"
                                xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                            <defs>
                                <style>
                                    #comp-kjh7avte svg [data-color="1"] {
                                        fill: #2B074D;
                                    }
                                </style>
                            </defs>
                            <g>
                                <path
                                        d="M93.331 142.92c-5.392 0-9.78 4.392-9.78 9.79 0 5.399 4.388 9.79 9.78 9.79 5.392 0 9.779-4.392 9.779-9.79 0-5.399-4.387-9.79-9.779-9.79z"
                                        fill="#2B074D" data-color="1"></path>
                                <path
                                        d="M129.502 142.92c-5.392 0-9.779 4.392-9.779 9.79 0 5.399 4.386 9.79 9.779 9.79 5.392 0 9.78-4.392 9.78-9.79 0-5.399-4.387-9.79-9.78-9.79z"
                                        fill="#2B074D" data-color="1"></path>
                                <path
                                        d="M63.386 66.861c-.19 0-.377.012-.561.037l-5.34-17.343-28.696-11.967c-.095-.039-.192-.056-.289-.088v9.113l22.092 9.212 23.849 77.455h76.515l20.543-66.42H63.386zm81.355 57.977H80.665L65.414 75.304h94.648l-15.321 49.534z"
                                        fill="#2B074D" data-color="1"></path>
                            </g>
                        </svg>

                        Order Summary
                    </p>
                </div>
                <div class="orderBody">

                    <div class="orderList border-bottom">
                        <div class="s_between" >
                            <div>
                                <p>
                                    Website Package
                                </p>
                            </div>
                            <div>
                                <p class="bold">
                                    AU$799.00
                                    <span class="aus"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="orders">
                        <div class="s_betweens mid">
                            <div>
                                <p class="promo-section">
                                    <img src="/images/coupn.png" alt="step1" class="enter">
                                    <input class="promo-input" type="text" name="promo" placeholder="Enter a promo code." oninput="order.promoCodeOnChange(this)">
                                    <button>Enter</button>
                                </p>
                            </div>

                        </div>

                        <div class="s_between sub">
                            <div>
                                <p>
                                    Subtotal:
                                </p>
                            </div>
                            <div>
                                <p class="bold sub-total-amt">AU$ 00.00<span class="aus"></span></p>
                            </div>
                        </div>


                        <div class="s_between sub">
                            <div>
                                <p>
                                    Discounts
                                </p>
                            </div>
                            <div>
                                <p class="bold discount-amt">AU$ 00.00<span class="aus"></span></p>
                            </div>
                        </div>
                        <div class="s_between sub" style="padding-bottom: 15px">
                            <div>
                                <p>
                                    GST:
                                </p>
                            </div>
                            <div>
                                <p class = "bold gst-amt">AU$ 00.00<span class="aus"></span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="orderBottom">
                    <div class="s_between">
                        <div>
                            <p class="total">
                                Total:
                            </p>
                        </div>
                        <div>
                            <input type="hidden" value="" name="price" class="bold total total-amt"><p class="bold total total-amt">AU$ 00.00</p><span class="aus"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
