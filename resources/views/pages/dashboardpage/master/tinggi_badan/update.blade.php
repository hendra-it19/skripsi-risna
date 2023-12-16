@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Tinggi Badan</h3>
                    <span>
                        <a href="{{ route('tinggi-badan.index') }}" class="link">List Data</a> /
                        <span>Ubah Data</span>
                    </span>
                </div>
            </div>


            <div>
                <form action="{{ route('tinggi-badan.update', $tinggiBadan->id) }}" method="post" class="container-fluid">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="kode" class="form-label">Kode</label>
                            <input type="text" name="kode" id="kode"
                                class="form-control
                            @error('kode')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('kode', $tinggiBadan->kode) }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="umur" class="form-label">Umur (bulan)</label>
                            <input type="number" name="umur" id="umur" min="1"
                                class="form-control
                            @error('umur')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('umur', $tinggiBadan->umur) }}">
                            @error('umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-select 
                            @error('jenis_kelamin')
                                is-invalid
                            @enderror">
                                <option value="">Pilih jenis kelamin</option>
                                @foreach ($jenisKelamin as $row)
                                    <option value="{{ $row->id }}" @if ($row->id == $tinggiBadan->jenis_kelamin) selected @endif>
                                        {{ $row->kode }} | {{ $row->jenis_kelamin }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                            <input type="number" name="tinggi_badan" id="tinggi_badan" min="1"
                                class="form-control
                            @error('tinggi_badan')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('tinggi_badan', $tinggiBadan->tinggi_badan) }}">
                            @error('tinggi_badan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ route('tinggi-badan.index') }}" type="reset" class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
