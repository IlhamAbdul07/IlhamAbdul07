@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Siswa</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">{{session('success')}}</div>
    @endif
   
    <div class="table-responsive col-lg-8">
    <a href="/dashboard/siswa/create" class="btn btn-success mb-3"><span >Input Siswa</span></a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">No Handphone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($siswas as $siswa)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$siswa->nama}}</td>
              <td>{{$siswa->kelas}}</td>
              <td>{{$siswa->no_hp}}</td>
              <td>
                <a href="/dashboard/siswa/{{$siswa->id}}" class="badge bg-primary"><span>Detail</span></a>
                <a href="/dashboard/siswa/{{$siswa->id}}/edit" class="badge bg-warning"><span>Edit</span></a>
                <form action="/dashboard/siswa/{{$siswa->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"
                  onclick="return confirm('Yakin menghapus siswa?')"><span>Delete</span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
<script src="https://unpkg.com/feather-icons"></script>




