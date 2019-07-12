<?php require_once('ConnDB.php'); ?>
<?php
$kolak="";
if(isset($_REQUEST['q'])){
	$kolak = $_REQUEST['q'];
}
$tayra=""; //Lib
if(isset($_REQUEST['kdm'])){
	$tayra = $_REQUEST['kdm'];
}
$forme="";
if(isset($_REQUEST['jh'])){
	$forme = $_REQUEST['jh'];
}
$saf="";
if(isset($_REQUEST['bhbh'])){
	$saf = $_REQUEST['bhbh'];
}
$hed="";
if(isset($_REQUEST['jhj'])){
	$hed = $_REQUEST['jhj'];
}
$xteen="";
if(isset($_REQUEST['xteen'])){
	$xteen = $_REQUEST['xteen'];
}
$witm="";
if(isset($_REQUEST['witm'])){
	$witm = $_REQUEST['witm'];
}
$chacha="";
if(isset($_REQUEST['chacha'])){
	$chacha = $_REQUEST['chacha'];
}
$wnkj="";
if(isset($_REQUEST['wnkj'])){
	$wnkj = $_REQUEST['wnkj'];
}
$dolls="";
if(isset($_REQUEST['dolls'])){
	$dolls = $_REQUEST['dolls'];
}
$madn="";
if(isset($_REQUEST['madn'])){
	$madn = $_REQUEST['madn'];
}
$hity=""; $beij = "";
if(isset($_REQUEST['hity'])){
	$hity = $_REQUEST['hity'];
	$beij = 2;
}


?>
<?php

$MALS = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$tayra'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 

$dop = $nmaS['Classification']; 
$Name = $nmaS['Shelves'];
$School = $nmaS['Storey'];

$wa = 0; $ka = 0; $nda = 0; 
$mom=""; $bp = ""; $eyes = ""; $pine = "";

$star="";
if(isset($_REQUEST['star'])){
	$star = $_REQUEST['star'];
	
	$bp = $star;
}

$gril="";
if(isset($_REQUEST['gril'])){
	$gril = $_REQUEST['gril'];
	
	$eyes = $gril;
}
	
$yung = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$hed'");	
$blod = mysqli_num_rows($yung);

$mfk = $blod['Title'];

if(!empty($kolak)){

if($kolak == 5757){
	 
	 $chil = ""; $fry = ""; $sss ="";
	 
	$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");
	
		
		$nil = "";
	
		if(!empty($dolls)){
	
$twn = mysqli_query($MySQL_CON,"SELECT * FROM storeylibrary WHERE LibraryName = '$tayra' AND Storey = '$hity'")or die(mysqli_error($MySQL_CON));	
$outta = mysqli_fetch_assoc($twn);

$chil = $outta['Shelves']; $fry = $outta['Storey'];  $pine = $outta['First'];  $nil = $hity;			


}else{
	
	$twn = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$tayra' AND Storey = '$School'")or die(mysqli_error($MySQL_CON));	
$outta = mysqli_fetch_assoc($twn); 

$chil = $outta['Shelves']; $fry = $outta['Storey'];  $pine = $outta['First']; $nil = $School;	
}
			
$issu = "";
if(!empty($eyes)){
$issu = $eyes;	
}else{
$issu = $pine;
}
if(empty($star)){
	echo"<div id='bigsh'>";
}
echo"<table class = 'epkel'><tr>";
	foreach($pah as $fnj => $kss){
		$bckst="";

if($beij  > 0){
		if($hity == $fnj){
			$bckst= "grandm";
		}else{
			$bckst="embr";
		}
	
}else{
		if($School == $fnj){
			$bckst= "grandm";
	
}else{
			$bckst="embr";
		}
}

		if($School > 0){
		if($School >= $fnj){
			echo "<input type='hidden' value='$School' id='lpopl'>";
			echo "<td><button id = 'anja$fnj' onclick = 'duh($fnj)' class='$bckst'><i class='fas fa-building'></i> $kss</button></td>";
		}
		}
	}
	echo "</tr></table>";

	

		$bp = ($issu + 10);
		 $sss =($chil + $pine);
	
echo "<input type='hidden' value='$nil' id='nidr'>"; 
	echo "<input type='hidden' value='$bp' id='ferll'>"; 
echo "<input type='hidden' value='$issu' id='namet'>"; 
echo "<input type='hidden' value='$pine' id='hjg'>"; 
echo "<input type='hidden' value='$sss' id='happ'>";


	echo "<table class = 'djnj'><tr>";
	echo "<td><button  id = 'wdff' class = 'snkq' onclick = 'lyth(1)'><i class='fas fa-angle-left'></i></button></td>";
	$ka = 0; $nda = 0;  
 $rnji = "";

 
	for($wkn = $issu;$wkn <= $sss;$wkn++){
		
		if($wkn > 9){
			$ka = "";
		}else{
			$ka = 0;
		}
if($dop == "Dewey System"){
	$rnji = "$ka".$wkn."$nda";
}elseif($dop == "LLC"){
	$one = array(
	"0" => "a","1" => "b","3" => "c","4" => "d","5" => "e","6" => "f","7" => "g","8" => "h","9" => "i","10" => "j",
	"11" => "k","12" => "l","13" => "m","14" => "n","15" => "o","16" => "p","17" => "q","18" => "r","19" => "s","20" => "t","21" => "u","22" => "v",
	"23" => "w","24" => "x","25" => "y","26" => "z");
	$rnji = $one[$wkn];
}
echo "<input type='hidden' value='$rnji'id = 'sbhb$wkn'>";

if($wkn <= $bp){
		echo "<td><button   style='background-color:rgba($sss,$wkn,$issu);' class = 'fukj'  onclick = 'njdjjd($wkn)'><i class='fas fa-book'></i> $rnji</button></td>";
}
	
	}
	echo "<td><button id = 'cw' class = 'snkq'  onclick = 'lyth(2)'><i class='fas fa-angle-right'></i></button></td>";
	echo "</tr></table>";
	if(empty($star)){
		echo "</div><div id='snk'></div>";
	}

	
}
elseif($kolak == 54254){

echo "
		<input type='search' class = 'acas' id='Dkas' onclick='ramp()' placeholder='Search Book Here...' />
	<input type='button' id='erh' class = 'ankj' value='&#128269'><div id='viatu'></div>";
}
}

if(!empty($forme)){
	


}
if(!empty($madn)){


	$rih = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE LibraryName = '$tayra'");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);	

$lowe = array();


foreach($rih as $imba){
	array_push($lowe,$imba);
}

print_r(json_encode($lowe));
}
if(!empty($witm)){


	$rih = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE BookName = '$witm' AND  LibraryName = '$tayra'");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);	

$lowe = array();


foreach($rih as $imba){
	array_push($lowe,$imba);
}

print_r(json_encode($lowe));
}
?>