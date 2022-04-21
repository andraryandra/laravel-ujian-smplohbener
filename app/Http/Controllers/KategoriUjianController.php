<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriUjian;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Imports\KategoriUjianImport;
use Maatwebsite\Excel\Facades\Excel;

class KategoriUjianController extends Controller
{
    public function indexKategori()
	{
    	// mengambil data dari table pegawai
		$kategori = DB::table('kategori_ujians')->get();

    	// mengirim data pegawai ke view index
		return view('kategoriUjian.index',['kategori' => $kategori]);
        
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('kategoriUjian.tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kategori_ujians')->insert([
			'nama_kategori' => $request->nama_kategori,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kategoriUjian');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kategori = DB::table('kategori_ujians')->where('id_kategori',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('kategoriUjian.edit',['kategori' => $kategori]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kategori_ujians')->where('id_kategori',$request->id)->update([
			'nama_kategori' => $request->nama_kategori,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kategoriUjian');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kategori_ujians')->where('id_kategori',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/kategoriUjian');
	}

	public function importKategori(Request $request){
        //melakukan import file
        Excel::import(new KategoriUjianImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }

}
