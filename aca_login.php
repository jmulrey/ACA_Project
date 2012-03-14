<?php if(!isset($_SESSION)){session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Login</title>
</head>
	<body>
		<div id = "wrap">
			<?php if(isset($errorMessage)){echo '<br><font color="red"><b>Error - the following entries need to be fixed:</b><ul>',$errorMessage,'</ul></font><br>',"\n";}?>
			<form name="login" method ="post" action="aca_login_controller.php" onsubmit="document.register.submit.disabled=true;document.register.submit.value='Processing...'">
			<table align=center>
				<tr>
					<td>Username:</td>
					<td><input type="text" id="username" name="username" </td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" id="password" name="password" </td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>
