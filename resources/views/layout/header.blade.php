<link rel="stylesheet" href="/Asset/css/main.css">

<div class="navbar">
    <div class="navbar-up">
        <img src="{{Storage::url('Asset/Image/logo.svg')}}" alt="mbwekcenter">
    </div>

    <div class="navbar-down">
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="#">Search Product</a>
            </li>
            @guest
            <li>
                <a href="/login">Login</a>
            </li>
            <li>
                <a href="/register">Register</a>
            </li>
            @else
            @if(Session::get('user')['is_admin']==false)
            <li>
                <a href="/myaccount">My Account</a>
            </li>
            @else
            <li>
                <a href="#">Admin</a>
                <ul>
                    <li><a href="/insert">Insert Product</a></li>
                    <li><a href="/manageUser">Manage Users</a></li>
                </ul>
            </li>
            @endif
            <li>
                <a href="{{route('logout')}}">Log Out</a>
            </li>
            @endguest
        </ul>
    </div>
</div>
