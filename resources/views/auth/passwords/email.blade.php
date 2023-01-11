@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="title">{{ __('Reset Password') }}</h1>
            <div class="card formStyle">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-5">
                            <label for="email" class="col-md-12 col-form-label">Inserisci l’email</label>

                            <div class="col-md-12">

                                <div class="inputPasswordContainer">
                                    <input id="email" type="email"
                                        class="form-control inputForm @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="name@example.com"
                                    >

                                    <img src="/images/eyes.svg" />
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 center">
                                <button type="submit" class="btn btn-primary loginButton">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                                <a class="btn btn-link linkForm" href="{{ route('login') }}">
                                    Hai già un account? Accedi
                                </a>
                                <br/>
                                <a class="btn btn-link linkForm" href="{{ route('register') }}">
                                    Non hai ancora un profilo? Registrati
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
