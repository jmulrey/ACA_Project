<?php include "db_connect.php";?>
<html>
<head>
</head>
<table width = "100%">
<tr>
<td align = "left"><img src = "header.png" width = "100%"></td>
</tr>
</table>
<table width = "100%" bgcolor=#4000FF>
<tr>
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></font></a></td>
</tr>
</table>
<BODY bgcolor=#728FCE>

<table width = "100%">
<td>

<?php

//$name = $_SESSION['username'];
$t = $_GET['trail'];
$trail = (string)$t;

echo("<center><h2><font color=#FFFFFF>Trail: $trail</font></h2></center>");
$query = "select * from trails WHERE TrailName = '$trail'";
$result = mysql_query($query);


while($row = mysql_fetch_array($result)){
$dropoffname = $row['Dropoff_Name'];
$dropoffcity = $row['Dropoff_City'];
$dropoffstate = $row['Dropoff_State'];
echo("<center><table cellspacing='0' cellpadding='0' border='0'><tr><td><iframe src='http://www.map-generator.net/extmap.php?name=$dropoffname&amp;address=$dropoffcity%2C%20$dropoffstate&amp;width=500&amp;height=400&amp;maptype=map&amp;zoom=14&amp;hl=en&amp;t=1333393947' width='500' height='400' marginwidth='0' marginheight='0' frameborder='0' scrolling='no'></iframe></td></tr><tr><td align='right'><a style='font:8px Arial;text-decoration:none;cursor:default;color:#5C5C5C;' href='http://www.map-generator.net'>map-generator.net</a></td></tr></table><!-- Do not change code! -->");
$content = $row['Description'];
echo("<table border = '1' width = '700' bgcolor='#FFFFFF'><tr><td>Description: $content</td></tr>");
$content = $row['State'];
echo("<tr><td>State: $content</td></tr>");
$content1 = $row['Dropoff_Name'];
$content2 = $row['Dropoff_City'];
$content3 = $row['Dropoff_State'];
echo("<tr><td>Dropoff: $content1, $content2, $content3</td></tr>");
$content1 = $row['Pickup_Name'];
$content2 = $row['Pickup_City'];
$content3 = $row['Pickup_State'];
echo("<tr><td>Pickup: $content1, $content2, $content3</td></tr>");
$content = $row['Length'];
echo("<tr><td>Length: $content miles</td></tr>");
$content = $row['Difficulty'];
echo("<tr><td>Difficulty: $content</td></tr></table></center>");
} 





?>
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