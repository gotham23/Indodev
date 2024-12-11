@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h3 class="text-center mb-4">Edit Katalog</h3>

    <!-- Form Edit Katalog -->
    <form action="{{ route('catalogue.update', $catalogue->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="beams" class="form-label">Beams</label>
            <input type="text" class="form-control" id="beams" name="beams" value="{{ $catalogue->beams }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $catalogue->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $catalogue->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Katalog</button>
    </form>
</div>
@endsection
