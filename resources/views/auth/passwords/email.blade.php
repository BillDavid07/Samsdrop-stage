@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div>
        <div>
            <h1 class="logo-name">Samsdrop</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <p>Reset Password</p>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email*">
                @if ($errors->has('email'))
                    <span class="help-block">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">Send Password Reset Link</button>

            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>
        </form>
        <p class="m-t"> <small>Sync amazon product to amazon store &copy; {{ date('Y') }}</small> </p>
    </div>
@endsection
