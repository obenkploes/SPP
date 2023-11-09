<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = new Kelas();
        return view("kelas.index",['kelas'=>$kelas->with('siswa')->get()]);
    }

    public function store(Request $request){
        $request->validate([
            'nama_kelas'=> 'required|unique:kelas',
            'kompetensi_keahlian'=> 'required',
        ]);
        $kelas = new Kelas();
        if($kelas->create( $request->all() )){
            return redirect('kelas')->with('message','Data berhasil ditambahkan');
        }
        return back()->with('message','Data gagal ditambahkan');
    }
    public function show($id){
        $editKelas = Kelas::find($id);
        $kelas = Kelas::with('siswa')->get();
        return view('kelas.edit',['edit'=>$editKelas,'kelas'=> $kelas]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'nama_kelas'=> 'required',
            'kompetensi_keahlian'=> 'required',
        ]);
        $kelas = Kelas::find($id);
        if($kelas->update($request->all())){
            return redirect('kelas')->with('message','Data berhasil diperbaharui');
        }
        return back()->with('message','Data gagal diperbaharui');
    }
    public function delete($id){
        $kelas = Kelas::find($id);
        if($kelas->delete()){
            return redirect('kelas')->with('message','Kelas '. $kelas->nama_kelas .' berhasil dihapus');
        }
        return back()->with('message','Data gagal dihapus');
    }
}
