@extends('layouts.appAdmin')
@section('content')


<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
   @include('admin.navbar-sidebar')
     <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
       @include('admin.header')
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
              @include('admin.card')
              
              <div class="container" style="margin-top: 80px">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                Tambah Kategori Ujian
                            </div>
                            <div class="card-body">
                                <form action="/kategori/store" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Kategori Ujian</label>
                                        <input type="text" name="nama_kategori" required="required" placeholder="Masukkan Kategori" class="form-control">
                                    </div>
            
                                    <button type="submit" class="btn btn-success">SIMPAN</button>
                                    <button type="reset" class="btn btn-warning">RESET</button>
            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection