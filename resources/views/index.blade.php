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
                  <section class="section download-section content-section" id="download" style="
  padding: 60px 0;
  background-image: url('{{ asset('assets/img/laut.jpg') }}');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
">
                    <div class="container">
                      <div class="d-flex flex-wrap flex-md-nowrap justify-content-between align-items-center gap-4">
                        <!-- KIRI: Title dan Link (tetap kiri tapi vertikal tengah) -->
                        <div class="text-start" style="flex: 1; min-width: 200px;">
                          <h1 class=" mb-2">Products</h1>
                          <a href="{{ route('product') }}" class="view-link">View All -</a>
                        </div>


                        <!-- KANAN: Swiper -->
                        <div class="swiper" style="flex: 2;">
                          <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                              <div class="card shadow product-card" onclick="showPopup(this, event)">
                                <img src="assets/img/kos.jpg" class="card-img-top" />
                                <div class="card-body">
                                  <h5 class="card-title">Keramik Glossy</h5>
                                  <p class="card-text">Keramik dengan permukaan mengkilap untuk dapur atau kamar mandi.
                                  </p>
                                </div>
                              </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                              <div class="card shadow product-card" onclick="showPopup(this, event)">
                                <img src="assets/img/paper-texture-with-watercolor.jpg" class="card-img-top" />
                                <div class="card-body">
                                  <h5 class="card-title">Motif Alami</h5>
                                  <p class="card-text">Keramik bernuansa alam cocok untuk suasana tenang dan estetik.
                                  </p>
                                </div>
                              </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                              <div class="card shadow product-card" onclick="showPopup(this, event)">
                                <img src="assets/img/close.jpg" class="card-img-top" />
                                <div class="card-body">
                                  <h5 class="card-title">Keramik Minimalis</h5>
                                  <p class="card-text">Desain simple dan modern, cocok untuk hunian kontemporer.</p>
                                </div>
                              </div>
                            </div>

                            <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                            <div class="swiper-slide">
                              <div class="card shadow product-card" onclick="showPopup(this, event)">
                                <img src="assets/img/paper-texture-with-watercolor.jpg" class="card-img-top" />
                                <div class="card-body">
                                  <h5 class="card-title">Motif Alami</h5>
                                  <p class="card-text">Keramik bernuansa alam cocok untuk suasana tenang dan estetik.
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="swiper-slide">
                              <div class="card shadow product-card" onclick="showPopup(this, event)">
                                <img src="assets/img/paper-texture-with-watercolor.jpg" class="card-img-top" />
                                <div class="card-body">
                                  <h5 class="card-title">Motif Alami</h5>
                                  <p class="card-text">Keramik bernuansa alam cocok untuk suasana tenang dan estetik.
                                  </p>
                                </div>
                              </div>
                            </div>

                          </div>

                          <!-- Navigasi Panah -->
                          <div class="swiper-custom-nav mt-3 d-flex justify-content-center gap-4">
                            <img src="/assets/img/reshot-icon-right-arrow.svg" class="arrow arrow-left" />
                            <img src="/assets/img/reshot-icon-right-arrow.svg" class="arrow arrow-right" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="section content-section" id="contact">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
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
                    const swiper = new Swiper('.swiper', {
                      loop: true,
                      slidesPerView: 3,
                      spaceBetween: 16,
                      loopedSlides: 3,
                      navigation: {
                        nextEl: '.arrow-right',
                        prevEl: '.arrow-left',
                      },
                      breakpoints: {
                        320: { slidesPerView: 1, spaceBetween: 12 },
                        576: { slidesPerView: 2, spaceBetween: 16 },
                        992: { slidesPerView: 3, spaceBetween: 16 },
                        1200: { slidesPerView: 4, spaceBetween: 16 },
                      },
                    });




                  </script>

                  <!-- CARD ANIMASI (OPSIONAL) -->
                  <script>
                    function animateCard(card) {
                      card.classList.add("clicked");
                      setTimeout(() => {
                        card.classList.remove("clicked");
                      }, 300);
                    }
                  </script>



                  <script>
                    document.addEventListener("DOMContentLoaded", function () {
                      const sections = document.querySelectorAll(".section");

                      // Menambahkan kelas 'visible' ke setiap section saat halaman dimuat
                      sections.forEach((section) => {
                        section.classList.add("visible");
                      });
                    });

                    function revealOnScroll() {
                      const sections = document.querySelectorAll(".section");
                      const windowHeight = window.innerHeight;

                      sections.forEach((section) => {
                        const sectionTop = section.getBoundingClientRect().top;
                        const triggerPoint = windowHeight * 0.85; // bisa diubah sesuai keinginan

                        if (sectionTop < triggerPoint) {
                          section.classList.add("show");
                        }
                      });
                    }

                    window.addEventListener("scroll", revealOnScroll);
                    window.addEventListener("load", revealOnScroll); // trigger awal
                  </script>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      const navbar = document.getElementById('mainNav');

                      function toggleNavbarColor() {
                        if (window.scrollY > 50) { // bisa ganti 50 sesuai kebutuhan
                          navbar.classList.add('scrolled');
                        } else {
                          navbar.classList.remove('scrolled');
                        }
                      }

                      // cek saat scroll
                      window.addEventListener('scroll', toggleNavbarColor);

                      // cek juga saat load halaman (jika posisi awal sudah scroll)
                      toggleNavbarColor();
                    });
                  </script>

</body>

</html>