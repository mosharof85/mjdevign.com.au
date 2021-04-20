<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
{{--            <div class="modal-header">--}}
{{--                <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>--}}
{{--            </div>--}}
            <div class="row row-topbar border-bottom">
                <div class="col1">
                    <img src="/images/cb2.png">
                </div>
                <div class="col2">
                    <h3 style="text-align: center; font-size: 22px; font-weight: 500" class="f-montserratMedium2">Create Your Account</h3>
                    <p>Let's get started!</p>
                </div>
            </div>
            <div class="modal-body">

                <p class="already-user">Already have an account? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="btn btn-light" style="width: auto; text-decoration: underline;">Log In</button></p>
                <form id="registerModalForm"  >
                        @csrf
                        <input type="hidden" name="modal_type" value="SignUp"/>
                        <div class="w-50">
                            <div>
                                <label for="name" class="col-form-label">{{ __('First name:') }}</label>
                                <input id="name" type="text" placeholder="First Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <span id="name_error"  class="d-none " role="alert">
                                        <strong class="error-msg"></strong>
                                    </span>
                            </div>

                            <div>
                                <label for="lastname" class="col-form-label">{{ __('Surname:') }}</label>
                                <input id="lastname" type="text" placeholder="Surname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                <span id="lastname_error"  class="d-none " role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="col-form-label">{{ __('Email:') }}</label>
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span id="email_error"  class="d-none " role="alert">
                                <strong class="error-msg"></strong>
                            </span>
                        </div>
                        <div>
                                <label for="name" class="col-form-label">{{ __('Mobile:') }}</label>
                                <input id="phonenumber" type="number" placeholder="Mobile Number" class="form-control " name="phonenumber" value="{{ old('phonenumber') }}"  autocomplete="phonenumber" autofocus>
                        </div>
                        <div class="w-50">
                            <div>
                                <label for="country" class=" col-form-label">{{ __('Country:') }}</label>

                                <!-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus> -->
                                <select id="country" name="country" data-default="AU" class="form-control countrypicker" ></select>

                                <span id="country_error"  class="d-none " role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>
                            <div>
                                <label for="city" class=" col-form-label">{{ __('City:') }}</label>
                                <input id="city" type="text" placeholder="City or Postcode" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                <span id="city_error"  class="d-none " role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>
                            
                        </div>

                        <div class="w-50">
                            <div>
                                <label for="password" class="col-form-label">{{ __('Password:') }}</label>

                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <span id="password_error"  class="d-none" role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>

                            <div class="row-password-confirm">
                                <label for="password-confirm" class=" col-form-label">{{ __('Repeat Password:') }}</label>

                                <input id="password-confirm" type="password" placeholder="Repeat Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row-submit border-bottom">
                            <div>
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('SignUp') }}--}}
{{--                                </button>--}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Join') }}
                                </button>
                            </div>
                        </div>

                        <div class="terms">
                            <p>By joining, you agree to MJ Devign's <a href="#">Terms of Service</a> and <a
                                        href="#" style="display: block">Privacy Policy.</a></p>
                        </div>
                        
                    </form>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="registerSocialModal" tabindex="-1" role="dialog" aria-labelledby="registerSocialModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
            </div>
            <div class="row row-topbar" style="margin-top: 20px">
                <div class="col1">
                    <img src="/images/cb2.png">
                </div>
                <div class="col2">
                    <h3 style="text-align: center;" class="f-montserratMedium2">Create Your Account</h3>
                </div>
            </div>
            <div class="modal-body">
                <form id="registerSocialModalForm">
                        @csrf
                        <div class="already-user text-center" style="display: flex; align-items: center; justify-content: center; margin: 10px 0 20px;">

                            <svg style="width: 28px; height: 28px;margin-right: 15px;" preserveAspectRatio="xMidYMid meet" data-bbox="11.495 11.506 176.99 176.99" viewBox="11.495 11.506 176.99 176.99" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
                                <g>
                                    <path fill="#205685" d="M174.728 52.634c26.16 41.276 13.907 95.945-27.37 122.105-41.276 26.16-95.945 13.907-122.105-27.37-26.16-41.276-13.907-95.945 27.37-122.105 41.276-26.16 95.945-13.907 122.105 27.37z" data-color="1"></path>
                                    <path d="M142.959 122.146c-11.506-6.716-23.071-13.343-34.528-20.147 12.861-9.578 24.006-21.097 35.289-32.439 2.95-2.965-1.639-7.558-4.591-4.591-11.134 11.192-22.074 22.75-34.847 32.113a387.703 387.703 0 0 1-20.616-35.483c-1.904-3.721-7.508-.44-5.607 3.277 5.902 11.533 12.388 22.716 19.409 33.596a3.616 3.616 0 0 0-.575.893c-11.85 1.806-23.972 2.561-35.908 2.679-4.176.041-4.186 6.534 0 6.493 13.124-.13 26.429-1.048 39.417-3.182-2.327 13.454-6.657 25.609-10.608 38.744-1.206 4.01 5.059 5.724 6.261 1.726 3.827-12.724 8.025-24.5 10.4-37.451 11.033 6.531 22.155 12.917 33.226 19.378 3.617 2.111 6.889-3.498 3.278-5.606z" fill="#FFFFFF" data-color="2"></path>
                                </g>
                            </svg>

                            <span style="font-size: 14px; color: #525252;">
                                @if (Auth::check())
                                    {{ Auth::user()->name }}
                                @endif
                            </span>
                        </div>
                        
                            <div>
{{--                                <label for="country" class=" col-form-label">{{ __('Country:') }}</label>--}}

                                <select id="country" name="country" data-default="AU" class="form-control countrypicker" ></select>

                                <span id="country_error"  class="d-none " role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>
                            <div>
{{--                                <label for="city" class=" col-form-label">{{ __('City:') }}</label>--}}
                                <input id="city" type="text" placeholder="City or Postcode" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                <span id="city_error"  class="d-none " role="alert">
                                    <strong class="error-msg"></strong>
                                </span>
                            </div>
                            
                        

                        <div class="row-submit" style="margin:20px 0 10px">
                            <div>
                                <button type="submit" class="btn btn-primary" style="width: 220px">
                                    {{ __('Join') }}
                                </button>
                            </div>
                        </div>

                        <div class="terms">
                            <p>By joining, you agree to MJ Devign's <a href="#">Terms of Service</a> and <a
                                        href="#" style="display: block">Privacy Policy.</a></p>
                        </div>
                        
                    </form>

            </div>
        </div>
    </div>
</div>

<script src="{{ asset ( 'main/js/jquery-3.5.1.js' ) }}"></script>

<script type="text/javascript">
var askCompany = '{{ session()->get( 'company' ) }}';    
$(document).ready(function() {
    if(askCompany != "")
    {
        $('#registerSocialModal').modal('show');
    }
    $( "#registerSocialModal" ).focus(function() {

        $('#registerSocialModalForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        // alert(response);
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('completeSocial') }}",
            data: formData,
            success: () => {window.location.assign("{{ route('home') }}")},//window.location.assign("{ route('home') }}"),
            error: (res) => {
                if(res.status === 422) {
                    let errors = res.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key).addClass("is-invalid");
                        $("#" + key + "_error").children("strong").text(errors[key][0]);
                        $("#" + key + "_error").removeClass( "d-none" );
                    });
                } else {
                    console.log(res);
                    //window.location.reload();
                }
            }
        })
        return false;
    });
});

$( "#registerModal" ).focus(function() {

$('#registerModalForm').submit(function (e) {
e.preventDefault();
let formData = $(this).serializeArray();
// alert(response);
$.ajax({
    method: "POST",
    headers: {
        Accept: "application/json"
    },
    url: "{{ route('register') }}",
    data: formData,
    success: () => {window.location.assign("{{ route('home') }}")},//window.location.assign("{ route('home') }}"),
    error: (res) => {
        if(res.status === 422) {
            let errors = res.responseJSON.errors;
            Object.keys(errors).forEach(function (key) {
                $("#" + key).addClass("is-invalid");
                $("#" + key + "_error").children("strong").text(errors[key][0]);
                $("#" + key + "_error").removeClass( "d-none" );
            });
        } else {
            console.log(res);
            //window.location.reload();
        }
    }
})
return false;
});
});
});
</script>
<script>
    document.addEventListener('click', function () {
        setTimeout(function () {
            if(document.querySelector('.modal.show.in')){
                if(!document.body.classList.contains('modal-open')){
                    document.body.classList.add('modal-open');
                }
                if(!document.querySelector('html').classList.contains('modal-open')){
                    document.querySelector('html').classList.add('modal-open');
                }
            }
        },500)
    })

    window.addEventListener('load', function () {
        setTimeout(function () {
            if(document.querySelector('.modal.show')){
                document.querySelector('html').classList.add('modal-open');
            }
        },500)
    })
</script>