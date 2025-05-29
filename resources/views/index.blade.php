<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Home - Brand</title>
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <!-- Preconnect agar loading lebih cepat -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="icon" href="{{ asset('assets/img/iconkurumi-removebg.png') }}" type="image/png" />


</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
  <nav class="navbar navbar-expand-md fixed-top" id="mainNav" style="color: #fff">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/navbar.png" alt="Mika Logo" class="logo-img">
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" type="button"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color: #fff"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/"">Home</a>
          </li>
          <li class=" nav-item">
              <a class="nav-link" href="{{ route('product') }}"">Product</a>
          </li>
          <li class=" nav-item">
                <a class="nav-link" href="{{ route('inspiration') }}"">Inspirations</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class=" masthead" style="background-image: url('assets/img/salira.jpg'); position: relative;">
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
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s
                          </p>
                          <p>
                            Curabitur bibendum sem in risus euismod viverra. Pellentesque
                            pellentesque consectetur metus nec elementum.
                          </p>
                          <p>
                            Grayscale includes full HTML, CSS, and custom JavaScript files
                            along with SASS and LESS files for easy customization!
                          </p>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="py-5">
                    <div class="container col-md-12">
                      <h2 style="margin-bottom: 0.5rem;">Product</h2>
                      <p style="margin-top: 0;">Elegant, durable floor tiles to elevate your interior space with style
                        and strength.</p>

                      <a href="{{ route('product') }}" class="view-link">View All</a>
                    </div>

                    <div class="container">
                      <div class="row flex-nowrap overflow-auto" style="scroll-snap-type: x mandatory;">
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/lora-black.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/larantuka-brown.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/laut-black.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/balatu-brown.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/salira-blue.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 px-2" style="scroll-snap-align: start;">
                          <figure>
                            <img src="{{ asset('assets/img/aralle-cream.jpg') }}" class="img-fluid rounded" alt="">
                          </figure>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="section content-section" id="contact">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12 mx-auto">
                          <h2>Contact us</h2>
                          <p>
                            Etiam nec quam vitae nisi blandit congue nec a nunc. Donec nec
                            nibh sodales quam consectetur iaculis!
                          </p>
                          <ul class="list-inline banner-social-buttons">
                            <li class="list-inline-item">
                              &nbsp;<button class="btn btn-primary btn-lg btn-default" type="button">
                                <i class="fa fa-google-plus fa-fw"></i><span>&nbsp; Google+</span>
                              </button>
                            </li>
                            <li class="list-inline-item">
                              &nbsp;<button class="btn btn-primary btn-lg btn-default" type="button">
                                <i class="fa fa-twitter fa-fw"></i><span>&nbsp;Twitter</span>
                              </button>
                            </li>
                            <li class="list-inline-item">
                              &nbsp;<button class="btn btn-primary btn-lg btn-default" type="button">
                                <i class="fa fa-github fa-fw"></i><span>&nbsp;github</span>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </section>
                  <div>
                    <iframe allowfullscreen="" frameborder="0"
                      src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="450"></iframe>
                  </div>
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
                  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
                  <script src="{{ asset('assets/js/grayscale.js') }}"></script>

                  <!-- SWIPER JS -->
                  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                  <script>
                    const swiper = new Swiper('.mySwiper', {
                      slidesPerView: 3,
                      spaceBetween: 30,
                      loop: false,
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                      breakpoints: {
                        0: {
                          slidesPerView: 1,
                        },
                        576: {
                          slidesPerView: 2,
                        },
                        992: {
                          slidesPerView: 3,
                        },
                      }
                    });
                  </script>
                  <script>
                    window.addEventListener("scroll", function () {
                      const nav = document.getElementById("mainNav");
                      if (window.scrollY > 50) {
                        nav.classList.add("scrolled");
                      } else {
                        nav.classList.remove("scrolled");
                      }
                    });
                  </script>


</body>

</html>