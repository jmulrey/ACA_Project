<?php
  	$db = mysql_connect('localhost', 'assist', 'assist', 'aca_project')
		or die (mysql_error());
	mysql_select_db("aca_project") or die(mysql_error());
?>	
=======
   session_start();
$db = mysqli_connect('localhost','aca_project','password','aca_project') or die("Oops");
?>
