@extends('layouts.dashboardpage')

@section('pages')
    <div class="row mt-5 gap-5">
        <div class="card shadow col-4 col-md-3 col-lg-2 text-center py-3">
            <h6>Jumlah Pengguna</h6>
            <hr>
            <h4>{{ $user }}</h4>
        </div>
        <div class="card shadow col-4 col-md-3 col-lg-2 text-center py-3">
            <h6>Diagnosa Positif</h6>
            <hr>
            <h4>{{ $hasilPerhitunganPositif }}</h4>
        </div>
        <div class="card shadow col-4 col-md-3 col-lg-2 text-center py-3">
            <h6>Diagnosa Negatif</h6>
            <hr>
            <h4>{{ $hasilPerhitunganNegatif }}</h4>
        </div>
        <div class="card shadow col-4 col-md-3 col-lg-2 text-center py-3">
            <h6>Total Riwayat</h6>
            <hr>
            <h4>{{ $hasilPerhitunganPositif + $hasilPerhitunganNegatif }}</h4>
        </div>
    </div>
@endsection
