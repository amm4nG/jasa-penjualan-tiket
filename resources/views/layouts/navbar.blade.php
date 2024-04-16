<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                        class="text-white">123 Street, New York</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                        class="text-white">Email@Example.com</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="{{ url('/') }}" class="navbar-brand">
                <div class="input-group">
                    <img src="{{ asset('img/logo.jpg') }}" style="width: 80px; height: 80px" alt="">
                    <h1 class="text-primary display-6 mt-3 ms-2">TNNBP</h1>
                </div>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    @if (Request::is('keranjang'))
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="#contact" onclick="contactActiveKeranjang()" id="contact-link"
                            class="nav-item nav-link">Contact</a>
                        <a id="keranjang-link" onclick="keranjangActive()" href="#" class="nav-link {{ Request::is('keranjang') ? 'active' : '' }}"><i
                                class="fas fa-shopping-cart"></i></a>
                    @else
                        <a href="#" onclick="homeActive()" id="home-link"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="#contact" onclick="contactActive()" id="contact-link"
                            class="nav-item nav-link">Contact</a>
                        <a href="{{ url('keranjang') }}"
                            class="nav-link {{ Request::is('keranjang') ? 'active' : '' }}"><i
                                class="fas fa-shopping-cart"></i></a>
                    @endif

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
