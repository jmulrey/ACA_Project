<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="contents">
  
  <?php
  	session_start();

  include "db_connect.php";
  if (isset($_SESSION))
  {
 
  	$searchterm = $_POST['search'];
    $searchterm = mysql_real_escape_string($searchterm);
  	
 
  	
			
  		$query = "SELECT * FROM trails where TrailName LIKE '%$searchterm%' ORDER BY TrailName";
  		$result = mysql_query($query)
   			or die(mysql_error());
   		echo "<table id=\"hor-minimalist-b\">\n<tr><th>TrailName</th><th>State</th><th>Difficulty</th><th>Length</th><th>Index</th><tr>\n\n";
	while($row = mysql_fetch_array($result)) {
  			$TrailName = $row['TrailName'];
  			$State = $row['State'];
  			$Difficulty = $row['Difficulty'];
  			$Length = $row['Length'];
  			$Index = $row['Index'];
			


		  	echo "<tr><td  >$TrailName</td><td >$State</td><td >$Difficulty</td><td>$Length</td><td>$Index</td></tr>\n";
	    }
	    echo "</table>\n"; 
  	
  	
  }
  ?>
  <p>&nbsp;</p><p><a href="home.php">Back To Home</a></p>
  </div>
</body>
</html>