<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        $p = new Petugas();
        return view("petugas.index",["petugas"=> $p->all()]);
    }
    public function create(){
        return view("petugas.add");
    }
    public function store(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=> 'required',
            'nama_petugas'=> 'required',
        ]);
        $p = new Petugas();
        if($p->create( $request->all() )){
            return redirect("petugas")->with("message","Data berhasil ditambahkan");
        }
        return back()->with("message","Data gagal ditambahkan");
    }
    public function show($id){
        $p = new Petugas();
        return view("petugas.edit",["petugas"=> $p->find($id)]);
    }
    public function update(Request $request, $id){
        $request->validate([
            'username'=>'required',
            'password'=> 'required',
            'nama_petugas'=> 'required',
        ]);
        $p = Petugas::find($id);
        if($p->update( $request->all() )){
            return redirect("petugas")->with("message","Data berhasil diperbaharui");
        }
        return back()->with("message","Data gagal diperbaharui");
    }
    public function delete($id){
        $p = Petugas::find($id);
        if($p->delete()){
            return redirect("petugas")->with("message","Data petugas ".$p->nama_petugas.' telah dihapus');
        }
        return back()->with('message','Data gagal dihapus');
    }
}
