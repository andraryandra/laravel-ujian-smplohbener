<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriUjianController;
use App\Http\Controllers\SoalUjianController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/kategoriUjian', function () {
//     return view('admin.kategoriUjian.kategori-ujian');
// });

Route::get('/dashboardAdmin', [UserController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index']);
Route::post('__invoke', [UserController::class, '__invoke']);

//route CRUD Kategori Ujian
Route::get('/kategoriUjian', [KategoriUjianController::class, 'indexKategori']);
Route::get('/kategori/tambah',[KategoriUjianController::class, 'tambah']);
Route::post('/kategori/store', [KategoriUjianController::class, 'store']);
Route::get('/kategori/edit/{id}',[KategoriUjianController::class, 'edit']);
Route::post('/kategori/update',[KategoriUjianController::class, 'update']);
Route::get('/kategori/hapus/{id}',[KategoriUjianController::class, 'hapus']);
Route::post('importKategori', [KategoriUjianController::class, 'importKategori']);



//route CRUD Soal Ujian
Route::get('/soalUjian', [SoalUjianController::class, 'index']);
// Route::get('/soalUjian', [SoalUjianController::class, 'indexSoalUjian']);
// Route::get('/soalUjian/tambah', [SoalUjianController::class, 'indexKategoriUjian']);
Route::get('/soalUjian/tambah',[SoalUjianController::class, 'tambah']);
Route::post('/soalUjian/store', [SoalUjianController::class, 'store']);
Route::get('/soalUjian/edit/{id}',[SoalUjianController::class, 'edit']);
Route::post('/soalUjian/update',[SoalUjianController::class, 'update']);
Route::get('/soalUjian/hapus/{id}',[SoalUjianController::class, 'hapus']);
Route::post('importSoalUjian', [SoalUjianController::class, 'importSoalUjian']);





