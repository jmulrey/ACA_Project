<?php include "db_connect.php";?>
<html>
<head>
</head>
<table width = "100%">
<tr>
<td align = "left"><img src = "header.png" width = "100%"></td>
</tr>
</table>
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></font></a></td>
</tr>
</table>
<BODY bgcolor=#728FCE>

<table width = "100%">
<td>

<?php

$name = mysqli_real_escape_string($db,$_POST['username']);
$pw = mysqli_real_escape_string($db,$_POST['password']);

$query = "select * from users WHERE username = '$name' AND password ='$pw'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result))
{
$_SESSION['username'] = $row['Username'];
echo "<p>Thanks for logging in, $name</p>\n";
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://localhost/Whiteboard/home.php">';
}
else
{
echo "<p>Could not log you in!</p>\n";
echo '<form method="post" action="index.php">
<input type="submit" value="Back" name="back" />
</form>';
}

?>
</h5></td></tr>
</table
</div>
</body>
</html>