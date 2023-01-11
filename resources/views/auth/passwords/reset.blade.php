@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="title">Resetta la password</h1>
            <div class="card formStyle">
                <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-5">
                            <label for="email" class="col-md-12 col-form-label ">Inserisci l’email</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control inputForm @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control inputForm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="password-confirm" class="col-md-12 col-form-label">Inserisci conferma password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control inputForm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary loginButton">
                                    Resetta la password
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
