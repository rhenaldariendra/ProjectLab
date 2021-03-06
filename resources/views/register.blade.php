<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/login_reg.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Register</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">
        <div class="box">
            <form action="{{route('register-user')}}" method="POST">
                @csrf
                <div class="form-group">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="mbwekcenter" value="{{old('name')}}">
                    @error('name')
                    <div class="error-msg">
                        <strong>
                            {{$message}}
                        </strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="mbwekcenter@binus.ac.id" value="{{old('email')}}">
                    @error('email')
                    <div class="error-msg">
                        <strong>
                            {{$message}}
                        </strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Password</p>
                    <input type="password" name="password" id="password" placeholder="Password">
                    @error('password')
                    <div class="error-msg">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <p>Confirmation Password</p>
                    <input type="password" name="confirmation" id="confirmation" placeholder="Password">
                    @error('confirmation')
                    <div class="error-msg">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <p>Gender</p>
                    <select class="inputs" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <div class="error-msg">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <button type="submit"  value="Register" class="btn">Regsiter</button>


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
