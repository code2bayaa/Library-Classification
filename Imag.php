<?php require_once('ConnDB.php'); ?>
<?php

// Library Statistics
$doeri = "";
if(isset($_REQUEST['doeri'])){
	$doeri = $_REQUEST['doeri'];
}
$watid = "";
if(isset($_REQUEST['watid'])){
	$watid = $_REQUEST['watid'];
}


$sushi = "";
if(($_FILES['file']['name']) != '' ){ 
	
		
  $cdnmj = $_FILES['file']['name'];
  $tempn = $_FILES['file']['tmp_name'];
	$location = "Img/".$cdnmj;
	$target = "Img/".basename($cdnmj);
	
		$test =  explode(",", $cdnmj);
	$ext = end($test);
	$name = rand(100,999) . "." . $ext;
	
	move_uploaded_file($cdnmj,$target);

		echo "<img src='Img/".$cdnmj."' class='asm' />";
		
		
 	$rih = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$doeri'");	
$nade = mysqli_fetch_assoc($rih);
$wedd = mysqli_num_rows($rih);

if($wedd > 0){
	mysqli_query($MySQL_CON,"UPDATE library SET  LibImage = '$cdnmj' WHERE LibraryName = '$doeri'")
	or die(mysqli_error($MySQL_CON));
	
}else{

$Afr = mysqli_query($MySQL_CON,"INSERT INTO library (LibImage,LibraryName)
 VALUES ('$cdnmj','$doeri')")or die(mysqli_error($MySQL_CON));
}

}





?>