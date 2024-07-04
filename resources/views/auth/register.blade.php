<?php

use App\Http\Controllers\ConfigSistema;
use App\Models\CatPregunta;
?>
@extends('auth.master')

@section('title')
{{ __('Register') }}
@endsection

@section('content')
<!-- START SIGN-UP -->
<section class="bg-auth">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12">
				<div class="card auth-box">
					<div class="row align-items-center">
						<div class="col-lg-12 text-center">
							<div class="card-body p-4">
								{{-- <a href="index.html">
									<img src="assets/images/logo-light.png" alt="" class="logo-light">
									<img src="assets/images/logo-dark.png" alt="" class="logo-dark">
								</a> --}}
								<div class="mt-5">
									{{-- <img src="assets/images/auth/sign-up.png" alt="" class="img-fluid"> --}}
									<img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" class="img-fluid " alt="">
								</div>
							</div>
						</div>
						<!--end col-->
						<div class="col-lg-12">
							<div class="auth-content card-body p-5 text-white">
								<div class="w-100">
									<div class="text-center">
										<h5>Empecemos</h5>
										<p class="text-white-70">Regístrese y obtenga acceso a todas las funciones de Talentia</p>
									</div>
									@if (count($errors) > 0)
										<div class="alert alert-danger">
											<ul class="mt-3">
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if(Session::has('result'))
										<?php $result =Session::get('result');?>
										<div class="alert alert-danger" role="alert">
											<h4 class="alert-heading">{{$result['tituloMsg']}}</h4>
											<p>{!!$result['mensaje']!!}</p>
										</div>
									@endif
									<form method="POST" class="auth-form row" action="{{ route('register') }}">
										@csrf
										<div class="mb-3 col-md-4">
											<label for="inputNombre" class="form-label">Nombre</label>
											{!! Form::text('nombre', old('nombre') , ['id' => 'nombre','class' => ($errors->has('nombre'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
											@error('nombre')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputprimerapellido" class="form-label">Primer apellido</label>
											{!! Form::text('primer_apellido', old('primer_apellido') , ['id' => 'primer_apellido','class' => ($errors->has('primer_apellido'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
											@error('primer_apellido')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputsegundoapellido" class="form-label">Segundo apellido</label>
											{!! Form::text('segundo_apellido', old('segundo_apellido') , ['id' => 'segundo_apellido','class' => ($errors->has('segundo_apellido'))?'form-control is-invalid':'form-control', 'autocomplete' => 'off']) !!}
											@error('segundo_apellido')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputemail" class="form-label">{{ __('E-Mail Address') }}</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputNombre" class="form-label">{{ __('Password') }}</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
											@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputPasswordConfirm" class="form-label">{{ __('Confirm Password') }}</label>
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}" required autocomplete="new-password">
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputPreguntas" class="form-label">Pregunta recuperacion contraseña</label>
											{{ Form::select('id_pregunta',CatPregunta::pluck('pregunta','id')->toArray(), old('id_pregunta') , [
												'id' => 'id_pregunta',
												'class' => ($errors->has('id_pregunta'))?'form-select select2 form-control is-invalid':'form-select select2',
												'placeholder' => 'Selecciona...',
												]) }}
											@error('id_pregunta')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputrespuesta_pregunta" class="form-label">Respuesta pregunta</label>
											{!! Form::text('respuesta_pregunta', old('respuesta_pregunta') , ['id' => 'respuesta_pregunta','class' => ($errors->has('respuesta_pregunta'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}
											@error('respuesta_pregunta')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="mb-3 col-md-4">
											<label for="inputNombre" class="form-label">Tipo de usuario</label>
											{{ Form::select('tipo_usuario', ConfigSistema::tiposUsuarioRegistro(), old('tipo_usuario'), [
												'id' => 'tipo_usuario',
												'class' => ($errors->has('tipo_usuario')) ? 'form-select select2 form-control is-invalid' : 'form-select select2',
												'placeholder' => 'Selecciona...',
												'onchange' => "cargaSelect(this, '" . route('registro.inputsUsuario') . "','div_inputs')"
												]) }}
											@error('tipo_usuario')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="col-md-12" id="div_inputs">
											@if(old('tipo_usuario'))
												@if(old('tipo_usuario') == 'Administrador Empresa')
													@include('auth.registro.inputsEmpresa')
												@else
													@include('auth.registro.inputsAlumno')
												@endif
											@else
												<div class="alert alert-warning text-center mb-4" role="alert">
													Selecciona un tipo de usuario para cargar más campos
												</div>
											@endif
										</div>

										{{-- <div class="mb-4">
											<div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="text-white text-decoration-underline">Terms and conditions</a></label>
											</div>
										</div> --}}
										<div class="text-center">
											<button type="submit" class="btn btn-white btn-hover w-100">
												{{ __('Register') }}
											</buttom>
										</div>
									</form>
									<div class="mt-3 text-center">
										<p class="mb-0">¿Ya eres usuario? <a href="{{ route('login') }}" class="fw-medium text-white text-decoration-underline"> Inicia sesión </a></p>
									</div>
								</div>
							</div>
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end auth-box-->
			</div><!--end col-->
		</div><!--end row-->
	</div><!--end container-->
</section>
<!-- END SIGN-UP -->
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div> --}}
@endsection
