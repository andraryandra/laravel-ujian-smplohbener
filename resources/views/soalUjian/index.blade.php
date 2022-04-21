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

                    <form action="{{ url('importSoalUjian') }}" method="POST" enctype="multipart/form-data">
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
                    <a href="/soalUjian/tambah" class="bg-success text-white ml-3 p-2 rounded"> + Create Soal Ujian</a>
<br><br>
                    </div>
                   <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th class="col">No</th>
                            <th>Kategori Ujian</th>
                            <th class="col" >Soal Ujian</th>
                            <th class="col">Jawaban Benar</th>
                            <th>Create At</th>
                            <th class="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                        @php
                            $no = 1;
                        @endphp
                            @foreach ($soalUjian as $s)
                   
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $s->id_kategori}}</td>
                                <td>{{ $s->soal }}</td>
                                <td>{{ $s->jawaban }}</td>
                                <td>{{ $s->created_at }}</td>
                                <td>
                                    <a href="/soalUjian/edit/{{ $s->id_soal }}" class="bg-warning text-white p-2 rounded">Edit</a>
                                    <a href="/soalUjian/hapus/{{ $s->id_soal }}" class="bg-danger text-white p-2 rounded">Delete</a>
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