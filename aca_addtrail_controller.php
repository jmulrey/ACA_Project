<?php if(!isset($_SESSION)){session_start();}  ?>
<?php
	//query sql for trailname
	$trailname=$_POST['trailname'];
	include('db_connect.php');
	$compareQuery="SELECT TrailName FROM trails ";
	$compareResult=mysqli_query($db, $compareQuery) or die("Error Querying Database");
	if(!isset($checkTrail)) {$checkTrail=NULL; }
	while($row=mysqli_fetch_array($compareResult) and $checkTrail!=$trailname){
		$checkTrail=$row['TrailName'];
	}
	//test if trail name exists
	if($checkTrail==$trailname){
		$usernameExists=true;
		$errorMessage='<li>That trail name already exists</li>'."\n";
	}
	if(strlen(trim($errorMessage)) > 0){
		include("aca_addtrail.php");
		exit(0);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <?php
	//input was validated, adding them to the database
	$trailname=$_POST['trailname'];
	$trailstate=$_POST['trailstate']; 
	$dropoff =$_POST['dropoff'];
	$pickup= $_POST['pickup'];
	$length = $_POST['length'];
	$difficulty = $_POST['difficulty'];
	include('db_connect.php');
	$query = "INSERT INTO  `aca_project`.`trails` (trailname ,dropoff,pickup,state,difficulty,length) VALUES ('$trailname','$dropoff','$pickup','$trailstate','$difficulty','$length')";
	$result = mysql_query($query) or die("Error Querying Database");
	mysql_close($db);	
	//sending user to the home page
	unset($errorMessage);
	include("home.php");
		echo ("$trailname, $trailstate, $dropoff, $pickup, $length, $difficulty");

?>

