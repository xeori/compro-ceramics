<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product - Forte</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:400,700,400italic,700italic&family=Cabin:700&family=Quicksand&display=swap"
        rel="stylesheet" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>

    @include('partials.header')

    <main class="container mb-5">

        {{-- FILTER & SEARCH FORM --}}
        <form method="GET" action="{{ route('product') }}" class="mb-4 d-flex flex-wrap gap-2">
            <select name="category" onchange="this.form.submit()" class="form-select w-auto">
                <option value="all">Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->slug }}" {{ request('category') === $category->slug ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <select name="size" onchange="this.form.submit()" class="form-select w-auto">
                <option value="all">Size</option>
                @foreach ($sizes as $size)
                    <option value="{{ $size->size }}" {{ request('size') === $size->size ? 'selected' : '' }}>
                        {{ $size->size }}
                    </option>
                @endforeach
            </select>

            <input type="text" name="search" value="{{ request('search') }}" placeholder="Product Name"
                class="form-control w-auto" />
            <button type="submit" class="btn btn-outline-custom">Search</button>
        </form>

        {{-- LIST PRODUK --}}
        <div class="row" id="product-list">
            @foreach ($products as $index => $product)
                <div class="col-6 col-md-4 mb-4">
                    <div class="card" style="cursor:pointer;" onclick="showPopupByIndex({{ $index }})">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            style="aspect-ratio:1 / 1; object-fit:cover;" alt="{{ $product->name }}" />

                    </div>
                </div>
            @endforeach
            @if ($products->isEmpty())
                <p class="text-center">No products found.</p>
            @endif
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
                <button class="btn-close float-end" aria-label="Close" onclick="closePopup()"></button>
                <div class="row mt-3 align-items-center">
                    <!-- Gambar Produk -->
                    <div class="col-md-6 mb-3 mb-md-0">
                        <img id="popupImage" src="" alt="Gambar Produk" class="d-block w-100 rounded border border-2" />
                    </div>

                    <!-- Informasi Produk -->
                    <div class="col-md-6">
                        <h3 id="popupTitle" class="mb-3"></h3>
                        <p><strong>Kategori:</strong> <span id="popupCategory"></span></p>
                        <p><strong>Ukuran:</strong> <span id="popupSize"></span></p>
                        <hr />
                        <p id="popupDesc"></p>

                        <!-- Gambar Inspirasi -->
                        <div id="inspirationWrapper" class="mb-3" style="display:none;">
                            <a id="popupInspirationLink" href="#" data-fancybox="inspiration">
                                <img id="popupInspirationThumbnail" src="" alt="Gambar Inspirasi"
                                    class="img-fluid rounded border border-2" />
                            </a>
                        </div>

                        <!-- Navigasi panah -->
                        <div class="custom-navigation d-flex gap-3" style="flex-shrink:0;">
                            <button class="custom-prev btn btn-light" aria-label="Previous">
                                <img src="{{ asset('assets/img/arrow-right.svg') }}" alt="Prev"
                                    style="transform: scaleX(-1); width:24px; height:24px;" />
                            </button>
                            <button class="custom-next btn btn-light" aria-label="Next">
                                <img src="{{ asset('assets/img/arrow-right.svg') }}" alt="Next"
                                    style="width:24px; height:24px;" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('partials.footer')
    @include('partials.whatsapp')

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script>
        // Inisialisasi Fancybox untuk gambar inspirasi
        Fancybox.bind('[data-fancybox="inspiration"]', {
            Toolbar: {
                display: [
                    { id: "close", position: "end" },
                    "zoom",
                    "fullscreen",
                    "close"
                ]
            },
            dragToClose: true,
            animated: true
        });

        // Data produk dari Blade ke JS
        const productsData = [
            @foreach ($products as $product)
                                                                {
                    name: `{{ addslashes($product->name) }}`,
                    category: `{{ addslashes($product->category->name) }}`,
                    size: `{{ addslashes($product->size) }}`,
                    description: `{{ str_replace('`', '\\`', $product->description) }}`,
                image: `{{ asset('storage/' . $product->image) }}`,
                inspiration: `{{ $product->inspiration ? asset('storage/' . $product->inspiration->image_path) : '' }}`
                                                                },
            @endforeach
        ];

        let currentIndex = 0;

        function updatePopup(i) {
            if (i < 0) i = productsData.length - 1;
            if (i >= productsData.length) i = 0;
            currentIndex = i;

            const p = productsData[i];

            document.getElementById('popupTitle').textContent = p.name;
            document.getElementById('popupCategory').textContent = p.category;
            document.getElementById('popupSize').textContent = p.size;
            document.getElementById('popupDesc').textContent = p.description;
            document.getElementById('popupImage').src = p.image;

            const inspWrap = document.getElementById('inspirationWrapper');
            const inspLink = document.getElementById('popupInspirationLink');
            const inspThumb = document.getElementById('popupInspirationThumbnail');

            if (p.inspiration && p.inspiration.trim() !== '') {
                inspWrap.style.display = 'block';
                inspLink.href = p.inspiration;
                inspThumb.src = p.inspiration;
            } else {
                inspWrap.style.display = 'none';
                inspLink.href = '#';
                inspThumb.src = '';
            }
        }

        function showPopupByIndex(i) {
            updatePopup(i);
            document.getElementById('productPopup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('productPopup').style.display = 'none';
        }

        // Event listeners navigasi
        document.querySelector('.custom-next').addEventListener('click', () => updatePopup(currentIndex + 1));
        document.querySelector('.custom-prev').addEventListener('click', () => updatePopup(currentIndex - 1));

        // Tutup popup tombol close
        document.querySelector('.btn-close').addEventListener('click', closePopup);

        // Tutup popup saat klik di luar isi popup
        document.getElementById('productPopup').addEventListener('click', e => {
            if (e.target === e.currentTarget) closePopup();
        });
    </script>

</body>

</html>