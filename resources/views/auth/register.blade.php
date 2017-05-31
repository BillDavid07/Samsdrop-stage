@extends('layouts.app')

@section('content')
        <div>
            <div>
                <h1 class="logo-name">Samsdrop</h1>
            </div>
            <p>Create account to see it in action.</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname*">
                    @if ($errors->has('name'))
                        <span class="help-block">
                           {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>
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
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password*">

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/login') }}">Login</a>
            </form>
            <p class="m-t"> <small>Sync amazon product to amazon store &copy; {{ date('Y') }}</small> </p>
        </div>
@endsection
