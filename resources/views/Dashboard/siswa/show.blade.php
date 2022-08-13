@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Siswa</h1>
        <a href="/dashboard/siswa" class="btn btn-info"><span >Back To Siswa</span></a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tr>
              <th scope="col">Nama</th>
              <td>{{$siswa->nama}}</td>
            </tr>
            <tr>
              <th scope="col">Tempat Lahir</th>
              <td>{{$siswa->tempat_lahir}}</td>
            <tr>
                <th scope="col">Tanggal Lahir</th>
                <td>{{$siswa->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th scope="col">Alamat</th>
                <td>{{$siswa->alamat}}</td>
            </tr>
            <tr>
                <th scope="col">No HP</th>
                <td>{{$siswa->no_hp}}</td>
            </tr>
            <tr>
                <th scope="col">Kelas</th>
                <td>{{$siswa->kelas}}</td>
            </tr>
        </table>
        <a href="/dashboard/siswa/{{$siswa->id}}/edit" class="badge bg-warning"><span>Edit</span></a>
                <form action="/dashboard/siswa/{{$siswa->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"
                  onclick="return confirm('Yakin menghapus siswa?')"><span>Delete</span></button>
                </form>
      </div>
@endsection



