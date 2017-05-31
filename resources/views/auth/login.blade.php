@extends('layouts.app')

@section('content')
        <div>
            <div>
                <h1 class="logo-name">Samsdrop</h1>
            </div>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email*">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password*">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{ url('/password/reset') }}"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>
            </form>
            <p class="m-t"> <small>Sync amazon product to amazon store &copy; {{ date('Y') }}</small> </p>
        </div>
@endsection
