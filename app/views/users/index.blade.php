<h1>Usuarios</h1>

@if ($users)
<ul>
	@foreach($users as $user)
	<li>
		{{$user->real_name}} - {{$user->email}}-{{HTML::link('users/delete/'.$user->id, 'Borrar')}}-{{HTML::link('users/update/'.$user->id, 'Actualizar')}}
	</li>
	@endforeach
<ul/>
@else
	Todavia no hay ningún usuario registrado.
@endif 

{{HTML::link('users/create','Crear Usuario')}}