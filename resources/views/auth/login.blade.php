@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
<div class="row h-75 justify-content-center align-items-center py-4">
    <form class="form-signin text-center px-5" method="POST" action="{{ route('login') }}">
        @csrf
        <img class="my-4" src="images/footwear.svg" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-light">Sign in</h1>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <button class="btn btn-lg btn-block my-custom-button" type="submit">Sign in</button>

        <div class="checkbox my-3">
            <label>
                <input class="mr-2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
            </label>
        </div>
        <hr>
        <a class="my-custom-link" href="{{ route('register') }}">New? Create an account</a>
    </form>
</div>
@endsection
