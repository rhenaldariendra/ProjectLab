<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/myprofile.css">
    <title>My Account</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="container-box">
            <div class="data">
                <h2>Name</h2>
                <div class="inputs ">
                    <p>{{Auth::user()->name}}</p>
                </div>
            </div>
            <div class="data">
                <h2>Email</h2>
                <div class="inputs tes">
                    <p>{{Auth::user()->email}}</p>
                </div>


            </div>
            <div class="data">
                <h2>Gender</h2>
                <div class="inputs">
                    <p>{{Auth::user()->gender}}</p>
                </div>
            </div>

            <div class="btn update">
                <a href="/updateAccount">Update Profile</a>
            </div>
            <div class="btn password">
                <a href="/changePassword">Change Password</a>
            </div>
            <div class="btn transaction">
                <a href="#">Transaction History</a>
            </div>



        </div>
    </div>


    {{View::make('layout.footer')}}
</body>
</html>

