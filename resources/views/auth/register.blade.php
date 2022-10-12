@extends('layouts.app')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"></script>
@section('content')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Daftar</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          







            <!--Input Mulai dari Sini-->
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                     @csrf

            <!--Contoh Register Tampilan Lama-->
            <!-- <div class="row mb-3">
                <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

                <div class="col-md-6">
                <input id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                    @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> -->

            <!-- Nama input -->
            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Nama Anda" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
 
            <!-- NIP input -->
            <!-- <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="NIP Anda" id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                @error('nip')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>    

            <!-- OPD input -->
            <!-- <label for="opd" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="OPD Anda" id="opd" type="text" class="form-control @error('opd') is-invalid @enderror" name="opd" value="{{ old('opd') }}" required autocomplete="opd" autofocus>
                @error('opd')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>    

            <!-- Telepon input -->
            <!-- <label for="telepon" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Telepon Anda" id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>
                @error('telepon')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   

            <!-- Email input -->
            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Email Anda" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
            
            <!-- Password input -->
            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Password Anda" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>  
           
            <!-- Konfirmasi password input -->
            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label> -->
            <div class="form-outline mb-3">
            <input placeholder="Konfirmasi password Anda" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div> 
            
            <!-- Input file-->
            <!-- <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Foto Profil') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="File Anda" id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                @error('avatar')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>  

            <!--Input Sampai Sini-->

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!--<a href="#!" class="text-body">Forgot password?</a>-->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Sudah Punya Akun ? <a href="{{route('login')}}"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
  class="d-flex justify-content-center py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-100">
      Copyright © 2022. PBJAP.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>