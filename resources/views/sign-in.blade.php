@extends('layouts.app')

@section('content')
<div class="container bg-transparent">
    <div class="row justify-content-center bg-transparent">
        <div class="col-md-5 mx-auto my-5">
            <div class="card rounded-lg">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <div class=" my-3 mx-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" class="w-200 h-150" alt="">
                </div>

                <div class="card-body bg-white rounded-lg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary w-100" style="background-color: #FF4D00; border-color: #FF4D00">
                                {{ __('INICIAR SESIÓN') }}
                            </button>

                                
                        </div>
                        <div class="d-grid gap-2 text-center">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                        </div>
                       
                    </form>
                </div>
                <hr>
            {{-- </div>
            <div class="card rounded-lg" > --}}
                <div class="card-body bg-white rounded-lg">
                    @if (Route::has('register'))
                    <p class="text-center">¿No tienes una cuenta? <a class="nav-link" href="{{ route('register') }}">{{ __('Regístrate') }}</a></p>
                    @endif
                    <p class="text-center">¿Quieres registrar tu empresa? <a href="">{{ __('Regístrala aquí') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
