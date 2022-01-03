<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail | {{$title}}</title>
    <link rel="stylesheet" href="/Asset/css/detail.css">
</head>
<body>
    {{View::make('layout.header')}}
    <div class="container">
        @if ($errors->any())
        <legend>
            <div class="errror-box">
                {{$errors->first()}}
            </div>
        </legend>
        @endif
        <div class="container-left">
            <div class="gambar">
                <img src="{{Storage::url($data['image'])}}" alt="">
            </div>
            {{-- <h1>Add To Cart</h1> --}}
        </div>
        <div class="container-right">
            <div class="detail-container">
                <h1>{{$data['title']}}</h1>
                <div class="box">
                    <p>Description</p>
                    <div class="items">
                        <legend>{{$data['description']}}</legend>
                    </div>
                </div>
                <div class="box stock">
                    <p>Stock</p>
                    <div class="items">
                        <legend>{{$data['stock']}} Piece(s)</legend>
                    </div>
                </div>
                <div class="box price">
                    <p>Stock</p>
                    <div class="items">
                        <legend>Rp. {{$data['price']}},-</legend>
                    </div>
                </div>
                @if(Session::has('user'))
                @if(Session::get('user')['is_admin']==false)
                <form action="{{route('add_to_cart')}}" method="POST">
                    @csrf


                    <input type="hidden" name="product_id" value="{{$data['id']}}">
                    <input type="hidden" name="stock" value="{{$data['stock']}}">
                    <div class="box">
                        <p>Quantity</p>
                        <input type="number" name="quantity" id="quantity">
                    </div>

                    <button type="submit">Add to Cart</button>
                </form>
                @endif
                @endif
            </div>


        </div>

    </div>

    {{View::make('layout.footer')}}
</body>
</html>

