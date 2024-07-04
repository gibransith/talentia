<?php

use App\Models\CatPregunta;
?>
@extends('auth.master')

@section('title')
{{ __('Reset Password') }}
@endsection

@section('content')
<!-- START RESET-PASSWORD -->
<section class="bg-auth">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12">
				<div class="card auth-box">
					<div class="row g-0">
						<div class="col-lg-6 text-center">
							<div class="card-body p-4">
								{{-- <a href="index.html">
									<img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="logo-light">
									<img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="logo-dark">
								</a> --}}
								<div class="mt-5">
									{{-- <img src="{{ asset('assets/images/auth/reset-password.png') }}" alt="" class="img-fluid"> --}}
									<img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" class="img-fluid mt-5" alt="">
								</div>
							</div>
						</div><!--end col-->
						<div class="col-lg-6">
							<div class="auth-content card-body p-5 h-100 text-white">
								<div class="text-center mb-4">
									<h5>{{ __('Reset Password') }}</h5>
									<p class="text-white-50">Restablece tu contraseña de Talentia.</p>
								</div>
								<form class="auth-form text-white" method="POST" action="{{ route('password.email') }}">
									@csrf
									@if (session('status'))
										<div class="alert alert-success" role="alert">
											{{ session('status') }}
										</div>
									@else
										<div class="alert alert-warning text-center mb-4" role="alert">
											¡Ingrese su correo electrónico y se le enviarán las instrucciones!
										</div>
									@endif
									<div class="mb-4">
										<label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div>
										{{-- <div class="mb-4">
											<label class="form-label" for="id_pregunta">Pregunta de recuperacion contraseña</label>
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
										<div class="mb-4">
											<label class="form-label" for="respuesta_pregunta">Respuesta pregunta</label>
											{!! Form::text('respuesta_pregunta', old('respuesta_pregunta') , ['id' => 'respuesta_pregunta','class' => ($errors->has('respuesta_pregunta'))?'form-control is-invalid':'form-control','required' => 'required', 'autocomplete' => 'off']) !!}

											@error('respuesta_pregunta')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div> --}}
										<div class="mt-3">
											<button type="submit" class="btn btn-white w-100">
												{{ __('Send Password Reset Link') }}
											</button>
										</div>
									</div>
								</form><!-- end form -->

								<div class="mt-5 text-center text-white-50">
									<p>
										¿Lo recuerdas?
										<a href="{{ route('login') }}" class="fw-medium text-white text-decoration-underline">
											Ir a Iniciar sesión
										</a>
									</p>
								</div>
							</div>
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end auth-box-->
			</div><!--end col-->
		</div><!--end row-->
	</div><!--end container-->
</section>
<!-- END RESET-PASSWORD -->
{{--  <div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Reset Password') }}</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<form method="POST" action="{{ route('password.email') }}">
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

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Send Password Reset Link') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>--}}
@endsection
