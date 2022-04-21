<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalUjian extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal', 'id_kategori','pilihan_a','pilihan_b','pilihan_c','pilihan_d','jawaban'
    ];

    // public function soalUjian(){
    //     return $this->belongsTo(KategoriUjian::class);
    // } 
    public function category(){
        return $this->belongsTo(KategoriUjian::class);
    }
}
