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
  <nav class="navbar navbar-expand-md fixed-top" id="mainNav" style="color: rgb(255, 255, 255)">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: rgb(255, 255, 255)">Mika</a><button data-bs-toggle="collapse"
        class="navbar-toggler" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation" value="Menu">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item nav-link">
            <a class="nav-link active" href="#about" style="color: rgb(255, 255, 255)">About</a>
          </li>
          <li class="nav-item nav-link">
            <a class="nav-link" href="#download" style="color: rgb(255, 255, 255)">Product</a>
          </li>
          <li class="nav-item nav-link">
            <a class="nav-link" href="#contact" style="color: rgb(255, 255, 255)">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead" style="background-image: url('assets/img/dashboard.jpeg')">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="brand-heading" style="color: #ffffff">
              Flow Ceramics
            </h1>
            <p class="intro-text" style="color: #ffffff">
              we have all the ceramics in the world.<br />Created with love.
            </p>
            <a class="btn btn-link btn-circle" role="button" href="#about"
              style="color: #ffffff; background: rgba(255, 255, 255, 0)"><i class="fa fa-angle-double-down"
                style="color: #ffffff"></i></a>
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
  <section class="section text-center download-section content-section" id="download" style="
        background: linear-gradient(to right, transparent 65%, #ffffff 35%),
          url('assets/img/flat-flay.jpg') left center no-repeat;
        background-size: 100% 100%, 50% 80%;
        background-repeat: no-repeat;
        background-position: left center, left center;
        padding: 60px 0;
        color: white;
      ">
    <h1 class="text-black mb-5">Products</h1>
    <div class="container">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Produk Card -->
          <div class="swiper-slide">
            <div class="card shadow product-card" onclick="showPopup(this, event)">
              <img src="assets/img/kos.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Keramik Glossy</h5>
                <p class="card-text">
                  Keramik dengan permukaan mengkilap untuk dapur atau kamar
                  mandi.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card shadow product-card" onclick="showPopup(this, event)">
              <img src="assets/img/paper-texture-with-watercolor.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Motif Alami</h5>
                <p class="card-text">
                  Keramik bernuansa alam cocok untuk suasana tenang dan
                  estetik.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card shadow product-card" onclick="showPopup(this, event)">
              <img src="assets/img/close.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Keramik Minimalis</h5>
                <p class="card-text">
                  Desain simple dan modern, cocok untuk hunian kontemporer.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card shadow product-card" onclick="showPopup(this, event)">
              <img src="assets/img/black-marble.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Keramik Minimalis</h5>
                <p class="card-text">
                  Desain simple dan modern, cocok untuk hunian kontemporer.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card shadow product-card" onclick="showPopup(this, event)">
              <img src="assets/img/kos.jpg" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">Keramik Glossy</h5>
                <p class="card-text">
                  Keramik dengan permukaan mengkilap untuk dapur atau kamar
                  mandi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-custom-nav">
        <img src="/assets/img/reshot-icon-right-arrow.svg" class="arrow arrow-left" />
        <img src="/assets/img/reshot-icon-right-arrow.svg" class="arrow arrow-right" />
      </div>

      <a href="{{ route('product') }}" class="btn btn-primary mt-5">
        View all products
      </a>

      <!-- POPUP -->
      <div id="productPopup" class="popup">
        <div class="popup-content">
          <img id="popupImage" src="" alt="Gambar Produk" />
          <h3 id="popupTitle"></h3>
          <p id="popupDesc"></p>
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
    <iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%"
      height="450"></iframe>
  </div>
  <footer>
    <div class="container text-center">
      <p>Copyright ©&nbsp;Brand 2025</p>
    </div>
  </footer>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/grayscale.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".arrow-right",
        prevEl: ".arrow-left",
      },
      breakpoints: {
        576: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        992: { slidesPerView: 4 },
      },
    });
  </script>

  <script>
    function animateCard(card) {
      card.classList.add("clicked");
      setTimeout(() => {
        card.classList.remove("clicked");
      }, 300); // animasi berlangsung 300ms
    }
  </script>

  <script>
    function showPopup(cardElement, event) {
      event.stopPropagation(); // Cegah propagasi ke document

      const title = cardElement.querySelector(".card-title")?.textContent;
      const desc = cardElement.querySelector(".card-text")?.textContent;
      const image = cardElement.querySelector("img")?.getAttribute("src");

      const popup = document.getElementById("productPopup");

      document.getElementById("popupTitle").textContent = title || "No title";
      document.getElementById("popupDesc").textContent =
        desc || "No description";
      document.getElementById("popupImage").src = image || "";

      popup.style.display = "flex"; // Menampilkan popup

      // Menambahkan animasi
      void popup.offsetWidth; // Memaksa reflow agar transisi dapat dimulai
      popup.classList.add("show");
    }

    // Menutup popup ketika klik di luar konten popup
    document.addEventListener("click", function (event) {
      const popup = document.getElementById("productPopup");
      const content = popup.querySelector(".popup-content");

      if (popup.style.display === "flex" && !content.contains(event.target)) {
        popup.classList.remove("show");
        setTimeout(() => {
          popup.style.display = "none"; // Menyembunyikan popup setelah animasi selesai
        }, 500); // Waktu animasi disesuaikan
      }
    });
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
</body>

</html>