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
              
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Table Users</h5>
                    </div>

                    <form action="{{ url('importKategori') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <div class="">
                    <a href="/kategori/tambah" class="bg-success text-white ml-3 p-2 rounded"> + Create Kategori</a>
<br><br>
                    </div>
                   <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori Ujian</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        @php
                            $no = 1;
                        @endphp
                            @foreach ($kategori as $k)
                   
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $k->nama_kategori }}</td>
                                <td>
                                    <a href="/kategori/edit/{{ $k->id_kategori }}" class="bg-warning text-white p-2 rounded">Edit</a>
                                    <a href="/kategori/hapus/{{ $k->id_kategori }}" class="bg-danger text-white p-2 rounded">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </main>
    </div>
</div>
@endsection