<h1>Usuarios</h1>

@if ($users)
<ul>
	@foreach($users as $user)
	<li>{{$user->real_name}} - {{$user->email}}</li>
	@endforeach
<ul/>
@else
	Todavia no hay ningún usuario registrado.
@endif 