@extends('theme.master') @section('content')
<style>
  .d-none {
    display: none;
    display: block;
  }
</style>

<!-- Hero Start -->
<div
  id="load-home"
  class="container-fluid bg-primary py-5 mb-5"
  style="background: url(assets/img/{{ $img_hero }}) top right no-repeat; background-size: cover;height: 650px;"
>
  <div class="container py-5">
    <div class="row justify-content-start">
      <div class="col-lg-8 text-center text-lg-start">
        <h5
          class="d-inline-block text-uppercase border-bottom border-5"
          style="
            border-color: rgba(256, 256, 256, 0.3) !important;
            color: {{$fontc2}};
          "
        >
          {{ $teks1 }}
        </h5>
        <h1 class="display-3 text-secondary mb-md-4" style="color: {{$fontc1}};">{{ $teks2 }}</h1>
        <div class="pt-2">
          {{-- <h5
            class="d-inline-block text-uppercase border-bottom border-5"
            style="
              border-color: rgba(256, 256, 256, 0.3) !important;
              color: {{$fontc2}};
              font-size: 15px;
            "
          >
            Pasien baru klik disini
          </h5>
          <br />
          <a
            href="#load-appointment"
            class="btn btn-secondary text-white rounded-pill py-md-3 px-md-5 mx-2"
            >Isi Form</a
          > --}}
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
          <img
            class="position-absolute w-100 h-100 rounded"
            src="{{ $url_asset . $img_tentang }}"
            style="object-fit: cover"
          />
        </div>
      </div>
      <div class="col-lg-7">
        <div class="mb-4">
          <h5
            class="d-inline-block text-uppercase border-bottom border-5"
            style="color: {{$fontc2}};"
          >
            Tentang Kami
          </h5>
          <h1 class="display-6" style="color: {{$fontc1}};">{{ $teks_tentang1 }}</h1>
        </div>
        <p class="color: {{$fontc3}};">{{ $teks_tentang2 }}</p>
        <div class="row g-3 pt-1">
          <div class="col-sm-6 col-12">
            <iframe
              class="position-relative w-100 h-100"
              src="{{ $maps }}"
              frameborder="0"
              style="border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
          <div class="col-sm-6 col-12">
            <h5
              class="d-inline-block text-uppercase border-bottom border-5"
              style="color: {{$fontc2}};"
            >
              Hubungi Kami
            </h5>
            <table class="table tbl-hub" style="color: {{$fontc2}};">
              <center>
                <tr>
                  <th>
                    <i class="fa fa-clock"></i>
                  </th>
                  <th>{{ $waktu }}</th>
                </tr>
                <tr>
                  <th>
                    <i class="fa fa-hospital"></i>
                  </th>
                  <th>{{ $alamat }}</th>
                </tr>
                <tr>
                  <th>
                    <i class="fa fa-phone"></i>
                  </th>
                  <th>{{ $nohp }}</th>
                </tr>
                <tr>
                  <th>
                    <i class="fa fa-envelope"></i>
                  </th>
                  <th>{{ $email }}</th>
                </tr>
              </center>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Appointment Start -->
{{-- <div id="load-appointment" class="container-fluid my-5 py-5" style="background-color: {{$warna}}">
  <div class="container py-5">
    <div class="row gx-5">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <img
          style="object-fit: cover"
          class="w-100 h-50 rounded"
          src="{{ $url_asset . $img }}"
          alt=""
        />
        <img
          style="object-fit: cover"
          class="w-100 h-50 rounded mt-3"
          src="{{ $url_asset . $img_tamu }}"
          alt=""
        />
      </div>
      <div class="col-lg-8">
        <input type="hidden" id="hal" class="hal" value="{{ $hal }}" />
        <div id="get-appointment"></div>
        <div id="get-appointment2" class="d-none"></div>
        <div id="get-appointment-selesai" class="d-none"></div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Appointment End -->
@endsection @section('scripts')
<script>
  $(document).ready(function () {
    const pageAccessedByReload =
      (window.performance.navigation &&
        window.performance.navigation.type === 1) ||
      window.performance
        .getEntriesByType("navigation")
        .map((nav) => nav.type)
        .includes("reload");

    if (pageAccessedByReload) {
    }

    // pas di klik active
    $(".nav-item").click(function () {
      $(".nav-item").removeClass("active"); // This will remove active classes from all <li> tags
      $(this).addClass("active"); // This will add active class in clicked <li>
    });

    $("#btn-no-order").click(function (e) {
      e.preventDefault();
      Swal.fire({
        title: "Masukkan Member ID anda ",
        input: "number",
        inputAttributes: {
          autocapitalize: "off",
        },
        showCancelButton: true,
        confirmButtonText: "Simpan",
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return $.ajax({
            type: "GET",
            url: "{{ route('pernahDaftar') }}?member_id=" + login,
            dataType: "json",
            success: function (r) {
              // Swal.fire(r.no_order)
              if (r.response != "ok") {
                alert("error");
              } else {
                document.location.href = `https://goggle.com?no_order=${r.no_order}&member_id=${login}`;
              }
            },
          });
        },
        allowOutsideClick: () => !Swal.isLoading(),
      }).then((result) => {
        if (result.isConfirmed) {
          console.log(result);
        }
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    load_form1();

    function load_form1(hal) {
      if (hal == undefined) {
        var page = $(".hal").val();
      } else {
        var page = hal;
      }

      if (page == "1") {
        $.ajax({
          type: "GET",
          url: "{{ route('appointment') }}",
          success: function (r) {
            $("#get-appointment").html(r);
            $("#loading-kota").hide();
            $("#loading-kecamatan").hide();
            $("#loading-kelurahan").hide();

            // change provinsi ---------------------
            $("#provinsi").on("change", function () {
              var id_provinsi = this.value;

              $.ajax({
                type: "GET",
                url: "{{ route('getKota') }}?id_provinsi=" + id_provinsi,
                beforeSend: function () {
                  $("#loading-kota").show();
                  $("#get-kota").hide();
                },
                success: function (response) {
                  $("#loading-kota").hide();
                  $("#get-kota").show();
                  $("#get-kota").html(response);

                  // change kota --------------------
                  $("#kota").on("change", function () {
                    var id_kota = this.value;

                    $.ajax({
                      type: "GET",
                      url: "{{ route('getKecamatan') }}?id_kota=" + id_kota,
                      beforeSend: function () {
                        $("#loading-kecamatan").show();
                        $("#get-kecamatan").hide();
                      },
                      success: function (response) {
                        $("#loading-kecamatan").hide();
                        $("#get-kecamatan").show();
                        $("#get-kecamatan").html(response);

                        // change kecamatan --------------------
                        $("#kecamatan").on("change", function () {
                          var id_kecamatan = this.value;

                          $.ajax({
                            type: "GET",
                            url:
                              "{{ route('getKelurahan') }}?id_kecamatan=" +
                              id_kecamatan,
                            beforeSend: function () {
                              $("#loading-kelurahan").show();
                              $("#get-kelurahan").hide();
                            },
                            success: function (response) {
                              $("#loading-kelurahan").hide();
                              $("#get-kelurahan").show();
                              $("#get-kelurahan").html(response);
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
            $("#form-appointment").submit(function (e) {
              e.preventDefault();
              var datas = $("#form-appointment").serialize();

              $.ajax({
                type: "GET",
                url: "{{ route('save_appointment') }}",
                data: datas,
                beforeSend: function () {
                  $("#save-appointment").hide();
                  $("#loading-submit-appointment").show();
                  $(".bg-light").prop("disabled", true);
                },
                success: function (response) {
                  $("#save-appointment").show();
                  $("#loading-submit-appointment").hide();
                  $(".bg-light").prop("disabled", false);

                  $("#get-appointment").addClass("d-none");
                  $("#get-appointment2").removeClass("d-none");
                  let stateObj = {
                    id: "100",
                  };

                  window.history.pushState(stateObj, "Page 2", "?hal=2");

                  var hal = $(".hal").val("2");
                  load_form1(2);
                },
              });
            });
          },
        });
      } else if (page == "2") {
        $("#get-appointment2").removeClass("d-none");
        $.ajax({
          type: "GET",
          url: "{{ route('appointment2') }}",
          success: function (response) {
            $("#get-appointment2").html(response);

            // tombol back
            $("#back-appointment2").click(function (e) {
              e.preventDefault();
              $("#get-appointment2").addClass("d-none");
              $("#get-appointment").removeClass("d-none");
            });

            // save appointment 2
            $("#form-appointment2").submit(function (e) {
              e.preventDefault();
              var datas = $("#form-appointment2").serialize();

              $.ajax({
                type: "GET",
                url: "{{ route('save_appointment2') }}",
                data: datas,
                success: function (response) {
                  $("#get-appointment2").addClass("d-none");
                  $("#get-appointment-selesai").removeClass("d-none");

                  let stateObj = {
                    id: "100",
                  };

                  window.history.pushState(stateObj, "Page 3", "?hal=3");

                  var hal = $(".hal").val("3");
                  load_form1(3);
                },
              });
            });
          },
        });
      } else {
        $("#get-appointment-selesai").removeClass("d-none");
        $.ajax({
          type: "GET",
          url: "{{ route('appointment_selesai') }}",
          success: function (response) {
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
