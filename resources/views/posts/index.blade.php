<!DOCTYPE html>
<html>
<head>
    <title>Daftar Berita</title>
</head>
<body>
    <h1>Daftar Berita</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p>Kategori: {{ $post->category->name }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
