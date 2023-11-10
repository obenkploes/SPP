<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;
    public $guarded=[];

    // has Many
    public function pembayaran(){
        return $this->hasMany(Pembayaran::class,'id','id_petugas');
    }
}
