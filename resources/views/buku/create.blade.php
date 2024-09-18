<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <h4>tambah buku</h4>

        <form method="post" action="{{Route('buku.store')}}">

            @csrf

            <div>judul<input type="text" name="judul"></div>

            <div>penulis<input type="text" name="penulis"></div>

            <div>harga<input type="text" name="harga"></div>

            <div>tahun_terbit<input type="date" name="tahun_terbit"></div>

            <button type="submit">simpan</button>

            <a href="{{Route('buku.index')}}">kembali</a>

        </form>

    </div>
</body>
</html>
