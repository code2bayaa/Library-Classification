<?php require_once('ConnDB.php'); ?>
<?php

// Library Statistics

$yr = date("Y");
$mnth = date("m");
$wk = date("w");
$cm = "";
if($wk > 1){
$cm = ($wk - 1);
}else{
	$cm = 1;
}
$bum = "";
if(isset($_REQUEST['bum'])){
	$bum = $_REQUEST['bum'];
}
$hyu = "";
if(isset($_REQUEST['hyu'])){
	$hyu = $_REQUEST['hyu'];
}

$MALS = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$bum'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 

$Img = $nmaS['Library'];

$ggvv = mysqli_query($MySQL_CON,"SELECT Day, NumberCheckedIn, NumberBorrowedBook, NumberReturnedBook FROM progress WHERE  Week = '1' AND Year = '$yr' AND Month = '$mnth' AND Library = '$Img'")or die(mysql_error($MySQL_CON));	
$thy =  mysqli_fetch_assoc($ggvv);

$kata = array();
foreach($ggvv as $und => $dru){
	
	$kata[$und] = $dru;
		
}
print_r(json_encode($kata)); 






?>