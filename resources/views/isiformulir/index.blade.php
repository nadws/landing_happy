<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #787878;
        }

        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        h2 {
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        #multi-step-form-container {
            margin-top: 2rem;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .pl-0 {
            padding-left: 0;
        }

        .button {
            padding: 0.7rem 1.5rem;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            border: 1px solid #0e9594;
            background-color: #0e9594;
        }

        .mt-3 {
            margin-top: 2rem;
        }

        .d-none {
            display: none;
        }

        .form-step {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem;
            background: #fff
        }

        .font-normal {
            font-weight: normal;
        }

        ul.form-stepper {
            counter-reset: section;
            margin-bottom: 3rem;
        }

        ul.form-stepper .form-stepper-circle {
            position: relative;
        }

        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.form-stepper>li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }

        .form-stepper-horizontal>li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }

        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 1px;
            content: "";
            top: 32%;
        }

        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }

        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #68B984;
        }

        .form-stepper-horizontal li:last-child {
            flex: unset;
        }

        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }

        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #FED049 !important;
            color: #fff;
        }

        .form-stepper .form-stepper-active .label {
            color: #FED049 !important;
        }

        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #FED049 !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #68B984 !important;
            color: #fff;
        }

        .form-stepper .form-stepper-completed .label {
            color: #68B984 !important;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #68B984 !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }

        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }

        .form-stepper .label {
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .form-stepper a {
            cursor: default;
        }

        .conten {
            padding: 30px;
        }
    </style>
</head>

<body>
    {{-- <div style="background-color: #F7F8B2; padding: 40px;">

    </div> --}}
    <div class="conten"style="background-color: #F7F8B2;">
        <center>
            <img src="{{ asset('assets') }}/img_awal/logo.png" alt="" width="120px">
        </center>

        <input type="hidden" id="hal" class="hal" value="{{ $hal }}">
        <div id="multi-step-form-container">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li class="form-stepper-active form-stepper-unfinished1 text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                        <div class="label">Psikomotorik </div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li class="form-stepper-unfinished form-stepper-unfinished2  text-center form-stepper-list"
                    step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                        <div class="label text-muted">KPSP Pada Anak</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-unfinished form-stepper-unfinished3 text-center form-stepper-list"
                    step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                        <div class="label text-muted">PEDS</div>
                    </a>
                </li>
                <li class="form-stepper-unfinished form-stepper-unfinished4 text-center form-stepper-list"
                    step="4">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>4</span>
                        </span>
                        <div class="label text-muted">M-Chat-R</div>
                    </a>
                </li>
            </ul>
            <input type="hidden" value="{{ $no_order }}" id="no_order">
            <input type="hidden" value="{{ $member_id }}" id="member_id">

            <!-- Step 1 Content -->
            <section id="step-1" class="form-step">

            </section>
            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none">

            </section>
            <section id="step-3" class="form-step d-none">

            </section>
            <input type="hidden" class="next" value="1">
            <section id="step-4" class="form-step d-none">

            </section>

            <!-- Step 3 Content, default hidden on page load. -->

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(document).ready(function() {
        load_form1();

        function load_form1(hal) {
            if (hal == undefined) {
                var page = $('.hal').val();
            } else {
                var page = hal;

            }

            var no_order = $("#no_order").val();
            var member_id = $("#member_id").val();

            if (page == '1') {
                $.ajax({
                    method: "GET",
                    url: "{{ route('form1') }}?",
                    data: {
                        no_order: no_order,
                        member_id: member_id,
                    },
                    dataType: "html",
                    success: function(hasil) {
                        $('#step-1').html(hasil);
                    }
                });

            } else if (page == '2') {
                $.ajax({
                    method: "GET",
                    url: "{{ route('form2') }}",
                    data: {
                        no_order: no_order,
                        member_id: member_id,
                    },
                    dataType: "html",
                    success: function(hasil) {
                        $('#step-2').html(hasil);
                        $("#step-1").addClass("d-none");
                        $(".form-stepper-unfinished1").addClass(
                            "form-stepper-completed");

                        $("#step-2").removeClass("d-none");
                        $(".form-stepper-unfinished2").addClass(
                            "form-stepper-active");
                    }
                });
            } else if (page == '3') {
                $.ajax({
                    method: "GET",
                    url: "{{ route('form3') }}",
                    data: {
                        no_order: no_order,
                        member_id: member_id,
                    },
                    dataType: "html",
                    success: function(hasil) {
                        $('#step-3').html(hasil);
                        $("#step-1").addClass("d-none");
                        $(".form-stepper-unfinished1").addClass(
                            "form-stepper-completed");
                        $("#step-2").addClass("d-none");
                        $(".form-stepper-unfinished2").addClass(
                            "form-stepper-completed");

                        $("#step-3").removeClass("d-none");
                        $(".form-stepper-unfinished3").addClass(
                            "form-stepper-active");
                    }
                });
            } else if (page == '4') {
                $(document).on('submit', '#save_per4', function(event) {
                    event.preventDefault();
                    var pesanan_new = $("#save_per4").serialize()
                    var no_order = $('.no_order').val()
                    var member_id = $('.member_id').val()

                    $.ajax({
                        url: "{{ route('tbh_pertanyaan4') }}?" + pesanan_new,
                        method: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil disimpan'
                            });
                        }
                    });

                    var pg = $('.next').val();
                    var next = parseInt(pg) + 1;
                    var tes = $(".next").val(next);
                    load_form4(next);
                });

                $(document).on('click', '.bpage', function(event) {
                    var pg = $('.next').val();
                    var next = parseInt(pg) - 1;
                    var tes = $(".next").val(next);
                    load_form4(next);
                });

                load_form4(1);

                function load_form4(next) {

                    $.ajax({
                        method: "GET",
                        url: "{{ route('form4') }}?page=" + next,
                        data: {
                            no_order: no_order,
                            member_id: member_id,
                        },
                        dataType: "html",
                        success: function(hasil) {
                            $('#step-4').html(hasil);
                            $("#step-1").addClass("d-none");
                            $("#step-2").addClass("d-none");
                            $("#step-3").addClass("d-none");
                            $("#step-4").removeClass("d-none");

                            $(".form-stepper-unfinished1").addClass(
                                "form-stepper-completed");

                            $(".form-stepper-unfinished2").addClass(
                                "form-stepper-completed");

                            $(".form-stepper-unfinished3").addClass(
                                "form-stepper-completed");


                            $(".form-stepper-unfinished4").addClass(
                                "form-stepper-active");
                        }
                    });
                }
            } else {
                alert('sukses');
            }


        }
        $(document).on('submit', '#save_per1', function(event) {
            event.preventDefault();
            var pesanan_new = $("#save_per1").serialize()
            var no_order = $('.no_order').val()
            var member_id = $('.member_id').val()
            Swal.fire({
                title: 'Apakah kamu yakin ?',
                text: "Pastikan data yg disimpan sudah benar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('tbh_pertanyaan1') }}?" + pesanan_new,
                        method: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil disimpan'
                            });
                            $("#step-1").addClass("d-none");
                            $(".form-stepper-active").addClass(
                                "form-stepper-completed");

                            $("#step-2").removeClass("d-none");
                            $(".form-stepper-unfinished2").addClass(
                                "form-stepper-active");

                            let stateObj = {
                                id: "100"
                            };

                            window.history.pushState(stateObj,
                                "Page 2", "/isi_formulir?no_order=" + no_order +
                                "&member_id=" + member_id +
                                "&hal=2");

                            var hal = $('.hal').val('2');


                            load_form1(2);
                        }
                    });
                } else {

                }
            })


        });

        $(document).on('click', '.back1', function(event) {
            $("#step-2").addClass("d-none");
            $(".form-stepper-unfinished2").removeClass("form-stepper-active");

            $("#step-1").removeClass("d-none");
            $(".form-stepper-unfinished1").addClass("form-stepper-active");
            $(".form-stepper-unfinished1").removeClass("form-stepper-completed");

        });
        $(document).on('click', '.back2', function(event) {
            $("#step-3").addClass("d-none");
            $(".form-stepper-unfinished3").removeClass("form-stepper-active");

            $("#step-2").removeClass("d-none");
            $(".form-stepper-unfinished2").addClass("form-stepper-active");
            $(".form-stepper-unfinished2").removeClass("form-stepper-completed");

        });
        $(document).on('click', '.back3', function(event) {
            $("#step-4").addClass("d-none");
            $(".form-stepper-unfinished4").removeClass("form-stepper-active");

            $("#step-3").removeClass("d-none");
            $(".form-stepper-unfinished3").addClass("form-stepper-active");
            $(".form-stepper-unfinished3").removeClass("form-stepper-completed");
        });




        $(document).on('submit', '#save_per2', function(event) {
            event.preventDefault();
            var pesanan_new = $("#save_per2").serialize()
            var no_order = $('.no_order').val()
            var member_id = $('.member_id').val()
            Swal.fire({
                title: 'Apakah kamu yakin ?',
                text: "Pastikan data yg disimpan sudah benar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('tbh_pertanyaan2') }}?" + pesanan_new,
                        method: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil disimpan'
                            });
                            $("#step-2").addClass("d-none");
                            $(".form-stepper-active").addClass(
                                "form-stepper-completed");

                            $("#step-3").removeClass("d-none");
                            $(".form-stepper-unfinished3").addClass(
                                "form-stepper-active");

                            let stateObj = {
                                id: "100"
                            };

                            window.history.pushState(stateObj,
                                "Page 2", "/isi_formulir?no_order=" + no_order +
                                "&member_id=" + member_id +
                                "&hal=3");
                            var hal = $('.hal').val(3);
                            load_form1(3);
                        }
                    });
                } else {

                }
            })


        });
        $(document).on('submit', '#save_per3', function(event) {
            event.preventDefault();
            var pesanan_new = $("#save_per3").serialize()
            var no_order = $('.no_order').val()
            var member_id = $('.member_id').val()
            Swal.fire({
                title: 'Apakah kamu yakin ?',
                text: "Pastikan data yg disimpan sudah benar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('tbh_pertanyaan3') }}?" + pesanan_new,
                        method: 'GET',
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                icon: 'success',
                                title: 'Data berhasil disimpan'
                            });
                            $("#step-3").addClass("d-none");
                            $(".form-stepper-active").addClass(
                                "form-stepper-completed");

                            $("#step-4").removeClass("d-none");
                            $(".form-stepper-unfinished4").addClass(
                                "form-stepper-active");

                            let stateObj = {
                                id: "100"
                            };

                            window.history.pushState(stateObj,
                                "Page 2", "/isi_formulir?no_order=" + no_order +
                                "&member_id=" + member_id +
                                "&hal=4");
                            var hal = $('.hal').val(4);
                            load_form1(4);
                        }
                    });
                } else {

                }
            })


        });

    });
</script>



</html>
