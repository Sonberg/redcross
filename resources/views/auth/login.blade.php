@extends('app') @section('content')
<form class="form ui margin-field" role="form" method="POST" action="{{ url('/login') }}">
    <div class="ui one column center aligned grid">
        <div class="column six wide form-holder">
            <h2 class="center aligned header form-head">Sign in</h2> 
            
            {!! csrf_field() !!}
            <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" placeholder="E-Mail" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
            </div>
            <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" placeholder="Password" name="password"> @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
            </div>
            <div class="field">
                <input type="submit" value="sign in" class="ui button large fluid green">
            </div>
            
            <div class="inline field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember">
                    <label>Remember me</label>
                </div>
            </div>
            
            <a class="ui button" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        
        </div>
    </div>
</form>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password"> @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<script>
    $('.ui.checkbox').checkbox();
</script>
@endsection