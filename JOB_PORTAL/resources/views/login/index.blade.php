<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>

	<h1>LOGIN [with UserTYPE]</h1>

	<form method="post">

		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>userTYPE:</td>
				<td><input type="radio" name="userType" value="admin">ADMIN</td>
							<td><input type="radio" name="userType" value="employee">EMPLOYEE</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="LOGiN"></td>
			</tr>
		</table>
	</form>

	{{session('msg')}}
</body>
</html>
