@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 ">
                            <label for="role_smp" class="col-md-4 col-form-label text-md-end">{{ __('Role_SMP') }}</label>
                           <br>
                           <div class="col-md-6">
                           <select class="btn btn-success col-md-4 col-form-label text-md-end" name="role_smp" class="form-control @error('role_smp') is-invalid @enderror" id="role_smp" value="{{ old('role_smp') }}">
                            <option selected disabled>Pilih Role_smp...</option>  

                                <option value="smp1" class="text-center text-bold">SMPN 1 Lohbener</option>
                                <option value="mts1" class="text-center text-bold">MTS 1 Lohbener</option>

                         </select>
                         @error('role_smp')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="level" class="col-md-4 col-form-label text-md-end">{{ __('Level') }}</label>
                           <br>
                           <div class="col-md-6">
                           <select class="btn btn-success col-md-4 col-form-label text-md-end" name="level" class="form-control @error('level') is-invalid @enderror" id="level" value="{{ old('level') }}">
                            <option selected disabled>Pilih level...</option>

                                <option value="superadmin" class="text-center text-bold">Super-Admin</option>
                                <option value="admin" class="text-center text-bold">Admin</option>
                                <option value="guru" class="text-center text-bold">Guru</option>
                                <option value="siswa" class="text-center text-bold">Siswa</option>

                         </select>
                         @error('level')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
