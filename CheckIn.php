<?php require_once('ConnDB.php'); ?>
<?php


$tayra="";
if(isset($_REQUEST['tayra'])){
	$tayra = $_REQUEST['tayra'];
}



// Library Checkin

$MALS = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$tayra'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 

$Img = $nmaS['Library'];
$turn =  date("Y-m-d");


$APkwW = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$Img' AND Status = '4' AND Date = '$turn' ");	
$Pjo = mysqli_fetch_assoc($APkwW);
$hary = mysqli_num_rows($APkwW);


$wnnts = $Pjo['Email'];

$nintendo = array();

array_push($nintendo,$wnnts);

json_encode($nintendo);

?>