@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3 text-center">
                            <div class="col-md-6 offset-md-3" style="padding-top:10px">
                                <br>
                                <a style="color:rgb(65, 65, 65)">OR</a><br>
                                <a style="color:rgb(65, 65, 65)">Login with :</a>
                                <br>
                                <ul class="social-network social-circle">
                                    <li><a href="{{ route('google.redirect') }}" class="icoGoogle" title="Google +"><i class="fab fa-google-plus" style="color:rgb(7, 83, 235); font-size: 30px "></i></a></li>
                                </ul>
                                {{-- <a href="{{ route('google.redirect') }}" class="btn btn-primary">
                                    Login with Google
                                </a> --}}
                            </div>
                        </div>

                    </form>
                    <div class="card-body">
                        @if (session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
