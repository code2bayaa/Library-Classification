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
$MALS = mysql_query("SELECT * FROM librarian WHERE Email = '$tayra'")or die(mysql_error());
$nmaS = mysql_fetch_assoc($MALS); 

$Img = $nmaS['Library'];
$Name = $nmaS['Name'];
$School = $nmaS['TelephoneNo'];
mysql_select_db($DB_name,$MySQL_CON);
$strr = mysql_query("SELECT * FROM library WHERE LibraryName = '$Img'")or die(mysql_error());
$feel = mysql_fetch_assoc($strr);

$nigt = $feel['LibImage']; $turn =  date("Y-m-d");

mysql_select_db($DB_name,$MySQL_CON);
$APkwW = mysql_query("SELECT * FROM checkin WHERE Library = '$Img' AND Status = '$xteen' AND Date = '$turn' ");	
$Pjo = mysql_fetch_assoc($APkwW);
$hary = mysql_num_rows($APkwW);
$wnnts = $Pjo['Email'];

if(!empty($kolak)){

echo "
<table class='emdo'>
<tr><td><img src='Img/".$nigt."' class='asm' ></td><td>$Img</td></tr>
<tr><td colspan='2'>$Name</td></tr>
<tr><td colspan='2'>$School</td></tr>
<tr><td colspan='2'><input class='nskk' id='wepl' value='LogOut' type='button' onclick='mklw()'></td></tr>
</table>";
}
if(!empty($forme)){
	
// Library Statistics
	mysql_select_db($DB_name,$MySQL_CON);
$yung = mysql_query("SELECT * FROM progress WHERE Library = '$Img' ")or die(mysql_error());	
$blod = mysql_fetch_assoc($yung);
$kiy = mysql_num_rows($yung);

do{
	
	 $st = $blod['Day'];  $bld = $blod['NumberCheckedIn'];  $duik = $blod['NumberBorrowedBook']; 
	
	$inl = $blod['NumberReturnedBook']; $sayy = $blod['Month']; $gitgi = $blod['Year'];   

	
}while($blod = mysql_fetch_assoc($yung));

$thu = array()


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
	
	mysql_select_db($DB_name,$MySQL_CON);
$yung = mysql_query("SELECT * FROM checkin WHERE Library = '$Img' AND Status = '4' AND Date = '$turn' ");	
$blod = mysql_num_rows($yung);

if($blod > 0){
	echo "Please approve entrance for the student at the entrance";
}else{
	echo "No Students at the Line";
}
}

}
if(!empty($hed)){


$dotn = array(); $arrn = "";
do{  $em = $Pjo['Email']; if(!empty($em)){  array_push($dotn,$em);} }while($Pjo = mysql_fetch_assoc($APkwW));
$hert = array_values(array_unique($dotn));

	if($hed == 4524){
		$nrth = ""; $tch = "";
		if($xteen == 2){
			$nrth = "salty";  $tch = "salt";
		}elseif($xteen == 1){
			$nrth = "salt";  $tch = "salty";
	}
	
		echo "<div id='gal'><table class = 'moth'>
		<tr><td><input type='button' class = '$nrth' onclick='dui(45)' value='Approved'></td><td><input class = '$tch' type='button' onclick='dui(54)' value='Outside'></td></tr></table></div><br>
		<div id='thnk' >
		<table class = 'bro'>";	
		foreach($hert as $rd){
mysql_select_db($DB_name,$MySQL_CON);
$MAK = mysql_query("SELECT * FROM libuser WHERE Email = '$rd'");	
$Mlak =mysql_fetch_assoc($MAK); 
$imyg = $Mlak['UserImage']; $namer = $Mlak['Name']; $schl = $Mlak['SchoolID'];
echo "<tr><td class = 'sist'><img src='Img/".$imyg."' class='asm' ></td><td class = 'sist'>$namer</td><td class = 'sist'>$schl</td></tr>";
		}
		echo "</table></div>";
		
	}
	if($hed == 8455){
		$shawty = ""; $scry = ""; $imyg = "";$namer = "";$SID = "";$NID = "";$AYR = "";$GYR = "";$romt = "";$bN = "";$bg = "";$bd = "";$sn = "";
		
		if($hary > 0 ){
			
			$shawty = "style='display:block;'"; 
mysql_select_db($DB_name,$MySQL_CON);
$MAK = mysql_query("SELECT * FROM libuser WHERE Email = '$wnnts'");	
$Mlak =mysql_fetch_assoc($MAK);

$imyg = $Mlak['UserImage']; $namer = $Mlak['Name']; $SID = $Mlak['SchoolID'];$NID = $Mlak['NationalID'];$AYR = $Mlak['AdmYear'];$GYR = $Mlak['GradYear'];

mysql_select_db($DB_name,$MySQL_CON);
$ply = mysql_query("SELECT * FROM bookloan WHERE Email = '$wnnts' AND LibraryName = '$Img'");	
$canI =mysql_fetch_assoc($ply);
 
$romt = $canI['Fine']; $bN = $canI['BookName']; $bg = $canI['Bookdate']; $bd = $canI['Bookdue']; $sn = $canI['SerialNo'];

if($romt > 0){
	$scry = "Has Pending Book Fine";
}else{
	$scry = "No Fines";
}
echo "<input type = 'hidden' id ='bdd' value='2828' >";
		}else{
			$shawty = "tomrrw"; 
		
		}
		
		
		echo "<div id='lil' class='fam'></div>
		
		<input type='hidden' value='$wnnts' id='tell'>
		<div id='fut' class='$shawty'>
		<table class = 'guttr'>
		<tr><td rowspan = '6'><img src='Img/".$imyg."' class='weki' ></td></tr>
		<tr><td colspan='2' class = 'game'><label>Name:</label><br><input type='text' class ='gill' value='$namer' readonly/></td></tr>
		<tr><td colspan='2' class = 'game'><label>Course:</label><br><input type='text' class ='gill' value='$SID' readonly/></td></tr>
		<tr><td colspan='2' class = 'game'><label>National ID:</label><br><input type='text' class ='gill' value='$NID' readonly/> </td></tr>
		<tr><td class = 'game'><label>Admission Year:</label><br><input type='text' class ='gill' value='$AYR' readonly/></td ><td class = 'game'><label>Graduation Year:</label><br><input type='text' class ='gill' value='$GYR' readonly/></td></tr>
		<tr><td><input type='button' value='Decline' class='lib' onclick='aler(2)' id='advis'></td><td><input type='button' value='Approve' class='lib' id='advis' onclick='aler(1)'></td></tr></table>
		<table class = 'qwn'>
		<tr><td>$scry</td></tr>";
		if($romt > 0){
			echo "<tr><td class = 'game'><label>Book Name:</label><input type='text' class ='brien' value='$bN' readonly/></td></tr><tr><td class = 'game'><label>Serial No:</label><input type='text' class ='brien' value='$sn' readonly/></td></tr><tr><td class = 'game'><label>Fine Due:</label><input type='text' class ='brien' value='$romt' readonly/></td></tr>
			<tr><td class = 'game'><label>Date Borrowed:</label><input type='text' class ='brien' value='$bg' readonly/></td></tr><tr><td class = 'game'><label>Return Date:</label><input type='text' class ='brien' value='$bd' readonly/></td></tr>";
		}
		echo "</table></div>";
		
		$Adumbe = array("1"=>"Students Outside","2"=>"Students Inside","3"=>"Students Checked Out");
		
		echo "<div id='pwr'>
		<table class = 'wint'>
		<tr><th>Stats</th></tr>";
		foreach($Adumbe as $ert => $lemo){
mysql_select_db($DB_name,$MySQL_CON);
$rih = mysql_query("SELECT * FROM checkin WHERE Library = '$Img' AND Status = '$ert' AND Date = '$turn' ");	
$nade = mysql_fetch_assoc($rih);
$capt = mysql_num_rows($rih);
		
		echo"<tr><td class = 'lky'><label>$lemo:</label><br> $capt</td></tr>";
		}
		echo "</table></div>";
	}

}
if(!empty($chacha)){
	
	$rah = "";
	if($chacha == 286){
     $rah = 2; 
mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("UPDATE  checkin  SET Status = '4' WHERE Library = '$Img' AND Date = '$turn' AND Email = '$wnnts' ")or die (mysql_error());
	}
	if($chacha == 7825){
		$rah = 5;
	}
mysql_select_db($DB_name,$MySQL_CON);
$bskj = mysql_query ("UPDATE  checkin  SET Status = '$rah', librarian = '$Name' WHERE Library = '$Img' AND Date = '$turn' AND Email = '$wnkj' ")or die (mysql_error());
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
$mom="";
if(isset($_REQUEST['mom'])){
	$mom = $_REQUEST['mom'];
}
$hatr=""; // Email of librarian to perform duty
if(isset($_REQUEST['hatr'])){
	$hatr = $_REQUEST['hatr'];
}



?>
<?php



if(!empty($inthe)){
mysql_select_db($DB_name,$MySQL_CON);
$war = mysql_query("SELECT * FROM librarian WHERE Library = '$Img'");	
$lifr =mysql_fetch_assoc($war); 	
	
	$kill = array();
	do{ $lone = $lifr['Name']; $wolves = $lifr['Email']; $kill[$lone] = $wolves; }while($lifr = mysql_fetch_assoc($war));
if(empty($morty)){
	
	echo "<table class='romnc'>";
	echo "<tr><td rowspan = '2'><div id='fallap'>";
}
	echo "<input type='button' value='Staff' id='yu85255' class='If' onclick='Iser(85255)'><br>
	<input type='button' value='Student' id='yu2222' class='If' onclick='Iser(2222)'><br>";
	$hibu =  0;
	foreach($kill as $mynd => $lovr){
		$hibu++;
		echo "<input type='hidden' value='$lovr' id='messd' >";
		echo "<input type='button' value='$mynd' class='If' id='yu$hibu' onclick='Iser($hibu)'><br>";
	}
	if(empty($morty)){
	echo "</div></td>
	<td><div id='binw'></div></td></tr>
	<tr><td ><textarea id='gnon' class='rdBy' placeholder='Type here...' onclick='tigre()'></textarea><input type='button' id='hRdr' onclick='phuu()' class='cbhs' value='SEND' ></td></tr></table>";
}
}

if(!empty($ferl)){

$rhui=""; $blive="";  
if($ferl == "Staff"){
	$blive = 3; 
	$rhui = " WHERE RCVR = '$ferl' AND Library = '$Img' ";
}elseif($ferl == "Students"){
	$blive = 1;  
	$rhui = "WHERE RCVR = '$ferl' AND Library = '$Img'";
}else{
$blive = 2; 
	$rhui=" WHERE SENDR = '$ferl' AND RCVR = '$tayra' OR  SENDR = '$tayra' AND RCVR = '$ferl'";
}

mysql_select_db($DB_name,$MySQL_CON);	
$mre = mysql_query("SELECT * FROM report  $rhui")or die (mysql_error());	
$ShwDtaTwo = mysql_fetch_assoc($mre);

 $jngl = array(); $th=0; $jett = array();
 
 
 
do{ $th++; 

$jrjo = $ShwDtaTwo['SendR']; 
 $biu = $ShwDtaTwo['Note'];
 $cry = $ShwDtaTwo['TIMESTAMP'];
 
 mysql_select_db($DB_name,$MySQL_CON);
$war = mysql_query("SELECT * FROM librarian WHERE Email = '$jrjo'");	
$lifr =mysql_fetch_assoc($war); 
$bettr = $lifr['Name'];
 
 if($blive !== 1){
	 
 if($jrjo !== $tayra){ 

 if(!empty($biu)) {
	 $nm ="";
	 if($blive == 3){
		 $nm = "<div id='fail' class='cose'><input type='text' class='poak' value='$bettr' id='dnse".$th."' readonly/><br>";
	 	 $nm .= "$biu<br>";
	 $nm .= "<input type='text' class='bkjb' value='$cry' id='rain".$th."' readonly/></div>";
	 }else{
		 	 $nm = "<div id='fail' class='cose'>$biu<br>";
	 $nm .= "<input type='text' class='bkjb' value='$cry' id='rain".$th."' readonly/><br></div>";
	 }

	 array_push($jett,$nm); 
	 }
	 }
	 if($jrjo == $tayra){
	 if(!empty($biu)){
	  $hug = "<div id='fail' class='pose'><input type='text' class='poak' value='You' id='dnse".$th."' readonly/><br>$biu<br>";
	  $hug .= "<input type='text' class='nkjd' value='$cry' id='njdkk".$th."' readonly/></div>";


	  array_push($jett,$hug); 
	  }  
	 }
 }else{
	 	 if(!empty($biu)){
	  $rap = "<div id='fail' class='arr'><input type='text' class='poak' value='$bettr' id='dnse".$th."' readonly/><br>$biu<br>";
	  $rap .= "<input type='text' class='nkjd' value='$cry' id='njdkk".$th."' readonly/></div>";


	  array_push($jett,$rap); 
	  }
 }
	 }while($ShwDtaTwo = mysql_fetch_assoc($mre));	
	 
	 echo implode("<br>",$jett);
	
}
if(!empty($msg)){
	$thirtn = "unsomad";
mysql_select_db($DB_name,$MySQL_CON);
$Afr = mysql_query("INSERT INTO report (Library, RCVR, SendR, Note, RED)
 VALUES ('$Img','$sad','$tayra','$msg', '$thirtn') ")or die(mysql_error());	
}

$yr = date("Y"); $month = date("m"); $week = date("w");
if(!empty($styip)){
	$arre = array("0" => "Staff", "1" => "Monday","2" => "Tue","3" => "Wed","4" => "Thur","5" => "Fri","6" => "Sat");
	echo $suk;
	$thirtn = $arre[$suk]; // Day to update 

	
	mysql_select_db($DB_name,$MySQL_CON);
$oldskl = mysql_query("SELECT * FROM duty WHERE Library = '$Img' AND Librarian = '$hatr' AND Month = '$month' AND Year = '$yr' AND Week = '$week'");	
$dollr = mysql_fetch_assoc($oldskl);
$frm = mysql_num_rows($oldskl);

if($frm > 0){
		mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("UPDATE duty SET $thirtn = '$styip' WHERE Library = '$Img' AND Librarian = '$hatr' AND Week = '$week' AND Month = '$month' AND Year = '$yr' ")or die (mysql_error());
}else{
	mysql_select_db($DB_name,$MySQL_CON);
$Afr = mysql_query("INSERT INTO duty (Library, $thirtn, Librarian, Week, Month, Year)
 VALUES ('$Img','$styip','$hatr','$week','$month', '$yr') ")or die(mysql_error());	
}
}

if(!empty($wrth)){
	
	mysql_select_db($DB_name,$MySQL_CON);
$swear = mysql_query("SELECT * FROM librarian WHERE Library = '$Img'");	
$sold =mysql_fetch_assoc($swear);

	$arre = array("0" => "Staff", "1" => "Monday","2" => "Tue","3" => "Wed","4" => "Thur","5" => "Fri","6" => "Sat");
	
	echo "<table class ='dimm'><tr>";
	foreach($arre as $dnt => $wrk){
		$wtko = "";
		if($dnt == 0){
			$wtko = "andn";
		}else{
			$wtko = "celeb";
		}
		echo "<td class = 'frky'><input type = 'button' value = '$wrk' id = 'mony' class = '$wtko'></td>";
		
	}
	echo "</tr><tr><td colspan = '7'>";
	echo "<div id = 'ofyu'><table class ='hav' >";
	$gon = 0;
	
	$diff = ""; $contr=""; $lste = "";
	if(!empty($sera)){
		$diff = $banjil; $contr = $pats; $lste = $hert;
	}else{
	$diff = $month; $contr = $yr; $lste = $week;
}
	do{
		$gon++;
	$paon = $sold['Name']; $lyft = $sold['Email'];	 $slow = $sold['StaffLevel'];
 mysql_select_db($DB_name,$MySQL_CON);
$dress = mysql_query("SELECT * FROM duty WHERE Library = '$Img' AND Librarian = '$lyft' AND Month = '$diff' AND Year = '$contr' AND Week = '$lste'");	
$lifr = mysql_fetch_assoc($dress);  
		 
		 $low = "";
		 if($slow == 0){
			 $low = "class = 'missme'";
		 }else{
			  $low = "class = 'missme'  readonly/";
		 }
foreach($arre as $ghi => $wer){
	
	echo "<input type = 'hidden' value = '$lyft' id = 'nntn$gon' >";
	
if($ghi == 0){
	echo "<tr>";
	echo "<td class = 'asaa'><input type = 'button' value = '$paon' id = 'him' class = 'apy'></td>";
}else{
	$fool = $lifr[$wer];
echo "<td class = 'budy'><textarea id='".$gon."way".$ghi."' class = 'shit' onkeyup = 'sumthn($ghi,$gon)' $low>$fool</textarea></td>";
}
if($ghi == 6){
	echo "</tr>";
}
	}
	}while($sold = mysql_fetch_assoc($swear));
echo "</table></div></td></tr></table>";

$now = array("1" => "Jan","2" => "Feb","3" => "Mar","4" => "Apr","5" => "May","6" => "Jun","7" => "July","8" => "Aug","9" => "Sep","10" => "Oct","11" => "Nov","12" => "Dec",);

echo "<table class = 'london'>
 <tr><td class='berk'><select id ='stay' class='dwn'>
 <option value '$week'>Current</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 </select><label>Week</label></td>
 <td class='berk'><select id ='compr' class='dwn'>
 <option value '$month'>Current</option>";
 foreach($now as $expl => $truce){
 echo "<option value = '$expl'>$truce</option>";
 }
echo "</select><label>Month</label></td>
<td class='berk'><select id ='minu' class='dwn'><option value '$yr'>Current</option>";
for($w = $yr;$w >($yr - 5); $w--){
	echo "<option >$w</option>";
}
echo "</select><label>Year</label></td>
<td><input type='button' value='Search' class='sterio'  onclick='echos()'></td></tr></table>";
}

if(!empty($mdke)){
	if(empty($nik)){
	$dop = $feel['Classification'];
$sss = $feel['Shelves'];
$dwj = $feel['Storey'];

$wa = 0; $ka = 0; $nda = 0; $bp = 10;

if($skkk == 2444){
	$wa =($wa + 1); $bp =($bp + 1); $nda = 0;
	if($wa == 9){
	$ka = $ka ++;
	}else{
		$ka = 0;
	}
}elseif($skkk == 2444){
	$bp--; $wa--;
}

	$pah = array("0" => "Ground Floor","1" => "1st Floor","2" => "2nd Floor","3" => "3rd Floor","4" => "4th Floor","5" => "5th Floor");
	echo "<div id='aa'>";
	echo "<table class = 'epkel'><tr>";
	foreach($pah as $fnj => $kss){
		if($dwj > 0){
		if($fnj <= $dwj){
			echo "<td><input type = 'button' value = '$kss' id = 'anja' onclick = 'huh($fnj)'></td>";
		}
		}
	}
	echo "</tr></table>";
	
	echo "<table class = 'djnj'><tr>";
	echo "<td><button  id = 'wdff' class = 'snkq' onclick = 'nyth(1)'><i class='fas fa-angle-left'></i></i></button></td>";
	for($wkn = $wa;$wkn < $sss;$wkn++){
		
		$rnji = ""; 
if($dop == "Dewey System"){
	$rnji = "$ka".$wkn."$nda";
}elseif($dop == "LLC"){
	$one = array(
	"0" => "a","1" => "b","3" => "c","4" => "d","5" => "e","6" => "f","7" => "g","8" => "h","9" => "i","10" => "j",
	"11" => "k","12" => "l","13" => "m","14" => "n","15" => "o","16" => "p","17" => "q","18" => "r","19" => "s","20" => "t","21" => "u","22" => "v",
	"23" => "w","24" => "x","25" => "y","26" => "z");
	$rnji = $one[$wkn];
}
if($wkn < $bp){
		echo "<td><input type = 'button' value = '$rnji' id = 'sbhb' class = 'snkq'  onclick = 'njdjjd($wkn)'></td>";
}
	}
	echo "<td><button id = 'cw' class = 'snkq'  onclick = 'nyth(2)'><i class='fas fa-angle-right'></i></button></td>";
	echo "</tr></table>";

echo "<div id='snk'>

</div></div>";
	}
	if(empty($skkk)){
echo "<div id='jqk'>";	
 mysql_select_db($DB_name,$MySQL_CON);
$sga = mysql_query("SELECT bookloan.BookName, bookloan.BookDate, bookloan.Bookdue, bookloan.Status, bookloan.librarian, bookloan.LibraryName, bookloan.Email, bookloan.Fine, libuser.TelephoneNo, libuser.Name, libuser.UserImage,
 libuser.SchoolID, libuser.NationalID, libuser.AdmYear, libuser.GradYear FROM bookloan INNER JOIN libuser ON bookloan.Email = libuser.Email WHERE bookloan.LibraryName = '$Img' AND bookloan.Status = '$mom'")or die(mysql_error());	
$daa = mysql_fetch_assoc($sga); 
echo "<table class='vap'>
<tr><td><input type='button' value='Book Loans' id='bool1' class='wkw' onclick='lpo(1)'></td><td><input type='button' class='wkw' value='Book Returns' id='bool2' onclick='lpo(2)'></td></tr></table>
<div id='bast'>";
do{
	$BookName = $daa['BookName'];$BookDate = $daa['BookDate'];$Bookdue = $daa['Bookdue'];$librarian = $daa['librarian'];
	$UserImage = $daa['UserImage'];$Fine = $daa['Fine'];$TelephoneNo = $daa['TelephoneNo'];$Name = $daa['Name'];
	$SchoolID = $daa['SchoolID'];$NationalID = $daa['NationalID'];$AdmYear = $daa['AdmYear'];$GradYear = $daa['GradYear'];
	echo "<table class='mak'><tr>
	<td><img src='Img/".$UserImage."' class='asm' ></td><td class='sand'><p>Name</p>$Name</td><td class='sand'><p>Course</p>$SchoolID</td><td class='sand'><p>National Id</p>$NationalID</td><td class='sand'><p>Admission</p>$AdmYear</td><td class='sand'><p>Finale Year</p>$GradYear</td></tr>
	<tr></td><td class='sand' colspan = '2'>$BookName</td><td class='sand'><p>Debt</p>Ksh. $Fine</td><td class='sand'><p>Issued By</p>$librarian</td><td class='sand'><p>Book Date</p>$BookDate</td><td class='sand'><p>Book Due</p>$Bookdue</td>
	</tr></table>";
}while($daa = mysql_fetch_assoc($sga));

echo "</div></div>";
	}
	
}

?>