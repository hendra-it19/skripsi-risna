<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDS Dashboard | {{ $judulHalaman }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboardpage/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardpage/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('layouts.dashboardpage.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper" style="background-color:rgb(244, 244, 244)">
            <!--  Header Start -->
            @include('layouts.dashboardpage.header')
            <!--  Header End -->
            <div class="container-fluid" >
                <!--  Row 1 -->

                @yield('pages')

                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Desain dan Pengembangan oleh <a href="#"
                            class="pe-1 text-primary text-decoration-underline">Risna</a> Di distribusikan dari <a
                            href="https://themewagon.com">Informatika Unidayan</a></p>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.dashboardpage.script')
</body>

</html>
