<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
    <link rel="stylesheet" href="/Asset/css/login_reg.css">
</head>

<body>
    {{View::make('layout.header')}}


    <div class="container">
        <div class="box">
            <form action="{{route('account-update')}}" method="POST">
                @csrf
                <div class="form-group">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="mbwekcenter" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="mbwekcenter" value="{{Auth::user()->email}}">
                </div>


                <div class="form-group">
                    <p>Gender</p>

                    <select class="inputs" name="gender" id="gender">
                        @if (Auth::user()->gender=="Female")

                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        @else

                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        @endif

                    </select>
                </div>
                <button type="submit" value="Register" class="btn">Update</button>
                <button class="btn"><a href="/myaccount">Back</a></button>

            </form>

        </div>

    </div>
    {{View::make('layout.footer')}}
    

</body>

</html>
