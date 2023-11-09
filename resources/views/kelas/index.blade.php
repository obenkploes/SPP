@extends('Layout')

@section('title', 'Kelas')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title">Form Kelas</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                                placeholder="Nama Kelas">
                        </div>
                        <div class="mb-3">
                            <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                            <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian"
                                placeholder="Nama Jurusan">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <a class="btn btn-info form-control" href="{{url('kelas')}}">Batal</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary form-control">
                                    Simpan
                                    <i class="bi bi-floppy"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show mx-2" role="alert">
                        @foreach ($errors->all() as $item)
                            <strong class="d-block">{{$item}}</strong>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-8">
            @if (session('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title">Data kelas</span>
                </div>
                <div class="card-body">
                    <table id="table-spp" class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Jumlah siswa</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($kelas as $item)
                                <tr class="align-middle">
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->nama_kelas }}</td>
                                    <td>{{ $item->kompetensi_keahlian }}</td>
                                    <td>{{ count($item->siswa) }}</td>
                                    <td>
                                        <a href="{{ url('kelas/edit/' . $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="{{ url('kelas/delete/' . $item->id) }}" class="btn btn-sm btn-danger">
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
        </div>
    </div>
@endsection
