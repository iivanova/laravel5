@extends('layouts.default')

@section('content')
{{ Form::open(array('url' => '/user', 'class'=>'bootstrap-admin-login-form')) }}
	<h1>Регистрация</h1>

<!-- if there are login errors, show them here -->

<div class="form-group">
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'email@email.com', 'class'=>'form-control')) }}
    {{ $errors->first('email') }}
</div>

<div class="form-group">
    {{ Form::label('Password') }}
    {{ Form::password('pass', array('placeholder' => 'password', 'class'=>'form-control')) }}
    {{ $errors->first('pass') }}
</div>

<div class="form-group">
    {{ Form::label('Repeat Password') }}
    {{ Form::password('pass2', array('placeholder' => 'password', 'class'=>'form-control')) }}
    {{ $errors->first('pass2') }}
</div>

<div class="form-group">{{ Form::submit('Submit!',array('class'=>'btn btn-lg btn-primary')) }}</div>
{{ Form::close() }}
@stop
