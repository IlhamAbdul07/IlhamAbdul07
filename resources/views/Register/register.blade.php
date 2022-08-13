@extends('layouts.main')    

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-6">
    <main class="form-registration">
            <div class="text-center mt-5">
                <img class="mb-2" src="/regis-icon.png" alt="" width="72" height="72">    
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating ">
              <input type="text" class="form-control rounded-top @error('nama') is-invalid @enderror" 
              name="name" id="nama" placeholder="nama" required value="{{ old('name') }}">
              <label for="floatingInput">Nama</label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" 
              name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="floatingInput">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" 
              name="password" id="password" placeholder="Password" required>
              <label for="floatingPassword">Password</label>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom @error('checkPassword') is-invalid @enderror" 
              name="checkPassword" id="checkpassword" placeholder="checkPassword" required >
              <label for="floatingPassword">Reapet Password</label>
              @error('checkPassword')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Daftar</button>
          </form>
          <small class="mt-2 d-block text-center">Sudah Punya Akun? <a href="/login">Login!</a></small>
        </main>
        <p class="mt-5 mb-3 text-muted">&copy;Budi Utomo 2022</p>
    </div>
</div>

@endsection
