<?php

namespace App\Imports;

use App\Models\SoalUjian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //digunakan untuk menandai excel dengan header

class SoalUjianImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SoalUjian([
            'soal'           => $row['soal'],
            'id_kategori'           => $row['id_kategori'],
            'pilihan_a'      => $row['pilihan_a'],
            'pilihan_b'      => $row['pilihan_b'],
            'pilihan_c'      => $row['pilihan_c'],
            'pilihan_d'      => $row['pilihan_d'],
            'jawaban'        => $row['jawaban'],
        ]);
    }
}
