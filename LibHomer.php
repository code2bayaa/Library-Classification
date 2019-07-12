<?php require_once('ConnDB.php'); ?>
<?php require_once('DBB.php'); ?>
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
$callme="";
if(isset($_REQUEST['callme'])){
	$callme = $_REQUEST['callme'];
}
$saf="";
if(isset($_REQUEST['saf'])){
	$saf = $_REQUEST['saf'];
}
$hed="";
if(isset($_REQUEST['hed'])){
	$hed = $_REQUEST['hed'];
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
$humm="";
if(isset($_REQUEST['humm'])){
	$humm = $_REQUEST['humm'];
}

$pand="";
if(isset($_REQUEST['pand'])){
	$pand = $_REQUEST['pand'];
}
$sit="";
if(isset($_REQUEST['sit'])){
	$sit = $_REQUEST['sit'];
}
$madn="";
if(isset($_REQUEST['madn'])){
	$madn = $_REQUEST['madn'];
}
$towel="";
if(isset($_REQUEST['towel'])){
	$towel = $_REQUEST['towel'];
}
$stry="";
if(isset($_REQUEST['stry'])){
	$stry = $_REQUEST['stry'];
}
$iou="";
if(isset($_REQUEST['iou'])){
	$iou = $_REQUEST['iou'];
}

$sterl="";
if(isset($_REQUEST['sterl'])){
	$sterl = $_REQUEST['sterl'];
}
$gui="";
if(isset($_REQUEST['gui'])){
	$gui = $_REQUEST['gui'];
}


?>
<?php

$MALS = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$tayra'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); 

$Img = $nmaS['Library'];
$Name = $nmaS['Name'];
$School = $nmaS['TelephoneNo']; $Stfflvl = $nmaS['StaffLevel'];


$strr = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$Img'")or die(mysqli_error($MySQL_CON));
$feel = mysqli_fetch_assoc($strr);

$sight = array();

$nigt = $feel['LibImage']; $turn =  date("Y-m-d");
	$dop = $feel['Classification'];
$gara = $feel['Shelves'];
$monts = $feel['Balance'];
 $taked = $feel['First'];
$dwj = $feel['Storey'];


$APkwW = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$Img' AND Status = '$xteen' AND Date = '$turn' ")or die (mysqli_error($MySQL_CON));	
$Pjo = mysqli_fetch_assoc($APkwW);
$hary = mysqli_num_rows($APkwW);
$wnnts = $Pjo['Email'];

if(!empty($gui)){
	$bskj = mysqli_query ($MySQL_CON,"UPDATE  bookloan  SET  Status = '1' WHERE LibraryName = '$Img'  ")or die (mysqli_error($MySQL_CON));
	}
if(!empty($sterl)){
	
$bskj = mysqli_query ($MySQL_CON,"UPDATE  library  SET  Classification = '$sterl' WHERE Library = '$Img'  ")or die (mysqli_error($MySQL_CON));
}

if(!empty($kolak)){
	$thug="";
	if($taked > 9){
	$thug = ($taked * 10);
	}else{
		$thug = ($taked * 10);
		$thug .= "0".$thug;
	}
	
	echo "<input type='hidden' value='$thug' id='lrge'>";
	
	$tuch = "";
	if($dwj > 0){
		
$frum = mysqli_query($MySQL_CON,"SELECT * FROM storeylibrary WHERE LibraryName = '$Img'")or die(mysqli_error($MySQL_CON));
$huncs = mysqli_fetch_assoc($frum);
	
	
	do{
		$mirro = $huncs['Shelves'];
		$siya = $huncs['Storey'];
		
		$sight[$siya] = $mirro;	
	}while($huncs = mysqli_fetch_assoc($frum));
	
	$sight[$dwj] = $gara;
	$begn = (count($sight) - 1);
	
	foreach($sight as $lvr => $omit){
		
		$hirt = "";
		
		if($lvr > 0){
		$hirt = "putin";	
		}else{
		$hirt = "grl";
		}
		
		$cult = array("0"=>"Ground Floor","1"=>"1st Floor","2"=>"2nd Floor","3"=>"3rd Floor","4"=>"4th Floor","5"=>"5th Floor");
		
		$latio = "";
		
		if($lvr < $begn){
		$latio = ($lvr + 1);
		}else{
		$latio = 0;	
		}
		
		$tuch .= "<div id='beat$lvr' class = '$hirt'>".$cult[$lvr];
		
		$tuch .= "<br>";
		
		$tuch .= "<button onclick = 'simu($latio,$begn)' id='nerd' class='hadrtf' ><i class='fas fa-arrow-down'></i></button>";
		
		$tuch .= "<br>";
		
		$tuch .= "<input type='text' class='nfi' value = '$omit' ></div>";
		
		
		
	}
	
	
	
	}else{
		$tuch = "<input type='text' class='nfi' value = '$gara' >";
	}
	
	$dop = "";
	
		$styr = array("0"=>"Dewey System","1"=>"LLC","2"=>"Cataloging");
		$nkz = (count($styr) - 1);
		
		foreach($styr as $lvr => $omit){
		
		$hirt = "";
		
		if($lvr > 0){
		$hirt = "putin";	
		}else{
		$hirt = "grl";
		}
		
		$latio = "";
		
		if($lvr < $nkz){
		$latio = ($lvr + 1);
		}else{
		$latio = 0;	
		}
		
		$dop .= "<div id='wor$lvr' class = '$hirt'><input type='text' id='rgti$lvr' class='nfi' value='$omit' readonly/>";
		
		$dop .= "<br>";
		
		$dop .= "<button onclick = 'perf($latio,$nkz)' id='nerd' class='hadrtf' ><i class='fas fa-arrow-down'></i></button>";
		
		$dop .= "</div>";
		
		
		
	}

echo "
<div id='plam'>
<table class='emdo'>
<tr><td colspan = '2'><img src='PFWImg/".$nigt."' class='togo' ></td></tr>
<tr><td><label class='smok'><i class='fas fa-building'></i> $Img</label></td>
<td><label class='smok'> Classification <br> $dop</label></td></tr>
<tr><td><label class='lies'><i class='fas fa-user-friends'></i> $Name</label></td>
<td><label class='lies'><i class='fas fa-phone-square'></i> +254$School</label></td></tr>
<tr><td><label class='lies'><i class='fas fa-coins'></i> Fine Amount <br> Kshs. $monts</label></td>
<td><label class='lies'><i class='fas fa-book'></i> Shelves <br> $tuch </label></td></tr></table></div>

";

echo "<div id='faya'>
 <table class = 'klub' id='drill' >
<tr><td><button id='reid' onclick='nsjw(1)' class='huncho'><i class='fas fa-address-card'></i><br><label class='mert'>CheckIn</label></button>
</td>
<td><button id='carO'   class='rasip'><i class='fas fa-book'></i><br><label class='mert'>Books</label></button></td><td><button id='nsjj'  onclick='nsjw(5)' class='rasip'><i class='fas fa-user-friends'></i><br><label class='mert'>Students</label></button></td></tr>
<tr><td><button id='carkt' class='huncho'><i class='fas fa-chart-line'></i><br><label class='mert'>Report</label></button></td>
<td><button id='mls' onclick='nsjw(4)' class='rasip' ><i class='fas fa-box'></i><br><label class='mert'>Duties</label></button></td><td><button id='mls' onclick='nsjw(6)' class='rasip'><i class='fas fa-layer-group'></i><br><label class='mert'>Resources</label></button></td></tr></table>

</div>";
}
if(!empty($forme)){
	

}

if(!empty($saf)){

if($hary > 0){
	$own = "";
	if($hary == 1){
		$own = "A student is at the line.";
	}else{
		$own = "There are $hary Students In line";
}
	echo "$own. Please approve entrance";
}else{
	
	
$yung = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$Img' AND Status = '4' AND Date = '$turn' ");	
$blod = mysqli_num_rows($yung);

if($blod > 0){
	echo "Please approve entrance for the student at the entrance";
}else{
	echo "No Students at the Line";
}
}

}
if(!empty($hed)){
	
			$lit = ""; $shawty = ""; $scry = ""; $imyg = "";$namer = "";$SID = "";$NID = "";$AYR = "";$GYR = "";$romt = "";$bN = "";$bg = "";$bd = "";$sn = ""; $umio = "";		 

$MAK = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$wnnts'");	
$Mlak =mysqli_fetch_assoc($MAK);

$imyg = $Mlak['UserImage']; $namer = $Mlak['Name']; $SID = $Mlak['Degree']; $umio = $Mlak['Title']; $NID = $Mlak['NationalID'];$AYR = $Mlak['AdmYear'];$GYR = $Mlak['GradYear'];


$ply = mysqli_query($MySQL_CON,"SELECT * FROM bookloan WHERE Email = '$wnnts' AND LibraryName = '$Img'");	
$canI =mysqli_fetch_assoc($ply);
 
$romt = $canI['Fine']; $bN = $canI['BookName']; $bg = $canI['BookDate']; $bd = $canI['Bookdue']; $sn = $canI['SerialNumber'];

if($romt > 0){
	$scry = "Has Pending Book Fine";
}else{
	$scry = "No Fines";
}

		
	if($hed == 52441){
	echo "<div id = 'allo'>
	<div id='fut' class='fam' >
</div><div id='gal'></div></div>";
		
	}
	if($hed == 8455){
		
		if($hary > 0){
		echo "<table class = 'guttr'>
		<input type='hidden' value='$wnnts' id='tell' >
		<tr><td rowspan = '6'><img src='Img/".$imyg."' class='weki' ></td></tr>
		<tr><td colspan='2'><label class = 'game'>Name:<br>$namer</label></td></tr>
		<tr><td colspan='2'><label  class = 'game'>Course:<br>$SID $umio</label></td></tr>
		<tr><td colspan='2'><label class = 'game'>National ID:<br>$NID</label></td></tr>
		<tr><td><label  class = 'game'>Admission Year:<br>$AYR</label></td ><td><label class = 'game'>Graduation Year:<br>$GYR</label></td></tr>
		<tr><td><button  class='lib' onclick='aler(2)' id='advis'>Decline</button></td><td><button class='lib' id='advis' onclick='aler(1)'>Approve</button></td></tr></table>
		<table class = 'qwn'>
		<tr><td>$scry</td></tr>";
		if($romt > 0){
			echo "<tr><td><label class = 'game'>Book Name:<br>$bN</label></td></tr><tr><td><label class = 'game'>Serial No:<br>$sn</label></td></tr><tr><td><label class = 'game'>Fine Due:<br>$romt</label></td></tr>
			<tr><td><label class = 'game'>Date Borrowed:<br>$bg</label></td></tr><tr><td><label class = 'game'>Return Date:<br>$bd</label></td></tr>";
		}
		echo "</table>";
		}else{
			echo "<div class='lds-css ng-scope' >
	<div class='lds-spinner' style='width:100%;height:100%'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>";
		}
	}
	
	if($hed == 4524){
		$dotn = array(); $arrn = "";
do{  $em = $Pjo['Email']; if(!empty($em)){  array_push($dotn,$em);} }while($Pjo = mysqli_fetch_assoc($APkwW));
$hert = array_values(array_unique($dotn));

		$nrth = ""; $tch = "";
		if($xteen == 2){
			$nrth = "salty";  $tch = "salt";
		}elseif($xteen == 1){
			$nrth = "salt";  $tch = "salty";
	}
	
	
		echo "<table class = 'moth'>
		<tr><td><button class = '$nrth' onclick='dui(45)'><i class='fas fa-user-friends'></i> Inside</button></td><td><button class = '$tch' onclick='dui(54)'><i class='fas fa-user-friends'></i> Outside</button></td></tr><tr>
		<td colspan = '2'><div id='thnk' >
		<table>";	
		foreach($hert as $rd){

$bemi = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$rd'");	
$uniy =mysqli_fetch_assoc($bemi); 
$imyg = $uniy['UserImage']; $namer = $uniy['Name']; $schl = $uniy['Title']; $cbhd = $uniy['Degree'];
echo "<tr><td><img src='Img/".$imyg."' class='asm' ></td><td><label class = 'sand'>$namer</label></td><td><label class = 'sand'>$cbhd $schl</label></td></tr>";
		}
		echo "</table></div></td></tr><tr><td colspan = '2'><table><tr>";
		
		
		$Adumbe = array("1"=>"Students Outside","2"=>"Checked In","3"=>"Checked Out");

		foreach($Adumbe as $ert => $lemo){

		if($ert == 2){
			$dresh = "(Status = '$ert' OR Status = 3)";
		}else{
			$dresh = "Status = '$ert' ";
		}
$rih = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Library = '$Img' AND $dresh AND Date = '$turn' ");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);
		
		echo"<td ><label class = 'lky'>$lemo <br> $capt</label></td>";
		}
		echo "</tr></table></td></tr></table>";
	}
	
}
if(!empty($chacha)){
	
	
		$glu = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$wnkj' AND Library = '$Img' AND Date = '$turn' AND Status = '3'  ")or die(mysqli_error($MySQL_CON));	
$gSpo = mysqli_num_rows($glu);

	$rah = ""; 
	if($chacha == 286){
     $rah = 2; 

mysqli_query($MySQL_CON,"UPDATE  checkin  SET Status = '4' WHERE Library = '$Img' AND Date = '$turn' AND Email = '$wnnts' ")or die (mysqli_error($MySQL_CON));
	}
	if($chacha == 7825){
		$rah = 5;
	}

$bskj = mysqli_query ($MySQL_CON,"UPDATE  checkin  SET Status = '$rah', librarian = '$Name' WHERE Library = '$Img' AND Date = '$turn' AND Email = '$wnkj' AND Times = '$gSpo' ")or die (mysqli_error($MySQL_CON));
}

?>
<?php
$inthe="";
if(isset($_REQUEST['inthe'])){
	$inthe = $_REQUEST['inthe'];
}
$ferl="";
if(isset($_REQUEST['ferl'])){
	$ferl = $_REQUEST['ferl'];
}
$morty="";
if(isset($_REQUEST['morty'])){
	$morty = $_REQUEST['morty'];
}
$msg="";
if(isset($_REQUEST['msg'])){
	$msg = $_REQUEST['msg'];
}
$sad="";
if(isset($_REQUEST['sad'])){
	$sad = $_REQUEST['sad'];
}
$wrth="";
if(isset($_REQUEST['wrth'])){
	$wrth = $_REQUEST['wrth'];
}
$styip="";
if(isset($_REQUEST['styip'])){
	$styip = $_REQUEST['styip'];
}
$suk="";
if(isset($_REQUEST['suk'])){
	$suk = $_REQUEST['suk'];
}
$hert="";
if(isset($_REQUEST['hert'])){
	$hert = $_REQUEST['hert'];
}$banjil="";
if(isset($_REQUEST['banjil'])){
	$banjil = $_REQUEST['banjil'];
}$pats="";
if(isset($_REQUEST['pats'])){
	$pats = $_REQUEST['pats'];
}$sera="";
if(isset($_REQUEST['sera'])){
	$sera = $_REQUEST['sera'];
}
$mdke="";
if(isset($_REQUEST['mdke'])){
	$mdke = $_REQUEST['mdke'];
}
$skkk="";
if(isset($_REQUEST['skkk'])){
	$skkk = $_REQUEST['skkk'];
}
$nik="";
if(isset($_REQUEST['nik'])){
	$nik = $_REQUEST['nik'];
}
$playn="";
if(isset($_REQUEST['playn'])){
	$playn = $_REQUEST['playn'];
}
$mom=""; $bp = ""; $eyes = ""; $pine = "";
if(isset($_REQUEST['mom'])){
	$mom = $_REQUEST['mom']; 
}
$oass="";
if(isset($_REQUEST['oass'])){
	$oass = $_REQUEST['oass'];
}
$hatr=""; // Email of librarian to perform duty
if(isset($_REQUEST['hatr'])){
	$hatr = $_REQUEST['hatr'];
}
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
$dolls="";
if(isset($_REQUEST['dolls'])){
	$dolls = $_REQUEST['dolls'];
	
}

$hity=""; $beij = "";
if(isset($_REQUEST['hity'])){
	$hity = $_REQUEST['hity'];
	$beij = 2;
}



?>
<?php


if(!empty($ferl)){

$rhui=""; $blive="";  
if($ferl == "Staff"){
	$blive = 3; 
	$rhui = " WHERE RCVR = '$ferl' AND Library = '$Img' ";
}elseif($ferl == "Student"){
	$blive = 1;  
	$rhui = "WHERE RCVR = '$ferl' AND Library = '$Img'";
}else{
$blive = 2; 
	$rhui=" WHERE SENDR = '$ferl' AND RCVR = '$tayra' OR  SENDR = '$tayra' AND RCVR = '$ferl'";
}

	
$mre = mysqli_query($MySQL_CON,"SELECT * FROM report  $rhui")or die (mysqli_error($MySQL_CON));	
$ShwDtaTwo = mysqli_fetch_assoc($mre);

 $jngl = array(); $th=0; $jett = array();
 
 
 
do{ $th++; 

$jrjo = $ShwDtaTwo['SendR']; 
 $biu = $ShwDtaTwo['Note'];
 $cry = $ShwDtaTwo['TIMESTAMP'];
 
 
$war = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$jrjo'");	
$lifr =mysqli_fetch_assoc($war); 
$bettr = $lifr['Name'];
 
 if($blive > 1){
	 
 if($jrjo !== $tayra){ 

 if(!empty($biu)) {
	 $nm ="";
	 if($blive == 3){
		 $nm = "<div id='fail' class='cose'><input type='text' class='fcbk' value='$bettr' id='dnse".$th."' readonly/><br>";
	 	 $nm .= "$biu<br>";
	 $nm .= "<input type='text' class='bkjb' value='$cry' id='rain".$th."' readonly/></div></br>";
	 }else{
		 	 $nm = "<div id='fail' class='cose'>$biu<br>";
	 $nm .= "<input type='text' class='bkjb' value='$cry' id='rain".$th."' readonly/><br></div></br>";
	 }

	 array_push($jett,$nm); 
	 }
	 }
	 if($jrjo == $tayra){
	 if(!empty($biu)){
	  $hug = "<div id='fail' class='pose'><input type='text' class='poak' value='You' id='dnse".$th."' readonly/><br>$biu<br>";
	  $hug .= "<input type='text' class='nkjd' value='$cry' id='njdkk".$th."' readonly/></div></br>";


	  array_push($jett,$hug); 
	  }  
	 }
 }else{
	 	 if(!empty($biu)){
	  $rap = "<div id='fail' class='arr'><input type='text' class='unad' value='$bettr' id='dnse".$th."' readonly/><br>$biu<br>";
	  $rap .= "<input type='text' class='unad' value='$cry' id='njdkk".$th."' readonly/></div></br>";


	  array_push($jett,$rap); 
	  }
 }
	 }while($ShwDtaTwo = mysqli_fetch_assoc($mre));	
	 
	 
	 echo implode("</br>",$jett);
	
}
if(!empty($msg)){
	$thirtn = "unsomad";

$Afr = mysqli_query($MySQL_CON,"INSERT INTO report (Library, RCVR, SendR, Note, RED)
 VALUES ('$Img','$sad','$tayra','$msg', '$thirtn') ")or die(mysqli_error($MySQL_CON));	
}

$yr = date("Y"); $month = date("m"); $week = date("W");
if(!empty($styip)){
	$arre = array("0" => "Staff", "1" => "Monday","2" => "Tuesday","3" => "Wednesday","4" => "Thursday", "5" => "Friday", "6" => "Saturday");
	
	$thirtn = $arre[$suk]; // Day to update 

	
	
$oldskl = mysqli_query($MySQL_CON,"SELECT * FROM duty WHERE Library = '$Img' AND Librarian = '$hatr' AND Month = '$month' AND Year = '$yr' AND Week = '$week'");	
$dollr = mysqli_fetch_assoc($oldskl);
$frm = mysqli_num_rows($oldskl);

if($frm > 0){
		
mysqli_query ($MySQL_CON,"UPDATE duty SET $thirtn = '$styip' WHERE Library = '$Img' AND Librarian = '$hatr' AND Week = '$week' AND Month = '$month' AND Year = '$yr' ")or die (mysqli_error($MySQL_CON));
}else{
	
$Afr = mysqli_query($MySQL_CON,"INSERT INTO duty (Library, $thirtn, Librarian, Week, Month, Year)
 VALUES ('$Img','$styip','$hatr','$week','$month', '$yr') ")or die(mysqli_error($MySQL_CON));	
}
}

if(!empty($wrth)){
	
	if(empty($morty)){
$swear = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Library = '$Img'");	
$sold =mysqli_fetch_assoc($swear);

	$arre = array("0" => "Staff", "1" => "Monday","2" => "Tuesday","3" => "Wednesday","4" => "Thursday", "5" => "Friday", "6" => "Saturday");

	echo "
	<table class ='weks'><tr><td><button class = 'wkw' onclick='reg(45)'><i class='fas fa-user-friends'></i> TimeTable</button><button class = 'wkw' onclick='reg(54)'><i class='fas fa-user-friends'></i> Memo</button></td></tr></table>
	<div id='aa'>
	<div id='rava'>
	<table class ='dimm'><tr>"; $bjj="";
	foreach($arre as $dnt => $wrk){
		$wtko = "";
		if($dnt == 0){
			$wtko = "andn";  $bjj = "<i class='fas fa-user-friends'></i>";
		}else{
			$wtko = "celeb"; $bjj = "<i class='fas fa-calender'></i><br>";
		}
		echo "<td class = 'frky'><button id = 'mony' class = '$wtko'>$bjj $wrk</button></td>";
		
	}
	echo "</tr><tr><td colspan = '7'>";
	echo "<div id = 'ofyu'><table class ='hav' border='1px solid #cccc'>";
	$gon = 0;
	
	$diff = ""; $contr=""; $lste = "";
	if(!empty($sera)){
		$diff = $banjil; $contr = $pats; $lste = $hert;
	}else{
	$diff = $month; $contr = $yr; $lste = $week;
}
$color = array("0" => "Red","1" => "Pink","2" => "Green","3" => "Blue","4" => "Yellow","5" => "Purple","6" => "Orange","7" => "Brown","8" => "Violet","9" => "Indigo",
"10" => "Maroon","11" => "Cream");
					 $rahx = "";  $suck = "";   $appa = "";  $frkm = ""; 

if($Stfflvl > 1){
	$rahx = "div"; $appa = "onkeyup = 'gokj";
}else{
	$rahx = "textarea"; $appa = "onkeyup = 'sumthn";
}
		 
	do{
		$gon++;
	$paon = $sold['Name']; $lyft = $sold['Email'];	 $slow = $sold['StaffLevel'];
 
$dress = mysqli_query($MySQL_CON,"SELECT * FROM duty WHERE Library = '$Img' AND Librarian = '$lyft' AND Month = '$diff' AND Year = '$contr' AND Week = '$lste'")or die(mysqli_error($MySQL_CON));	
$lifr = mysqli_fetch_assoc($dress);  
		 
		 $low = "";
		 if($slow == 1){
			 $low = "class = 'missme'";
		 }else{
			  $low = "class = 'missme'  readonly/";
		 }
		 

foreach($arre as $ghi => $wer){

	echo "<input type = 'hidden' value = '$lyft' id = 'nntn$gon' >";
	
			/* if($Stfflvl > 1){
			   $suck = 'neti';  $frkm = "style='background-color:$color[$ghi];'"; 
		 
		 }else{
			  
		 }*/
		  $suck = "shit";   $frkm = "";
	
if($ghi == 0){
	echo "<tr>";
	echo "<td ><label class = 'apy'><i class='fas fa-user-friends'></i> $paon</label></td>";
}else{
	$mlnk = $lifr[$wer];

echo "<td ><$rahx id='".$gon."way".$ghi."' class = '$suck'  $appa($ghi,$gon)'> $mlnk</$rahx></td>";
}
if($ghi == 6){
	echo "</tr>";
}
	}
	}while($sold = mysqli_fetch_assoc($swear));
echo "</table></div></td></tr></table>";

$now = array("1" => "Jan","2" => "Feb","3" => "Mar","4" => "Apr","5" => "May","6" => "Jun","7" => "July","8" => "Aug","9" => "Sep","10" => "Oct","11" => "Nov","12" => "Dec",);

echo "<table class = 'london'>
 <tr><td><select id ='stay' class='dwn'>
 <option value='$week'>Current</option>";
	for($tll = 1;$tll < 54; $tll++){
 echo "
 <option  >$tll</option>
";
	}
	echo"
 </select> <label class='berk'>Week</label></td>
 <td class='berk'><select id ='compr' class='dwn'>
 <option value '$month'>Current</option>";
 foreach($now as $expl => $truce){
 echo "<option value = '$expl'>$truce</option>";
 }
echo "</select> <label>Month</label></td>
<td class='berk'><select id ='minu' class='dwn'><option value '$yr'>Current</option>";
for($w = $yr;$w >($yr - 5); $w--){
	echo "<option >$w</option>";
}
echo "</select> <label>Year</label></td>
<td><input type='button' value='Search' class='sterio'  onclick='echos()'></td></tr></table></div><div id='vatu' style ='display:none;'>";

	
	echo "<table class='romnc'>";
	echo "<tr><td rowspan = '2'>";
	echo "<div id='fallap'>";
	}
	$war = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Library = '$Img'");	
$lifr =mysqli_fetch_assoc($war); 	
	
	$kill = array();
	do{ $lone = $lifr['Name']; $wolves = $lifr['Email']; if($wolves !== $tayra){$kill[$lone] = $wolves;} }while($lifr = mysqli_fetch_assoc($war));
	
	echo "<button class='If' id='datt85255' onclick='Iser(85255)'><i class='fas fa-user-friends'></i> Staff</button>
	<input type = 'hidden' value = 'Staff' id='yu85255'><br>
	<button  class='If' id='datt2222' onclick='Iser(2222)'><i class='fas fa-user-friends'></i> Student</button>
	<input type = 'hidden' value = 'Student' id='yu2222'><br>";
	$hibu =  0;
	foreach($kill as $mynd => $lovr){
		$hibu++;
		echo "<input type='hidden' value='$lovr' id='yu$hibu' >";
		echo "<button class='If' id='datt$hibu' onclick='Iser($hibu)'><i class='fas fa-user-friends'></i> $mynd</button><br>";
	}
	if(empty($morty)){
	echo "</div></td>
	<td><div id='binw'></div></td></tr>
	<tr><td ><textarea id='gnon' class='rdBy' placeholder='Type here...' onclick='tigre()'></textarea><button id='hRdr' onclick='phuu()' class='cbhs'>SEND</button></td></tr></table>";
echo "</div></div>";
	}
}

$chil = ""; $fry = "";  $sss ="";
if(!empty($mdke)){
	
if(empty($skkk)){		
	if(empty($nik)){
		
		echo "<table class='weks'>
<tr><td><button id='bell' class='wkw'><i class='fas fa-books'></i> Book Search</button></td><td><button id='uhh' class='wkw' onclick='tek()'><i class='fas fa-books'></i> Book Shelf</button></td><td><button id='kopl' class='wkw' onclick='lpo(1)'><i class='fas fa-books'></i> Books Pending</button></td><td><button class='wkw' id='bool' onclick='lpo(2)'><i class='fas fa-books'></i> Books Returned</button></td></tr></table>
";
echo "<div id='allo'>";
echo "<div id='bunt'>
<table class='edk'>
<tr><td><input type='search' class='bus' id='stoop' onclick = 'blwn()' placeholder='Search Book Here...' />
	<input type='button' class='car' id='kols' value='&#128269'></td></tr>
<tr><td><div id='mon'></div></td></tr>
</table>
</div>";
	}

echo "<div id='brkk'>
</div><div id='geno' > ";
}
$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");

	$homie=""; 
	
	echo "<table class = 'epkel'><tr>";
	
	foreach($pah as $fnj => $kss){
		$bckst=""; $chamb = "";
		
if($beij  > 0){
$chamb = $hity;	
}else{
$chamb = $dwj;
}

		if($chamb == $fnj){
			$bckst= "grandm";
		}else{
			$bckst="embr";
		}
		

		if($dwj > 0){
		if($dwj >= $fnj){

			echo "<td><button id = 'anja$fnj' onclick = 'huh($fnj,$dwj)' class='$bckst'><i class='fas fa-building'></i> $kss</button></td>";
		}
		}
	}
	echo "</tr></table>";
	$nil = "";
		if(!empty($dolls)){
	
		
	$twn = mysqli_query($MySQL_CON,"SELECT * FROM storeylibrary WHERE LibraryName = '$Img' AND Storey = '$hity'")or die(mysqli_error($MySQL_CON));	
$outta = mysqli_fetch_assoc($twn);


$chil = $outta['Shelves']; $fry = $outta['Storey']; $pine = $outta['First'];  $nil = $hity;

}else{
	
	
				$twn = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName = '$Img' AND Storey = '$dwj'")or die(mysqli_error($MySQL_CON));	
$outta = mysqli_fetch_assoc($twn); 

$chil = $outta['Shelves']; $fry = $outta['Storey']; $pine = $outta['First']; $nil = $dwj; 
}

$issu = "";
if(!empty($eyes)){
$issu = $eyes;	
}else{
$issu = $pine;
}

		$bp = ($issu + 10);
		 $sss =($chil + $pine);
	
echo "<input type='hidden' value='$nil' id='nidr'>"; 
	echo "<input type='hidden' value='$bp' id='ferll'>"; 
echo "<input type='hidden' value='$issu' id='namet'>"; 
echo "<input type='hidden' value='$sss' id='happ'>";
echo "<input type='hidden' value='$pine' id='hjg'>"; 

	
	echo "<table class = 'djnj'>";

	echo "<tr><td><button  id = 'wdff' class = 'snkq' onclick = 'nyth(1,$dwj,$nil,$sss,$pine,$bp,$issu)'><i class='fas fa-angle-left'></i></button></td>";
	$ka = 0; $nda = 0;  

	$gift = ""; $brhn = ""; $killd = "";  $rnji = "";


	for($wkn = $issu;$wkn < $sss;$wkn++){
		
		
		  $wstd = "";
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


if($wkn <= $bp){
		echo "<td><button id = 'sbhb' onclick='shark($wkn)' style='background-color:rgba($sss,$wkn,$issu);' class = 'sager' onmouseenter='senRI($rnji)' onmouseleave='terr($rnji)' ><i class='fas fa-book'></i> $rnji</button></td>";
}
	
	}
	echo "<td><button id = 'cw' class = 'snkq'  onclick = 'nyth(2,$dwj,$nil,$sss,$pine,$bp,$issu)'><i class='fas fa-angle-right'></i></button></td>";
	echo "</tr></table>";
	
	$closee = array("010" => "Computer Science");
	
	$rkl = $closee['010'];
	echo "<input type='hidden' value='$rkl' id='mome'>";

	if(empty($skkk)){
	if(empty($nik)){
echo "</div>";
echo "<div id='jqk' style='display:none;'>";
echo "</div>";
echo "</div>";	
	}
	}
}
	
	
	
	if(!empty($playn)){
			$tiif=""; 
		if($playn == 2){
			$tiif = 0; 
		}else{
			$tiif = 1;
		}

$sga = mysqli_query($MySQL_CON,"SELECT bookloan.BookName, bookloan.BookDate, bookloan.Bookdue, bookloan.Status, bookloan.librarian, bookloan.LibraryName, bookloan.Email, bookloan.Fine, libuser.TelephoneNo, libuser.Name, libuser.UserImage,
 libuser.Title, libuser.Degree, libuser.NationalID, libuser.AdmYear, libuser.GradYear FROM bookloan INNER JOIN libuser ON bookloan.Email = libuser.Email WHERE bookloan.LibraryName = '$Img' AND bookloan.Status = '$tiif'")or die(mysqli_error($MySQL_CON));	
$daa = mysqli_fetch_assoc($sga); 
$visi = mysqli_num_rows($sga); 

if($visi > 0){
	$rt=0;
do{
	$rt++;
			 $kipol="";
		if($playn == 2){
			 $kipol="<tr><td colspan='8'><input type='button id='nja' class='bkaj' onclick='nsdj($rt)' value='Return Book'></td></tr>";
		}else{
		 $kipol="";
		}
	
	$BookName = $daa['BookName'];$BookDate = $daa['BookDate'];$Bookdue = $daa['Bookdue'];$librarian = $daa['librarian'];
	$UserImage = $daa['UserImage'];$Fine = $daa['Fine'];$TelephoneNo = $daa['TelephoneNo'];$Name = $daa['Name'];
	$SchoolID = $daa['Title']; $lovn = $daa['Degree'];$NationalID = $daa['NationalID'];$AdmYear = $daa['AdmYear'];$GradYear = $daa['GradYear'];
	echo "<input type='hidden' value='$BookName' id='ramp$rt'>";
	
	echo "<table class='mak'>";
	echo "<tr><td ><img src='Img/".$UserImage."' class='asm' ></td><td ><label class='sand'>Name<br>$Name</label></td><td><label class='sand'>Course<br>$lovn $SchoolID</label></td><td><label class='sand'>National Id<br>$NationalID</label></td><td ><label class='sand'>Admission<br>$AdmYear</label></td><td><label class='sand'>Finale Year<br>$GradYear</label></td></tr>
	<tr><td  colspan = '2'><label class='sand'>Book<br>$BookName</label></td><td><label class='sand'>Debt<br>Ksh. $Fine</label></td><td ><label class='sand'>Issued By<br>$librarian<label></td><td><label class='sand'>Book Date<br>$BookDate</label></td><td><label class='sand'>Book Due<br>$Bookdue</label></td>
	</tr>";
	echo "$kipol</table>";
}while($daa = mysqli_fetch_assoc($sga));
}else{
	echo "<div class='lds-css ng-scope'><div style='width:100%;height:100%' class='lds-facebook'><div></div><div></div><div></div></div></div>";
	echo "<label class='uss'>No Records Found</label>";
}

	
}

//<div id="chart"><canvas id="mcnv" width="200px" height="400px"></canvas></div>
?>
<?php
$onye="";
if(isset($_REQUEST['onye'])){
	$onye = $_REQUEST['onye'];
}
$blonde="";
if(isset($_REQUEST['blonde'])){
	$blonde = $_REQUEST['blonde'];
}
$trap="";
if(isset($_REQUEST['trap'])){
	$trap = $_REQUEST['trap'];
}
$progr="";
if(isset($_REQUEST['progr'])){
	$progr = $_REQUEST['progr'];
}
$sushi="";
if(isset($_REQUEST['sushi'])){
	$sushi = $_REQUEST['sushi'];
}
$diss="";
if(isset($_REQUEST['diss'])){
	$diss = $_REQUEST['diss'];
}
$lrt="";
if(isset($_REQUEST['lrt'])){
	$lrt = $_REQUEST['lrt'];
}
$drnk="";
if(isset($_REQUEST['drnk'])){
	$drnk = $_REQUEST['drnk'];
}
$sfa="";
if(isset($_REQUEST['sfa'])){
	$sfa = $_REQUEST['sfa'];
	
}
$mbuni = 3;
if(isset($_REQUEST['mbuni'])){
	$mbuni = $_REQUEST['mbuni'];
}
?>
<?php

if(!empty($onye)){
	
	$shw = mysqli_query($MySQL_CON,"SELECT Email, Name, Title, Degree, UserImage, AdmYear FROM libuser");	
$mer = mysqli_fetch_assoc($shw);
$noni = mysqli_num_rows($shw);
$Adm = $mer['AdmYear']; $Adm = $mer['AdmYear'];


if($mbuni > 2){
	echo "
	<table class ='weks'><tr><td><button onclick='cersei(2)' class='wkw' id='dan'><i class='fas fa-search'></i> Search</button></td><td><button class='wkw' onclick='cersei(1)' id='dup'><i class='fas fa-user-friends'></i> Most Visits</button></td><td><button class='wkw' onclick='tangl(0)' id='xdf'><i class='fas fa-user-friends'></i> Most Pending Books</button></td><td><button class='wkw' onclick='tangl(1)' id='hors'><i class='fas fa-user-friends'></i> Most Returned Books</button></td></tr></table>
<div id='aa'>
";
echo "<div id='fik' style = 'display:none;'>";

	if($noni > 0){
do{
$jiko = $mer['Email']; $namee = $mer['Name'];  $NID = $mer['Degree'];  $clean = $mer['Title']; $Imag = $mer['UserImage']; 
	$tempp = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$jiko' AND Library = '$Img'   ");	
$beu = mysqli_fetch_assoc($tempp);
$tue = mysqli_num_rows($tempp);

$kwnao = "<table class='cmkak'><tr>";

$kwnao .=  "<td ><img src ='Img/".$Imag."' class = 'deep'></td><td><label class='whis'>$namee</label></td><td><label class='whis'>$NID $clean</label></td><td ><label class='whis'>Chelked In<br>$tue</label></td>";

	$kwnao .=  "</tr></table>";

echo $kwnao;
}while($mer = mysqli_fetch_assoc($shw));

}else{
	echo "<div class='lds-css ng-scope'><div style='width:100%;height:100%' class='lds-facebook'><div></div><div></div><div></div></div></div>";
	echo "<label class='uss'>No Records Found</label>";
}
echo  "</div>";
echo "<div id='wik' style = 'display:none;'>";
}
$lowr = "";
if($mbuni > 0){
	$lowr = "Returned";
}else{
	$lowr = "Pending";
}
$kula = array();

	if($noni > 0){
do{
$jiko = $mer['Email']; $namee = $mer['Name'];  $NID = $mer['Title'];   $Away = $mer['Degree']; $Imag = $mer['UserImage']; 


	$war = mysqli_query($MySQL_CON,"SELECT * FROM bookloan WHERE LibraryName = '$Img' AND Email = '$jiko' AND Status = '$mbuni' ");	
$lifr =mysqli_fetch_assoc($war); 	
$blei = mysqli_num_rows($war);

if($blei > 0){
$kwnao =  "<table class='cmkak'>";
$kwnao .= "<tr>";

$kwnao .=  "<td class='eek'><img src ='Img/".$Imag."' class = 'deep'></td><td class='eek'><label class='whis'>$namee</label></td><td class='eek'><label class='whis'>$Away $NID</label></td><td class='eek'><label class='whis'>Books $lowr<br>$blei</label></td>";

	$kwnao .=  "</tr>";
$kwnao .=   "</table>";
echo $kwnao;
}else{
		echo "<div class='lds-css ng-scope'><div style='width:100%;height:100%' class='lds-facebook'><div></div><div></div><div></div></div></div>";
	echo "<label class='uss'>No Records Found</label>";
}
}while($mer = mysqli_fetch_assoc($shw));

}else{
	echo "<div class='lds-css ng-scope'><div style='width:100%;height:100%' class='lds-facebook'><div></div><div></div><div></div></div></div>";
	echo "<label class='uss'>No Records Found</label>";
}


if($mbuni > 2){
echo  "</div>";
echo "<div id='wert'><table class='edk'>
<tr><td><input type='search' class='bus' id='Dkas' onclick = 'blwn()' placeholder='Search Student Here...' />
	<input type='button' class='car' id='erh' onclick='ANSkqjP()' value='&#128269'></td></tr>
<tr><td><div id='jon'><div id='mek'></div><div id='yuz'></div></div></td></tr>
</table></div>";
echo "</div>";
}
	
}
if(!empty($blonde)){
	
	$SPaWT = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email LIKE '%".$blonde."%' OR Name LIKE '%".$blonde."%' OR Title LIKE '%".$blonde."%' OR AdmYear LIKE '%".$blonde."%' ");
$ASKL = mysqli_fetch_assoc($SPaWT);
$cate = 0;
do{
	$cate++;
	$tolet = $ASKL['Name']; $somdy = $ASKL['Email'];
	
	echo "<button id='medi$cate' class='tat' onclick = 'then($cate)'><i class='fas user'></i> $tolet</button>
	<input type = 'hidden' value = '$somdy' id ='smok$cate'>";
	
}while($ASKL = mysqli_fetch_assoc($SPaWT));
	
}
if(!empty($trap)){
	
	$SPaWT = mysqli_query($MySQL_CON,"SELECT BookName, Status, LibraryName, Email, Fine FROM bookloan WHERE Email = '$trap' AND LibraryName = '$Img'")or die(mysqli_error($MySQL_CON));
$ASKL = mysqli_fetch_assoc($SPaWT);
$pock = mysqli_num_rows($SPaWT);


$highe = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$trap'")or die(mysqli_error($MySQL_CON));
$endr = mysqli_fetch_assoc($highe);
$baby = mysqli_num_rows($highe);

$deuce = mysqli_query($MySQL,"SELECT * FROM book WHERE Email = '$trap'")or die(mysqli_error($MySQL));
$btr = mysqli_fetch_assoc($deuce);
$wrk = mysqli_num_rows($deuce);

	$tempp = mysqli_query($MySQL_CON,"SELECT * FROM checkin WHERE Email = '$trap' AND Library = '$Img' ");	
$beu = mysqli_fetch_assoc($tempp);
$tue = mysqli_num_rows($tempp);
	
	$lastSn = $beu['TIMESTAMP'];// $des = strtotime("H-m-i-s-",$lastSn);
	$stir = $btr['HouseName'];
	$Name = $endr['Name'];	$Imag = $endr['UserImage'];	$Finess = $ASKL['Fine'];	$SchoolID = $endr['Title'];	$fight = $endr['Degree'];	$TelephoneNo = $endr['TelephoneNo'];	$NationalID = $endr['NationalID'];$AdmYear = $endr['AdmYear'];$GradYear = $endr['GradYear'];
	
	$kriss = array();
	$kross = array();
	
	do{
		$sts = $ASKL['Status']; $bkna = $ASKL['BookName'];
		
		if($sts == 2){
			array_push($kriss,$bkna);
		}elseif($sts == 1){
		
			array_push($kross,$bkna);
		}
	
	}while($ASKL = mysqli_fetch_assoc($SPaWT));
	

	$librarian = count($kriss);	$BookDate = count($kross);
	echo "<table class = 'doin'>
	<tr><td rowspan = '5'><img src ='Img/".$Imag."' class = 'deepy'></td>
	<td ><label class='sand'><i class='fas user-friends'></i>  Name<br>$Name</label></td><td><label class='sand'><i class='fas user-graduate'></i>  Course<br>$fight $SchoolID</label></td><td><label class='sand'><i class='fas user-friends'></i>  Last Visit <br>";
	if(!empty($des)){
		echo $des;
	}else{
			echo "Not Yet Entered";
		}
		echo "</label></td><tr><td ><label class='sand'><i class='fas user-friends'></i>  Admission<br>$AdmYear</label></td><td><label class='sand'><i class='fas user-friends'></i>  Finale Year<br>$GradYear</label></td>
	</td><td><label class='sand'><i class='fas coins'></i>  Fines <br> ";
	if($Finess > 0){
		echo "Kshs. $Finess /=";
	}else{
		echo "No Fines";
	}
	echo "</label></td></tr><tr><td><label class='sand'><i class='fas user-friends'></i>  Visits <br> $tue</label></td><td ><label class='sand'><i class='fas books'></i>  Books Pending<br>$librarian<label></td><td><label class='sand'><i class='fas books'></i>  Books Returned<br>$BookDate</label></td></tr>
	<tr><td><label class='sand'><i class='fas user-friends'></i>  National Id <br> $NationalID</label></td><td ><label class='sand'><i class='fas user-friends'></i>  $TelephoneNo <br>$trap<label></td><td><label class='sand'>Residence <br>
	";
	if(!empty($stir)){
		echo $stir;
	}else{
		echo "Unkown";
	}
	echo "</label></td></tr>";
	echo "</table>";
	
echo "<table class = 'rese' >";
echo "<tr><th colspan ='2'><label class = 'badk'><i class='fas books'></i>  Books Borrowed</label></th></tr>";
foreach($kross as $doit => $hrt){
	$trst = "";
	if(!empty($hrt)){
		$trst = "<tr><td><label class = 'offnd'><i class='fas bookmark'></i>  $hrt</label></td><td><label class = 'offnd'>Returned</label></td></tr>";
	}else{
		$trst = "";
	}
	echo "$trst";
}
foreach($kriss as $doit => $hrt){
	$trst = "";
	if(!empty($hrt)){
		$trst = "<tr><td><label class = 'offnd'><i class='fas bookmark'></i>  $hrt</label></td><td><label class = 'offnd'>Pending</label></td></tr>";
	}else{
		$trst = "";
	}
	echo "$trst";
}

echo "</table>";
	
}
if(!empty($progr)){
	$rih = mysqli_query($MySQL_CON,"SELECT * FROM resource WHERE LibraryName = '$Img'");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);

$gamd = ""; $hut = "";
if(!empty($sfa)){
	$gamd = "style='display:none;'";
	$hut = "daner";
}else{
	$hut = "aa";
}
echo "<div id='ceah'><button class='badr'  id='blur' >Resources</button><button class='ghst' id='skai'><i class='fas fa-plus'></i> Add Resource</button></div>";
echo "<div id='aa'>

<div id='thing' >";

$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");

if($capt > 0){
do{
	$exprt = $nade['ToolImage'];
	$zoe = $nade['Storey'];
	$cool = $nade['Resources'];
	$sumd = $nade['ResourceLocale'];
	
	echo "<table class='cmkak'><tr><td><img src='Img/".$exprt."' class='deep'></td><td><div class = 'whis'>$sumd</div></td><td><label class = 'whis'>$cool</label></td><td><label id='comm' class = 'whis'>$pah[$zoe]</label></td></tr></table>";
	
}while($nade = mysqli_fetch_assoc($rih));
}else{
	echo "<div class='lds-css ng-scope'><div style='width:100%;height:100%' class='lds-facebook'><div></div><div></div><div></div></div></div>";
	echo "<label class='uss'>No Records Found</label>";
}

echo "<input type='hidden' value='$Img' id = 'asde'>";
echo "</div>
<div id='poli'>
<table class='ukora' >
<tr><td><input type = 'file' class='torb'  id='file' name='file'></td></tr>
<tr><td><div id='upldImg'><i class='fas fa-user'></i></div></td></tr></table>
<table class='admin' >
<tr><td><select class = 'bowl' id='conc'>";

	$accon = $feel['Storey'];
foreach($pah as $outl => $ine){	
if($outl <= $accon){
echo "<option value = '$outl'>$ine</option>";
}
}
echo "</select></td></tr>
<tr><td><textarea class = 'hko' placeholder = 'Resource Location' id='thot'></textarea></td></tr>
<tr><td colspan = '2'><input type='number' class='drp' id='aunt' >
<button class='lowr' onclick='fukn()'><i class='fas fa-plus'></i> Add Items</button></td></tr>
<tr><td><label class = 'nijk'> Resources </label><div id='lyf'><textarea id='delus' class = 'rem'></textarea></div></td></tr>
<tr><td><button class='inl' id = 'boyy' ><i class='fas fa-plus'></i> ADD</button></td></tr>
</table>
</div></div>";
}


$gud="";
if(isset($_REQUEST['gud'])){
	$gud = $_REQUEST['gud'];
}
$LKA = "";
if(isset($_REQUEST['LKA'])){
	$LKA = $_REQUEST['LKA'];
}
$conc = "";
if(isset($_REQUEST['conc'])){
	$conc = $_REQUEST['conc'];
}

$tht = "";
if(isset($_REQUEST['tht'])){
	$tht = $_REQUEST['tht'];
}

$lovlk = "";
if(isset($_REQUEST['lovlk'])){
	$lovlk = $_REQUEST['lovlk'];
}


if(!empty($gud)){


	mysqli_query($MySQL_CON,"UPDATE resource SET Resources = '$LKA', ResourceLocale = '$gud', Storey = '$conc', LibraryName = '$Img' WHERE resourceId = '$tht'")or die (mysqli_error($MySQL_CON));
}

$lav = "";
if(isset($_REQUEST['lav'])){
	$lav = $_REQUEST['lav'];
}
$tohi = "";
if(isset($_REQUEST['tohi'])){
	$tohi = $_REQUEST['tohi'];
}

$bum = "";
if(isset($_REQUEST['bum'])){
	$bum = $_REQUEST['bum'];
}
$chann = "";
if(isset($_REQUEST['chann'])){
	$chann = $_REQUEST['chann'];
}
$urop = "";
if(isset($_REQUEST['urop'])){
	$urop = $_REQUEST['urop'];
}

if(!empty($lav)){

	$SPaWT = mysqli_query($MySQL_CON,"SELECT * FROM bookloan WHERE Email = '$tayra' AND LibraryName = '$callme' AND Status = '0'")or die(mysqli_error($MySQL_CON));
$pock = mysqli_num_rows($SPaWT);


if($pock > 0){
	echo "You are Ineligible for a book loan";
}else{
	
	$MAm = "Margaret Thacther"; $srt = 000004544; $turn = date("Y-m-d"); 
	
		$d = strtotime($turn);
	$enddd = strtotime("+1month",$d);
    $yay =  date("Y-m-d",$enddd); $month = 0; 
	
	echo "Please return the book by $yay";
	
	
	
	$Afr = mysqli_query($MySQL_CON,"INSERT INTO bookloan (BookName, SerialNumber, BookDate, Bookdue,Email, Status, LibraryName)
 VALUES ('$lav','$srt','$turn','$yay','$tayra','$month', '$callme') ")or die(mysqli_error($MySQL_CON));	
 
 	$ajer = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE BookName = '$lav' AND LibraryName = '$callme' ")or die(mysqli_error($MySQL_CON));
$luk = mysqli_num_rows($ajer);

 $msee = ($luk - 1);
 
 mysqli_query($MySQL_CON,"UPDATE books SET Quantity = '$msee' WHERE BookName = '$lav' LibraryName = '$callme'")or die (mysqli_error($MySQL_CON));
}
}

if(!empty($humm)){

	
 mysqli_query($MySQL_CON,"DELETE FROM books WHERE BookName='$humm' AND LibraryName = '$Img'")or die (mysqli_error($MySQL_CON));
 
 echo "$humm Deleted";
}
if(!empty($sit)){		
$oldskl = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE LibraryName = '$Img' AND BookName = '$pand'");	
$dollr = mysqli_fetch_assoc($oldskl);
$frm = mysqli_num_rows($oldskl);

if($frm > 0){
	echo "$pand Updated!";	
mysqli_query ($MySQL_CON,"UPDATE books SET Quantity = '$sit' WHERE LibraryName = '$Img' AND BookName = '$pand'")or die (mysqli_error($MySQL_CON));
}else{
	echo "$pand Inserted!";
	
	$Afr = mysqli_query($MySQL_CON,"INSERT INTO books (BookName, LibraryName, Quantity, IDN)
 VALUES ('$pand', '$Img', '$sit', '$tohi') ")or die(mysqli_error($MySQL_CON));	
}
}
if(!empty($urop)){		
$oldskl = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE LibraryName = '$Img' AND BookName = '$pand'");	
$dollr = mysqli_fetch_assoc($oldskl);
$frm = mysqli_num_rows($oldskl);

if($frm > 0){
	echo "$pand Updated!";	
mysqli_query ($MySQL_CON,"UPDATE books SET Price = '$urop' WHERE LibraryName = '$Img' AND BookName = '$pand'")or die (mysqli_error($MySQL_CON));
}else{
	echo "$pand Inserted!";
	
	$Afr = mysqli_query($MySQL_CON,"INSERT INTO books (BookName, LibraryName, Price, IDN)
 VALUES ('$pand', '$Img', '$urop', '$tohi') ")or die(mysqli_error($MySQL_CON));	
}
}
if(!empty($madn)){


	$rih = mysqli_query($MySQL_CON,"SELECT * FROM books WHERE LibraryName = '$Img'");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);	

$lowe = array();


foreach($rih as $imba){
	array_push($lowe,$imba);
}

print_r(json_encode($lowe));
}
if(!empty($towel)){


	$rih = mysqli_query($MySQL_CON,"SELECT * FROM deletedbooks WHERE LibraryName = '$Img'");	
$nade = mysqli_fetch_assoc($rih);
$capt = mysqli_num_rows($rih);	

$lowe = array();


foreach($rih as $imba){
	array_push($lowe,$imba);
}

print_r(json_encode($lowe));
}
if(!empty($stry)){
	$Afr = mysqli_query($MySQL_CON,"INSERT INTO books (BookName, LibraryName,BookShelf)
 VALUES ('$stry', '$Img', '$iou') ")or die(mysqli_error($MySQL_CON));
 
 echo "$stry Added!";

}

if(!empty($lovlk)){
	
		$rih = mysqli_query($MySQL_CON,"SELECT * FROM progress WHERE Year = '$chann' AND Week = '$lovlk' AND Library = '$Img'")or die(mysqli_error($MySQL_CON));	
$nade = mysqli_fetch_assoc($rih);

$cer = $nade['Month'];

echo $cer;

}

if(!empty($bum)){
	
	echo "<div id='lod' class='titi'></div>
	<select class='basg'  id='bet'>";
	for($tll = 1;$tll < 54; $tll++){
 echo "
 <option  >$tll</option>
";
	}
	echo "
 </select>

<select class='basg' id='with'>
 <option>Year</option>
 <option>2015</option>
 <option>2016</option>
 <option>2017</option>
 <option>2018</option>
 <option>2019</option></select>
 <button class='righh'onclick='keepin()'  id='bundo'>Search</button>
 ";
}
/* if(!empty($sfa)){
	echo "<input type = 'file' onchange='stnd()'  id='dnce' name='dnce'>";
	$test =  explode(",", $_FILES["dnce"]["name"]);
	$ext = end($test); $name = rand(100,999) . "." . $ext; 
	
		$target = "Img/".basename($_FILES['dnce']['name']);
    $cdnmj = $_FILES['dnce']['name'];
	$location = "Img/".$_FILES['dnce']['name'];
	$tempn = $_FILES['dnce']['tmp_name'];
	
	move_uploaded_file($tempn,$target);


		echo "<img src='Img/".$location."' class='asm' />";


//mysqli_query($MySQL_CON,"UPDATE resource SET ToolImage = '$cdnmj' ");
}*/
?>