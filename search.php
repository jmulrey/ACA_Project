<HTML>
<HEAD>
<TITLE>American Canoe Association / Home</TITLE>
</HEAD>
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

<body bgcolor=#728FCE>
 <table>
 <td>
 <center>
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
   		echo "<table id=\"hor-minimalist-b\">\n<tr><th><font color=#FFFFFF >TrailName</font></th><th><font color=#FFFFFF >State</font></th><th><font color=#FFFFFF >Difficulty</font></th><th><font color=#FFFFFF >Length</font></th><th><font color=#FFFFFF >Index</font></th><tr>\n\n";
	while($row = mysql_fetch_array($result)) {
  			$TrailName = $row['TrailName'];
  			$State = $row['State'];
  			$Difficulty = $row['Difficulty'];
  			$Length = $row['Length'];
  			$Index = $row['Index'];
			
			


		  	echo "<tr><font color=#FFFFFF ><td  >$TrailName</td><td >$State</td><td >$Difficulty</td><td>$Length</td><td>$Index</td><td><a href='display_trail.php?trail=$TrailName'>View Trail Page</a></td></font></tr>\n";
	    }
	    echo "</table>\n"; 
  	
  	
  }
  ?>
  </center>
  </td>
  <td style = "background-color:#EEEEEE;width:300px;text-align:top;">
	<center>
		<h2><font color=#728FCE>Search for Trails</font></h2>
		<H4 align=left><font color=#728FCE >Looking for a trail for your next trip or vacation? Search Below!</font></H4>
		<form action = "search.php"\>
		<input type = "text" name = "query" size = "40"/><input type = "submit" name = "search" value = "search" />
		</form>
	</center>
	</td>
 </table>
  </div> 
</body>
</html>