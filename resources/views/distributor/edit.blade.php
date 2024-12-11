<!-- resources/views/distributor/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h3 class="text-center mb-4">Edit Distributor</h3>

    <form action="{{ route('distributor.update', $distributor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Nama Distributor</label>
            <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ old('name', $distributor->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ old('email', $distributor->email) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="phone">Telepon</label>
            <input type="text" class="form-control form-control-sm" id="phone" name="phone" value="{{ old('phone', $distributor->phone) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="address">Alamat</label>
            <textarea class="form-control form-control-sm" id="address" name="address" required>{{ old('address', $distributor->address) }}</textarea>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Update Distributor</button>
    </form>
</div>
@endsection
