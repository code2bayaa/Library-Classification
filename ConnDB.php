<?php


$localhost = "localhost";
$UserDB = "root";
$Pass = "";
$DB_name = "libm";

 $MySQL_CON = mysql_connect($localhost,$UserDB,$Pass,$DB_name)or trigger_error(mysql_error(),E_USER_ERROR);
 
?>