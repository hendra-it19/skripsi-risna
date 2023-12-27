@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Silahkan isi data anda dengan benar!</h5>
            <hr class="mb-4">

            <form action="{{ route('hasil-perhitungan.store') }}" method="post">
                @csrf
                @method('post')
                <div class="row">
                    <div class="form-group mb-3 col-12 col-md-5">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" id="nama" name="nama"
                            class="form-control @error('nama')
                        is-invalid
                    @enderror"
                            value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-12 col-md-5">
                        <label for="umur">Umur (bulan)</label>
                        <select name="umur" id="umur"
                            class="form-select @error('umur')
                            is-invalid
                        @enderror">
                            <option value="">Pilih range umur</option>
                            @foreach ($umur as $row)
                                <option value="{{ $row->umur }}">
                                    {{ $row->umur }}</option>
                            @endforeach
                        </select>
                        @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-12 col-md-5">
                        <label for="jenis_kelamin">Jenis kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="form-select @error('jenis_kelamin')
                        is-invalid
                    @enderror">
                            <option value="">Pilih jenis kelamin</option>
                            @foreach ($jenisKelamin as $row)
                                <option value="{{ $row->id }}">
                                    [{{ $row->kode }}] {{ $row->jenis_kelamin }} </option>
                            @endforeach
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 col-12 col-md-5">
                        <label for="tinggi_badan">Tinggi Badan (cm)</label>
                        <select name="tinggi_badan" id="tinggi_badan"
                            class="form-select @error('tinggi_badan')
                        is-invalid
                    @enderror"
                            disabled>
                            <option value="">Pilih tinggi badan</option>
                        </select>
                        @error('tinggi_badan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3 col-12 col-md-5">
                        <label for="ciri_fisik">Ciri fisik</label>
                        <select name="ciri_fisik" id="ciri_fisik"
                            class="form-select @error('ciri_fisik')
                        is-invalid
                    @enderror">
                            <option value="">Pilih ciri fisik</option>
                            @foreach ($ciriFisik as $row)
                                <option value="{{ $row->id }}" @if (old('ciri_fisik') == $row->id) selected @endif>
                                    [{{ $row->kode }}] {{ $row->ciri_fisik }}</option>
                            @endforeach
                        </select>
                        @error('ciri_fisik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="btn-group d-flex mt-4">
                    <button class="btn btn-outline-danger" type="reset">Hapus data</button>
                    <button class="btn btn-primary" type="submit">Proses Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            let umur = $('#umur');
            let jenis_kelamin = $('#jenis_kelamin');
            let val_umur = null;
            let val_kelamin = null;
            let data = null;

            umur.on('change', function($event) {
                val_umur = $event.target.value;
                val_kelamin = jenis_kelamin.val();
                ubah(val_umur, val_kelamin);
            })

            jenis_kelamin.on('change', function($event) {
                val_umur = umur.val();
                val_kelamin = $event.target.value;
                ubah(val_umur, val_kelamin);
            })

            function ubah(u, k) {
                if (u != '' && k != '') {
                    $('#tinggi_badan').removeAttr('disabled');
                    $.get('/user/hasil-perhitungan/get-data?jenis_kelamin=' + k + '&umur=' + u + '',
                        function(data, status) {
                            let select = $('#tinggi_badan');
                            select.empty();
                            select.append(`<option value="">Pilih tinggi badan</option>`);
                            $.each(data.data, function(index, value) {
                                select.append(
                                    `<option value="${value.id}">${value.tinggi_badan} cm</option>`);
                            })
                        }
                    );
                } else {
                    $('#tinggi_badan').attr('disabled', 'disabled');
                    $('#tinggi_badan').val() = '';
                    $('#tinggi_badan').empty();
                }
            }
        });
    </script>
@endsection
