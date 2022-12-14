<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HAPPY KIDS - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800;900&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    {{-- sweet alert --}}
    <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>

    <!-- css untuk select2 -->

</head>
<style>
    /* * {
        font-family: 'Poppins', sans-serif;
    } */

    body {
        font-family: 'Poppins', sans-serif;
    }

    .bg-button {
        background-color: #EA1868;
    }

    .bg-primary {
        background-color: #ECED99 !important;
    }

    .btn-primary {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    /* .btn-primary:hover {
        background-color: #dee2e6;
        border-color: #dee2e6;
        color: #7F7F7F;
    } */
    .text-primary {
        color: #ffc107 !important;
    }

    .tbl-hub tr th i {
        padding-left: 20px;
    }

    navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active {
        color: var(--primary);
    }
</style>
@yield('styles')
