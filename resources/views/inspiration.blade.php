<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/inspiration.css') }}">
    <!-- Preconnect agar loading lebih cepat -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" />
    <title>Inspiration - Forte</title>

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/navbar.png" alt="Mika Logo" class="logo-img">
            </a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
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
                        <a class="nav-link" href="{{ route('inspiration') }}">Inspirations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/alita.jpg'); position: relative; height: 400px;">
        <!-- Overlay gelap -->
        <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 0;"></div>

        <!-- Teks tetap di tengah dan di atas overlay -->
        <div class="container" style="position: relative; z-index: 1;">
            <h1 style="color: #ffffff;">Where Style Begins</h1>
            <p style="color: #ffffff;">Find your inspiration</p>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <h2 style="color: rgba(69,93,88,1); margin-bottom: 1.5rem;">{{ $inspirations->total() }} Results</h2>
            <div class="row g-3">
                @forelse ($inspirations as $inspiration)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm" style="cursor: pointer;"
                            onclick="showInspirationPopup('{{ asset('storage/' . $inspiration->image_path) }}', '{{ $inspiration->name }}')">
                            <img src="{{ asset('storage/' . $inspiration->image_path) }}" alt="{{ $inspiration->name }}"
                                class="card-img-top rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                        </div>
                    </div>
                @empty
                    <p>Tidak ada inspirasi yang tersedia.</p>
                @endforelse
            </div>

            @if ($inspirations->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $inspirations->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>

        <!-- POPUP -->
        <div id="inspirationPopup" class="d-none position-fixed top-0 start-0 w-100 h-100"
            style="background: rgba(0, 0, 0, 0.7); z-index: 1050; display: flex; align-items: center; justify-content: center;">
            <div class="position-relative bg-white p-3 rounded shadow" style="max-width: 90%; max-height: 90%;">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                    onclick="closeInspirationPopup()"></button>
                <h5 id="inspirationTitle" class="mb-3 text-center"></h5>
                <img id="inspirationImage" src="" alt="Inspiration Image" class="img-fluid rounded"
                    style="max-height: 70vh; object-fit: contain;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showInspirationPopup(imageUrl, title) {
            const popup = document.getElementById("inspirationPopup");
            document.getElementById("inspirationImage").src = imageUrl;
            document.getElementById("inspirationTitle").textContent = title;
            popup.classList.remove("d-none");
        }

        function closeInspirationPopup() {
            const popup = document.getElementById("inspirationPopup");
            popup.classList.add("d-none");
        }

        // Klik luar konten untuk tutup popup
        document.getElementById("inspirationPopup").addEventListener("click", function (e) {
            if (e.target === this) closeInspirationPopup();
        });
    </script>


</body>

</html>