@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Detail Akun</h3>
                </div>
            </div>

            <div class="container-fluid my-4">
                <div class="text-muted">
                    <span class="text-danger"> * </span>Catatan : Kosongkan kolom password dan konfirmasi password jika tidak
                    ingin mengganti password lama anda
                </div>
            </div>

            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('auth.updateProfile', $user->id) }}" method="post" class="container-fluid">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="form-control
                            @error('nama')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('nama', $user->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" name="email" id="email"
                                class="form-control
                            @error('email')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="alamat" class="form-label">Alamat <small class="text-muted">
                                    (opsional)</small></label>
                            <input type="text" name="alamat" id="alamat"
                                class="form-control
                            @error('alamat')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('alamat', $user->alamat) }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="nomor_handphone" class="form-label">Nomor Handphone <small class="text-muted">
                                    (opsional)</small></label>
                            <input type="number" name="nomor_handphone" id="nomor_handphone"
                                class="form-control
                            @error('nomor_handphone')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('nomor_handphone', $user->nomor_handphone) }}">
                            @error('nomor_handphone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="password" class="form-label">Password <small class="text-muted">
                                    (opsional)</small></label>
                            <input type="text" name="password" id="password"
                                class="form-control
                            @error('password')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="konfirmasi_password" class="form-label">Konfirmasi Password <small
                                    class="text-muted">
                                    (opsional)</small></label>
                            <input type="text" name="konfirmasi_password" id="konfirmasi_password"
                                class="form-control
                            @error('konfirmasi_password')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('konfirmasi_password') }}">
                            @error('konfirmasi_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ url('/dashboard') }}" type="reset" class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Ubah Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
