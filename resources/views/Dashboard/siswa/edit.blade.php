@extends('dashboard.layouts.mains')

@section('containers')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Siswa</h1>
</div>
<div class="col-lg-8">
<form method="post" action="/dashboard/siswa/{{$siswa->id}}">
@method('put')
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="name" name="nama" 
    required autofocus value="{{ old('nama', $siswa->nama)  }}">
    @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir"
    required autofocus value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}">
    @error('tempat_lahir')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3" id="datepicker">
    <label for="tanggal_lahir" class="form-label @error('tanggal_lahir') is-invalid @enderror">Tanggal Lahir</label>
    <input type="text" class="form-control" id="date" name="tanggal_lahir" required autofocus value="{{ old('tanggal_lahir', $siswa->tanggal_lahir)}}"
    placeholder="YYYY-MM-DD">
    @error('tanggal_lahir')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  
  <div class="lg-3">
    <label for="alamat" class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
    <textarea type='text' class="form-control" id="alamat" name="alamat" required autofocus value=""> 
    {{ old('alamat', $siswa->alamat)}}
    </textarea>
    @error('alamat')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No Handphone</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp', $siswa->no_hp) }}">
    @error('no_hp')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror  
  </div>
  
  <div class="mb-3">
    <label for="kelas" class="form-label @error('kelas') is-invalid @enderror">Kelas</label>
    <select type="text" class="form-select" id="kelas" name="kelas" required autofocus>
        <option value="none" selected disabled hidden>Pilih Kelas</option>
        <option value="none" selected disabled hidden>{{old('kelas', $siswa->kelas)}}</option>
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
  
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/dashboard/siswa" class="btn btn-danger"><span >Cancel</span></a>
</form>
</div>

@endsection
