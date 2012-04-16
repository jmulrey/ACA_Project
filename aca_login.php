<?php if(!isset($_SESSION['username'])){session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Login</title>
</head>
<table width = "100%">
<tr>
<td align = "left"><img src = "header.png" width = "100%"></td>
</tr>
</table>
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></a></td></tr>
</table>
<body bgcolor=#728FCE>	
	<table width = "100%">
	<td>
	<h1 align=center><font color=#FFFFFF >Login</font></h1>
	<center>
	<div id = "wrap">
	<?php if(isset($errorMessage)){echo '<br><font color="red"><b>Error - the following entries need to be fixed:</b><ul>',$errorMessage,'</ul></font><br>',"\n";}?>
	<form name="login" method ="post" action="aca_login_controller.php" onsubmit="document.register.submit.disabled=true;document.register.submit.value='Processing...'">
		
		    <label for="username" ><font color=#FFFFFF >Username:</font></label>
			<input type="text" id="username" name="username" /> <br/><br/>
			<label for="pw" ><font color=#FFFFFF >Password:</font></label>
			<input type="password" id="pw" name="pw" /> <br/><br/>
			<input type="submit" value="Login" name="submit" />
	</center>
	</td>
	</table>
	</form>
	</div>
</body>
</html>
