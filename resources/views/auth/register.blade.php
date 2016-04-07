@extends('app')

@section('content')
<div class="ui one column center aligned grid margin-field">
    <div class="column six wide form-holder">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="center aligned header form-head">Register</h2>
                <div class="panel-body">
                    <form class="form ui" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="field {{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="field {{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="ui button large fluid green">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
