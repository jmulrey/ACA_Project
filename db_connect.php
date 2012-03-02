<?php
<<<<<<< HEAD
  	$db = mysql_connect('localhost', 'assist', 'assist', 'aca_project')
		or die (mysql_error());
	mysql_select_db("aca_project") or die(mysql_error());
?>	
=======
   session_start();
$db = mysqli_connect('localhost','aca_project','password','aca_project') or die("Oops");
?>
>>>>>>> b8a82650aa356d5f3f9d1523dfe8028215a4e2ad
