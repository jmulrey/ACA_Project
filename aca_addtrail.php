<?php if(!isset($_SESSION)){session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Add a Trail!</title>
	</head>
	<body>
		<div id = "wrap">
			<?php if(isset($errorMessage)){echo '<br><font color="red"><b>Error - the following entries need to be fixed:</b><ul>',$errorMessage,'</ul></font><br>',"\n";}?>
			<form name="addtrail" method ="post" action="aca_addtrail_controller.php" onsubmit="document.register.submit.disabled=true;document.register.submit.value='Processing...'">
			<table align=center>
				<tr>
					<td>Name of trail:</td>
					<td>(What would you like to call this trail?)</td>
					<td><input type="text" id="trailname" name="trailname" maxLength="20" </td>
				</tr>
				<tr>
					<td>State:</td>
					<td>(What state is this trail in?)</td>
					<td><input type="text" id="trailstate" name="trailstate" maxLength="20" </td>
				</tr>
				<tr>
					<td>Drop-off Point:</td>
					<td>(Where does this trail start?)</td>
					<td><input type="text" id="dropoff" name="dropoff" maxlength="20" </td>
				</tr>
				<tr>
					<td>Pick up Point:</td>
					<td>(Where does this trail end?)</td>
					<td><input type="text" id="pickup" name="pickup" maxLength="20" </td>
				</tr>
				<tr>
					<td>Length of trail:</td>
					<td>(How long does this trail take to navigate?)</td>
					<td><input type="text" id="length" name="length" maxLength="20" </td>
				</tr>
				<tr>
					<td>Difficulty:</td>
					<td>(On a scale of 1-5 how difficulty is this trail?)</td>
					<td><input type="text" id="difficulty" name="difficulty" maxLength="20" </td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Add Trail"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>