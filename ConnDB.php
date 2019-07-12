<?php


$localhost = "localhost";
$UserDB = "root";
$Pass = "";
$DB_name = "lib";

 $MySQL_CON = mysqli_connect($localhost,$UserDB,$Pass,$DB_name)or trigger_error(mysqli_error($MySQL_CON),E_USER_ERROR);
 
?>