<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/cart.css">
    <title>Cart</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="box">
            <div class="box-top">
                <div class="no">
                    <p>No</p>
                </div>
                <div class="item-name">
                    <p>Item Name</p>
                </div>
                <div class="price">
                    <p>Price</p>
                </div>
                <div class="quantity">
                    <p>Quantity</p>
                </div>
                <div class="sub-total">
                    <p>Sub Total</p>
                </div>
                <div class="delete">
                    <p>Delete</p>
                </div>
            </div>
            <div class="box-down">
                @foreach ($user as $item)

                {{-- {{$no = 1}} --}}
                <div class="cart-data">
                    <div class="no">
                        <p>{{$loop->iteration}}</p>
                    </div>
                    <div class="item-name">
                        <p>{{$item->product[0]->title}}</p>
                    </div>
                    <div class="price">
                        <p>{{$item->product[0]->price}}</p>
                    </div>
                    <div class="quantity">
                        <p>{{$item->quantity}}</p>
                    </div>
                    <div class="sub-total">
                        <p>{{$item->quantity * $item->product[0]->price}}</p>
                    </div>
                    <div class="delete">
                        <a href="/deleteItemCart/{{$item->id}}">Delete</a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <div class="checkout">
            <h3>Grand Total = Rp. {{$total}}</h3>
            <a href="#">Checkout</a>
        </div>

    </div>

    {{View::make('layout.footer')}}
</body>
</html>

