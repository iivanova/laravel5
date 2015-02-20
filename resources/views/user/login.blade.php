@extends('layouts.default')

@section('content')

{!! Form::open(array('url' => 'login', 'class'=>'bootstrap-admin-login-form')) !!}
	<h1>Вход</h1>

<div class="form-group">
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', Input::old('email'), array('placeholder' => 'email', 'class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', array( 'class'=>'form-control')) !!}
</div>

<div class="form-group">{!! Form::submit('Submit!',array('class'=>'btn btn-lg btn-primary')) !!}</div>
{!! Form::close() !!}
@stop
