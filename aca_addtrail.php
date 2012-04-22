<?php include("db_connect.php");  ?>

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
<?php
if(isset($_SESSION['username']))
{
echo('
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_logout.php" style = "text-decoration: none"><font color=#FFFFFF >logout</a> | <a href= "aca_addtrail.php" style = "text-decoration: none"><font color=#FFFFFF >Add Trail</font></font></a></td>
</tr>
</table>
');
}
else{
echo('
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></font></a></td>
</tr>
</table>
');
}
?>
<body bgcolor=#728FCE>
	<table width = "100%">
	<h1 align=center><font color=#FFFFFF >Add A Trail</font></h1>
	<center>
		<div id = "wrap">
			<?php if(isset($errorMessage)){echo '<br><font color="red"><b>Error - the following entries need to be fixed:</b><ul>',$errorMessage,'</ul></font><br>',"\n";}?>
			<form name="addtrail" method ="post" action="aca_addtrail_controller.php" onsubmit="document.register.submit.disabled=true;document.register.submit.value='Processing...'">
				
				<h4><font color=#FFFFFF >Name of trail: 
				<input type="text" id="trailname" name="trailname" maxLength="20" >
				<br/>(What would you like to call this trail?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Description:
				<input type="text" id="traildesc" name="traildesc" maxLength="20">
				<br/>(Give a breif description about this trail.)</font>
				</h4>
				
				<h4><font color=#FFFFFF >State:
				<input type="text" id="trailstate" name="trailstate" maxLength="20">
				<br/>(What state is this trail in?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Drop-off Point Name:
				<input type="text" id="dropname" name="dropname" maxlength="20" >
				<br/>(What is the name of this drop off point?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Drop Off City:
				<input type="text" id="dropcity" name="dropcity" maxLength="20">
				<br/>(What city is the drop off point in?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Drop Off State:
				<input type="text" id="dropstate" name="dropstate" maxLength="20">
				<br/>(What state is the drop off point in?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Pick up Point Name:
				<input type="text" id="pickname" name="pickname" maxLength="20" >
				<br/>(What is the name of this pick up point?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Pick Up City:
				<input type="text" id="pickcity" name="pickcity" maxLength="20">
				<br/>(What city is this pick up point in?)</font>
				</h4>
				
				<h4><font color=#FFFFFF >Pick Up State:
				<input type="text" id="pickstate" name="pickstate" maxLength="20">
				<br/>(What state is this pick up point in?)</font>
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
	</table>
		</div>
	</body>
</html>