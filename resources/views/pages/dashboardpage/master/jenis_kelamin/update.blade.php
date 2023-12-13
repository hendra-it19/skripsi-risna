@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Jenis Kelamin</h3>
                    <span>
                        <a href="{{ route('jenis-kelamin.index') }}" class="link">List Data</a> /
                        <span>Ubah Data</span>
                    </span>
                </div>
            </div>


            <div>
                <form action="{{ route('jenis-kelamin.update', $jenisKelamin->id) }}" method="post" class="container-fluid">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group mb-3 col-6">
                            <label for="kode" class="form-label">Kode</label>
                            <input type="text" name="kode" id="kode"
                                class="form-control
                            @error('kode')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('kode', $jenisKelamin->kode) }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-select 
                            @error('jenis_kelamin')
                                is-invalid
                            @enderror">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="laki-laki" @if (old('jenis_kelamin', $jenisKelamin->jenis_kelamin) == 'laki-laki') selected @endif>
                                    Laki-laki</option>
                                <option value="perempuan" @if (old('jenis_kelamin', $jenisKelamin->jenis_kelamin) == 'perempuan') selected @endif>
                                    Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ route('jenis-kelamin.index') }}" type="reset" class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
