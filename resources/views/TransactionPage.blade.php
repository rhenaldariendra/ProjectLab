<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/transactionpage.css">
    <title>TransactionPage</title>
</head>
<body>
    {{View::make('layout.header')}}

<div class = "judul">
    <p>Transaction</p>
</div>

<div class="container">
    <div class="box">
        <div class="box-top">
            <h3>No</h3>
            <h3>Transaction Time</h3>
            <h3>Detail Transaction</h3>
        </div>
        <div class="box-down">
            <div class="user-box">
                <h4>1</h4>
                <h5>2021-0002-0200</h5>
                <a href="Check Detail">Delete</a>
            </div>
        </div>
    </div>
    </div>
</div>

{{View::make('layout.footer')}}

</body>
</html>
