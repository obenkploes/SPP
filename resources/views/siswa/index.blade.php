@extends('Layout')
@section('title', 'Data siswa')


@section('content')
    @if (session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <span class="card-title">Data siswa</span>
            <a href="{{ url('siswa/create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-person-plus-fill"></i>
                Tambah
            </a>
        </div>
        <div class="card-body">
            <div class="row g-3">

            </div>
            <table id="table-siswa" class="table table-sm table-hover table-responsive">
                <thead>
                    <th>No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>No telp</th>
                    <th>#</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr class="align-middle">
                            <td>{{ $no }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>
                                <a href="{{ url('siswa/edit/' . $item->id) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ url('siswa/delete/' . $item->id) }}" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
