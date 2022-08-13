@extends('dashboard.layouts.mains')
@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Guru</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">{{session('success')}}</div>
    @endif
   
    <div class="table-responsive col-lg-8">
    <a href="/dashboard/guru/create" class="btn btn-success mb-3"><span >Input Guru</span></a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Mapel</th>
              <th scope="col">Kelas</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($gurus as $guru)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$guru->nama}}</td>
              <td>{{$guru->mapel}}</td>
              <td>{{$guru->kelas}}</td>
              <td>
                <a href="/dashboard/guru/{{$guru->id}}" class="badge bg-primary"><span>Detail</span></a>
                <a href="/dashboard/guru/{{$guru->id}}/edit" class="badge bg-warning"><span>Edit</span></a>
                <form action="/dashboard/guru/{{$guru->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"
                  onclick="return confirm('Yakin menghapus guru?')"><span>Delete</span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection