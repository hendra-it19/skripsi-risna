@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Data anda berhasil dianalisis</h5>
            <hr class="mb-4">

            <div class="row">
                <table class="table border">
                    <thead>
                        <th>
                            Nama Lengkap
                        </th>
                        <th>
                            Umur
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Tinggi Badan
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $hasilPerhitungan->nama }}</td>
                            <td>{{ $hasilPerhitungan->umur }} Bulan</td>
                            <td>{{ $hasilPerhitungan->jenisKelamin->jenis_kelamin }}</td>
                            <td>{{ $hasilPerhitungan->tinggiBadan->tinggi_badan }} cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row mt-3">
                <h5>Diagnosa data pasien dengan metode forward chaining</h5>

                <ol class="mx-3">
                    <li>Variabel 1 yaitu jenis kelamin yang disimbolkan dengan A dengan nilai :
                        {{ $hasilPerhitungan->jenisKelamin->kode }}</li>
                    <li>Variabel 2 yaitu tinggi badan yang disimbolkan dengan B dengan nilai :
                        {{ $hasilPerhitungan->tinggiBadan->kode }}</li>
                    <li>Variabel 3 yaitu ciri fisik yang disimbolkan dengan C dengan nilai :
                        {{ $hasilPerhitungan->ciriFisik->kode }}</li>
                </ol>

                <p>Kemudian, dengan varibel ke-4 sebagai hasil diagnosa pasien dengan nilai
                    {{ $hasilPerhitungan->hasilDiagnosa->kode }} atau dengan hasil ini memberikan diagnosa sementara bahwa
                    pasien mendapatkan hasil <strong>{!! $hasilPerhitungan->hasilDiagnosa->kode == 'D1'
                        ? '<span class="text-danger">Positif Stunting</span>'
                        : '<span class="text-success">Negatif</span>' !!}</strong></p>

                <p>Dengan hasil di atas, maka pasien dapat diberikan beberapa tindakan
                    <strong>
                        @if ($hasilPerhitungan->hasilDiagnosa->kode == 'D1')
                            Pengobatan
                        @else
                            Pencegahan stunting
                        @endif
                    </strong> sebagai berikut :</p>
                <div>
                    {!! $hasilPerhitungan->solusiStunting->solusi_stunting !!}
                </div>
                <div class="d-flex flex-column">
                    <a href="{{route('hasil-perhitungan.create')}}" class="btn btn-primary mt-3">Kembali ke form pengisian</a>
                    <a href="{{route('hasil-perhitungan.index')}}" class="text-center my-3">Lihat daftar riwayat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
