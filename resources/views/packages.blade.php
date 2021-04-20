@extends('layouts.app')


@section('content')
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
        attribution="install_email"
        page_id="109991891133809">
      </div>

    <main>
        <div class="packages">
            <div class="package one">
                <a href="/web-form">Web Form</a>
            </div>
            <div class="package two">
                <a href="/landing-form">Landing Form</a>
            </div>
            <div class="package three">
                <a href="/dropshipping-form">Dropshipping Form</a>
            </div>

            <div class="package four">
                <a href="/client-portal">Clients' Portal</a>
            </div>
        </div>
    </main>
@endsection
