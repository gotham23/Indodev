<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"> 

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    @include('layouts.header')

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Selamat Datang di Halaman Utama</h3>
                </div>
                <div class="card-body">
                    @if(Auth::check())
                        <p class="text-center">Halo, {{ Auth::user()->name }}! Selamat datang kembali di dasbor Anda.</p>

                        <form action="{{ route('logout') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </div>
                        </form>

    
                        <div class="d-grid">
                            <a href="{{ route('distributor.index') }}" class="btn btn-primary">Ke Distributor</a>
                        </div>
                    @else
                        <p class="text-center">Anda belum login.</p>
                        
                        
                        <div class="d-grid">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
