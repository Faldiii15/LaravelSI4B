@extends('layout.main')

@section('title', 'Fakultas')

@section('content')

<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Data Mahasiswa</h4>
        <p class="card-description">
          List data fakultas
        </p>
        {{-- Tombol Tambah --}}
        <a href="{{route('fakultas.create')}}" class="btn btn-rounded btn primary" >Tambah</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Program Studi</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($mahasiswa as $item)
                <tr>
                    <td>{{ $item["npm"] }}</td>
                    <td>{{ $item["nama"] }}</td>
                    <td><img src="{{ url('foto/'. $item["url_foto"]) }}"></td>
                    <td>{{ $item["prodi"]["nama"] }}</td>
                    <td>
                </tr>        
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- Membuat Tampilan Success --}}
  @if (session('success'))
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"> 
    </script>

    <script>
    Swal.fire({
      title: "Good Job",
      text: "{{session('success')}}",
      icon: "success"
    })</script>
    
    

});
  @endif
  Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  }
});
  

@endsection
 