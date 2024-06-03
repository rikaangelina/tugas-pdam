<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('pdam')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        @csrf 
        <input type="text" placeholde="masukan jumlah pemakaian" name="pemakaian">
        <button type="summit">kirim</button>
</body>
</html>