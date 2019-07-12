<?php require_once('ConnDB.php'); ?>
<?php

$sushi = ""; $cdnmj = "";

if(!empty($_FILES['meen']['name'])){
	
	$test =  explode(",", $_FILES["meen"]["name"]);
	$ext = end($test); $name = rand(100,999) . "." . $ext; 
	
		$target = "Img/".basename($_FILES['meen']['name']);
    $cdnmj = $_FILES['meen']['name'];
	$location = "Img/".$_FILES['meen']['name'];
	$tempn = $_FILES['meen']['tmp_name'];
	
	move_uploaded_file($tempn,$target);

		echo "<img src='Img/".$cdnmj."' class='asm' />";

 	$rih = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE TempName = '$tempn'")or die(mysqli_error($MySQL_CON));	
$nade = mysqli_fetch_assoc($rih);
$wedd = mysqli_num_rows($rih);

if($wedd > 0){
	mysqli_query($MySQL_CON,"UPDATE library SET LibImage = '$cdnmj' WHERE TempName = '$tempn'")
	or die(mysqli_error($MySQL_CON));
	
}else{
	
$Afr = mysqli_query($MySQL_CON,"INSERT INTO library (LibImage,TempName)
 VALUES ('$cdnmj','$tempn') ")or die(mysqli_error($MySQL_CON));
}

 	$inv = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE TempName = '$tempn'")or die(mysqli_error($MySQL_CON));	
$sky = mysqli_fetch_assoc($inv);

$mono = $sky['libraryId'];

echo "<input type='hidden' value='$mono' id='forgh'>";
}





?>