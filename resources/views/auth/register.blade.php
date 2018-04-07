@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="css/register.css">
@endsection

@section('content')
<div class="row h-75 justify-content-center align-items-center">
    <form class="form-signin text-center px-5" method="POST" action="{{ route('register') }}">
        @csrf
        <img class="my-4" src="{{ asset('images/footwear.svg') }}" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-light">Registration</h1>

        <label for="name" class="sr-only">Name</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <label for="inputPasswordRetype" class="sr-only">Retype password</label>
        <input type="password" id="inputPasswordRetype" class="form-control" placeholder="Retype password" name="password_confirmation" required>

        <button class="btn btn-lg btn-block my-custom-button" type="submit">Register</button>
    </form>
</div>
@endsection
