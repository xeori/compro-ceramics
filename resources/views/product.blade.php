<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Pages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('assets/img/iconkurumi-removebg.png') }}" type="image/png" />

    <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
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
                        <a class="nav-link " href="">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inspiration') }}">Inspiration</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MAIN CONTENT -->
    <main class="container mb-5">

        {{-- FILTER & SEARCH FORM --}}
        <form method="GET" action="{{ route('product') }}" class="mb-4 d-flex flex-wrap gap-2">

            <select name="category" onchange="this.form.submit()" class="form-select w-auto">
                <option value="all">Semua Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->slug }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <select name="size" onchange="this.form.submit()" class="form-select w-auto">
                <option value="all">Semua Size</option>
                @foreach ($sizes as $size)
                    <option value="{{ $size->size }}" {{ request('size') === $size->size ? 'selected' : '' }}>
                        {{ $size->size }}
                    </option>
                @endforeach
            </select>

            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk..."
                class="form-control w-auto" />
            <button type="submit" class="btn btn-outline-custom">Cari</button>
        </form>



        {{-- LIST PRODUK --}}
        <div class="row" id="product-list">
            @forelse ($products as $product)
                <div class="col-6 col-md-4 mb-4">

                    <div class="card h-100 shadow-sm"
                        onclick="showPopup(
                                                                                                                                                                                                                                                                                                                                                            '{{ $product->name }}',
                                                                                                                                                                                                                                                                                                                                                            '{{ $product->category->name }}',
                                                                                                                                                                                                                                                                                                                                                            '{{ $product->size }}',
                                                                                                                                                                                                                                                                                                                                                            '{{ $product->description }}',
                                                                                                                                                                                                                                                                                                                                                            '{{ asset('storage/' . $product->image) }}'
                                                                                                                                                                                                                                                                                                                                                        )">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            style="aspect-ratio: 1 / 1; object-fit: cover;" />
                    </div>
                </div>
            @empty
                <p class="text-center">Tidak ada produk ditemukan.</p>
            @endforelse
        </div>

        {{-- PAGINATION --}}
        @if ($products->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </main>

    <!-- POPUP PRODUK -->
    <div id="productPopup" class="popup"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); align-items:center; justify-content:center; z-index:1050;">
        <div class="popup-content bg-white p-4 rounded" style="max-width:800px; width:90%;">
            <button class="btn-close float-end" onclick="closePopup()"></button>
            <div class="row mt-3 align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <img id="popupImage" src="" alt="Gambar Produk" class="img-fluid rounded border border-2" />
                </div>
                <div class="col-md-6">
                    <h3 id="popupTitle" class="mb-3"></h3>
                    <p><strong>Kategori:</strong> <span id="popupCategory"></span></p>
                    <p><strong>Ukuran:</strong> <span id="popupSize"></span></p>
                    <hr>
                    <p id="popupDesc"></p>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="container">
            <h3>Forte Ceramics</h3>
            <img src="assets/img/ias.png" alt="Logo Forte Ceramics" />
            <p class="small">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
            </p>
            <p>&copy; Forte Ceramics 2025</p>
        </div>
    </footer>
    <!-- JS -->
    <script>
        function showPopup(title, category, size, description, image) {
            document.getElementById("popupTitle").textContent = title;
            document.getElementById("popupCategory").textContent = category;
            document.getElementById("popupDesc").textContent = description;
            document.getElementById("popupImage").src = image;
            document.getElementById("popupSize").textContent = size; // Menampilkan ukuran produk

            const popup = document.getElementById("productPopup");
            popup.style.display = "flex";  // Menampilkan popup
        }

        // Fungsi untuk menutup popup
        function closePopup() {
            const popup = document.getElementById("productPopup");
            popup.style.display = "none";  // Langsung sembunyikan popup
        }

        // Menambahkan event listener pada popup untuk menutupnya ketika area luar diklik
        document.getElementById("productPopup").addEventListener("click", function (event) {
            // Cek apakah yang diklik adalah area luar popup (popup container)
            if (event.target === this) {
                closePopup();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>