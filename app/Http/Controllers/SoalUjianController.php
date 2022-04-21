<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Imports\KategoriUjianImport;
use App\Imports\SoalUjianImport;
use App\Models\KategoriUjian;
use App\Models\SoalUjian;
use Maatwebsite\Excel\Facades\Excel;

class SoalUjianController extends Controller
{
    public function indexSoalUjian()
	{
    	// mengambil data dari table pegawai
		$soalUjian = SoalUjian::all();
		$kategori = KategoriUjian::all()->pluck('nama_kategori', 'id_kategori');
		// $kategori = KategoriUjian::pluck('nama_kategori', 'id_kategori')->first();

    	// mengirim data pegawai ke view index
		// return view('soalUjian.index',['soalUjian' => $soalUjian],['kategori' => $kategori]);
        return view('soalUjian.tambah', compact('soalUjian'));
	}
    public function index()
	{
    //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
    
            $soalUjian = DB::table('soal_ujians')->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('soalUjian.index',['soalUjian' => $soalUjian]);
    }

    public function indexKategoriUjian()
	{
    	// mengambil data dari table pegawai
		$kategori = DB::table('kategori_ujians')->get();

    	// mengirim data pegawai ke view index
		return view('soalUjian.tambah',['soalUjian' => $kategori]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
        $soalUjian = SoalUjian::all();
		// $kategori = KategoriUjian::with('soalUjian')->get();
		// $kategori = DB::table('kategori_ujians')->with('soalUjian')->get();
		$kategori = KategoriUjian::all()->pluck('nama_kategori', 'id_kategori');

		// memanggil view tambah
		// return view('soalUjian.tambah',['soalUjian' => $soalUjian], ['kategori' => $kategori]);
        return view('soalUjian.tambah', compact('kategori','soalUjian'));

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('soal_ujians')->insert([
            // 'id_kategori' => $request->id_kategori,
			'soal' => $request->soal,
			'id_kategori' => $request->id_kategori,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban' => $request->jawaban,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/soalUjian');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$soalUjian = DB::table('soal_ujians')->where('id_soal',$id)->get();
		// ->get();
		$kategori = KategoriUjian::all()->pluck('nama_kategori', 'id_kategori');
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('soalUjian.edit',['soalUjian' => $soalUjian], ['kategori' => $kategori]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('soal_ujians')->where('id_soal',$request->id_soal)->update([
            // 'id_kategori' => $request->id_kategori,
			'soal' => $request->soal,
			'id_kategori' => $request->id_kategori,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d,
            'jawaban' => $request->jawaban,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/soalUjian');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('soal_ujians')->where('id_soal',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/soalUjian');
	}

    public function importSoalUjian(Request $request){
        //melakukan import file
        Excel::import(new SoalUjianImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }
}
