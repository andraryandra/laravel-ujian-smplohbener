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
                    <form action="{{ url('__invoke') }}" method="POST" enctype="multipart/form-data">
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
                   <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role_SMP</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                            @foreach ($data as $item)
                            
                            {{-- @if ($item->role_smp == 'smp1' && $item->level == 'guru' ) --}}
                            
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                {{-- <td>{{ $item->role_smp }}</td> --}}
                                <td class="
                                @if($item->role_smp == "mts1") rounded bg-success text-white
                                @elseif($item->role_smp == "smp1") rounded bg-primary text-white
                                @elseif($item->role_smp == "owner") rounded bg-danger text-white
                                @endif
                                    ">{{ $item->role_smp }}</td>
                                <td>{{ $item->level }}</td>
                                <td>
                                    <a href="#" class="bg-warning text-white p-2 rounded">Edit</a>
                                    <a href="#" class="bg-danger text-white p-2 rounded">Delete</a>
                                </td>
                            </tr>
                            {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection