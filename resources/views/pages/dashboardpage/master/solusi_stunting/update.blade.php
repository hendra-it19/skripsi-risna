@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Solusi Stunting</h3>
                    <span>
                        <a href="{{ route('solusi-stunting.index') }}" class="link">List Data</a> /
                        <span>Ubah Data</span>
                    </span>
                </div>
            </div>


            <div>
                <form action="{{ route('solusi-stunting.update', $solusiStunting->id) }}" method="post"
                    class="container-fluid">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group col-12 col-md-6 mb-3">
                            <label for="jenis_saran">Jenis Saran</label>
                            <select name="jenis_saran" id="jenis_saran"
                                class="form-select @error('jenis_saran')
                                is-invalid
                            @enderror">
                                <option value="">Pilih Jenis</option>
                                <option value="pencegahan" @if (old('jenis_saran', $solusiStunting->jenis_saran) == 'pencegahan') selected @endif>Pencegahan
                                </option>
                                <option value="pengobatan" @if (old('jenis_saran', $solusiStunting->jenis_saran) == 'pengobatan') selected @endif>Pengobatan
                                </option>
                            </select>
                            @error('jenis_saran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="umur_minimal" class="form-label">Umur minimal</label>
                            <input type="number" name="umur_minimal" id="umur_minimal"
                                class="form-control
                            @error('umur_minimal')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('umur_minimal', $solusiStunting->umur_minimal) }}">
                            @error('umur_minimal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-6">
                            <label for="umur_maksimal" class="form-label">Umur maksimal</label>
                            <input type="number" name="umur_maksimal" id="umur_maksimal"
                                class="form-control
                            @error('umur_maksimal')
                                is-invalid
                            @enderror
                            "
                                value="{{ old('umur_maksimal', $solusiStunting->umur_maksimal) }}">
                            @error('umur_maksimal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12">
                            <label for="solusi_stunting" class="form-label">Solusi Stunting</label>
                            <input type="hidden" name="solusi_stunting" id="solusi_stunting"
                                value="{{ old('solusi_stunting', $solusiStunting->solusi_stunting) }}">
                            <trix-editor input="solusi_stunting"
                                class="form-control @error('solusi_stunting')
                                is-invalid
                            @enderror"></trix-editor>
                            @error('solusi_stunting')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="btn-group d-flex mt-4">
                        <a href="{{ route('solusi-stunting.index') }}" type="reset"
                            class="btn btn-outline-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
