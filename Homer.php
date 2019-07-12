<?php require_once('ConnDB.php'); ?>
<?php
$kolak="";
if(isset($_REQUEST['kolak'])){
	$kolak = $_REQUEST['kolak'];
}
$tayra=""; //Email
if(isset($_REQUEST['tayra'])){
	$tayra = $_REQUEST['tayra'];
}
$forme="";
if(isset($_REQUEST['forme'])){
	$forme = $_REQUEST['forme'];
}
$mom=""; $bp = ""; $eyes = ""; $pine = "";
$saf="";
if(isset($_REQUEST['saf'])){
	$saf = $_REQUEST['saf'];
}
$hed="";
if(isset($_REQUEST['hed'])){
	$hed = $_REQUEST['hed'];
}
$news="";
if(isset($_REQUEST['news'])){
	$news = $_REQUEST['news'];
}
$iou="";
if(isset($_REQUEST['iou'])){
	$iou = $_REQUEST['iou'];
}
$tymj="";
if(isset($_REQUEST['tymj'])){
	$tymj = $_REQUEST['tymj'];
}

$hao="";
if(isset($_REQUEST['hao'])){
	$hao = $_REQUEST['hao'];
}


?>
<?php
$pods=0;
if(isset($_REQUEST['PKlrgf'])){
	$Mo = $_REQUEST['PKlrgf'];
	$pods = ($Mo - 1);
}
$UO="";
if(isset($_REQUEST['JHIiu'])){
	$UO = $_REQUEST['JHIiu'];
	$pods = ($UO + 1);
}	


$ASPpL = mysqli_query($MySQL_CON,"SELECT * FROM library ")or die(mysqli_error($MySQL_CON));	
$Lds = mysqli_fetch_assoc($ASPpL); 	
$dopw = mysqli_num_rows($ASPpL); 	



$LDSp=array();  

do{ $ml = $Lds['LibraryName']; array_push($LDSp,$ml); }while($Lds = mysqli_fetch_assoc($ASPpL));


$achjhj = array_values(array_unique($LDSp));
$dk=(count($achjhj)); 


$PSal = $achjhj[$pods];

  $turn =  date("Y-m-d");
  
  
$MALS = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$tayra'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 
$slkd = mysqli_num_rows($MALS);

$Img = $nmaS['UserImage'];
$Name = $nmaS['Name'];
$Balnce = $nmaS['Balance'];
$School = $nmaS['Title'];
$Pbh = $nmaS['Degree'];

if(!empty($iou)){
	echo "<span class='QQQS'>EasyLibrary</span>
	<input class='nskk' id='wepl' value='LogOut' type='button' onclick='mklw()'>
	<input class='nskk' id='wepl' value='Profile' type='button' onclick='heven()'>
	<input type='hidden' value='0' id='plug'>";
}
if(!empty($news)){




echo "<div id='bith'>
<button id='carO' onclick='old(2)' class='maliniaplp'><i class='fas fa-book'></i> Books</div>
<div id='muv'></div>";
}

if(!empty($kolak)){


echo "

<table class='emdo' >
<tr><td class='nlk'><img src='Img/".$Img."' class='asm' ></td><td class='nlk'><input class='nskk' id='sd' value='Change Picture' type='button' onclick='bdkjq()'><i class='fas fa-address-card'></i></td></tr>
<tr><td colspan='2' class='nlk'>$Name</td></tr>
<tr><td colspan='2' class='nlk'>Balance: $Balnce</td></tr>
<tr><td colspan='2' class='nlk'>$Pbh $School</td></tr>
</table>";

}
if(!empty($forme)){
	
	echo "<input type='hidden' id='sing' value='$School' readonly/>";
	echo "<input type='hidden' id='PWk' value='$pods' readonly/>";
	echo "<input type='hidden' id='lsyt' value='$PSal' readonly/>";
	
$lkj = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$PSal'")or die(mysqli_error($MySQL_CON));
$nrk = mysqli_fetch_assoc($lkj); 

$nawa = $nrk['First'];

	$thug="";
	if($nawa > 9){
	$thug = ($nawa * 10);
	}else{
		$thug = ($nawa * 10);
		$thug .= "0".$thug;
	}

echo "<input type='hidden' id='valent' value='$thug' readonly/>";
$kanye = $nrk['LibImage']; 

echo "<div id='gun' style='background-image:url(PFWImg/".$kanye.");'><div id='iuyu'>

<table class = 'ordd'>";
if($pods > 0){
echo "<tr><td><input type='button' id='AQKmw' class='SKlq' value='&#9664' onclick='PLeo(1)' readonly/></td>";
}else{
echo "<tr><td><input type='button' id='chgb' class='SKlq' value='&#9664' readonly/></td>";
}
echo "<td><label id='AMaq' class='Pwi' ><i class='fas fa-building'></i> $PSal </label></td>";
if($pods < ($dk-1)){
echo "<td><button id='AQKmw' class='SKjn' onclick='PLeo(2)' >&#9654</button></td></tr>";
}else{
echo "<td><button id='chgb' class='SKjn' >&#9654 </button></td></tr>";
}
echo "</table>";


$nkk = mysqli_query($MySQL_CON,"SELECT * FROM report WHERE Library = '$PSal' AND RCVR = 'Student'")or die(mysqli_error($MySQL_CON));
$gop = mysqli_fetch_assoc($nkk); 
$nui = mysqli_num_rows($nkk);	

		$stpl = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$tayra' AND Status = '2'  AND Library = '$PSal' ");	 	
$wers = mysqli_num_rows($stpl); 

$mid = ""; 

if($wers > 0){
	echo "<input type = 'hidden' value = '52588' id = 'liar'>";
	$mid = "CheckOut";
}else{
	$mid = "CheckIn";
}
	
	
	$hug = $gop['RED'];
	echo "<button onclick='old()' class='malinia'><i class='fas fa-bookmark'></i> <input type='text' value='$mid' class='puti' id='carW'></button></div>	
	<div><br>
	<div id='sal'>";
do{
		$graph = $gop['Note'];
		echo "<div id='mumb' class='hig'>$graph</div>";
}while($gop = mysqli_fetch_assoc($nkk));

echo "</div>";
}
if(!empty($saf)){
	if($saf == 4546){

$APkwW = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$tayra' AND Status='2' ");	
$Pjo = mysqli_fetch_assoc($APkwW);
$rop = mysqli_num_rows($APkwW);

$gya = $Pjo['Library'];

if($rop > 0){
	echo "Please $Name Checkout of $gya";
	echo "<input type='hidden' id='famm' value='85'>";
}else{



$trn = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$hao' AND Date = '$turn'");	
$light = mysqli_fetch_assoc($trn);

$gud = array();
do{
$chng = $light['Status'];
$rigt = $light['Email'];
if($tayra !== $rigt){
	if($chng == 4){
		array_push($gud,$chng);
	}
}	
}while($light = mysqli_fetch_assoc($trn));


$luse = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$tayra' AND Library = '$hao' AND Date = '$turn' AND (Status = '1' OR Status = '2' OR Status = '4' OR Status = '5') ")or die(mysqli_error($MySQL_CON));	
$rap = mysqli_num_rows($luse);

$fade = $rap['Status'];

if($rap < 1){
	
	
	$glu = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$tayra' AND Library = '$hao' AND Date = '$turn' AND Status = '3'  ")or die(mysqli_error($MySQL_CON));	
$gSpo = mysqli_num_rows($glu);


$xteen = "";
if(!empty($gud)){
	
	echo "Theres someone In Front Please Wait In Line<br>$Name Please Wait";
	echo "<input type='hidden' id='famm' value='656'>";
	$xteen = 1;
	
}else{
	
	echo "<input type='hidden' id='famm' value='656'>";
	$xteen = 4;
	
}
	  
	
$Afr = mysqli_query($MySQL_CON,"INSERT INTO checkin (Library, Email, Status, Date, Times)
 VALUES ('$hao','$tayra','$xteen','$turn','$gSpo') ")or die(mysqli_error($MySQL_CON));
}else{
	echo "Please Be Patient";
	echo "<input type='hidden' id='famm' value='656'>";
	
}
	}
	}
	if($saf == 2525){
		$gonn = "Checked Out!";
echo "<input type='hidden' id='famm' value='6655'>";

$bskj = mysqli_query($MySQL_CON,"UPDATE  checkin  SET Status = '3' WHERE Library = '$hao'  AND Email = '$tayra' ")or die (mysqli_error($MySQL_CON));
	}
	if($saf == 2154){
		
	echo"<div id='aka'>
	<button id ='sjs' class='saa' onclick='nja()'>Search</button>
	<button id ='dd' class='saa'  >Shelves</button>
	<button id ='every' class='saa'  >Resources</button>
	<button class='saa' id ='mlo' >Recommended</button></div>";
	
		echo "
		<div id='turd'>
		<input type='search' class = 'acas' id='Dkas' onclick='ramp()' placeholder='Search Book Here...' />
	<input type='button' id='erh' class = 'ankj' value='&#128269'><div id='viatu'></div>";
	echo "</div>";
	}
}
if(!empty($hed)){
	
$APkwW = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$hao' AND Status = '2' AND Email = '$tayra' ");	
$hary = mysqli_num_rows($APkwW);

if($hary > 0){
echo "Go In";
echo "<input type='hidden' value='5424' id='grant'>";
}else{

	echo "Confirming Request...";
	echo "<input type='hidden' value='852' id='grant'>";
}
}

if(!empty($tymj)){
	$skr = mysqli_query($MySQL_CON,"SELECT * FROM resource WHERE LibraryName = '$tymj'  ");	
$condo = mysqli_fetch_assoc($skr);
	
$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");

	
	echo "<table>";
	do{
		
		
	$somer = $condo['ToolImage']; $rapw = $condo['Resources']; $nids = $condo['ResourceLocale']; $doktr = $condo['Storey']; 
	$beed = $pah[$doktr];
	
		echo "<tr><td><img  src='Img/".$somer."' class='barb'></td><td><label class='rappr'><i class='fas fa-plus'></i> $rapw</label></td><td><label class='rappr'><i class='fas fa-plus'></i> $nids</label></td><td><label class='rappr'><i class='fas fa-plus'></i> $beed</label></td></tr>";
	}while($condo = mysqli_fetch_assoc($skr));
	echo "</table>";
	
}

?>