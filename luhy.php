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

$pilo = "";
if(isset($_REQUEST['pilo'])){
	$pilo = $_REQUEST['pilo'];
}
$nono = "";
if(isset($_REQUEST['nono'])){
	$nono = $_REQUEST['nono'];
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

		
		
		$apok = explode(",",$pilo);		 $pdkfo = array();

	foreach($apok as $pnzi => $teka){
		if($teka !== ""){
			array_push($pdkfo,$teka);
		}
	}
	
	$clamoo = implode("<br>",$pdkfo);

foreach($pdkfo as $tdn){

$Afr = mysqli_query($MySQL_CON,"INSERT INTO resource (ToolImage,Resources,Storey,ResourceLocale,LibraryName)
 VALUES ('$cdnmj','$tdn','$watid','$nono','$doeri')")or die(mysqli_error($MySQL_CON));
}
 

}





?>