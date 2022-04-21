<?php

namespace App\Imports;

use App\Models\KategoriUjian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //digunakan untuk menandai excel dengan header

class KategoriUjianImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KategoriUjian([
            'nama_kategori'      => $row['nama_kategori'],
            
        ]);
    }
}
