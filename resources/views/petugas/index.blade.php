@extends('Layout')

@section('title')
    Petugas
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <span class="card-title">Data petugas</span>
            <a href="{{ url('petugas/create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-circle"></i>
                Baru
            </a>
        </div>
        <div class="card-body">
            <table id="table-petugas" class="table table-sm table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama lengkap</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($petugas as $item)
                        <tr class="align-middle">
                            <td>{{$no}}</td>
                            <td>{{ $item->nama_petugas }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->level }}</td>
                            <td>
                                <a href="{{ url('petugas/edit/' . $item->id) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ url('petugas/delete/' . $item->id) }}" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
