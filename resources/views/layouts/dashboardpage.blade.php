<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDS | {{ $judulHalaman }}</title>
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('logo.jpeg') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardpage/assets/css/styles.min.css') }}" />
    <link href="{{ asset('assets/datatables/datatables.min.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>
    {{-- trix editor --}}
    <link rel="stylesheet" href="{{ asset('trix-editor/trix.css') }}">
    <script src="{{ asset('trix-editor/trix.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('layouts.dashboardpage.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('layouts.dashboardpage.header')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->

                @yield('pages')
            </div>
        </div>
    </div>


    @include('layouts.dashboardpage.script')
    @yield('script')
</body>

</html>
