@extends('layout.main')

@section('title', 'Fakultas')

@section('content')

<div class="row">
<!-- Formulir Tambah Fakultas -->
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Mahasiswa</h4>
        <p class="card-description">
          Formulir Tambah Mahasiswa
        </p>
        <form method ="POST" action="{{ route('mahasiswa.store')}}" class="forms-sample"> 
        @csrf
        
          <div class="form-group">
            <label for="exampleInputUsername1">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama" value="{{old('nama')}}" 
            placeholder="Nama mahasiswa">
            @error('nama')
            <span class="text-danger">{{$message}} </span>      
            @enderror
          </div>

           <div class="form-group">
            <label for="singkatan">Tempat Lahir</label>
            <input type="text" class="form-control" name="npm" value="{{old('npm')}}" placeholder="2226240000">
            @error('npm')
            <span class="text-danger">{{$message}} </span>      
            @enderror
            </div>

          <div class="form-group">
            <label for="singkatan">Npm</label>
            <input type="text" class="form-control" name="npm" value="{{old('npm')}}" placeholder="2226240000">
            @error('npm')
            <span class="text-danger">{{$message}} </span>      
            @enderror
            </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{url('fakultas')}}" class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>
@endsection
