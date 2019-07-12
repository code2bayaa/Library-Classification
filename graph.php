<?php require_once('ConnDB.php'); ?>
<?php

// Library Statistics

$bum = ""; $wk = ""; $thd = "";
$yr = ""; $mnth = "";
if(isset($_REQUEST['bum'])){
	$bum = $_REQUEST['bum'];
}
$think = ""; //year
if(isset($_REQUEST['think'])){
	$think = $_REQUEST['think']; $thd = 2;	
}
$gond = ""; //week 
if(isset($_REQUEST['gond'])){
	$gond = $_REQUEST['gond']; $thd = 2;
		
}


if($thd == 2){
	$yr = $think;  $wk = $gond;
}else{
	 
	$yr = date("Y");
	$wk = (date("W")- 1);

}







$MALS = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$bum'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 

$Img = $nmaS['Library'];



$ggvv = mysqli_query($MySQL_CON,"SELECT Day, NumberCheckedIn, NumberBorrowedBook, NumberReturnedBook FROM progress WHERE  Week = '$wk' AND Year = '$yr' AND Library = '$Img'")or die(mysqli_error($MySQL_CON));	
$thy =  mysqli_fetch_assoc($ggvv);

$kata = array();

foreach($ggvv as $und => $dru){
	
	$kata[$und] = $dru;
		
}
print_r(json_encode($kata)); 






?>