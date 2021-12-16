<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_reg.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Login</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">

        <div class="box">
            <form action="{{route('login-user')}}" method="POST">
                @csrf
                <div class="form-group">
                    <p>Username</p>
                    <input type="email" name="email" id="email" placeholder="mbwekcenter@binus.ac.id">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <i onclick="toggleIconPassword(this)"class="bi bi-eye" id="togglePassword"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" value="Login" class="btn">Login</button>




            </form>
        </div>


    </div>

    {{View::make('layout.footer')}}


    <script>
        function toggleIconPassword(x){
            if(x.classList.contains('bi-eye')){
                x.classList.remove("bi-eye");
                x.classList.add("bi-eye-slash");
            }
            else if(x.classList.contains("bi-eye-slash")){
                x.classList.remove("bi-eye-slash");
                x.classList.add("bi-eye");
            }
            var y = document.getElementById("password");
            if(y.type == "password"){
                y.type = "text";
            }else{
                y.type = "password";
            }
        }
   </script>
</body>
</html>
