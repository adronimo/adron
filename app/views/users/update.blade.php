<h1>Actualizar un usuario</h1>
{{Form::open()}}

	Real Name: {{Form::text('real_name',$user->real_name)}}<br />
	Email: {{Form::text('email', $user->email)}}<br />
	Change Password: {{Form::password('password')}}<br />

{{Form::submit('Actualizar usuario')}}

{{Form::close()}}