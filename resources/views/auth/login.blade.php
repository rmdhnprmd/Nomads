@extends('layouts.login')

@section('content')
    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">Explore the Beautiful World, As Easy one Click</h1>
                    <img 
                        src="/frontend/images/login-images/login-images.png" 
                        alt="" 
                        class="w-75 d-none d-sm-flex"
                    >
                </div>
                <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img 
                                    src="/frontend/images/logo.png" 
                                    alt=""
                                    class="w-50 mb-4"
                                >
                            </div>
                            <form method="POST" action="{{ route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        id="email" 
                                        name="email" 
                                        value="{{ old('email') }}" 
                                        required autocomplete="email" 
                                        autofocus
                                    >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        id="password"
                                        name="password"
                                        required autocomplete="current-password"
                                    >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input 
                                        type="checkbox" 
                                        class="form-check-input"
                                        name="remember" 
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <button 
                                    type="submit" 
                                    class="btn btn-login btn-block mt-3">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <div class="forget-password text-center">
                                        <a class="btn btn-link mt-4" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection