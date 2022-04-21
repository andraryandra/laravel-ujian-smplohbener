<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriUjian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
    ];

    
    public function categoryQuestions()
    {
        return $this->hasMany(SoalUjian::class);
    }
}
