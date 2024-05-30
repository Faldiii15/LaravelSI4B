@extends('layout.main')

@section('title', 'Fakultas')

@section('content')

<div class="row">   
    {{-- Formulir Tambah Fakultas --}}
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Prodi</h4>
        <p class="card-description">
          Formulir Tambah Program Studi
        </p>

        <form method ="POST" action="{{ route('prodi.store')}}" class="forms-sample"> 
        @csrf
          <div class="form-group">
            <label for="nama">Nama prodi</label>
            <input type="text" class="form-control" name="nama"
            placeholder="nama">
            @error('nama')
            <span class="text-danger">{{$message}} </span>      
            @enderror
          </div>

            @error('nama')
            <span class="text-danger">{{$message}} </span>      
            @enderror
          </div>

          <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="FIKR,FEB,...">
            </div>

            <div class="form group">
            <label for="fakultas_id">Fakultas</label>
            <label for="fakultas_id"></label>
            <select name="fakultas_id" 
            class="form-control">        
            @foreach ($fakultas as $item)
                    <option value="{{ $item['id']}}">
                        {{ $item['nama'] }}
                    </option>
                     
                 @endforeach
            </select>
            </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{url('fakultas')}}" class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div>
@endsection
