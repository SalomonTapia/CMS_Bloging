@section('main')
<h2>{{$user->nombre}}</h2>
<span>Por:{{$post->user->nombre}}
el {{$user->created_at}}</span>
<p>
{{$user->nombre}}
</p>
<p><strong>Tags:</strong>{{$user->rol}}
<p>

<p>
{{link_to_route('users.index','Volver a User')}}
</p>
@stop

<!-- <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Create Users</title>
</head>

<body>
<br />
<br />
<br />
<br />
<br />
<div align="center">
<table width="339" border="0">
<tr>
<td width="158">Nombre:</td>
<td width="165"><label>
<input name="txtNombre" type="text" id="txtNombre" />
</label></td>
</tr>
<tr>
<td>Email:</td>
<td><input name="txtEmail" type="text" id="txtEmail" /></td>
</tr>
<tr>
<td>Username:</td>
<td><input name="txtUsername" type="text" id="txtUsername" /></td>
</tr>
<tr>
<td>Rol:</td>
<td><label>
<select name="select">
<option value="1">Administrador</option>
<option value="2">Asistente</option>
</select>
</label></td>
</tr>
<tr>
<td>Activo:</td>
<td><label>
<select name="select2">
<option value="1">Si</option>
<option value="0">No</option>
</select>
</label></td>
</tr>
</table>
</div>
</body>
</html>
-->
