<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/home.css">
    <link rel="stylesheet" href="/Asset/css/product.css">

    <title>Home</title>
</head>

<body>
    {{View::make('layout.header')}}

    <div class="product-container">

        @foreach ($listProducts as $item=>$data)
        <div class="product-box">
            <div class="slide-img">
                <img src="{{Storage::url($data->image)}}" alt="" />
                <div class="overlay">
                    @if(Session::has('user'))
                    <a href="detail/{{$data->id}}" class="buy-btn">Product Detail</a>
                    @if(Session::get('user')['is_admin']==true)
                    <a href="update/{{$data->id}}/edit" class="buy-btn">Update Product</a>
                    @endif
                    @else
                    <a href="detail/{{$data->id}}" class="buy-btn">Product Detail</a>
                    @endif
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="detail/{{$data->id}}">{{$data->title}}</a>
                </div>
                <a href="detail/{{$data->id}}" class="price">Rp. {{$data->price}}</a>
            </div>
        </div>
        @endforeach

    </div>


    {{View::make('layout.footer')}}
</body>

</html>
