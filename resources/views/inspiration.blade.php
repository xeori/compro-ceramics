<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/iconkurumi-removebg.png') }}" type="image/png" />

    <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Inspiration Keramik</title>
    <style>

    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/navbar.png" alt="Mika Logo" class="logo-img" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('product') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inspiration') }}">Inspiration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <h2 style="color: rgba(69,93,88,1); margin-bottom: 1.5rem;">Inspiration Keramik</h2>
            <div class="grid">
                @forelse ($inspirations as $inspiration)
                    <div class="card">
                        <img src="{{ asset('storage/' . $inspiration->image_path) }}" alt="{{ $inspiration->name }}" />
                        <div class="name">{{ $inspiration->name }}</div>
                    </div>
                @empty
                    <p>Tidak ada inspirasi yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <h3>Forte Ceramics</h3>
            <img src="assets/img/ias.png" alt="Logo Forte Ceramics" />
            <p class="small">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                labore et dolore
                magna aliqua.
            </p>
            <p>&copy; Forte Ceramics 2025</p>
        </div>
    </footer>
</body>

</html>