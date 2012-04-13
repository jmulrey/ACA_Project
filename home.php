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
<td align = "right"><a href = "Home.php" style = "text-decoration: none"><font color=#FFFFFF >home</a> | <a href = "register.php" style = "text-decoration: none"><font color=#FFFFFF >register</font></a> | <a href = "aca_login.php" style = "text-decoration: none"><font color=#FFFFFF >login</font></a> | <a href= "aca_addtrail.php" style = "text-decoration: none"><font color=#FFFFFF >Add Trail</font></font></a></td>
</tr>
</table>
<BODY bgcolor=#728FCE>
<?php
if(isset($_SESSION['username']))
{
echo('

<table width = "100%">
<td>
<H2 align=center><font color=#FFFFFF >Thanks for logging in!</font></H2>
<center>
<form action = "search.php"\>
<input type = "text" name = "search" size = "40"/>
<input type = "submit" name = "submit" value = "search" /></td>
</form>
</center>
</td>
<td style = "background-color:#EEEEEE;width:300px;text-align:top;">
<center>
</center>
</td>
</table>
</BODY>
');
}
else
{
echo('

<table width = "100%">
<td>
<H2 align=center><font color=#FFFFFF >Welcome to the American Canoe Association Website</font></H2>
<H3 align=center><font color=#FFFFFF >Looking for a trail for your next trip or vacation? Search Below!</font></H3>
<center>
<form action = "search.php"\>
<input type = "text" name = "search" size = "40"/>
<input type = "submit" name = "submit" value = "search" /></td>
</form>
</center>
</td>
<center>
</center>
</td>
</table>
</BODY>
');
}
?>
</HTML>