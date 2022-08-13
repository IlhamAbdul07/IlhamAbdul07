@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data Siswa Baru</h1>
</div>
<div class="col-lg-8">
<form method="post" action="/dashboard/siswa">
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
    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir"
    required autofocus value="{{ old('tempat_lahir') }}" placeholder="Kota Kelahiran">
    @error('tempat_lahir')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3" id="datepicker">
    <label for="tanggal_lahir" class="form-label @error('tanggal_lahir') is-invalid @enderror">Tanggal Lahir</label>
    <input type="date"value="2022-02-20"
       min="2022-02-20" max="2032-02-20" class="form-control" id="date" name="tanggal_lahir" required autofocus value="{{ old('tanggal_lahir') }}"
    placeholder="YYYY-MM-DD">
    @error('tanggal_lahir')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  
  <div class="lg-3">
    <label for="alamat" class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}"></textarea>
    @error('alamat')
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
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
