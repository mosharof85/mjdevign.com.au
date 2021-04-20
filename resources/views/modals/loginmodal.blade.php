<!-- To check if logged -->
@guest
    <p class="user-info" style="font-size: 120%;">Welcome, Guest!</p>
@else
    <p class="user-info" style="font-size: 120%;">Welcome, <b>{{ Auth::user()->name }}</b></p>

@endGuest
