<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

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
    @include('partials.header')
    <header class="masthead" style="background-image: url('assets/img/salira.jpg'); position: relative; height: 400px;">
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
            <h2 style="color: rgba(69,93,88,1); margin-bottom: 1.5rem;">
                {{ $inspirations->total() }} Results
            </h2>

            <div class="row g-3">
                @forelse ($inspirations as $inspiration)
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="{{ asset('storage/' . $inspiration->image_path) }}" data-fancybox="gallery"
                            data-caption="{{ $inspiration->name }}" class="d-block h-100">
                            <div class="card h-100 border-0 shadow-sm" style="cursor: zoom-in;">
                                <img src="{{ asset('storage/' . $inspiration->image_path) }}" alt="{{ $inspiration->name }}"
                                    class="card-img-top rounded" style="aspect-ratio: 1/1; object-fit: cover;">
                            </div>
                        </a>
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

    </main>



    @include('partials.footer')

    @include('partials.whatsapp')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            Toolbar: {
                display: [
                    { id: "close", position: "end" },
                    "zoom",
                    "fullscreen",
                    "close",
                ]
            },
            dragToClose: true,
            animated: true,
        });
    </script>



</body>

</html>