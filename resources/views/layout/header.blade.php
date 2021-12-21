<link rel="stylesheet" href="/Asset/css/main.css">

<div class="navbar">
    <div class="navbar-up">
        <img src="/Asset/Image/logo.svg" alt="mbwekcenter">
    </div>

    <div class="navbar-down">
        <a href="/">Home</a>
        <a href="#">Search Product</a>
        @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
        @else
        @if(Session::get('user')['is_admin']==false)
            <a href="/myaccount">My Account</a>
        @endif
        <a href="{{route('logout')}}">Log Out</a>
        @endguest
    </div>
</div>
