<div class="stepActive active" id="domainform">
    <div class="activeTop">
        <h6 class="sBold">1.</h6>
        <div class="activeImg first_img">
            <img src={{"/images/step1.png"}} alt="step1">
        </div>
        <div class="activeDesc">
            <p class="sBold">

                STEP 1
            </p>
            <p class="slight">
                Choose Your Custom Domain Name
            </p>
        </div>
    </div>
    <div class="activeBody bodyContainer px-4" id="pad__left__none">
        <div class="inputArea">
            <div class="form-check form-check2">
                <input class="form-check-input " type="radio" name="exampleRadios" name="test1"
                    onclick="show(1)" id="exampleRadios1" value="newDomain" checked>
                <label for="exampleRadios1">
                    <b class="common-font">Register a New Domain</b>
                </label>
            </div>
            <div class="w-100 d-none" id="reg_new" style="margin-left: 25px">
                <div class="iBtn">
                    <div
                        style="width: 100%; margin-right: 2%; margin-left: 2%;margin-top: 20px;text-align: left !important;">
                        <label>Choose your domain name (Website name). e.g. www.mysite.com.au</label>
                        <input type="text" name="newDomainName" value="" placeholder="www.">
                    </div>
                </div>
                <p class="my_sitecom" style="margin-right: 2%; font-size: 15px">
                    Click <a href="https://au.godaddy.com/domains/domain-name-search/" target="_blank">here</a> to check if your domain name is available. Type it above and we will take care of the rest!</small>
                </p>
            </div>
        </div>
        <div class="inputArea">
            <div class="form-check form-check2">
                <input class="form-check-input" type="radio" name="exampleRadios" name="test1"
                    onclick="show(2)" id="exampleRadios2" value="existingDomain">
                <label for="exampleRadios2">
                    <b class="common-font">I Already Own a Domain</b>
                </label>
            </div>

            <div class="row w-100 pt-4 d-none" id="already_own" style="margin-left: -5px">
                <div class="col-md-6 col-12">
                    <div class="px-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter your existing domain
                                name:</label>
                            <input type="text" class="common-input py-4 form-control"
                                id="exampleInputEmail1" name="existingDomainName" aria-describedby="emailHelp"
                                value="" placeholder="www.">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="px-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter your domain provider:</label>
                            <input type="text" class="common-input py-4 form-control"
                                id="exampleInputEmail1" name="domainNameProvider" aria-describedby="emailHelp"
                                placeholder="Your domain provider">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 domain-alreay__checkbox">
                    <div class="px-3">
                        <div class="form-check">
                            @if(Illuminate\Support\Facades\Route::is('dropshippingform'))
                                <input type="checkbox" class="form-check-input p-1 addons" id="exampleCheck3" price="-99.00" value="Remove 12 months Hosting" name="hosting">
                            @else
                                <input type="checkbox" class="form-check-input p-1 includes" id="exampleCheck3" price="-99.00" value="Remove 12 months Hosting" name="hosting">
                            @endif    
                            <label class="form-check-label" for="exampleCheck3">
                                I also have hosting
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-md-12 domain-alreay__msg">
                    <div class="mt-4">
                        <span class="h5">We will remove our hosting from your package saving you
                            $100.00.</span>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="nextBtn">
        <a href="" class="next_action">
            <button class="button">
                Next
            </button>
        </a>
    </div>
</div>