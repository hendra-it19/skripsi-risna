<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SDS | {{ $judulHalaman }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="diagnosa stunting, risna, tugas akhir, stunting, balita" name="keywords">
    <meta
        content="Sistem Diagnosa Stunting (SDS) merupakan web app yang dapat digunakan untuk melakukan diagnosa sementara pada anak yang memiliki beberapa ciri-ciri stunting."
        name="description">
    @include('layouts.landingpage.head')
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> --}}
    <!-- Spinner End -->


    <!-- Topbar Start -->
    {{-- <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Hubungi Sekarang</h5>
                        <span>0852-9323-8822 </span>
                    </div>
                </div>
                <a href="{{url('/')}}" class="h1 text-white mb-0">
                <img src="{{asset('logo.png')}}" width="60" alt="">
                <span>SDS</span>
                </a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Email Sekarang</h5>
                        <span>risna@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    @include('layouts.landingpage.navbar')
    <!-- Navbar End -->

    @yield('pages')


    <!-- Footer Start -->
    @include('layouts.landingpage.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    @include('layouts.landingpage.copyright')
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    @include('layouts.landingpage.script')
</body>

</html>
