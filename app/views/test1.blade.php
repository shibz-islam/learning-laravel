{{ Form::open() }}
<div>
	{{ Form::label('username','Username: ') }}
	{{ Form::text('username') }}
</div>
<div>
	{{ Form::label('password','Password: ') }}
	{{ Form::pasword('password') }}
</div>
{{ Form::close() }}