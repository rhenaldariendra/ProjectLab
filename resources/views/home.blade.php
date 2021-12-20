<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/home.css">
    <title>Home</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="contents">

        <div class="box">
            <div class="slide-img">
              <img src="./Asset/Image/lab_1.jpg" alt="" />
              <div class="overlay">
                @if(Session::has('user'))
                <a href="#" class="buy-btn">Product Detail</a>
                    @if(Session::get('user')['is_admin']==true)
                    <a href="#" class="buy-btn">Update Product</a>
                    @endif
                @else
                <a href="#" class="buy-btn">Product Detail</a>
                @endif
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Ayam Kampus</a>
              </div>
              <a href="#" class="price">Semasuknya kantung mahasiswa</a>
            </div>
        </div>

    </div>


    {{View::make('layout.footer')}}
</body>
</html>
