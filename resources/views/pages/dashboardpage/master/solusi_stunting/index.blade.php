@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Solusi Stunting</h3>
                </div>
                <div class="d-inline-block">
                    <a href="{{ route('solusi-stunting.create') }}" class="btn btn-outline-primary">Tambah data</a>
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
                        <th>Umur (Bulan)</th>
                        <th>Jenis Masukan</th>
                        <th>Masukan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>

                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->umur_minimal }} - {{ $row->umur_maksimal }}</td>
                                <td>{{ $row->jenis_saran }}</td>
                                <td>{!! $row->solusi_stunting !!}</td>
                                <td>
                                    <form action="{{ route('solusi-stunting.destroy', $row->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')"
                                            class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </form>
                                    <a href="{{ route('solusi-stunting.edit', $row->id) }}"
                                        class="btn btn-sm btn-outline-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


