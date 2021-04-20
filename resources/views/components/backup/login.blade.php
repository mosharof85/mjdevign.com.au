<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
        </div>
            <br>
            <img src="/images/cb2.png" style="height:50px;width:50px;align:center;display: block; margin-left: auto; margin-right: auto;">
            <h3 style="text-align:center">Log In</h3>
            <p class="border-bottom" style="text-align:center">Not a member? <button data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" class="btn btn-light" style="text-decoration: underline;">Sign Up</button></p>
            <div class="form-group row mb-0 d-flex justify-content-center border-bottom">

                    <a href="{{ url('/auth/redirect/facebook') }}">
                    <img src="{{ url('/images/loginfb.png') }}" alt="fblog.png" style="width: 318px; height: 52px; object-fit: cover; object-position: 50% 50%;">
                    </a>
            </div>
            <div class="form-group row mb-0 d-flex justify-content-center border-bottom">
                <button type="button" class="btn " data-dismiss="modal" data-toggle="modal" data-target="#exampleModal" >
                    <img src="{{ url('/images/loginEmail.png') }}" alt="fblog.png" style="width: 318px; height: 52px; object-fit: cover; object-position: 50% 50%;">
                </button>

            </div>
            <hr>
            <br>


        </div>
    </div>
</div>



<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
            <!-- </button> -->
        </div>
            <br>
            <img src="/images/cb2.png" style="height:50px;width:50px;align:center;display: block; margin-left: auto; margin-right: auto;">
            <h3 style="text-align:center">Sign Up</h3>
            <p class="border-bottom" style="text-align:center">Already a member? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="btn btn-light" style="text-decoration: underline;">Log In</button></p>
            <hr>
            <br>
            <div class="form-group row mb-0 d-flex justify-content-center border-bottom">

                    <a href="{{ url('/auth/redirect/facebook') }}">
                    <img src="{{ url('/images/signupfb.png') }}" alt="fblog.png" style="width: 318px; height: 52px; object-fit: cover; object-position: 50% 50%;">
                    </a>
            <!-- <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Sign Up with Facebook</a> -->
                <!-- </div> -->
            </div>
            <hr>
            <br>
            <div class="form-group row mb-0 d-flex justify-content-center border-bottom">
                <button type="button" class="btn " data-dismiss="modal" data-toggle="modal" data-target="#registerModal" >
                    <img src="{{ url('/images/signupemail.png') }}" alt="fblog.png" style="width: 318px; height: 52px; object-fit: cover; object-position: 50% 50%;">

            <!-- <div class="col-md-8 offset-md-4">
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#registerModal" >
                Sign Up with Email</a> -->
                </button>

            </div>
            <hr>
            <br>

    </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('Login') }}</h5>

    </div> -->
    <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
            <!-- </button> -->
    </div>
    <div class="modal-body">
    <img src="/images/cb2.png" style="height:50px;width:50px;align:center;display: block; margin-left: auto; margin-right: auto;">
            <h3 style="text-align:center">Log In</h3>
            <p style="text-align:center">Not a member? <button data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" class="btn btn-light" style="text-decoration: underline;">Sign Up</button></p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div></div>
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div></div>
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>

    </form>
    </div>

    </div>
</div>
</div>
<script src="{{ asset ( 'main/js/jquery-3.5.1.js' ) }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
@if($errors->has('email') || $errors->has('password'))
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal("show");
        });
    </script>
@endif
