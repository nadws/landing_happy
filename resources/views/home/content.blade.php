@extends('theme.master') @section('content')
    <style>
        .d-none {
            display: none;
        }
    </style>

    <!-- Hero Start -->
    <div id="load-home" class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-uppercase border-bottom border-5"
                        style="
            border-color: rgba(256, 256, 256, 0.3) !important;
            color: #495470;
          ">
                        Selamat Datang Di Klinik Happy Kids
                    </h5>
                    <h1 class="display-3 text-secondary mb-md-4">
                        Klinik anak terbaik di kota anda
                    </h1>
                    <div class="pt-2">
                        <a href="#load-appointment"
                            class="btn btn-secondary text-white rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                        <a href="#load-doctors" class="btn btn-outline-primary rounded-pill py-md-3 px-md-5 mx-2">Find
                            Doctors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="load-about">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('assets') }}/img/about.png"
                            style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-secondary text-uppercase border-bottom border-5">
                            Tentang Kami
                        </h5>
                        <h1 class="display-6">
                            Anak adalah Buah Hati Kita yang Paling Berharga.
                        </h1>
                    </div>
                    <p>
                        Klinik Tumbuh Kembang Happy Kids dibangun untuk meningkatkan partisipasi orang tua, pengasuh,
                        petugas TPA, Paud, Playgroup dan TK dalam mendeteksi dini tumbuh kembang bayi, anak balita dan anak
                        pra sekolah. Serta untuk mengoptimalkan tumbuh kembang bayi, anak balita dan anak pra sekolah
                    </p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">
                                    Qualified<small class="d-block text-primary">Doctors</small>
                                </h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">
                                    Emergency<small class="d-block text-primary">Services</small>
                                </h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">
                                    Accurate<small class="d-block text-primary">Testing</small>
                                </h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">
                                    Free<small class="d-block text-primary">Ambulance</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div id="load-appointment" class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">
                            Buat Janji

                        </h5>
                        <h1 class="display-4 ">
                            Buat Janji Temu Untuk Anak Anda <button id="btn-no-order" class="btn btn-lg btn-secondary"
                                type="submit">Pernah buat janji ?</button>
                        </h1>

                    </div>
                </div>
                <div class="col-lg-8">
                    <input type="hidden" id="hal" class="hal" value="{{ $hal }}">
                    <div id="get-appointment"></div>
                    <div id="get-appointment2" class="d-none"></div>
                    <div id="get-appointment-selesai" class="d-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    {{-- <div id="load-doctors" class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h5 class="d-inline-block text-secondary text-uppercase border-bottom border-5">
                    Dokter Kami
                </h5>
                <h1 class="display-6">
                    Profesional Perawatan Kesehatan yang Berkualitas</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets') }}/img/team-1.jpg"
                                style="object-fit: cover" />
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">
                                    Cardiology Specialist
                                </h6>
                                <p class="m-0">
                                    Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum
                                    clita rebum dolor
                                </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets') }}/img/team-2.jpg"
                                style="object-fit: cover" />
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">
                                    Cardiology Specialist
                                </h6>
                                <p class="m-0">
                                    Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum
                                    clita rebum dolor
                                </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets') }}/img/team-3.jpg"
                                style="object-fit: cover" />
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">
                                    Cardiology Specialist
                                </h6>
                                <p class="m-0">
                                    Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum
                                    clita rebum dolor
                                </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Contact Start -->
    <div id="load-contact" class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h5 class="d-inline-block text-secondary text-uppercase border-bottom border-5">
                    ADA PERTANYAAN?
                </h5>
                <h1 class="display-4">Jangan Ragu Untuk Menghubungi Kami</h1>
            </div>

            <div class="row">
                <div class="col-12" style="height: 500px">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15932.309587454649!2d114.5895158!3d-3.331056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x40e6ae06c804e077!2sKlinik%20HAPPY%20KIDS%22!5e0!3m2!1sen!2sid!4v1617347091788!5m2!1sen!2sid"
                            frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1">
                <div class="col-lg-7">
                    <div class="bg-primary rounded p-5 m-5 mb-0">
                        <form>
                            <div class="row g-3">
                                <h5 class="display-5">Hubungi Kami</h5>
                                <table class="table tbl-hub" style="border:0.5px solid #ECED99;">
                                    <center>
                                        <tr>
                                            <th>
                                                <i class="fa fa-clock"></i>
                                            </th>
                                            <th>9AM-6PM Everyday</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-hospital"></i>
                                            </th>
                                            <th>Jl K.S Tubun no. 165 – Banjarmasin</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-phone"></i>
                                            </th>
                                            <th>0511 3271463 | 0811 5066777</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-envelope"></i>
                                            </th>
                                            <th>klinikhappy@gmail.com</th>
                                        </tr>
                                        <tr>

                                            <th>
                                                <i class="fa fa-calendar-check text-secondary"></i>
                                            </th>
                                            <th><a href="#load-appointment" class="text-secondary">Buat Janji</a></th>

                                        </tr>

                                    </center>
                                </table>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact End -->
    @endsection @section('scripts')
    <script>
        $(document).ready(function() {
            const pageAccessedByReload = (
                (window.performance.navigation && window.performance.navigation.type === 1) || window
                .performance
                .getEntriesByType('navigation')
                .map((nav) => nav.type)
                .includes('reload')
            );

            if (pageAccessedByReload) {

            }

            // pas di klik active
            $(".nav-item").click(function() {
                $(".nav-item").removeClass("active"); // This will remove active classes from all <li> tags
                $(this).addClass("active"); // This will add active class in clicked <li>
            });


            $("#btn-no-order").click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Masukkan Member ID anda ',
                    input: 'number',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Simpan',
                    showLoaderOnConfirm: true,
                    preConfirm: (login) => {
                        return $.ajax({
                            type: "GET",
                            url: "{{ route('pernahDaftar') }}?member_id=" + login,
                            dataType: 'json',
                            success: function(r) {
                                // Swal.fire(r.no_order)
                                if (r.response != 'ok') {
                                    alert('error')
                                } else {
                                    document.location.href =
                                        `https://goggle.com?no_order=${r.no_order}&member_id=${login}`
                                }
                            }
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log(result)
                    }
                })
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            load_form1();

            function load_form1(hal) {
                if (hal == undefined) {
                    var page = $('.hal').val();
                } else {
                    var page = hal;

                }

                if (page == '1') {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('appointment') }}",
                        success: function(r) {
                            $("#get-appointment").html(r);
                            $("#loading-kota").hide();
                            $("#loading-kecamatan").hide();
                            $("#loading-kelurahan").hide();

                            // change provinsi ---------------------
                            $("#provinsi").on("change", function() {
                                var id_provinsi = this.value;

                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('getKota') }}?id_provinsi=" +
                                        id_provinsi,
                                    beforeSend: function() {
                                        $("#loading-kota").show();
                                        $("#get-kota").hide();
                                    },
                                    success: function(response) {
                                        $("#loading-kota").hide();
                                        $("#get-kota").show();
                                        $("#get-kota").html(response);

                                        // change kota --------------------
                                        $("#kota").on("change", function() {
                                            var id_kota = this.value;

                                            $.ajax({
                                                type: "GET",
                                                url: "{{ route('getKecamatan') }}?id_kota=" +
                                                    id_kota,
                                                beforeSend: function() {
                                                    $("#loading-kecamatan")
                                                        .show();
                                                    $("#get-kecamatan")
                                                        .hide();
                                                },
                                                success: function(
                                                    response) {
                                                    $("#loading-kecamatan")
                                                        .hide();
                                                    $("#get-kecamatan")
                                                        .show();
                                                    $("#get-kecamatan")
                                                        .html(
                                                            response
                                                        );

                                                    // change kecamatan --------------------
                                                    $("#kecamatan")
                                                        .on("change",
                                                            function() {
                                                                var id_kecamatan =
                                                                    this
                                                                    .value;

                                                                $.ajax({
                                                                    type: "GET",
                                                                    url: "{{ route('getKelurahan') }}?id_kecamatan=" +
                                                                        id_kecamatan,
                                                                    beforeSend: function() {
                                                                        $("#loading-kelurahan")
                                                                            .show();
                                                                        $("#get-kelurahan")
                                                                            .hide();
                                                                    },
                                                                    success: function(
                                                                        response
                                                                    ) {
                                                                        $("#loading-kelurahan")
                                                                            .hide();
                                                                        $("#get-kelurahan")
                                                                            .show();
                                                                        $("#get-kelurahan")
                                                                            .html(
                                                                                response
                                                                            );
                                                                    },
                                                                });
                                                            });
                                                },
                                            });
                                        });
                                    },
                                });
                            });

                            // save appointment
                            $("#loading-submit-appointment").hide();
                            $("#form-appointment").submit(function(e) {
                                e.preventDefault();
                                var datas = $("#form-appointment").serialize();

                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('save_appointment') }}",
                                    data: datas,
                                    beforeSend: function() {
                                        $("#save-appointment").hide();
                                        $("#loading-submit-appointment").show();
                                        $(".bg-light").prop("disabled", true);
                                    },
                                    success: function(response) {
                                        $("#save-appointment").show();
                                        $("#loading-submit-appointment").hide();
                                        $(".bg-light").prop("disabled", false);

                                        $("#get-appointment").addClass('d-none');
                                        $("#get-appointment2").removeClass(
                                            'd-none');
                                        let stateObj = {
                                            id: "100"
                                        };

                                        window.history.pushState(stateObj,
                                            "Page 2",
                                            "?hal=2");

                                        var hal = $('.hal').val('2');
                                        load_form1(2);
                                    },
                                });
                            });
                        },
                    });
                } else if (page == '2') {
                    $("#get-appointment2").removeClass('d-none');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('appointment2') }}",
                        success: function(response) {
                            $("#get-appointment2").html(response);

                            // tombol back
                            $("#back-appointment2").click(function(e) {
                                e.preventDefault();
                                $("#get-appointment2").addClass('d-none');
                                $("#get-appointment").removeClass('d-none');
                            });

                            // save appointment 2
                            $("#form-appointment2").submit(function(e) {
                                e.preventDefault();
                                var datas = $("#form-appointment2").serialize();

                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('save_appointment2') }}",
                                    data: datas,
                                    success: function(response) {
                                        $("#get-appointment2").addClass('d-none');
                                        $("#get-appointment-selesai").removeClass(
                                            'd-none');

                                        let stateObj = {
                                            id: "100"
                                        };

                                        window.history.pushState(stateObj,
                                            "Page 3",
                                            "?hal=3");

                                        var hal = $('.hal').val('3');
                                        load_form1(3);
                                    },
                                });
                            });
                        },
                    });
                } else {
                    $("#get-appointment-selesai").removeClass('d-none');
                    $.ajax({
                        type: "GET",
                        url: "{{ route('appointment_selesai') }}",
                        success: function(response) {
                            $("#get-appointment-selesai").html(response);

                            // $("#back-appointment2").click(function(e) {
                            //     e.preventDefault();
                            //     $("#get-appointment2").addClass('d-none');
                            //     $("#get-appointment").removeClass('d-none');
                            // });
                        },
                    });
                }


            }
        });
    </script>
@endsection
