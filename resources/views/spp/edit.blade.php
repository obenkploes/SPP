@extends('Layout')

@section('title','SPP')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title">Form SPP</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun masuk siswa" value="{{$data->tahun}}">
                        </div>
                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal</label>
                            <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Spp bulanan" value="{{$data->nominal}}">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <a class="btn btn-info form-control" href="{{url(spp)}}">Batal</a>
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
                            <strong class="d-block">{{ $item }}</strong>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-8">
            <div class="card shadow">
                <div class="card-header">
                    <span class="card-title">Data spp tahunan</span>
                </div>
                <div class="card-body">
                    <table id="table-spp" class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun masuk</th>
                                <th>Nominal</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($spp as $item)
                                <tr class="align-middle">
                                    <td>{{$no}}</td>
                                    <td>{{$item->tahun}}</td>
                                    <td>{{$item->nominal}}</td>
                                    <td>
                                        <a href="{{url('spp/edit/'.$item->id)}}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="{{url('spp/delete/'.$item->id)}}" class="btn btn-sm btn-danger">
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