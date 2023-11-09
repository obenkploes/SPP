<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = new Siswa();
        $siswa = $siswa->with(['kelas', 'spp'])->get();
        return view("siswa.index", ["data" => $siswa]);
    }
    public function create()
    {
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view("siswa.add", ['kelas' => $kelas, 'spp' => $spp]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswas',
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        $siswa = new Siswa();
        if ($siswa->create($request->all())) {
            return redirect('siswa')->with('message', 'Data berhasil ditambahkan');
        }
        return back()->with('message', 'Data gagal ditambhakan');
    }
    public function show($id)
    {
        $kelas = Kelas::all();
        $spp = Spp::all();
        $siswa = Siswa::find($id);

        return view("siswa.edit", ['kelas' => $kelas, 'spp' => $spp,'siswa'=> $siswa]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        $siswa = Siswa::find($id);
        if ($siswa->update($request->all())) {
            return redirect('siswa')->with('message','Data berhasil diperbaharui');
        }
        return back()->with('message', 'Data gagal diperbaharui');
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        if ($siswa->delete()) {
            return redirect('siswa')->with('message','Data siswa '.$siswa->nama.' berhasil dihapus');
        }
        return back()->with('message','Data gagal dihapus');
    }
}
