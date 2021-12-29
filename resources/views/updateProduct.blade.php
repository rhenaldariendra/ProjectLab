<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <link rel="stylesheet" href="/Asset/css/insert.css">
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="box">
            <form action="/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                {{method_field('PUT')}}
                @csrf
                <div class="form-group">
                    <p>Category</p>
                    <select name="category" id="category">
                        @if ($data['category']=='Animal')
                        <option value="Animal">Animal</option>
                        <option value="Food">Food</option>
                        <option value="Tools">Tools</option>
                        @elseif ($data['category']=='Produk')
                        <option value="Food">Food</option>
                        <option value="Animal">Animal</option>
                        <option value="Tools">Tools</option>
                        @else
                        <option value="Tools">Tools</option>
                        <option value="Animal">Animal</option>
                        <option value="Food">Food</option>
                        @endif

                    </select>
                </div>

                <div class="form-group">
                    <p>Title</p>
                    <input type="text" name="title" value="{{$data['title']}}" id="title">
                </div>

                <div class="form-group description">
                    <p>Description</p>
                    <textarea name="description" id="description" >{{$data['description']}}</textarea>
                    {{-- <input type="text" name="description" id="description"> --}}
                </div>

                <div class="form-group">
                    <p>Price</p>
                    <input type="text" name="price" value="{{$data['price']}}" id="price">
                </div>
                <div class="form-group">
                    <p>Stock</p>
                    <input type="number" name="stock" value="{{$data['stock']}}" id="stock">
                </div>
                <div class="form-group image">
                    <p>Image</p>
                    <input type="file" name="image" id="image">
                </div>
                <button class="btn">Submit</button>

            </form>
        </div>
    </div>




    {{View::make('layout.footer')}}
</body>
</html>

