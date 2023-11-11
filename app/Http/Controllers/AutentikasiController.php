<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function login(){
        return view("Login");
    }
    public function adminLogin(Request $request){
        $this->validate($request,[
            "username"=> "required",
            "password"=> "required",
        ]);
        $cek =[
            "username"=> $request->input('username'),
            'password'=> $request->input('password'),
        ];
        if(Auth::attempt($cek)){
            $request->session()->regenerate();
            return redirect('')->with('message','Selamat datang');
        }
        return back()->with('message','Login gagal');
    }
    public function logoutAdmin(){
        Auth::logout();
        
        return redirect('login');
    }
}
