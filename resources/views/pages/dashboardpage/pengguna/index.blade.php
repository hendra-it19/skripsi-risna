@extends('layouts.dashboardpage')

@section('pages')
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-5 mt-2">
                <div class="d-inline-block">
                    <h3 class="mb-4">Manajemen Pengguna</h3>
                </div>
                <div class="d-inline-block">
                    <a href="{{ route('manajemen-pengguna.create') }}" class="btn btn-outline-primary">Tambah pengguna</a>
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>

                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->nomor_handphone }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    @if ($row->role == 'admin')
                                        <span class="btn btn-sm btn-danger">Admin</span>
                                    @else
                                        <span class="btn btn-sm btn-success">Pengguna</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->role == 'admin' && ($row->id = 1))
                                        <button type="submit" class="btn btn-sm btn-outline-danger" disabled>Hapus</button>
                                    @else
                                        <form action="{{ route('manajemen-pengguna.destroy', $row->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data? (seluruh riwayat diagnosa juga akan dihapus)')"
                                                class="btn btn-sm btn-outline-danger">Hapus</button>
                                        </form>
                                    @endif
                                    @if ($row->role == 'admin' && ($row->id = 1))
                                        <button type="submit" class="btn btn-sm btn-outline-warning" disabled>Edit</button>
                                    @else
                                        <a href="{{ route('manajemen-pengguna.edit', $row->id) }}"
                                            class="btn btn-sm btn-outline-warning">Edit</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
