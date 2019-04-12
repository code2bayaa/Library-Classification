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
$chacha="";
if(isset($_REQUEST['chacha'])){
	$chacha = $_REQUEST['chacha'];
}
$wnkj="";
if(isset($_REQUEST['wnkj'])){
	$wnkj = $_REQUEST['wnkj'];
}


?>
<?php
mysql_select_db($DB_name,$MySQL_CON);
$MALS = mysql_query("SELECT * FROM library WHERE LibraryName = '$tayra'")or die(mysql_error());
$nmaS = mysql_fetch_assoc($MALS); 

$Img = $nmaS['Classification'];
$Name = $nmaS['Shelves'];
$School = $nmaS['Storey'];

$wa = 0; $ka = 0; $nda = 0; $bp = 10;

	mysql_select_db($DB_name,$MySQL_CON);
$yung = mysql_query("SELECT * FROM libuser WHERE Email = '$hed'");	
$blod = mysql_num_rows($yung);

$mfk = $blod['SchoolID'];

if(!empty($kolak)){

if($kolak == 5757){
	$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");
	echo "<table class = 'djnj'><tr>";
	foreach($pah as $fnj => $kss){
		if($School > 0){
		if($fnj <= $School){
			echo "<td><input type = 'button' value = '$kss' id = 'anja' onclick = 'trfg($fnj)'></td>";
		}
		}
	}
	echo "</tr></table>";
	
	echo "<table class = 'djnj'><tr>";
	echo "<td><input type = 'button' value = '#&' id = 'wdff' onclick = 'bhhb(1)'></td>";
	for($wkn = $wa;$wkn < $Name;$wkn++){
		
		$rnji = ""; 
if($Img == "Dewey System"){
	$rnji = "$ka".$wkn."$nda";
}elseif($Img == "LLC"){
	$one = array(
	"0" => "a","1" => "b","3" => "c","4" => "d","5" => "e","6" => "f","7" => "g","8" => "h","9" => "i","10" => "j",
	"11" => "k","12" => "l","13" => "m","14" => "n","15" => "o","16" => "p","17" => "q","18" => "r","19" => "s","20" => "t","21" => "u","22" => "v",
	"23" => "w","24" => "x","25" => "y","26" => "z");
	$rnji = $one[$wkn];
}
if($wkn < $bp){
		echo "<td><input type = 'button' value = '$rnji' id = 'sbhb' onclick = 'bhhb($wkn)'></td>";
}
	}
	echo "<td><button  id = 'cw' onclick = 'bhhb(2)'><i class='fas fa-angle-right'></i></button></td>";
	echo "</tr></table>";

echo "<div id='snk'>

</div>";	
	
}elseif($kolak == 54254){
	echo "<input type='hidden' value='$mfk' id='tell'>";
	
		echo "<input type='search' class = 'acas' id='Dkas'  placeholder='Search Book Here...' />
	<input type='button' id='erh' class = 'ankj' onclick ='bkjh(1)' value='&#128269'>";
}
elseif($kolak == 52544){
	echo "<input type='hidden' value='$mfk' id='ahb'>";

}
}
if(!empty($forme)){
	


}

?>