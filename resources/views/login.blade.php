<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_reg.css">
    <title>Login</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">
        <div class="box">
            <div class="box-top">
                <h2>Login</h2>
            </div>
            <div class="box-bottom">
                <form action="login" method="POST">
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
                        <p></p>
                        <div class="input-placeholders">
                            <input type="checkbox" name="" id="">
                            <p>Remember Me</p>
                        </div>
                    </div>
                    <div class="input-box">
                        <p></p>
                        <div class="input-placeholders">
                            <input class="btn"type="button" value="Login">
                            <a href="#">Forgot Your Password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    {{View::make('layout.footer')}}
</body>
</html>
