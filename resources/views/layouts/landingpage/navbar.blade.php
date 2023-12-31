<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{ url('/') }}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">S<span class="text-dark">DS</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Utama</a>
                    <a href="#about" class="nav-item nav-link">Tentang</a>
                    <a href="#layanan" class="nav-item nav-link">Layanan</a>
                    <a href="#developer" class="nav-item nav-link">Developer</a>
                    <a href="{{ route('auth.login') }}" class="nav-item nav-link">Masuk </a>
                </div>
            </div>
        </nav>
    </div>
</div>
