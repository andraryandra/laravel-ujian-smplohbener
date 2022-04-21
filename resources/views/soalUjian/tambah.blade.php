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
                                Tambah Soal Ujian
                            </div>
                            <div class="card border-0 shadow rounded">
                                <div class="card-body">
                
                                    <form action="/soalUjian/store" method="post">
                                        @csrf

                                        {{-- <div class="row mb-3 ">
                                            <label for="kategori" class="col-md-2 col-form-label text-md-end">{{ __('Kategori') }}</label>
                                           <br>
                                           <div class="col-md-6">
                                         
                                            <select class="btn btn-success col-md-8 col-form-label text-md-end" name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="kategori" value="{{ old('kategori') }}">
                                           
                                             <option value="1" class="text-center text-bold">Basis Data</option>
                                                    
                                           
                                            </select>

                                         @error('kategori')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                    </div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="id_kategori">{{ __('ID_Kategori') }}</label>
                                            <select class="form-control" name="id_kategori" id="id_kategori">
                                                @foreach($kategori as $id_kategori => $k)
                                                    <option value="{{ $id_kategori }}">{{ $k }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="soal" class="fw-bold bg-info p-2 text-white rounded">Deskripsi Soal</label>
                                            <textarea
                                                name="soal" id="soal"
                                                class="form-control @error('soal') is-invalid @enderror"
                                                rows="5"
                                                required>{{ old('soal') }}</textarea>
                
                                            <!-- error message untuk content -->
                                            @error('soal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="pilihan_a" class="fw-bold bg-danger p-2 text-white rounded">Jawaban A</label>
                                            <input type="text" class="form-control @error('pilihan_a') is-invalid @enderror"
                                                name="pilihan_a" value="{{ old('pilihan_a') }}" required>
                
                                            <!-- error message untuk title -->
                                            @error('pilihan_a')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                
                                        <div class="form-group">
                                            <label for="pilihan_b" class="fw-bold bg-danger p-2 text-white rounded">Jawaban B</label>
                                            <input type="text" class="form-control @error('pilihan_b') is-invalid @enderror"
                                                name="pilihan_b" value="{{ old('pilihan_b') }}" required>
                
                                            <!-- error message untuk title -->
                                            @error('pilihan_b')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="pilihan_c" class="fw-bold bg-danger p-2 text-white rounded">Jawaban C</label>
                                            <input type="text" class="form-control @error('pilihan_c') is-invalid @enderror"
                                                name="pilihan_c" value="{{ old('pilihan_c') }}" required>
                
                                            <!-- error message untuk title -->
                                            @error('pilihan_c')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                
                                        <div class="form-group">
                                            <label for="pilihan_d" class="fw-bold bg-danger p-2 text-white rounded">Jawaban D</label>
                                            <input type="text" class="form-control @error('pilihan_d') is-invalid @enderror"
                                                name="pilihan_d" value="{{ old('pilihan_d') }}" required>
                
                                            <!-- error message untuk title -->
                                            @error('pilihan_d')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                
                                        <div class="form-group">
                                            <label for="jawaban" class="fw-bold bg-success p-2 text-white rounded">Jawaban Benar (Correct)</label>
                                            <input type="text" class="form-control @error('jawaban') is-invalid @enderror"
                                                name="jawaban" value="{{ old('jawaban') }}" required>
                
                                            <!-- error message untuk title -->
                                            @error('jawaban')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                
                
                                        {{-- <button type="submit" class="btn btn-md btn-primary">Submit</button> --}}
                
                                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        <button type="reset" class="btn btn-warning">RESET</button>
                
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
@endsection
