@extends('auth.master')

@section('title')
{{  __('Verify Your Email Address') }}
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
                                        <h5>{{ __('Verify Your Email Address') }}</h5>
                                        <p class="text-white-70">
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                </div>
                                            @endif

                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }},
                                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color:#fc3407;">{{ __('click here to request another') }}</button>.
                                            </form>
                                        </p>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
