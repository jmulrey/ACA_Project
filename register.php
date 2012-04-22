
<html>
<head>
  <title>Create Account</title>
</head>
<table width = "100%">
<tr>
<td align = "left"><img src = "header.png" width = "100%"></td>
</tr>
</table>
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></font></a></td>
</tr>
</table>
<BODY bgcolor=#728FCE>
<table width = "100%">
<td>
<div id="contents">
<div id="contents">
  <h1 align=center><font color=#FFFFFF >Create Account</font></h1>
  <center>
  <form method="post" action="register.php">
    <label for="username" ><font color=#FFFFFF >Username:</font></label>
    <input type="text" id="username" name="username" /> <br/><br/>
    <label for="pw" ><font color=#FFFFFF >Password:</font></label>
    <input type="password" id="pw" name="pw" /> <br/><br/>
	<label for="pw2" ><font color=#FFFFFF >Enter Password Again:</font></label>
    <input type="password" id="pw2" name="pw2" /> <br/><br/>
    <input type="submit" value="Create Account" name="submit" />
  </form>
  </center>
  </div>
<?php
	include "db_connect.php";

	//session_start();
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
					</td>
<td style = "background-color:#EEEEEE;width:300px;text-align:top;">
<center>
<form action = "aca_login.php"\>
<h2><font color=#728FCE>Member Log In</font></h2>
<h3 align=left><font color=#728FCE>Username</font></h3>
<input type = "text" name = "username" size = "40"/>
<h3 align=left><font color=#728FCE>Password</font></h3>
<input type = "text" name = "password" size = "40"/>
<input align=right type = "submit" name = "submit" value = "submit" /></td>
</form>
</center>
</td>
</table>
					</body>
					</html>