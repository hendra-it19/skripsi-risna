    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ url('/dashboard') }}" class="text-nowrap logo-img">
                    {{-- <img src="{{ asset('logo.jpeg') }}" width="180"
                        alt="logo" /> --}}
                    <h1 class="mt-4 text-center text-primary">SDS</h1>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Utama</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/dashboard') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    {{-- next --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Master Data</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('jenis-kelamin.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-gender-bigender"></i>
                            </span>
                            <span class="hide-menu">Jenis Kelamin</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('tingg-badan.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-chart-arrows-vertical"></i>
                            </span>
                            <span class="hide-menu">Tinggi Badan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('ciri-fisik.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-stretching"></i>
                            </span>
                            <span class="hide-menu">Ciri Fisik</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hasil-diagnosa.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-heart-rate-monitor"></i>
                            </span>
                            <span class="hide-menu">Hasil Diagnosa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('solusi-stunting.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-stethoscope"></i>
                            </span>
                            <span class="hide-menu">Solusi Stunting</span>
                        </a>
                    </li>

                    {{-- next --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Diagnosa</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hasil-perhitungan.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-keyboard"></i>
                            </span>
                            <span class="hide-menu">Input</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hasil-perhitungan.riwayat') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-history"></i>
                            </span>
                            <span class="hide-menu">Riwayat</span>
                        </a>
                    </li>


                    {{-- next --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Manajemen</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('manajemen-pengguna.index')}}" aria-expanded="false">
                            <span>
                                <i class="ti ti-user"></i>
                            </span>
                            <span class="hide-menu">Pengguna</span>
                        </a>
                    </li>

                </ul>

                {{-- logout --}}
                <button class="btn btn-outline-danger mx-3 mt-2 mb-5 mt-3 px-5">Logout</button>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
