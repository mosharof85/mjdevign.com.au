<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page Package</title>

    <link rel="icon" href="main/images/diamond.ico" type="image/x-icon">

    <!-- UNIVERSAL STYLE SHEET -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- TYPOGRAPHY -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <link rel="stylesheet" href="/css/extra-style.css">

    <!-- STRIPE JS SDK -->
    <script src="https://js.stripe.com/v3/"></script>

    <link rel="stylesheet" href="/css/dropshipping/page54.css">

    <link rel="stylesheet" href="/css/modal.css">

    <link rel="stylesheet" href="/css/landing.css">

    <!-- MJDEVIGN LOCAL FONTS -->
    <link rel="stylesheet" href="main/css/fonts.css">
    <!-- MJDEVIGN NEW Checkout Design -->
    <link rel="stylesheet" href="/css/ssl.css">

    <!--some fixes for ssl-->
    <style>
        .activeBody.stores{
            padding-left: 25px;
            padding-right: 25px;
        }
    </style>

    @include('components.login')
    @include('components.register')

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
    <script src="/js/main.js"></script>
</body>
@guest
    <script type="text/javascript">
        $(document).ready(function () {
            $('#loginModal').modal({
                show:true,
                keyboard: false,
                backdrop: 'static'
            });
        })
    </script>
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

<script>

    window.addEventListener('DOMContentLoaded', function () {
        const cartTotal = document.querySelector('.orderSummary input.total')
        const cardTotal = document.querySelector('.card-parts .right .total');
        let initTotal = '';

        setInterval(function () {
            let newTotal = cartTotal.value;
            if(newTotal != initTotal){
                cardTotal.innerText = 'AU$' + newTotal;
                initTotal = newTotal;
            }
        }, 500)
    })

</script>


</html>
