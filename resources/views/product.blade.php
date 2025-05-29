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
    <!-- Preconnect agar loading lebih cepat -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
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
                        <a class="nav-link " href="">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inspiration') }}">Inspirations</a>
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
                    <div class="card h-100 shadow-sm" onclick="showPopup(
                                                                                            '{{ $product->name }}',
                                                                                            '{{ $product->category->name }}',
                                                                                            '{{ $product->size }}',
                                                                                            `{{ str_replace('`', '\`', $product->description) }}`,
                                                                                            '{{ asset('storage/' . $product->image) }}',
                                                                                            '{{ $product->inspiration ? asset('storage/' . $product->inspiration->image_path) : '' }}'
                                                                                        )">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            style="aspect-ratio: 1 / 1; object-fit: cover;" />
                    </div>
                </div>
            @empty
                <p class="text-center">Tidak ada produk ditemukan.</p>
            @endforelse
        </div>
        @if ($products->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        @endif

        <!-- POPUP PRODUK -->
        <div id="productPopup" class="popup"
            style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); align-items:center; justify-content:center; z-index:1050;">
            <div class="popup-content bg-white p-4 rounded" style="max-width:1200px; width:90%;">
                <button class="btn-close float-end" onclick="closePopup()"></button>
                <div class="row mt-3 align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <!-- Bootstrap Carousel tanpa data-bs-ride -->
                        <div id="popupCarousel" class="carousel slide" data-bs-ride="false" data-bs-wrap="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="popupImage" src="" alt="Gambar Produk"
                                        class="d-block w-100 rounded border border-2" />
                                </div>
                                <div class="carousel-item">
                                    <img id="popupInspiration" src="" alt="Gambar Inspirasi"
                                        class="d-block w-100 rounded border border-2" />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#popupCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#popupCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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

    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inisialisasi carousel sekali saja di luar fungsi
        const carouselEl = document.getElementById('popupCarousel');
        const carousel = new bootstrap.Carousel(carouselEl, {
            wrap: false,
            interval: false,
            keyboard: true,
            pause: 'hover'
        });

        function showPopup(title, category, size, description, image, inspirationImage) {
            document.getElementById("popupTitle").textContent = title;
            document.getElementById("popupCategory").textContent = category;
            document.getElementById("popupSize").textContent = size;
            document.getElementById("popupDesc").textContent = description;

            // Set gambar produk
            document.getElementById("popupImage").src = image;

            // Ambil elemen carousel item kedua (inspiration)
            const inspirationItem = carouselEl.querySelectorAll('.carousel-item')[1];
            const popupInspiration = document.getElementById("popupInspiration");

            if (inspirationImage && inspirationImage.trim() !== '') {
                popupInspiration.src = inspirationImage;
                inspirationItem.classList.add('active');
                inspirationItem.style.display = ''; // pastikan visible
            } else {
                popupInspiration.src = '';
                inspirationItem.classList.remove('active');
                inspirationItem.style.display = 'none'; // sembunyikan jika tidak ada gambar inspo
            }

            // Set slide pertama sebagai active jika tidak ada inspiration, atau pertama tetap aktif
            const firstItem = carouselEl.querySelectorAll('.carousel-item')[0];
            if (!inspirationImage || inspirationImage.trim() === '') {
                firstItem.classList.add('active');
            } else {
                firstItem.classList.remove('active');
            }

            // Reset carousel ke slide pertama (produk)
            carousel.to(0);

            // Tampilkan popup
            document.getElementById("productPopup").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("productPopup").style.display = "none";
        }

        // Tutup popup jika klik di luar konten popup
        document.getElementById("productPopup").addEventListener("click", function (event) {
            if (event.target === this) {
                closePopup();
            }
        });
    </script>


</body>

</html>