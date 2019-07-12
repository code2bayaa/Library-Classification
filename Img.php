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


$sushi = ""; $cdnmj = "";
if(($_FILES['file']['name']) != '' ){
	

	$test =  explode(",", $_FILES["file"]["name"]);
	$ext = end($test); $name = rand(100,999) . "." . $ext; 
	
		$target = "Img/".basename($_FILES['file']['name']);
    $cdnmj = $_FILES['file']['name'];
	$location = "Img/".$_FILES['file']['name'];
	$tempn = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($tempn,$target);

		echo "<img src='Img/".$cdnmj."' class='asm' />";
		
		
 	/*$rih = mysqli_query($MySQL_CON,"SELECT * FROM resource WHERE Storey = '$watid' AND LibraryName = '$doeri'");	
$nade = mysqli_fetch_assoc($rih);
$wedd = mysqli_num_rows($rih);

if($wedd > 0){
	mysqli_query($MySQL_CON,"UPDATE resource SET  ToolImage = '$cdnmj' WHERE Storey = '$watid' AND LibraryName = '$doeri'")
	or die(mysqli_error($MySQL_CON));
	
}else{

$Afr = mysqli_query($MySQL_CON,"INSERT INTO resource (ToolImage,Storey,LibraryName)
 VALUES ('$cdnmj','$watid','$doeri')")or die(mysqli_error($MySQL_CON));
}
 */

}





?>