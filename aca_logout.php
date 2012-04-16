<?php
session_start();
if(session_destroy()){

echo('
<META HTTP-EQUIV="refresh" CONTENT="0;URL=home.php">
');
}

?>