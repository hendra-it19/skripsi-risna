@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Riwayat inputan data pasien</h3>
                </div>
                <div class="d-inline-block">
                    <a href="{{ route('hasil-perhitungan.create') }}" class="btn btn-outline-primary">Diagnosa data baru</a>
                </div>
            </div>


            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('errors'))
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @endif

                <table class="table" id="table" data-order='[[ 1, "asc" ]]' data-page-length='10'>
                    <thead>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Umur (bulan)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>Ciri Fisik</th>
                        <th>Penginput</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>

                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->umur }}</td>
                                <td>{{ $row->tinggiBadan->tinggi_badan }}</td>
                                <td>{{ $row->ciriFisik->ciri_fisik }}</td>
                                <td>{{ $row->penginput->nama }}</td>
                                <td>
                                    <form action="{{ route('hasil-perhitungan.destroy', $row->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')"
                                            class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </form>
                                    <a href="{{ route('hasil-perhitungan.show', $row->id) }}"
                                        class="btn btn-sm btn-outline-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
