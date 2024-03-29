@extends('layout')

@section('content')

<div class="starter-template">
	<h1>Register</h1>

	{{ Form::open(['route' => 'registration.store']) }}

           <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
            </div>  

            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password:') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            
            <div class="form-group">
                {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
            </div>

	{{ Form::close() }}

</div>
@stop