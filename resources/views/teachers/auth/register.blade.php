@extends('teachers.layouts.auth')

@section('content')
<!--begin::Head-->
<div class="kt-login__head">
    <span class="kt-login__signup-label">{{ __('Already have an account yet?') }}</span>&nbsp;&nbsp;
    <a href="{{ route('teacher.login') }}" class="kt-link kt-login__signup-link">{{ __('Login!') }}</a>
</div>
<!--end::Head-->
<br/>
<!--begin::Body-->
<div class="kt-login__body">
    <div class="kt-login__form">
        <div class="kt-login__title">
            <h3>{{ __('Teacher Register') }}</h3>
        </div>

        <!--begin::Form-->
        <form class="kt-form" action="{{ route('teacher.register') }}" novalidate="novalidate" id="kt_login_form" method="post">
            @csrf
            
            <div class="form-group">
                <input class="form-control @error('first_name') is-invalid @enderror" type="text" placeholder="{{ __('First Name') }}" name="first_name" autocomplete="off" value="{{ old('first_name') }}">

                @error('first_name')
                    <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control @error('last_name') is-invalid @enderror" type="text" placeholder="{{ __('Last Name') }}" name="last_name" autocomplete="off" value="{{ old('last_name') }}">

                @error('last_name')
                    <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" autocomplete="off" value="{{ old('email') }}">

                @error('email')
                    <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" autocomplete="off">

                @error('password')
                    <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="password" placeholder="{{ __('Password Confirmation') }}" name="password_confirmation" autocomplete="off">
            </div>

            <!--begin::Action-->
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary" type="submit">{{ __('Register') }}</button>
            </div>
            <!--end::Action-->
        </form>
        <!--end::Form-->

        <!--begin::Divider-->
        <div class="kt-login__divider">
            <div class="kt-divider">
                <span></span>
                <span>OR</span>
                <span></span>
            </div>
        </div>
        <!--end::Divider-->

        <!--begin::Options-->
        <div class="kt-login__options">
            <a href="#" class="btn btn-primary kt-btn">
                <i class="fab fa-facebook-f"></i>
                Facebook
            </a>
            <a href="#" class="btn btn-danger kt-btn">
                <i class="fab fa-google"></i>
                Google
            </a>
        </div>
        <!--end::Options-->
    </div>
</div>
@endsection
