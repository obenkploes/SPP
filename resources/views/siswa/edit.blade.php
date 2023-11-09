@extends('Layout')

@section('title', 'Tambah siswa')

@section('content')
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <span class="card-title">Form siswa</span>
            <a href="{{ url('siswa') }}" class="btn btn-success btn-sm">
                <i class="bi bi-arrow-bar-left"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN Siswa" value="{{$siswa->nisn}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS Siswa" value="{{$siswa->nis}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" value="{{$siswa->nama}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_kelas" class="form-label">Kelas</label>
                        <select class="form-select" id="id_kelas" name="id_kelas">
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}" {{ $siswa->id_kelas==$item->id?'selected':''}}>
                                    {{ $item->nama_kelas . '-' . $item->kompetensi_keahlian }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="alamat" class="form-label">Alamat lengkap</label>
                        <textarea name="alamat" id="alamat" class="form-control">{{$siswa->alamat}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="no_telp" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{$siswa->no_telp}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="id_spp" class="form-label">SPP</label>
                        <select name="id_spp" id="id_spp" class="form-select">
                            @foreach ($spp as $item)
                                <option value="{{ $item->id }}" {{$siswa->id_spp==$item->id?'selected':''}}>{{ $item->tahun . ' - ' . $item->nominal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3  mt-auto">
                        <button class="btn form-control btn-primary">
                            <i class="bi bi-floppy-fill"></i>
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show mx-2" role="alert">
            @foreach ($errors->all() as $item)
                <strong class="d-block">{{ $item }}</strong>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
