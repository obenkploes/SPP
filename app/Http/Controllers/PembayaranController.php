<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class PembayaranController extends Controller
{
    public function index(){
        $spp = Spp::all();
        $bulan=[
            "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
        ];
        return view("pembayaran.index",['spp'=>$spp,'bulan'=>$bulan]);
    }
}
