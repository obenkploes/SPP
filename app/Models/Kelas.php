<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public $guarded = [];

    // has many
    public function siswa(){
        return $this->hasMany(Siswa::class,'id_kelas');
    }
}
