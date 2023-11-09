<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $guarded = [ ];

    // has many
    public function bayar(){
        return $this->hasMany(Pembayaran::class,'nisn','nisn');
    }
    public function spp(){
        return $this->hasMany(Spp::class,'id','id_spp');
    }

    // belongsto
    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }
    
}
