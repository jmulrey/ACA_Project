<?php if(!isset($_SESSION)){session_start();}  ?>
<?php
	//query sql for trailname
//	$trailname=$_POST['trailname'];
//	include('db_connect.php');
//	$compareQuery="SELECT TrailName FROM trails ";
//	$compareResult=mysqli_query($db, $compareQuery) or die("Error Querying Database");
//	if(!isset($checkTrail)) {$checkTrail=NULL; }
//	while($row=mysqli_fetch_array($compareResult) and $checkTrail!=$trailname){
//		$checkTrail=$row['TrailName'];
//	}
//	//test if trail name exists
//	if($checkTrail==$trailname){
//		$usernameExists=true;
//		$errorMessage='<li>That trail name already exists</li>'."\n";
//	}
//	if(strlen(trim($errorMessage)) > 0){
//		include("aca_addtrail.php");
//		exit(0);
//	}
//
//?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <?php
	//input was validated, adding them to the database
	$trailname=$_POST['trailname'];
	$traildesc=$_POST['traildesc'];
	$trailstate=$_POST['trailstate']; 
	$dropname =$_POST['dropname'];
	$dropcity =$_POST['dropcity'];
	$dropstate =$_POST['dropstate'];
	$pickname =$_POST['pickname'];
	$pickcity =$_POST['pickcity'];
	$pickstate =$_POST['pickstate'];
	$length = $_POST['length'];
	$difficulty = $_POST['difficulty'];
	include('db_connect.php');
	$query = INSERT INTO `aca_project`.`trails` (`TrailName`, `Description`, `Dropoff_Name`, `Dropoff_City`, `Dropoff_State`, `Pickup_Name`, `Pickup_City`, `Pickup_State`, `State`, `Difficulty`, `Length`, `Index`) 
	VALUES ('$trailname','$traildesc','$dropname','$dropcity','$dropstate','$pickname','$pickcity','$pickstate','$trailstate','$difficulty','$length',NULL)";
	$result = mysql_query($query) or die("Error Querying Database");
	mysql_close($db);	
	//sending user to the home page
	unset($errorMessage);
	include("home.php");
		echo ("$trailname','$traildesc','$dropname','$dropcity','$dropstate','$pickname','pickcity','pickstate','$trailstate','$difficulty','$length',NULL");

?>

