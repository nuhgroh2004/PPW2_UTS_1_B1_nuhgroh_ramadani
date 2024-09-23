<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table class="table mt-3">
        <thead class="table-light">
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>harga</th>
                <th>Tahun Terbit</th>
                <th  class="text-center">Hapus</th>
                <th  class="text-center">Update</th>
            </tr>
        </thead>
        <tbody>
{{--  --}}
            @foreach($data_buku as $index => $Buku){{-- foreach digunakan untuk iterasii perulangan melalui data buku --}}
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$Buku->judul}}</td>
                <td>{{$Buku->penulis}}</td>
                <td>Rp. {{number_format($Buku->harga,2,',','.')}}</td>
                <td>{{ $Buku->tahun_terbit instanceof \DateTime ?
                $Buku->tahun_terbit->format('d/m/y') : $Buku->tahun_terbit }}</td>
                <td  class="text-center">
                    <form action = "{{ route('buku.destroy', $Buku->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Yakin mau dihapus')" type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                <td class="text-center">
                    <a href="{{ route('buku.edit', $Buku->id) }}" class="btn btn-primary">Update</a>
                </td>
            @endforeach
        </tbody>
      </table>
    <div class="d-flex justify-content-center mt-3 mb-3">
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>
    <div class="container mt-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-book"></i> Informasi Buku</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <i class="fas fa-book-open fa-3x text-info mb-3"></i>
                        <p class="card-text h5">Total Buku:</p>
                        <p class="display-4 font-weight-bold text-primary">{{ $jumlah_buku }}</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fas fa-dollar-sign fa-3x text-success mb-3"></i>
                        <p class="card-text h5">Total Harga Semua Buku:</p>
                        <p class="display-4 font-weight-bold text-success">Rp. {{ number_format($total_harga, 2, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
