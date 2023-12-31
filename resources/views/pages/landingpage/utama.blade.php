@extends('layouts.landingpage')

@section('pages')
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landingpage/img/balita1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Sistem Diagnosa Stunting
                                        (SDS)</h1>
                                    <p class="mb-5 animated slideInRight">Memberikan kemudahan setiap individu untuk
                                        melakukan diagnosa awal pada gejala stunting yang mungkin didapatkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('landingpage/img/balita2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Sistem Diagnosa Stunting
                                        (SDS)</h1>
                                    <p class="mb-5 animated slideInLeft">Kemudahan akses dimanapun dan kapanpun oleh
                                        pengguna yang terhubung ke akses internet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('landingpage/img/about-1.png') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('landingpage/img/about-2.png') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('landingpage/img/about-3.png') }}">
                        </div>
                        <div class="col-6">
                            <div
                                class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">
                                    {{ $jumlahDiagnosaPositif + $jumlahDiagnosaNegatif }}</h1>
                                <small class="fs-5 text-white">Total Riwayat</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Diagnosa Stunting Dengan Forward Chaining</h1>
                    <p class="mb-4">Penggunaan metode forward chaining dalam melakukan diagnosa stunting pada balita
                        memberikan kemudahan akses awal dalam mendeteksi stunting serta memberikan solusi atas hasil yang
                        didapatkan.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Jumlah Pengguna</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{ $jumlahPengguna }}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Jumlah Diagnosa Positif</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{ $jumlahDiagnosaPositif }}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Jumlah Diagnosa Negatif</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{ $jumlahDiagnosaNegatif }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Riwayat Penggunaan</h5>
                        <p class="mb-0">Setiap inputan data hasil diagnosa akan dicatat dan disimpan oleh sistem dalam
                            database.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Bebas Registrasi</h5>
                        <p class="mb-0">Setiap pengguna baru dapat melakukan registrasi akun untuk dapat melakukan proses
                            diagnosa di dalam sistem dashboard. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-cash-coin text-dark"></i>
                        </div>
                        <h5 class="mb-3">Gratis</h5>
                        <p class="mb-0">Seluruh proses dari pendaftaran hingga proses perhitungan diagnosa gratis bagi
                            seluruh pengguna.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-headphones text-dark"></i>
                        </div>
                        <h5 class="mb-3">24/7 Layanan</h5>
                        <p class="mb-0">Layanan dapat digunakan atau diakses dalam 24 jam dalam seminggu penuh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s" id="layanan">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">Mari kenali dan cegah stunting</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">stunting merupakan gangguan pertumbuhan yang
                            dialami oleh balita yang mengakibatkan keterlambatan pertumbuhan anak yang tidak sesuai dengan
                            standarnya sehingga mengakibatkan dampak baik jangka pendek maupun jangka panjang.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <h5 class="mb-3">Variabel perhitungan</h5>
                                <span>Variabel yang memperngaruhi hasil diagnosa seorang balita dinyatakan stunting meliputi
                                    jenis kelamin, tinggi badan, berat badan, dan ciri fisik.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <h5 class="mb-3">Penjelasan Lengkap</h5>
                                <span>Untuk penjelasan lengkap mengenai stunting dapat anda lihat pada konten tombol video berikut.</span>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s"
                            href="{{ route('auth.login') }}">Masuk Sistem</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100 align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                <button type="button" class="btn-play" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/-FZhiaB2Ej0?si=4QMInqorzgItfHSY"
                                    data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Penjelasan Stunting</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Appoinment Start -->
    <div class="container-fluid py-5" id="developer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Berusaha memberikan hasil terbaik.</h1>
                    <p>Dengan menggunakan metode forward chaining diharapkan dapat memberikan hasil yang terbaik kepada
                        pengguna layanan untuk memberikan kemudahan dan juga keakuratan data yang tinggi.</p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Address</h5>
                            <span>Online Service</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Time</h5>
                            <span>24/7</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">Risna Wati</h1>
                    <p class="mb-1">Developer</p>
                    <p class="mb-5">Baubau, Indonesia</p>
                    <h3 class="mb-3">Biography</h3>
                    <p class="mb-4">Membuat layanan diagnosa stunting secara online dengan tujuan agar memberikan
                        kemudahan kepada masyarakat luas untuk melakukan diagnosa awal dugaan stunting serta memberikan
                        solusi atas masalah yang didapatkan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->
@endsection
