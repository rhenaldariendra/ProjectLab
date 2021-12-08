<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_reg.css">
    <title>Register</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">
        <div class="box">
            <div class="box-top">
                <h2>Register</h2>
            </div>
            <div class="box-bottom">
                <form action="{{route('register-user')}}" method="POST">
                    @csrf
                    <div class="input-box">
                        <p>Name</p>
                        <div class="input-placeholders">
                            <input class="inputs" type="text" name="name" id="name">
                        </div>
                    </div>

                    <div class="input-box">
                        <p>E-Mail Address</p>
                        <div class="input-placeholders">
                            <input class="inputs" type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="input-box">
                        <p>Password</p>
                        <div class="input-placeholders">
                            <input class="inputs" type="password" name="password" id="password">
                        </div>
                    </div>
                    <div class="input-box">
                        <p>Confirm Password</p>
                        <div class="input-placeholders">
                            <input class="inputs" type="confpassword" name="confpassword" id="confpassword">
                        </div>
                    </div>

                    <div class="input-box">
                        <p>Gender</p>
                        <div class="input-placeholders">
                            <select class="inputs" name="gender" id="gender">
                                {{-- <option value="Null"></option> --}}
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-box">
                        <p></p>
                        <div class="input-placeholders">
                            <input class="btn"type="submit" value="Register">
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    {{View::make('layout.footer')}}
</body>
</html>
