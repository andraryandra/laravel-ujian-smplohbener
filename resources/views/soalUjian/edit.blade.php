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
                                    @foreach ($soalUjian as $s)
                                        
                                    <form action="/soalUjian/update" method="post">
                                        @csrf
                                        {{-- <input type="hidden" name="id" value="{{ $s->id_soal }}"> --}}
                                            <input type="hidden" name="id_soal" class="form-data" required="required" value="{{ $s->id_soal }}">
                                       
                                            <div class="form-group">
                                            <label for="id_kategori">{{ __('ID_Kategori') }}</label>
                                            <select class="form-control" name="id_kategori" id="id_kategori">
                                                {{-- @foreach($kategori as $id_kategori => $k) --}}
                                                <option value="{{ $kategori }}">{{ $s->id_kategori }}</option>
                                            {{-- @endforeach --}}
                                            </select>
                                        </div>

                                            <div class="form-group">
                                            <label for="soal" class="fw-bold bg-info p-2 text-white rounded">Deskripsi Soal</label>
                                            <textarea
                                                name="soal" id="soal"
                                                class="form-control @error('soal') is-invalid @enderror"
                                                rows="5"
                                                required>{{ $s->soal }}</textarea>
                
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
                                                name="pilihan_a" value="{{ $s->pilihan_a }}" required>
                
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
                                                name="pilihan_b" value=" {{ $s->pilihan_b }}" required>
                
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
                                                name="pilihan_c" value="{{ $s->pilihan_c }}" required>
                
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
                                                name="pilihan_d" value="{{ $s->pilihan_d }}" required>
                
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
                                                name="jawaban" value="{{ $s->jawaban }}" required>
                
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
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
@endsection
