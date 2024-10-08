@extends('layouts.app')

@section('content')
    @include('partials.header')

    <div class="container">
        <h1>Player Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Team</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pemain as $player)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pemain->nama_pemain }}</td>
                        <td>{{ $pemain->no_punggung }}</td>
                        <td>{{ $pemain-> osisi_pemain}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No players found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        // Custom scripts if needed
    </script>
@endsection
