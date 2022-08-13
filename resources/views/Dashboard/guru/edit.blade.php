@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Guru</h1>
</div>
<div class="col-lg-8">
<form method="post" action="/dashboard/guru/{{$guru->id}}">
@method('put')
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="name" name="nama" 
    required autofocus value="{{ old('nama', $guru->nama)  }}">
    @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="kelas" class="form-label @error('kelas') is-invalid @enderror">Kelas</label>
    <select type="text" class="form-select" id="kelas" name="kelas" required autofocus>
        <option value="none" selected disabled hidden>Pilih Kelas</option>
        <option value="none" selected disabled hidden>{{old('kelas', $guru->kelas)}}</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    @error('kelas')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror  
  </div>
  
  <div class="mb-3">
    <label for="mapel" class="form-label">Mata Pelajaran</label>
    <input type="text" class="form-control @error('mapel') is-invalid @enderror" id="mapel" name="mapel"
    required autofocus value="{{ old('mapel', $guru->mapel) }}">
    @error('mapel')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No Handphone</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp', $guru->no_hp) }}">
    @error('no_hp')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror  
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/dashboard/guru" class="btn btn-danger"><span >Cancel</span></a>
</form>
</div>

@endsection
