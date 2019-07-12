<?php require_once('ConnDB.php'); ?>
<?php

$watid = "";
if(isset($_REQUEST['watid'])){
	$watid = $_REQUEST['watid'];
}


$sushi = ""; $cdnmj = "";
if(!empty($_FILES['file']['name'])){
	

	$test =  explode(",", $_FILES["file"]["name"]);
	$ext = end($test); $name = rand(100,999) . "." . $ext; 
	
		$target = "Img/".basename($_FILES['file']['name']);
    $cdnmj = $_FILES['file']['name'];
	$location = "Img/".$_FILES['file']['name'];
	$tempn = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($tempn,$target);

		echo "<img src='Img/".$cdnmj."' class='asm' />";

 	$rih = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$watid'");	
$nade = mysqli_fetch_assoc($rih);
$wedd = mysqli_num_rows($rih);

if($wedd > 0){
	mysqli_query($MySQL_CON,"UPDATE libuser SET  UserImage = '$cdnmj' WHERE Email = '$watid'")
	or die(mysqli_error($MySQL_CON));
	
}else{
	
$Afr = mysqli_query($MySQL_CON,"INSERT INTO libuser (UserImage,Email)
 VALUES ('$cdnmj','$watid') ")or die(mysqli_error($MySQL_CON));
}

}



?>