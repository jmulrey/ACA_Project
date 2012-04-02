
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Create Account</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="contents">
<div id="contents">
  <h1>Create Account</h1>
  <form method="post" action="register.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" /><br />
    <label for="pw">Password:</label>
    <input type="password" id="pw" name="pw" /><br />
	<label for="pw">Enter Password Again:</label>
    <input type="password" id="pw2" name="pw2" /><br />
    <input type="submit" value="Create Account" name="submit" />
  </form>
  </div>
<?php
	include "db_connect.php";

	session_start();
	if (isset($_POST['username']) && isset($_POST['pw']) && isset($_POST['pw2']))
	{
	$username= $_POST['username'];
	$pw= $_POST['pw'];
	$pw2 = $_POST['pw'];
		$username = mysql_real_escape_string($username);
		$pw = mysql_real_escape_string($pw);

	if(($_POST['pw'] != $_POST['pw2'])){ //IF PASSWORDS DONT MATCH
   header( 'Location: bad_passwords.php' ) ;

	}
	else if(strlen($pw2)< 6){ //IF PASSWORD IS TOO SHORT
		//echo strlen($_POST['pw']);
	header( 'Location: short_pw.php');
	}
		
	else{
	$query_one= "Select username from users";// where username = $username";
	$result_one = mysql_query($query_one) 
		or die(mysql_error());
	while($row= mysql_fetch_array($result_one)){
	 if($row['username'] == $username){
		header( 'Location: username_exists.php');
		}
		echo $row['username'];
		echo "<br />";
		}
		}
		
	 $query = "INSERT INTO users (username,password) VALUES ('$username',sha1('$pw'))";
	 //echo strlen($pw);
	 
	 //echo "<p>QUERY $query</p>";
	 $result = mysql_query($query)
		or die("Error querying database!!!!!");
					
					
					mysql_close($db);
		header( 'Location: home.php');

					
					}
				
					?>
					</body>
					</html>