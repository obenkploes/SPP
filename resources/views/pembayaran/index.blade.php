@extends('Layout')

@section('title')
    Pembayaran
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <span class="card-title">Pembayaran SPP</span>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN">
                        <span class="form-text" id="nisn-message"></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tgl_bayar" class="form-label">Tanggal pembayaran</label>
                        <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" value="{{date("Y-m-d")}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="bulan_dibayar" class="form-label">Bulan pembayaran</label>
                        <select  class="form-select" id="bulan_dibayar" name="bulan_dibayar">
                            @foreach ($bulan as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="tahun_dibayar" class="form-label">Tahun pembayaran</label>
                        <input type="text" class="form-control" id="tahun_dibayar" name="tahun_dibayar" value="{{date("Y")}}">
                    </div>
                    <div class="col-12 row" >
                        <div class="col-3">
                            <div class="input-group">
                                <i class="bi bi-watch input-group-text"></i>
                                <select name="id_spp" id="id_spp" class="form-select">
                                    @foreach ($spp as $item)
                                        <option value="{{$item->id}}">{{$item->tahun}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-text">Rp.</div>
                                <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script src="/js/axios.min.js"></script>
<script>
    let nisnSiswa = document.getElementById('nisn')
    let nisnMessage=document.getElementById('nisn-message')
    nisnSiswa.addEventListener('keyup',async()=>{
        nisnMessage.innerHTML = 'Mencari data siswa'
        await axios({
            url:'/siswa/cari/'+nisnSiswa.value,
        })
        .then(res=>{
            let siswa = res.data
            document.getElementById('nama').value = siswa.nama
            document.getElementById('kelas').value = siswa.kelas.nama_kelas
            document.getElementById('id_spp').value = siswa.id_spp
            document.getElementById('jumlah_bayar').value = siswa.spp.nominal
            nisnMessage.innerHTML = ''
        })
        .catch(err=>{
            document.getElementById('nama').value = ''
            document.getElementById('kelas').value = ''
            document.getElementById('jumlah_bayar').value = 0
            nisnMessage.innerHTML = 'NISN tidak terdaftar'
        })

        
    })
</script>
    
@endsection