@extends('Layout')

@section('title')
    Perbaharui petugas
@endsection

@section('content')
    <div class="card shadow col-lg-6 m-lg-auto">
        <div class="card-header d-flex justify-content-between">
            <span class="card-title">Form petugas</span>
            <a href="{{ url('petugas') }}" class="btn btn-success btn-sm">
                <i class="bi bi-arrow-bar-left"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Nama pengguna</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nama pengguna" value="{{$petugas->username}}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata sandi" value="{{$petugas->password}}">
                </div>
                <div class="mb-3">
                    <label for="nama_petugas" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama petugas" value="{{$petugas->nama_petugas}}">
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" id="level" class="form-select">
                        <option value="admin" {{$petugas->level=='admin'?'selected':''}}>admin</option>
                        <option value="petugas" {{$petugas->level=='petugas'?'selected':''}}>petugas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control">
                        Simpan
                        <i class="bi bi-floppy-fill"></i>
                    </button>
                </div>
            </form>
        </div>
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show mx-2" role="alert">
            @foreach ($errors->all() as $item)
                <strong class="d-block">{{ $item }}</strong>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
@endsection