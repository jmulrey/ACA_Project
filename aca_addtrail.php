<?php if(!isset($_SESSION)){session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Add a Trail!</title>
</head>
<table width = "100%">
<tr>
<td align = "left"><img src = "header.png" width = "100%"></td>
</tr>
</table>
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></font></a></td>
</tr>
</table>
<body bgcolor=#728FCE>
	<table width = "100%">
	<td>
	<center>
		<div id = "wrap">
			<?php if(isset($errorMessage)){echo '<br><font color="red"><b>Error - the following entries need to be fixed:</b><ul>',$errorMessage,'</ul></font><br>',"\n";}?>
			<form name="addtrail" method ="post" action="aca_addtrail_controller.php" onsubmit="document.register.submit.disabled=true;document.register.submit.value='Processing...'">
				<h4><font color=#FFFFFF >Name of trail: 
				<input type="text" id="trailname" name="trailname" maxLength="20" >
				<br/>(What would you like to call this trail?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >State:
				<input type="text" id="trailstate" name="trailstate" maxLength="20">
				<br/>(What state is this trail in?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Drop-off Point:
				<input type="text" id="dropoff" name="dropoff" maxlength="20" >
				<br/>(Where does this trail start?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Pick up Point:
				<input type="text" id="pickup" name="pickup" maxLength="20" >
				<br/>(Where does this trail end?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Length of trail: 
				<input type="text" id="length" name="length" maxLength="20">
				<br/>(How long does this trail take to navigate?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Difficulty: 
				<input type="text" id="difficulty" name="difficulty" maxLength="20" >
				<br/>(On a scale of 1-5 how difficulty is this trail?)</font>
				</h4>
			
				<input type="submit" name="submit" value="Add Trail">
			</form>
			</center>
	</td>
	<td style = "background-color:#EEEEEE;width:300px;text-align:top;">
	<center>
		<h2><font color=#728FCE>Search for Trails</font></h2>
		<H4 align=left><font color=#728FCE >Looking for a trail for your next trip or vacation? Search Below!</font></H4>
		<form action = "search.php"\>
		<input type = "text" name = "query" size = "40"/><input type = "submit" name = "search" value = "search" />
		</form>
	</center>
	</td>
	</table>
		</div>
	</body>
</html>