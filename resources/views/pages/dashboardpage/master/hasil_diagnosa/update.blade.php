@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Hasil Diagnosa</h3>
                    <span>
                        <a href="{{ route('hasil-diagnosa.index') }}" class="link">List Data</a> /
                        <span>Ubah Data</span>
                    </span>
                </div>
            </div>


            <div>
                <form action="{{ route('hasil-diagnosa.update', $hasilDiagnosa->id) }}" method="post" class="container-fluid">
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
                                value="{{ old('kode', $hasilDiagnosa->kode) }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="hasil_diagnosa" class="form-label">Hasil diagnosa</label>
                            <input type="text" name="hasil_diagnosa" id="hasil_diagnosa"
                                class="form-control
                            @error('hasil_diagnosa')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('hasil_diagnosa', $hasilDiagnosa->hasil_diagnosa) }}">
                            @error('hasil_diagnosa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ route('hasil-diagnosa.index') }}" type="reset"
                            class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
