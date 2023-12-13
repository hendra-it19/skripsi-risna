@extends('layouts.auth')

@section('pages')
    <p class="text-center">Membuat akun baru</p>
    <form action="{{ route('auth.register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama')
                    is-invalid 
            @enderror"
                id="nama" aria-describedby="textHelp" name="nama" value="{{old('nama')}}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror"
                id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror"
                id="password" name="password" value="{{old('password')}}">
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Konfirmasi Password</label>
            <input type="password"
                class="form-control @error('konfirmasi_password')
                is-invalid
            @enderror"
                id="password" name="konfirmasi_password">
            @error('konfirmasi_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar akun</button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
            <a class="text-primary fw-bold ms-2" href="{{ url('/auth/login') }}">Masuk akun</a>
        </div>
    </form>
@endsection
