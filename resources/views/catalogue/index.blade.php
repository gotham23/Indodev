@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h3 class="text-center mb-4">List Catalogue</h3>

    <!-- Tombol Add Catalogue -->
    <div class="mb-3 text-end">
        <a href="{{ route('catalogue.create') }}" class="btn btn-sm btn-primary">Add Catalogue</a>
    </div>

    <!-- Tabel daftar katalog -->
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Beams</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogues as $catalogue)
                <tr>
                    <td>{{ $catalogue->beams }}</td>
                    <td>{{ $catalogue->description }}</td>
                    <td>{{ $catalogue->price }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('catalogue.edit', $catalogue->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <!-- Form untuk Delete -->
                        <form action="{{ route('catalogue.destroy', $catalogue->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus katalog ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
