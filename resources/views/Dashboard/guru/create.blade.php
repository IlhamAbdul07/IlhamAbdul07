@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data Guru Baru</h1>
</div>
<div class="col-lg-8">
<form method="post" action="/dashboard/guru">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="name" name="nama" 
    required autofocus value="{{ old('nama') }}" placeholder="Nama">
    @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="kelas" class="form-label @error('kelas') is-invalid @enderror">Kelas</label>
    <select type="text" class="form-select" id="kelas" name="kelas" required autofocus value="{{old('option')}}">
        <option value="none" selected disabled hidden>Pilih Kelas</option>
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
    required autofocus value="{{ old('mapel') }}" placeholder="Mata Pelajaran">
    @error('mapel')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No Handphone</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" required autofocus value="{{ old('no_hp') }}">
    @error('no_hp')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror  
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
