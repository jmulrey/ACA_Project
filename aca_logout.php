<?php
//session_start();
include('db_connect.php'); 
if(session_destroy()){

echo('
<META HTTP-EQUIV="refresh" CONTENT="0;URL=home.php">
');
}

?>