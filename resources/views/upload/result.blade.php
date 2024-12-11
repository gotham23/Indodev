@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="text-center mb-4">File Directory</h3>

    <!-- Tampilkan pesan sukses setelah upload -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel hasil upload -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Nama Penulis</th>
                <th>Nama File</th>
                <th>Unduh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uploads as $upload)
                <tr>
                    <td>{{ $upload->title }}</td>
                    <td>{{ $upload->author }}</td>
                    <td>{{ $upload->filename }}</td>
                    <td><a href="{{ Storage::url($upload->filepath) }}" class="btn btn-primary" download>Unduh</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mb-4 text-center">
        <a href="{{ route('upload.index') }}" class="btn btn-primary">Tambah File</a>
    </div>
</div>
@endsection
