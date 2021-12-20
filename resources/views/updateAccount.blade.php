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
    @php

    @endphp

    <div class="container">
        <div class="box">
            <form action="{{route('account-update')}}" method="POST">
                @csrf
                <div class="form-group">
                    {{-- <h1>{{$select->name}}</h1> --}}
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="mbwekcenter" value="{{$select->name}}">
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <i onclick="toggleIconPassword(this)"class="bi bi-eye" id="togglePassword"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <p>Confirmation Password</p>
                    <i onclick="toggleIconPassword(this)"class="bi bi-eye" id="togglePassword"></i>
                    <input type="password" name="confpassword" id="confpassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <p>Gender</p>
                    <select class="inputs" name="gender"  id="gender">
                        @if ($select->gender=="Female")

                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        @else

                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        @endif

                    </select>
                </div>
                <button type="submit"  value="Register" class="btn">Update</button>


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



