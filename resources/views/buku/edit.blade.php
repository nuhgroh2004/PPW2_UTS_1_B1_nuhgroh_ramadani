<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<a, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>ini halaman update</h2>
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="judul">Judul Buku:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}" required>

        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="{{ $buku->harga }}" required>

        <label for="tahun_terbit">tahun_terbit:</label>
        <input type="date" name="tahun_terbit" value="{{ $buku->tahun_terbit instanceof \DateTime ? $buku->tahun_terbit->format('d/m/y') : $buku->tahun_terbit }}" required>

        <button type="submit">Update</button>
        <a href="{{ route('buku.index') }}">Kembali</a>
    </form>
</body>
</html>
