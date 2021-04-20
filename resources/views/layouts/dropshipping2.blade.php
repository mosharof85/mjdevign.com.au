
<!DOCTYPE html>
<html lang="en">
<!-- including login and register modals -->
@include('components.login')
@include('components.register')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropshipping Form</title>

    <!-- UNIVERSAL STYLE SHEET -->
    <link rel="stylesheet" href="/css/style.css?v=1">

    <!-- TYPOGRAPHY -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/extra-style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- FONT ICONS KIT -->
    <script src="https://kit.fontawesome.com/74d240b4ae.js" crossorigin="anonymous"></script>

    <!-- STRIPE JS SDK -->
    <script src="https://js.stripe.com/v3/"></script>

    <link rel="stylesheet" href="/css/dropshipping/pages-fix.css">

    <link rel="stylesheet" href="/css/dropshipping/style2.css">
    <link rel="stylesheet" href="/css/dropshipping/page2.css">
    <link rel="stylesheet" href="/css/dropshipping/page3.css">
    <link rel="stylesheet" href="/css/dropshipping/page54.css">

    <style>

        .modal-content *{
            margin-bottom: 0;
        }

        .modal-content{
            display: flex;
            align-items: center;
        }
        .modal-header{
            border-bottom: 0;
        }

        .modal-header .close{
            font-weight: 400;
        }

        #exampleModal .modal-body{
            width: 100%;
        }

        #registerModal .col1 img{
            width: 57px;
            height: 57px;
        }

        #registerModal .col1{
            padding-left: 0 !important;
        }

        #exampleModal button,
        #registerModal button
        {
            line-height: initial !important;
        }

        #exampleModal button:hover,
        #registerModal button:hover{
            background-color: #3D387D;
        }

        #registerModal .modal-body{
            width: inherit;
        }

        #registerModal #name{
            width: auto;
        }

        #registerModal .w-50{
            width: 100% !important;
        }

        #registerModal .modal-content form select{
            padding: 0 !important;
        }
    </style>

    <link rel="stylesheet" href="/css/modal.css">

    <style>
            .activeBody .inputArea label,
            .iBtn > div,
            .my_sitecom{
                margin-left: 0 !important;
            }
            header{
                padding: 0 !important;
            }
            nav{
                padding: 15px;
                display: flex;
                color: #fff;
                align-items: baseline;
            }

            nav h3{
                margin-left: 10px;
                font-family: 'Montserrat', sans-serif;
                font-weight: bold;
                font-size: 15px;
            }

            .activeTop img{
                width: 64px;
                height: 64px;
            }

            .form-check2 label::before{
                top: 2px;
            }
            .form-check2 input[type=radio]:checked + label:after{
                top: 7px;
            }

            .table_on-staep_3 label:before{
                top: 3px;
            }

            .step-category-item__label input:checked + label:after{
                left: 0;
                width: 5px;
                height: 10px;
            }

        </style>

    <style>
        @media screen and (max-width: 1279px) {
            .orderSummary{
                width: 100% !important;
            }
        }
        .step-category__wrapper{
            max-width: 100%;
        }

        @media screen and (max-width: 1024px){
            .step-category__nav{
                flex-wrap: wrap;
            }
            .step-category__nav .step-category__nav-item{
                flex: 0 0 18%;
                max-width: 18%;
            }
            .step-category-list .step-category-item{
                flex: 0 0 33.33%;
                max-width: 33%;
            }
        }

        @media screen and (max-width: 850px){
            .step-category__nav .step-category__nav-item{
                flex: 0 0 23%;
                max-width: 23%;
            }
        }

        @media screen and (max-width: 465px){
            .step-category__nav .step-category__nav-item{
                flex: 0 0 47%;
                max-width: 47%;
            }

            .step-category-list .step-category-item{
                flex: 0 0 100% ;
                max-width: 100%;
            }
        }
    </style>

    <style>
        .checkout-image {
            margin: 0px;
            padding: 0px;
            display: inline-block;
            width: 100%;
            border-bottom: 1px solid #ccc;
            padding: 25px;
        }
        .checkout-image label {
            line-height: 40px;
            font-size: 18px;
        }
        .checkout-image img {
            float: right;
        }
        .checkout-image input.Qg8Oo {
            margin: 0 10px 0 0;
        }
        .outer-box{
            border: 1px solid #ccc;
            border-radius: 15px;
            margin-bottom:40px;
        }
        .credit-details p {
            padding: 100px;
        }
        .credit-details{
            background: #fafafa;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

    </style>

    <style>
        .logo-image_1 {
            width: 100%;
        }

        .nextBtn a{
            margin: 0 !important;
        }

        .nextBtn{
            margin: 0!important;
            padding: 0 40px 0 0 !important;
            width: 100%;
            height: 80px;
            display: flex !important;
            align-items: center;
            justify-content: flex-end;
        }

        .stepActive:not(.active) .nextBtn{
            display: none !important;
        }

        .nextBtn.hasPadding{
            padding: 0 0 0 0 !important;
        }

        .activeTop.p-3 {
            padding-left: 25px !important;
        }

        .first_img,
        .first_img img{
            width: 64px;
            height: 64px;
        }

        .stepActive > div:not(.activeTop){
            display: none;
        }

        .stepActive:nth-child(1) > div:not(.activeTop){
            display: block;
        }

        .activeTop{
            border-bottom: 0 !important;
        }

        .table_on-staep_3 input:checked + label:after {
            top: 2px;
            left: 9px;
            width: 5px;
            height: 10px;
        }

        .sBold,
        .step-active__header-subtitle{
            font-size: 14px !important;
        }
        img.enter {
            position: relative;
            top: 0;
            margin-right: 5px;
        }
        .optionalRow .checkBox input:checked+label:after{
            top: 4px;
            left: 6px;
            width: 5px;
            height: 10px;
        }

        @media screen and (min-width: 1280px){
            .orderContainer{
                position: fixed;
                width: 388px;
                top: 80px;
                left: calc(65% + 32px);
                border-radius: 10px;
                overflow: hidden;
            }

            .content .col1{
                width: calc( 65% - 10px) ;
                margin-left: 10px;
            }
        }

        .content{
            padding-bottom: 30px !important;
        }
    </style>

    <style>
        .stepActive .activeTop h6.sBold{
            font-size: 20px !important;
            font-weight: 500;
            margin-bottom: 0;
        }


        .stepActive.active .activeTop{
            border-bottom: 1px solid #E3E7F0 !important;
            margin-bottom: 28px;
        }

        .stepActive.active .activeTop .activeDesc .slight{
            margin-bottom: 0 !important;
        }

        .stepActive.active .activeTop h6.sBold{
            display: none;
        }

        .stepActive:not(.active) .activeTop{
            height: 65px;
            padding: 15px;
            display: flex;
            align-items: center;
            padding: 15px;
        }

        .stepActive:not(.active) .activeTop .activeImg{
            display: flex;
            align-items: center;
            width: 76px;
        }

        .stepActive:not(.active) .activeTop .activeDesc{
            padding-left: 0;
        }

        .stepActive:not(.active) .activeTop p.sBold{
            display: none;
        }

        .stepActive:not(.active) .activeTop p.slight{
            font-size: 16px !important;
            font-weight: 500;
        }

        .stepActive:not(.active) .activeTop img{
            width: 36px;
            height: 36px;
            margin: 0 20px;
        }

        .stepActive.passed:not(.active){
            position: relative;
        }

        .stepActive.passed:not(.active)::after{
            content: '';
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            width: 32px;
            height: 32px;
            background: url("/images/check.png");
            z-index: 99;

        }

        .data-table__row{
            border-radius: 10px !important;
        }

        .data-table__column.data-table__column-category,
        .data-table__column.data-table__column-item,
        .data-table__action.data-table__action-save{
            display: flex;
            align-items: center;
        }

        .orderSummary .orderContainer{
            border: 1px solid #000000;
        }

        .orderSummary .orderContainer .orderList{
            min-height: 150px;
        }

        .orderSummary .bold{
            font-weight: bold;
            font-size: 14px;
        }

        .orderSummary .orderTop svg{
            margin-right: 10px;
        }

        .orderSummary .orderBody{
            padding-top: 20px;
        }

        .orderSummary .orderBody > div{
            margin-left: 30px;
            margin-right: 30px;
        }

        .orderSummary .s_between,
        .orderSummary .s_between p,
        .orderSummary .s_betweens,
        .orderSummary .s_betweens p{
            margin-top: 0;
            margin-bottom: 0;
        }

        .orderSummary .orderBody .mid{
            padding: 20px 0;
            margin-bottom: 10px;
        }

        .orderSummary .orderBody .s_between{
            padding-bottom: 20px;
        }

        .orderSummary .orders{
            padding-left: 0;
            padding-right: 0;
            padding-bottom: 20px;
            padding-top: 0;
        }

        .orderSummary .orders .s_between{
            padding-bottom: 0;
        }

        .orderSummary .s_between.sub p{
            margin-bottom: 0;
        }

        .orderSummary .orderBottom{
            padding-top: 10px;
            padding-bottom: 20px;
        }

        .orderSummary .orderBottom .s_between{
            margin-left: 30px;
            margin-right: 30px;
        }

        .orderSummary .orderBottom .s_between .aus{
            display: none;
        }

        .stepActive{
            border: 1px solid #000000;
        }

        .domain-alreay__checkbox > div{
            padding-left: 20px !important;
        }

        .domain-alreay__checkbox .form-check{
            display: flex;
            align-items: center;
        }

        .domain-alreay__checkbox .form-check-input{
            margin-top: 0 !important;
        }

        .domain-alreay__checkbox .form-check-label{
            padding-left: 10px;
        }

        .domain-alreay__msg{
            display: none;
        }

        .domain-alreay__msg .h5{
            padding-left: 40px !important;
        }

        input[type=email],
        textarea,
        input[type=text]{
            background-color: #F6F6FA !important;
        }

        input[type=email]:focus,
        textarea:focus,
        input[type=text]:focus{
            background-color: #fff !important;
        }

        #reg_new > .iBtn > div{
            display: flex;
            flex-direction: column;
        }

        #reg_new > .iBtn > div label{
            margin-bottom: 0;
        }

        #reg_new > .iBtn > div input{
            width: 90%;
        }

        .activeBody.stores{
            padding: 0 25px;
        }

        .activeBody.stores > p.mt-2{
            margin-right: 50px;
        }

        .activeBody.stores .form > p{
            margin: 20px 0 !important;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px !important;
            color: #222222;
            font-weight: 700 !important;
        }

        .activeBody.stores .form > p.browse-text{
            font-family: "Open Sans", sans-serif;
            margin-bottom:10px !important;
            font-size: 15px !important;
            color: #595959;
            font-weight: 400 !important;
        }

        .activeBody.stores .optionalRow .left p{
            font-size: 12px !important;
        }

        .activeBody.stores .optionalRow .right .details{
            font-size: 14px;
            margin-top: -4px;
        }

        .activeBody.stores .optionalRow .checkBox label::before{
            width: 17px;
            height: 17px;
            left: 0;
        }

        nav .logo{
            display: flex;
            align-items: center;
        }

        nav .logo img{
            width: 55px;
            height: 55px;
            margin-right: 10px;
        }

        nav .logo-info p:nth-child(1){
            font-family: "Open Sans", sans-serif;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 0;
        }

        nav .logo-info p:nth-child(2){
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            margin-bottom: 0;
        }

        input::-webkit-input-placeholder,
        textarea::-webkit-input-placeholder{
            font-size: 15px;
        }

        input:-ms-input-placeholder ,
        textarea::-webkit-input-placeholder{
            font-size: 15px;
        }

        input::placeholder ,
        textarea::-webkit-input-placeholder{
            font-size: 15px;
        }
        input[type="file"]:hover {
            cursor: pointer;
        }

    </style>

    <style>

        @media screen and (max-width: 767px){
            .col1, .col2 {
                padding: 0 10px !important;
            }
        }

        .aus{
            margin-left: 0;
        }

        @media screen and (min-width: 1280px){
            .content .col1 {
                width: calc(65% - 10px);
                margin-left: 10px;
            }
        }

        .s_between,
        .s_betweens{
            margin: 0;
        }

        .btn_checkout button {
            padding: 7px 20px;
            margin-right: 40px;
        }

        @media screen and (max-width: 1279px) {
            .extra__container__fluid{
                padding: 0;
            }

            .browse{
                padding: 10px;
            }
        }

        .logo-image_1 > *{
            color: #ffffff;
        }

        .logo-image_1 .form-title{
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 0;
        }

        .logo-image_1 .user-info{
            margin-bottom: 0;
        }

        .logo-image_1{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-image_1 .form-info{
            flex: 0 0 calc(100% - 150px);
            max-width: calc(100% - 150px);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @media screen and (max-width: 899px){

            .logo-image_1 .form-info{
                flex-direction: column;
            }

            .logo-image_1 .user-info{
                margin-top: 10px;
            }
        }

        @media screen and (max-width: 650px){

            .logo-image_1{
                flex-direction: column;
            }

            .logo-image_1 .form-info{
                flex: 0 0 100%;
                max-width: 100%;
            }

            .logo-image_1 .form-title{
                text-align: center;
            }
        }

        @media screen and (max-width: 1279px) {
            .extra__container__fluid{
                padding-right: 0;
            }
            .content .col1, .content .col2 {
                width: 100% !important;
                padding: 20px;
            }

            .content .col2 .orderSummary{
                width: 100% !important;
            }
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
        page_id="109991891133809">
      </div>

    <main class="container-fluid extra__container__fluid">
        <div class="wrapper">
        @include('components.navbar')


            @yield('content')

            </div>
    </main>
    <div class="background-image">
        <img src="/images/banner2.png" />
    </div>
    <script src="/js/main.js"></script>
</body>
@guest
<script type="text/javascript">$('#loginModal').modal({backdrop: 'static', keyboard: false}) ;</script>
@endguest
<script src="/js/dropshipping.js"></script>
<script src="/js/order.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/payment.js"></script>
<script type="text/javascript">
    payment.load();
</script>
  <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
  <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>


</html>
