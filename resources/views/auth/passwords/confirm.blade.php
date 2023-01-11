@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h1 class="title">Conferma Password</h1>
        <div class="col-md-8">
            <div class="card formStyle">


                <div class="card-body">
                    Si prega di confermare la password prima di continuare

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label ">Inserisci la password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control inputForm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary loginButton">
                                    Conferma Password
                                </button>

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
