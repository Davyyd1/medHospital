
@extends('layouts.app')

@section('content')
<div id="body" class="theme-green">
    <div class="auth-main">
        <div class="auth_div vivify fadeIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="#"><img src="build/assets/images/icon.svg" width="50" class="d-inline-block align-top mr-2" alt="">medHospital</a>                                                
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">{{ __('Login') }}</p>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresa de email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Parola') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                {{-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span> --}}
                                <span>Nu ai un cont? <br> <a href="{{ route('register') }}">Inregistreaza-te!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="animate_lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

</div>

@endsection