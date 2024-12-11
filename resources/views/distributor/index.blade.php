<!-- resources/views/distributor/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h3 class="text-center mb-4">List Distribution</h3>

    <!-- Tombol untuk menambah distributor -->
    

    <!-- Tabel daftar distributor -->
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City/Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributors as $distributor)
                <tr>
                    <td>{{ $distributor->name }}</td>
                    <td>{{ $distributor->email }}</td>
                    <td>{{ $distributor->phone }}</td>
                    <td>{{ $distributor->address }}</td>
                    <td>
                        <a href="{{ route('distributor.edit', $distributor->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('distributor.destroy', $distributor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this distributor?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mb-3 text-end">
        <a href="{{ route('distributor.create') }}" class="btn btn-sm btn-primary">Add Distribution</a>
    </div>
</div>
@endsection
