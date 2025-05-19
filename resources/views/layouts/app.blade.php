<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSFT Pro</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">MSFT Pro</div>
            <div class="menu">
                <a href="#">Beranda</a>
                <a href="{{ route('penyakits.index') }}">Pengguna</a>
                <a href="#" class="active">Penyakit</a>
                <a href="#">Gejala</a>
                <a href="#">Basis Pengetahuan</a>
                <a href="#">Keluar</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>