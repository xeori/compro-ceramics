<!-- Header -->
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/img/logo.png" alt="logo-img" style="width: 50px; padding-right: 3px;">
            <img src=" assets/img/navbar.png" alt="Mika Logo" class="logo-img">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('assets/catalog.pdf') }}" download>Catalog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>