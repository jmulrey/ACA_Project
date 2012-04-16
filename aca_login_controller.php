<?php if(!isset($_SESSION['username'])){session_start();}  ?>
<?php
	//Connect to the Database
	include('db_connect.php'); 
	//Recieve Login Info
	$username = $_POST['username'];
	$pw = $_POST['pw'];	
	//Check login against database
	$query= "SELECT * FROM users WHERE username = '$username' AND password = '$pw'";
	$result=mysql_query($query) or die ("Error Querying Database");
	if ($row = mysql_fetch_array($result)){
		$row['username']=$username;	
		$_SESSION['username']=$username;
		include("home.php");
	}else{	
		$errorMessage="Invalid username or password.";
		include("aca_login.php");
	}
?>


