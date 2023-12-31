    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-center py-3">
                <a href="{{ url('/dashboard') }}" class="text-nowrap logo-img text-center">
                    <img src="{{ asset('logo.png') }}" width="70" alt="logo" class="text-center" />
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
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Master Data</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if ($judulHalaman == 'Master - Jenis Kelamin') active @endif"
                                href="{{ route('jenis-kelamin.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-gender-bigender"></i>
                                </span>
                                <span class="hide-menu">Jenis Kelamin</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if ($judulHalaman == 'Master - Tinggi Badan') active @endif"
                                href="{{ route('tinggi-badan.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-chart-arrows-vertical"></i>
                                </span>
                                <span class="hide-menu">Tinggi Badan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if ($judulHalaman == 'Master - Ciri Fisik') active @endif"
                                href="{{ route('ciri-fisik.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-stretching"></i>
                                </span>
                                <span class="hide-menu">Ciri Fisik</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if ($judulHalaman == 'Master - Hasil Diagnosa')  @endif"
                                href="{{ route('hasil-diagnosa.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-heart-rate-monitor"></i>
                                </span>
                                <span class="hide-menu">Hasil Diagnosa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if ($judulHalaman == 'Master - Solusi Stunting') active @endif"
                                href="{{ route('solusi-stunting.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-stethoscope"></i>
                                </span>
                                <span class="hide-menu">Solusi Stunting</span>
                            </a>
                        </li>
                    @endif

                    {{-- next --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Diagnosa</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link @if ($judulHalaman == 'Diagnosa - Input') active @endif"
                            href="{{ route('hasil-perhitungan.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-keyboard"></i>
                            </span>
                            <span class="hide-menu">Input</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link @if ($judulHalaman == 'Diagnosa - Riwayat') active @endif"
                            href="{{ route('hasil-perhitungan.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-history"></i>
                            </span>
                            <span class="hide-menu">Riwayat</span>
                        </a>
                    </li>


                    {{-- next --}}
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Manajemen</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('manajemen-pengguna.index') }}"
                                aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Pengguna</span>
                            </a>
                        </li>
                    @endif


                </ul>

                {{-- logout --}}
                <form action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger mb-5 mt-3" style="width: 100%"
                        onclick="return confirm('Yakin ingin keluar?')">Logout</button>
                </form>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
