@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Guru</h1>
        <a href="/dashboard/guru" class="btn btn-info"><span >Back To Guru</span></a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tr>
              <th scope="col">Nama</th>
              <td>{{$guru->nama}}</td>
            </tr>
            <tr>
              <th scope="col">Kelas</th>
              <td>{{$guru->kelas}}</td>
            <tr>
                <th scope="col">Mata Pelajaran</th>
                <td>{{$guru->mapel}}</td>
            </tr>
            <tr>
                <th scope="col">No HandPhone</th>
                <td>{{$guru->no_hp}}</td>
            </tr>
        </table>
        <a href="/dashboard/guru/{{$guru->id}}/edit" class="badge bg-warning"><span>Edit</span></a>
                <form action="/dashboard/guru/{{$guru->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"
                  onclick="return confirm('Yakin menghapus guru?')"><span>Delete</span></button>
                </form>
      </div>
@endsection



