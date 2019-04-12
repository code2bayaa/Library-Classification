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

mysql_select_db($DB_name,$MySQL_CON);
$ASPpL = mysql_query("SELECT * FROM library ");	
$Lds =mysql_fetch_assoc($ASPpL); 	
$dopw = mysql_num_rows($ASPpL); 	



$LDSp=array();  

do{ $ml = $Lds['LibraryName']; array_push($LDSp,$ml); }while($Lds = mysql_fetch_assoc($ASPpL));


$achjhj = array_values(array_unique($LDSp));
$dk=(count($achjhj)); 


$PSal = $achjhj[$pods];

  $turn =  date("Y-m-d");
  
  mysql_select_db($DB_name,$MySQL_CON);
$MALS = mysql_query("SELECT * FROM libuser WHERE Email = '$tayra'")or die(mysql_error());
$nmaS = mysql_fetch_assoc($MALS); 
$slkd = mysql_num_rows($MALS);

$Img = $nmaS['UserImage'];
$Name = $nmaS['Name'];
$Balnce = $nmaS['Balance'];
$School = $nmaS['SchoolID'];

if(!empty($news)){
	
mysql_select_db($DB_name,$MySQL_CON);
$stpl = mysql_query("SELECT * FROM checkin WHERE Email = '$tayra' AND Status = '2'  AND Library = '$PSal' ");	 	
$wers = mysql_num_rows($stpl); 

$mid = "";

if($wers > 0){
	echo "<input type = 'hidden' value = '52588' id = 'liar'>";
	$mid = "CheckOut";
}else{
	$mid = "CheckIn";
}
	echo "<input type='hidden' id='PWk' value='$pods' readonly/>";
echo "<div id='nah'>";


echo "<table class = 'ordd'>";
if($pods > 0){
echo "<tr><td><input type='button' id='AQKmw' class='SKlq' value='&#9664' onclick='PLeo(1)' readonly/></td>";
}else{
echo "<tr><td><input type='button' id='chgb' class='SKlq' value='&#9664' readonly/></td>";
}
echo "<td><input type='text' id='AMaq' class='Pwi' value='$PSal'  readonly/></td>";
if($pods < ($dk-1)){
echo "<td><input type='button' id='AQKmw' class='SKjn' value='&#9654' onclick='PLeo(2)' readonly/></td></tr>";
}else{
echo "<td><input type='button' id='chgb' class='SKjn' value='&#9654'  readonly/></td></tr>";
}
echo "</table></div><br>";

echo "<div id='bith'><input type='button' id='carW' value='$mid' onclick='old(1)' class='malinia'>
<button id='carO' onclick='old(2)' class='maliniaplp'><i class='fas fa-book'></i> Books</div>
<div id='muv'></div>";
}

if(!empty($kolak)){


echo "
<table class='emdo' >
<tr><td class='nlk'><img src='Img/".$Img."' class='asm' ></td><td class='nlk'><input class='nskk' id='sd' value='Change Picture' type='button' onclick='bdkjq()'><i class='fas fa-address-card'></i></td></tr>
<tr><td colspan='2' class='nlk'>$Name</td></tr>
<tr><td colspan='2' class='nlk'>Balance: $Balnce</td></tr>
<tr><td colspan='2' class='nlk'>$School</td></tr>
</table>";
}
if(!empty($forme)){

mysql_select_db($DB_name,$MySQL_CON);
$nkk = mysql_query("SELECT * FROM report WHERE Library = '$PSal'")or die(mysql_error());
$gop = mysql_fetch_assoc($nkk); 
$nui = mysql_num_rows($nkk);	
	
	$graph = $gop['Note'];
	$hug = $gop['RED'];
	echo "<table class = 'snwj'><tr><th>$PSal Disclaimer</th></tr><tr><td>";
	do{
		echo "<div id='mumb' class='hig'>$graph</div>";
	}while($gop = mysql_fetch_assoc($nkk));
echo "</td></tr></table>";
}
if(!empty($saf)){
	if($saf == 4546){
mysql_select_db($DB_name,$MySQL_CON);
$APkwW = mysql_query("SELECT * FROM checkin WHERE Email = '$tayra' AND Status='2' ");	
$Pjo = mysql_fetch_assoc($APkwW);
$rop = mysql_num_rows($APkwW);

$gya = $Pjo['Library'];

if($rop > 0){
	echo "Please $Name Checkout of $gya";
	echo "<input type='hidden' id='famm' value='85'>";
}else{


mysql_select_db($DB_name,$MySQL_CON);
$trn = mysql_query("SELECT * FROM checkin WHERE Library = '$PSal' AND Date = '$turn'");	
$light = mysql_fetch_assoc($trn);

$gud = array();
do{
$chng = $light['Status'];
$rigt = $light['Email'];
if($tayra !== $rigt){
	if($chng == 4){
		array_push($gud,$chng);
	}
}	
}while($light = mysql_fetch_assoc($trn));

mysql_select_db($DB_name,$MySQL_CON);
$luse = mysql_query("SELECT * FROM checkin WHERE Email = '$tayra' AND Library = '$PSal' AND Date = '$turn' AND (Status = '1' OR Status = '2' OR Status = '4' OR Status = '5') ");	
$rap = mysql_num_rows($luse);

if($rap < 1){
	
$xteen = "";
if(!empty($gud)){
	
	echo "<input type='hidden' id='famm' value='656'>";
	$xteen = 1;
}else{
	echo "$Name Please Wait";
	echo "<input type='hidden' id='famm' value='656'>";
	$xteen = 4;
}
	  $aku = ""; $mstr = "";
	mysql_select_db($DB_name,$MySQL_CON);
$Afr = mysql_query("INSERT INTO checkin (Library, Email, Status, Date, TimeIn, TimeOut)
 VALUES ('$PSal','$tayra','$xteen','$turn','$aku','$mstr') ")or die(mysql_error());
}else{
	echo "Theres someone In Front Please Wait In Line";
}
	}
	}
	if($saf == 2525){
		echo "Checked Out!";
		echo "<input type='hidden' id='famm' value='98777'>";
		mysql_select_db($DB_name,$MySQL_CON);
$bskj = mysql_query ("UPDATE  checkin  SET Status = '3' WHERE Library = '$PSal'  AND Email = '$tayra' ")or die (mysql_error());
	}
	if($saf == 2154){
		header('Location:Books.php');
	}
}
if(!empty($hed)){
	mysql_select_db($DB_name,$MySQL_CON);
$APkwW = mysql_query("SELECT * FROM checkin WHERE Library = '$PSal' AND Status = '2' AND Email = '$tayra' ");	
$hary = mysql_num_rows($APkwW);

if($hary > 0){
echo "Go In";
echo "<input type='hidden' value='5424' id='grant'>";
}else{

	echo "Confirming Request...";
	echo "<input type='hidden' value='852' id='grant'>";
}
}

?>