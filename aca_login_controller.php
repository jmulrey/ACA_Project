<?php if(!isset($_SESSION)){session_start();}  ?>
<?php
	//Connect to the Database
	include('db_connect.php'); 
	//Recieve Login Info
	$username = $_POST['username'];
	$pw = $_POST['password'];	
	//Check login against database
	$query= "SELECT * FROM users WHERE username = '$username' AND password = '$pw'";
	$result=mysqli_query($db, $query) or die ("Error Querying Database");
	if ($row = mysqli_fetch_array($result)){
		$row['username']=$username;	
		$_SESSION['username']=$username;
		include("index.html");
	}else{	
		$errorMessage="Invalid username or password.";
		include("pp_login.php");
	}
?>


