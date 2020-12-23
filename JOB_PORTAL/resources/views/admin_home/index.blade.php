<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>

	<h1>Welcome admin  home!</h1>

	<a href="/admin_home/create">Create User</a> |
	<a href="/logout">logout</a>

	<h2>user list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Password</td>
			<td>type</td>
			<td>Action</td>
		</tr>

	@for($i=0; $i != count($user_table); $i++)
		<tr>
			<td>{{$user_table[$i]['userId']}}</td>
			<td>{{$user_table[$i]['username']}}</td>
			<td>{{$user_table[$i]['password']}}</td>
			<td>{{$user_table[$i]['userType']}}</td>
			<td>
				<a href="/admin_home/edit/{{$user_table[$i]['id']}}">Edit</a> |
				<a href="/admin_home/delete/{{$user_table[$i]['id']}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>

</body>
</html>
