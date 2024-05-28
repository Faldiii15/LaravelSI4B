@extends('layout.main')

@section('title', 'Fakultas')

@section('content')

    
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Fakultas</h4>
        <p class="card-description">
          Formulir Tambah Fakultas
        </p>
        <form method ="POST" action="{{ route('fakultas.store')}}" class="forms-sample"> 
        @csrf
        
          <div class="form-group">
            <label for="exampleInputUsername1">Nama Fakultas</label>
            <input type="text" class="form-control" name="nama" value="{{old('nama')}}" 
            placeholder="Nama Fakultas">
            @error('nama')
            <span class="text-danger"{{$message}} span>      
            @enderror
          </div>

          <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="FIKR,FEB,...">

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{url('fakultas')}}" class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>
@endsection
