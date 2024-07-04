@extends('auth.master')

@section('title')
{{ __('Login') }}
@endsection

@section('content')
<!-- START SIGN-IN -->
<section class="bg-auth">
	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-12">
				<div class="card auth-box">
					<div class="row g-0">
						<div class="col-lg-6 text-center">
							<div class="card-body p-4">
								{{-- <a href="index.html">
									<img src="assets/images/logo-light.png" alt="" class="logo-light">
									<img src="assets/images/logo-dark.png" alt="" class="logo-dark">
								</a>--}}
								<div class="mt-5">
									<img src="{{ asset('assets/images/logo/LogoTalentia.png') }}" class="img-fluid mt-5" alt="">
									{{-- <img src="assets/images/auth/sign-in.png" alt="" class="img-fluid"> --}}
								</div>
							</div>
						</div><!--end col-->
						<div class="col-lg-6">
							<div class="auth-content card-body p-5 h-100 text-white">
								<div class="w-100">
									<div class="text-center mb-4">
										<h5>¡Bienvenido!</h5>
										<p class="text-white-70">Inicia sesión para continuar en Talentia.</p>
									</div>
									<form method="POST" action="{{ route('login') }}" class="auth-form">
										@csrf
										<div class="mb-3">
											<label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3">
											<label for="password" class="form-label">{{ __('Password') }}</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-4">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="flexCheckDefault">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<a href="{{ route('password.request') }}" class="float-end text-white">{{ __('Forgot Your Password?') }}</a>
												<label class="form-check-label" for="flexCheckDefault">{{ __('Remember Me') }}</label>
											</div>
										</div>


										<div class="text-center">
											<button type="submit" class="btn btn-white btn-hover w-100">{{ __('Login') }}</button>
										</div>
									</form>
									<div class="mt-4 text-center">
										<p class="mb-0">¿No tienes una cuenta? <a href="{{ route('register') }}" class="fw-medium text-white text-decoration-underline"> Regístrate ahora </a></p>
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
<!-- END SIGN-IN -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Login') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
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

						<div class="row mb-3">
							<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-6 offset-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Remember Me') }}
									</label>
								</div>
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Login') }}
								</button>

								@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
										{{ __('Forgot Your Password?') }}
									</a>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}}
@endsection
