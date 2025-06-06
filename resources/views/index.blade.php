<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Home - Forte</title>
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <!-- Preconnect agar loading lebih cepat -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png" />
  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
  <nav class="navbar navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="logo-img" style="width: 50px; padding-right: 3px;">
        <img src=" assets/img/navbar.png" alt="Mika Logo" class="logo-img">
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color: #000000"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="{{ route('product') }}">Product</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="{{ route('inspiration') }}">Inspirations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('assets/catalog.pdf') }}" download>Catalog</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <header class=" masthead" style="background-image: url('assets/img/larantuka-bg.jpg'); position: relative;">
    <!-- Overlay gelap -->
    <div style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 0;"></div>

    <!-- Konten di atas overlay -->
    <div class="intro-body" style="position: relative; z-index: 1;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="brand-heading" style="color: #ffffff">Forte Ceramics</h1>
            <p class="intro-text" style="color: #ffffff">
              Image Of Quality.
            </p>
            <a class="btn btn-link btn-circle" role="button" href="#about"
              style="color: #ffffff; background: rgba(255, 255, 255, 0)">
              <i class="fa fa-angle-double-down" style="color: #ffffff"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section text-center content-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About us</h2>
          <p>
            Discover our premium ceramic tiles, crafted to bring timeless elegance and durability to your
            space.
          </p>
          <p>
            Perfect for any room, our tiles combine exceptional quality with stunning designs to elevate
            your home or office.
          </p>
          <p>
            Easy to install and maintain, our ceramic collection offers lasting beauty that withstands
            daily wear and tear.
          </p>

        </div>
      </div>
    </div>
  </section>
  <section class="py-5" style="background-color: rgba(0, 0, 0, 0.048);">
    <div class="container col-md-12">
      <h2 style="margin-bottom: 0.5rem;">Product</h2>
      <p style="margin-top: 0;">Elegant, durable floor tiles to elevate your interior space with style
        and strength.</p>


    </div>

    <div class="container">
      <div id="autoScrollRow" class="row flex-nowrap overflow-auto" style="scroll-snap-type: x mandatory;">
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/lora-black.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/larantuka-brown.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/laut-black.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/balatu-brown.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/salira-blue.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
        <div class="col-6 col-sm-4 col-md-4 px-2" style="scroll-snap-align: start;">
          <figure>
            <img src="{{ asset('assets/img/aralle-cream.jpg') }}" class="img-fluid rounded" alt="">
          </figure>
        </div>
      </div>
      <br>
      <a href="{{ route('product') }}" class="view-link">View All</a>
    </div>

  </section>

  <section class="section content-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Contact Us</h2>
          <p>Feel free to reach out to us on WhatsApp for further information.</p>
          <div class="d-flex flex-column flex-md-row align-items-start gap-3 mt-4">
            <!-- WhatsApp 1 -->
            <a href="https://wa.me/628176838862" target="_blank"
              class="text-decoration-none d-flex align-items-center gap-2">
              <img src="{{ asset('assets/img/whatsapp.svg') }}" alt="WhatsApp" width="24" height="24">
              <span>+62 8176838862</span>
            </a>

            <!-- WhatsApp 2 -->
            <a href="https://wa.me/6281318803696" target="_blank"
              class="text-decoration-none d-flex align-items-center gap-2">
              <img src="{{ asset('assets/img/whatsapp.svg') }}" alt="WhatsApp" width="24" height="24">
              <span>+62 81318803696</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>



  <section style="background-color: white">
    <!-- Slider full width tanpa container -->
    <div class="swiper mySwiper  overflow-hidden shadow">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="{{ asset('assets/img/toba-black.jpg') }}" data-fancybox="slider-gallery" data-caption="Toba Black">
            <img src="{{ asset('assets/img/toba-black.jpg') }}" class="img-fluid w-100 h-100 object-cover"
              alt="Toba Black" />
          </a>
        </div>

        <div class="swiper-slide">
          <a href="{{ asset('assets/img/rote.jpg') }}" data-fancybox="slider-gallery" data-caption="Tatum Wood">
            <img src="{{ asset('assets/img/rote.jpg') }}" class="img-fluid w-100 h-100 object-cover" alt="Tatum Wood" />
          </a>
        </div>

        <div class="swiper-slide">
          <a href="{{ asset('assets/img/haruku-white.jpg') }}" data-fancybox="slider-gallery"
            data-caption="haruku white">
            <img src="{{ asset('assets/img/haruku-white.jpg') }}" class="img-fluid w-100 h-100 object-cover"
              alt="Tatum Wood" />
          </a>
        </div>

      </div>
    </div>

    <!-- Custom nav + caption di bawah slider -->
    <div class="d-flex justify-content-between align-items-center mt-3 px-4">
      <!-- Keterangan gambar di kiri -->
      <div id="caption" class="text-start" style="flex: 1; font-weight: 600;">
        Toba Black
      </div>

      <!-- Navigasi panah di kanan -->
      <div class="custom-navigation d-flex gap-3" style="flex-shrink: 0;">
        <button class="custom-prev btn btn-light ">
          <img src="{{ asset('assets/img/arrow-right.svg') }}" alt="Prev"
            style="transform: scaleX(-1); width: 24px; height: 24px;" />
        </button>
        <button class="custom-next btn btn-light ">
          <img src="{{ asset('assets/img/arrow-right.svg') }}" alt="Next" style="width: 24px; height: 24px;" />
        </button>
      </div>
    </div>
  </section>






  @include('partials.footer')

  @include('partials.whatsapp')

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const captions = ["Toba Black", "Tatum Wood Cream", "Haruku White"];

    const swiper = new Swiper(".mySwiper", {
      loop: false,
      navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev",
      },
      slidesPerView: 1,
      spaceBetween: 20,
      on: {
        slideChange: function () {
          // update caption text sesuai slide aktif
          // karena loop true, gunakan realIndex
          document.getElementById("caption").textContent = captions[this.realIndex];
        },
      },
    });
  </script>



  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/grayscale.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const scrollContainer = document.getElementById('autoScrollRow');

      setInterval(() => {
        if (!scrollContainer) return;

        // Jika sudah mencapai ujung kanan, kembali ke awal
        if (
          scrollContainer.scrollLeft + scrollContainer.clientWidth >=
          scrollContainer.scrollWidth
        ) {
          scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          scrollContainer.scrollBy({ left: 300, behavior: 'smooth' }); // geser kanan
        }
      }, 2000);
    });
  </script>
  <script>
    window.addEventListener('scroll', function () {
      const navbar = document.getElementById('mainNav');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
  <script>
    window.addEventListener('scroll', function () {
      const navbar = document.getElementById('mainNav');
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-shrink');
      } else {
        navbar.classList.remove('navbar-shrink');
      }
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <script>

    // Fancybox config (untuk popup)
    Fancybox.bind('[data-fancybox="slider-gallery"]', {
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