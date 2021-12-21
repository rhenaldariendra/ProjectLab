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
            <form action="{{route('password-update')}}" method="POST">
                @csrf
                <div class="form-group">
                    <p>Old Password</p>
                    <input type="password" name="password" id="password" placeholder="mbwekcenter">
                </div>
                <div class="form-group">
                    <p>New Password</p>
                    <input type="password" name="newpassword" id="newpassword" placeholder="mbwekcenter">
                </div>
                <div class="form-group">
                    <p>Old Password</p>
                    <input type="password" name="confpassword" id="confpassword" placeholder="mbwekcenter">
                </div>


                <button type="submit" value="Register" class="btn">Update</button>
                <button class="btn"><a href="/myaccount">Back</a></button>


            </form>

        </div>

    </div>
    {{View::make('layout.footer')}}
    <script>
        function toggleIconPassword(x) {
            if (x.classList.contains('bi-eye')) {
                x.classList.remove("bi-eye");
                x.classList.add("bi-eye-slash");
            } else if (x.classList.contains("bi-eye-slash")) {
                x.classList.remove("bi-eye-slash");
                x.classList.add("bi-eye");
            }
            var y = document.getElementById("password");
            if (y.type == "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }

    </script>

</body>

</html>
