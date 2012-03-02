<?php
  	$db = mysql_connect('localhost', 'assist', 'assist', 'aca_project')
		or die (mysql_error());
	mysql_select_db("aca_project") or die(mysql_error());
?>	