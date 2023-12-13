@extends('layouts.auth')

@section('pages')
    <p class="text-center">Masuk ke akun anda</p>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('error_login'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror"
                id="email" aria-describedby="emailHelp" name="email">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror"
                id="exampleInputPassword1" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input primary" type="checkbox" value="1" id="flexCheckChecked"
                    name="ingat_saya">
                <label class="form-check-label text-dark" for="flexCheckChecked">
                    Ingat perangkat saya
                </label>
            </div>
            {{-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> --}}
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
            In</button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="fs-4 mb-0 fw-bold">Pengguna baru?</p>
            <a class="text-primary fw-bold ms-2" href="{{ url('/auth/register') }}">Buat akun</a>
        </div>
    </form>
@endsection
