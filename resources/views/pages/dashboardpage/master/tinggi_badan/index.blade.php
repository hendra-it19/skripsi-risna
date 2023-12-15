@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Tinggi Badan</h3>
                </div>
                <div class="d-inline-block">
                    <a href="{{ route('tinggi-badan.create') }}" class="btn btn-outline-primary">Tambah data</a>
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
                        <th>Kode</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tinggi Badan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>

                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kode }}</td>
                                <td>{{ $row->umur }}</td>
                                <td>{{ $row->jenisKelamin->jenis_kelamin }}</td>
                                <td>{{ $row->tinggi_badan }}</td>
                                <td>
                                    <form action="{{ route('tinggi-badan.destroy', $row->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')"
                                            class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </form>
                                    <a href="{{ route('tinggi-badan.edit', $row->id) }}"
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
