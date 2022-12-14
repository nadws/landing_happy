<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-primary shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary navbar-light py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-secondary">
                    <img src="{{ asset('assets/img/logo.png') }}" width="100" height="80" alt="">
                    happy kids
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link">Beranda</a>
                    <a href="#load-about" class="nav-item nav-link">Tentang Kami</a>
                    {{-- <a href="#load-service" class="nav-item nav-link">Service</a> --}}
                    <a href="" class="nav-item nav-link">Appointment</a>
                    <a href="#load-doctors" class="nav-item nav-link">Dokter Kami</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                            <a href="team.html" class="dropdown-item">The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="search.html" class="dropdown-item">Search</a>
                        </div>
                    </div> --}}
                    <a href="#load-contact" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
