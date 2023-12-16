@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Ciri Fisik</h3>
                    <span>
                        <a href="{{ route('ciri-fisik.index') }}" class="link">List Data</a> /
                        <span>Ubah Data</span>
                    </span>
                </div>
            </div>


            <div>
                <form action="{{ route('ciri-fisik.update', $ciriFisik->id) }}" method="post" class="container-fluid">
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
                                value="{{ old('kode', $ciriFisik->kode) }}">
                            @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-6 col-12">
                            <label for="ciri_fisik" class="form-label">Ciri Fisik</label>
                            <textarea name="ciri_fisik" id="ciri_fisik" rows="10"
                                class="form-control @error('ciri_fisik')
                                is-invalid
                            @enderror">{{ old('ciri_fisik', $ciriFisik->ciri_fisik) }}</textarea>
                            @error('ciri_fisik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ route('ciri-fisik.index') }}" type="reset" class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
