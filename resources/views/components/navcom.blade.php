<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @php
    $h1 = DB::table('h1')->where('id_h1', 1)->first()->isi;
    $img = DB::table('h1')->where('id_h1', 2)->first()->isi;
@endphp
<!-- Navbar Start -->
<div class="container-fluid sticky-top shadow-sm" style="background-color: {{$warna}}">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0" style="background-color: {{$warna}}">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-secondary">
                    <img src="{{ asset('assets/img/'.$img.'') }}" width="100" height="80" alt="">
                    {{ $h1 }}
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
                    {{-- <a href="#load-appointment" class="nav-item nav-link">Appointment</a> --}}
                </div>
            </div>
            <a href="http://127.0.0.1:1111/login" class="btn btn-rounded btn-primary" style="margin-left: 10px">Login</a>
        </nav>
    </div>
</div>
<!-- Navbar End -->

</div>