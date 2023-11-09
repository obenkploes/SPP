<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index(){
        $s= new Spp();
        return view("spp.index",['spp'=>$s->all()]);
    }
    public function store(Request $request){
        $request->validate([
            'tahun'=> 'required|unique:spps',
            'nominal'=> 'required',
        ]);
        $spp = new Spp();
        if($spp->create( $request->all() )){
            return back()->with('success','Data sudah ditambahkan');
        }
        return back()->with('error','Data gagal disimpan');
    }
    public function show($id){
        $sp = new Spp();
        $item = $sp->find($id);
        return view('spp.edit',['data'=>$item,'spp'=>$sp->all()]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'tahun'=> 'required|unique:spps',
            'nominal'=> 'required',
        ]);
        $spp = new Spp();
        $spp= $spp->find($id);
        if($spp->update( $request->all() )){
            return redirect('spp')->with('success','Data berhasil diperbaharui');
        }
        return back()->with('error','Data gagal diperbaharui');
    }
    public function delete($id){
        $spp = new Spp();
        $data = $spp->find($id);
        if($data->delete()){
            $pesan = 'Data spp '.$data->tahun.' telah dihapus';
            return redirect('spp')->with('success', $pesan);
        }
        return back()->with('error','Data gagal dihapus');
    }
}
