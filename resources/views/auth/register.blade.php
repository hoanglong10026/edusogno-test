@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title">
                Crea il tuo account
            </h1>

            <div class="card formStyle">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-5">
                            <label for="name" class="col-md-12 col-form-label ">Inserisci il nome</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control inputForm @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required  autofocus
                                    placeholder="Mario"
                                >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="last_name" class="col-md-12 col-form-label ">Inserisci il cognome</label>

                            <div class="col-md-12">
                                <input id="last_name" type="text" class="form-control inputForm @error('last_name') is-invalid @enderror"
                                    name="last_name" value="{{ old('last_name') }}" required
                                    placeholder="Rossi"
                                >

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="email" class="col-md-12 col-form-label ">Inserisci l’email</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control inputForm @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required
                                    placeholder="name@example.com"
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="password" class="col-md-12 col-form-label ">Inserisci la password</label>

                            <div class="col-md-12">
                                <div class="inputPasswordContainer">
                                    <input id="password" type="password" class="form-control inputForm @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password"
                                        placeholder="Scrivila qui"
                                    >
                                    <img src="/images/eyes.svg" />
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-12 center">
                                <button type="submit" class="btn btn-primary loginButton">
                                    REGISTRATI
                                </button>

                                <a class="btn btn-link linkForm" href="{{ route('login') }}">
                                    Hai già un account? Accedi
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
