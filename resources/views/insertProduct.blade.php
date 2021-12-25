<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/insert.css">
    <title>Insert Product</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="container">
        <div class="box">
            <form action="{{route('insert-image')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <p>Category</p>
                    <select name="category" id="category">
                        <option value="Animal">Animal</option>
                        <option value="Food">Food</option>
                        <option value="Tools">Tools</option>
                    </select>
                </div>

                <div class="form-group">
                    <p>Title</p>
                    <input type="text" name="title" id="title">
                </div>

                <div class="form-group description">
                    <p>Description</p>
                    <textarea name="description" id="description" ></textarea>
                    {{-- <input type="text" name="description" id="description"> --}}
                </div>

                <div class="form-group">
                    <p>Price</p>
                    <input type="text" name="price" id="price">
                </div>
                <div class="form-group">
                    <p>Stock</p>
                    <input type="number" name="stock" id="stock">
                </div>
                <div class="form-group image">
                    <p>Image</p>
                    <input type="file" name="image" id="image">
                </div>
                <button type="submit" class="btn">Submit</button>

            </form>
        </div>
    </div>

    {{View::make('layout.footer')}}
</body>
</html>

