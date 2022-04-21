<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel; //library excel

class UserController extends Controller
{

    public function index(){
        // $data = User::get();
        $data = User::where('role_smp', 'smp1')
        ->where('level','!=', 'admin')
        ->get();

        return view('admin.dashboard-admin', ['data' => $data]);
    }

    public function __invoke(Request $request){
        //melakukan import file
        Excel::import(new UserImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        return back();
    }


}