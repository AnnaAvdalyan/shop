@extends('layouts.user-app')

@section('content')
    <main class="register">
        <form method="POST" action="{{ route('login') }}" class="register__form">
            <h2 class="title"> {{ __('Login') }} </h2>
            @csrf
            <div class="group bg-grey group-py-5">
                <input class="@error('email') error @enderror" type="email" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="group bg-grey group-py-5">
                <input class="@error('password') error @enderror" type="password" name="password" placeholder="{{ __('Password') }}" value="{{ old('email') }}" required autocomplete="current-password">
            </div>
            <div class="group bg-grey group-py-5">
                <button type="submit">  {{ __('Login') }}</button>
            </div>
            <div class="group ">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <div class="border-text">
                <p class="text">
                    OR
                </p>
                <div></div>
            </div>
            <a href="{{ route('register') }}"> Registration</a>
        </form>
    </main>
@endsection
