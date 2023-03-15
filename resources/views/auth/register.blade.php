@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nume') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prenume" class="col-md-4 col-form-label text-md-end">{{ __('Prenume') }}</label>

                            <div class="col-md-6">
                                <input id="prenume" type="text" class="form-control @error('prenume') is-invalid @enderror" name="prenume" value="{{ old('prenume') }}"  autocomplete="prenume" autofocus>

                                @error('prenume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="varsta" class="col-md-4 col-form-label text-md-end">{{ __('Varsta') }}</label>

                            <div class="col-md-6">
                                <input id="varsta" type="text" class="form-control @error('varsta') is-invalid @enderror" name="varsta" value="{{ old('varsta') }}"  autocomplete="varsta" autofocus>

                                @error('varsta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <select id="sex" class="form-control @error('sex') is-invalid @enderror" name="sex"  required autofocus>
                                    <option value="">Alege genul</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Feminin</option>
                                </select>
                                {{-- <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus> --}}

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cnp" class="col-md-4 col-form-label text-md-end">{{ __('CNP') }}</label>

                            <div class="col-md-6">
                                <input id="cnp" type="text" class="form-control @error('cnp') is-invalid @enderror" name="cnp" value="{{ old('cnp') }}"  autocomplete="cnp" autofocus>

                                @error('cnp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telefon" class="col-md-4 col-form-label text-md-end">{{ __('Numar de telefon') }}</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}"  autocomplete="telefon" autofocus>

                                @error('telefon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cod_pacient" class="col-md-4 col-form-label text-md-end">{{ __('Cod pacient') }}</label>

                            <div class="col-md-6">
                                <input id="cod_pacient" type="text" class="form-control @error('cod_pacient') is-invalid @enderror" name="cod_pacient" value="{{ random_int(1,1000000) }}"  autofocus readonly>

                                @error('cod_pacient')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresa de email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Parola') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirma parola') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection