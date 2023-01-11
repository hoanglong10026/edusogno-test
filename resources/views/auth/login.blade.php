@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="title">
                Hai già un account?
            </h1>
            <div class="card formStyle">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="row mb-5">
                            <label for="email" class="col-md-12 col-form-label">Inserisci l’e-mail</label>
                            <div class="col-md-12">
                                <input id="email" placeholder="name@example.com"
                                    type="email" class="form-control inputForm @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required  autofocus
                                    autocomplete="off"
                                />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="password" class="col-md-12 col-form-label ">
                                Inserisci la password
                            </label>
                            <div class="col-md-12">

                                <div class="inputPasswordContainer">
                                    <input id="password" type="password"
                                        class="form-control inputForm @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password"
                                        placeholder="Scrivila qui"
                                    />

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
                                    ACCEDI
                                </button>

                                <a class="btn btn-link linkForm" href="{{ route('register') }}">
                                    Non hai ancora un profilo? Registrati
                                </a>

                                <br/>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link linkForm" href="{{ route('password.request') }}">
                                        Hai dimenticato la password
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
