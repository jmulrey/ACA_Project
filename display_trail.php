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

$name = $_SESSION['username'];
$t = $_GET['trail'];
$trail = (string)$t;

echo("<tr><td><h2>Group: $trail</h2>");
$query = "select groupdescription from groups WHERE groupName = '$trail'";
$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result)){
$content = $row['groupdescription'];
echo("<h4>Description: </h4><h5>$content</h5>");
} 




?>
</h5></td></tr>
</table
</div>
</body>
</html>