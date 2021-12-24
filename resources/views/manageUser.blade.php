<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage User</title>
    <link rel="stylesheet" href="/Asset/css/user.css">
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="box">
            <div class="box-top">
                <h3>Manage Users</h3>
            </div>
            <div class="box-down">
                @foreach ($listUsers as $item=>$data)
                @if (!$data->is_admin)
                <div class="user-box">
                    <p>{{$data->name}}</p>
                    <a href="deleteUser/{{$data->id}}">Delete</a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>


    {{View::make('layout.footer')}}
</body>
</html>

