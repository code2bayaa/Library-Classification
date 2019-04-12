<?php require_once('ConnDB.php'); ?>
<?php // LogIn 
$jsd="";
if(isset($_REQUEST['PELW'])){
	$jsd = $_REQUEST['PELW'];
}

$sjkjh="";
if(isset($_REQUEST['SDPL'])){
	$sjkjh = $_REQUEST['SDPL'];
}

if(!empty($jsd)){
mysql_select_db($DB_name,$MySQL_CON);
$MALS = mysql_query("SELECT * FROM libuser WHERE Email = '$jsd'")or die(mysql_error());
$nmaS = mysql_fetch_assoc($MALS); $slkd = mysql_num_rows($MALS);
$osi = $nmaS['Email'];  $lkd = $nmaS['Password'];  $DKLss= md5($sjkjh);  

if(($slkd == 1)){
if(($jsd == $osi) && ($lkd = $DKLss)){
	echo "<input type='text' value='Loading' class='cnkw' id='ewk' readonly/>";
		echo "<input type='hidden' value='79889'  id='beng' readonly/>";
	
}else{
	echo "<input type='text' value='User Not Found' class='cnkw' id='ewk' readonly/>";
}
}else{

mysql_select_db($DB_name,$MySQL_CON);
$swr = mysql_query("SELECT * FROM librarian WHERE Email = '$jsd'")or die(mysql_error());
$bygg = mysql_fetch_assoc($swr); $chggg = mysql_num_rows($swr);
$nkknnk = $bygg['Email'];  $tree = $bygg['Password'];  $njkkkh = md5($sjkjh); 

if(($chggg == 1)){
if(($jsd == $nkknnk)){
	echo "<input type='text' value='Loading' class='cnkw' id='ewk' readonly/>";
		echo "<input type='hidden' value='65452'  id='beng' readonly/>";
	
}else{
	echo "<input type='text' value='User Not Found' class='cnkw' id='ewk' readonly/>";
}
}else{
	echo "<input type='text' value='Invalid User' class='cnkw' id='ewk' readonly/>";
}
}
}

?>
<?php //Registration
$KEDJ="";
if(isset($_REQUEST['SPAPdl'])){
	$KEDJ = $_REQUEST['SPAPdl'];

}

$LSKAlk="";
if(isset($_REQUEST['ALLw'])){
	$LSKAlk = $_REQUEST['ALLw'];
}

$Slmsl="";
if(isset($_REQUEST['dsna'])){
	$Slmsl = $_REQUEST['dsna'];
}

$smka="";
if(isset($_REQUEST['DAK'])){
	$smka = $_REQUEST['DAK'];
}

$Slks="";
if(isset($_REQUEST['APsl'])){
	$Slks = $_REQUEST['APsl'];
}

$kejkv="";
if(isset($_REQUEST['AkLZMX'])){  
   $kejkv =$_REQUEST['AkLZMX']; 
}

$KSLak="";
if(isset($_REQUEST['xmcmAL'])){
	$KSLak = $_REQUEST['xmcmAL'];
}

$lask="";
if(isset($_REQUEST['KDJk'])){
	$lask = $_REQUEST['KDJk'];
}

$SLA="";
if(isset($_REQUEST['AJSgs'])){
	$SLA = $_REQUEST['AJSgs'];
}
$SKMf="";
if(isset($_REQUEST['SKMf'])){
	$SKMf = $_REQUEST['SKMf'];
}
$misd="";
if(isset($_REQUEST['lyn'])){
	$misd = $_REQUEST['lyn'];
}
$kiki="";
if(isset($_REQUEST['kiki'])){
	$kiki = $_REQUEST['kiki'];
}

$goThru = "";

// Remember to put email and names in lowercase

if((!empty($SLA))&& (!empty($KEDJ)) && (!empty($lask)) &&(!empty($KSLak))&&(!empty($kejkv))&&(!empty($Slks))&&(!empty($smka))&&(!empty($Slmsl))&&(!empty($LSKAlk))){
	
$gargo = ""; $job = ""; $jug=""; $cht = "$KEDJ $LSKAlk"; $lpsd = md5($Slmsl); 
	if($lask == "Student"){
		$gargo = "libuser"; $job = "INSERT INTO libuser (Name, Password,  Email, TelephoneNo, Gender, NationalID) VALUES 
	('$cht', '$lpsd','$Slks','$kejkv','$SLA','$KSLak')"; $jug="5265";
	}elseif($lask == "Librarian"){
		$gargo = "librarian";	$job = "INSERT INTO librarian (Name, Password, Email, TelephoneNo, Gender, NationalID) VALUES 
	('$cht', '$lpsd','$Slks','$kejkv','$SLA','$KSLak')"; $jug="8245";
	}
	mysql_select_db($DB_name,$MySQL_CON);
	$cnakj = mysql_query("SELECT * FROM $gargo WHERE Email ='$Slks' ")or die(mysql_error());
	 $ohu = mysql_num_rows($cnakj);

	 if($ohu > 0){
		 echo "Bby";
		  echo "<input type='hidden' value='2265' id='sert' class='jud' >";
	 }else{
	mysql_select_db($DB_name,$MySQL_CON);
	$crwd = mysql_query("SELECT * FROM $gargo WHERE TelephoneNo ='$kejkv' ")or die(mysql_error());
	 $reddt = mysql_num_rows($crwd);
	 
	 	 if($reddt > 0){
		 
		  echo"<input type='hidden' value='45887' id='sert' class='jud' >"; 
		 }else{
	echo "Pain";
	mysql_select_db($DB_name,$MySQL_CON);
	$SLdk = mysql_query("$job")or die(mysql_error());

	mysql_select_db($DB_name,$MySQL_CON);
	$cuajj = mysql_query("SELECT * FROM Course")or die(mysql_error());
	$hlp = mysql_fetch_assoc($cuajj);
	
	$goThru = 52545; 
	
	if($lask == "Student"){
	
	echo "<form method='POST' enctype='multipart/form-data' action = 'UserDets.php' ><table class='ovr' border='1px solid #ccc'>
		<input id='pet' value='$Slks' name='dopleer' type='hidden'>
		<tr>
		        <td ><select name='gaga'>";
				do{
					$Ib = $hlp['Course'];
				echo "<option>$Ib</option>";
				}while($hlp = mysql_fetch_assoc($cuajj));
				echo "</select>
				</td></tr>
					<tr><td><input type='text' name='brik' class='hko' placeholder='Admission Year' required/></td><td><input type='text' name='aud' class='hko' placeholder='Graduation Year' required/></td></tr>
	<tr><td><img src='' class='hart'></td><td ><label class='vmnm'> Profile Picture </label><br><input type='file'  class='mser' name='ashes'></td></tr>
	<tr><td><input value='Cancel' class='psl' onclick='edchan()' type='button' ></td><td><input type='submit'  name='buttonImg' class='fool' value ='Finish' ></td></tr>
				</table></form>
		";			
	}elseif($lask == "Librarian"){

	mysql_select_db($DB_name,$MySQL_CON);
	$niggz = mysql_query("SELECT * FROM library ")or die(mysql_error());
	 $tick = mysql_fetch_assoc($niggz); $drift=0;
	 
		echo "<table class='ovr'>
		        <tr><td colspan = '2'><span class='ncnkp'>Welcome Librarian $KEDJ</span></td></tr>
		        <tr>
				<tr><td><span>Select The Library Where You Work<br>If It's Not There Select No Library</span></td>
				<td ><select id='bitch'><option value='0'>No Library In List</option>";
				do{
					$drift++;
					$syd = $tick['LibraryName'];
					echo "<option >$syd</option>";
				}while($tick = mysql_fetch_assoc($niggz));
				echo "</select></td></tr>
				<tr><td><input type = 'button' value='Back' class='psl' onclick='uuh(1)'></td><td><input type='button' class='fool' value='Next' onclick='mytor(1)'></td></tr>
				</table>";

	}
		 }
	 }

	
}

if(!empty($kiki)){
	if(empty($goThru)){
	  echo "  <table name='SDODIO' class='ADPDAO' >
	<tr><th colspan='2' class='asnk'>Create Account</th></tr>
    <tr><td>
    <input type='text' id='ASLSkks6452' class='Dlooapp' placeholder=' First Name ' onclick='DKmS(6452)' required /></td>
    <td>  <input type='text' id='ASLSkks24578' class='Dlooapp' placeholder=' Last Name ' onclick='DKmS(24578)' required /> </td>
    </tr>
    <tr>
    <td>
      <input type='password' id='ASLSkks4241' class='Dlooapp' placeholder='Password' onclick='DKmS(4241)' required /></td>
      <td>  <input type='password' id='ASLSkks5415' class='Dlooapp' placeholder='Confirm Password' onclick='DKmS(5415)' required /></td>
    </tr>
    <tr>
      <td colspan='2'><input type='email' id='ASLSkks7845' class='Dlooapp' placeholder='Email' onclick='DKmS(7845)' required /></td>
    </tr>
    <tr>
      <td colspan='2'><input type='number' id='ASLSkks122425' class='Dlooapp' placeholder='Telephone' onclick='DKmS(122425)' required/></td>
    </tr>
    <tr>
    <td class='asnk' > <span> Male </span> <input type='radio' id='AKAss151' onclick='wako(151)' name='GNDR' value='Male' required checked/>
<span> Female </span> <input type='radio' id='AKAss875' name='GNDR' onclick='wako(875)' value='Female' >
	</td>
    <td>
        <select id='ASLSkks425' name='SKLDkk' class='Dlooapp' onclick='DKmS(425)'>
        <option name='DKkk' class='DKLA'>Are You...</option>
        <option name='FKMam' class='DKLA'>Student</option>
        <option name='SDJKL' class='DKLA'>Librarian</option>
        </select>
        </td>
    </tr>
	<tr>
	<td colspan='2'><input type='number' placeholder='National ID' id='ASLSkks9685' class='Dlooapp' onclick='DKmS(9685)' required/></td>
	</tr>
    <tr>
      <td colspan='2' ><input type='button' id='SDSkk' class='SDKdakk' value='Create Account' onclick='sdjhDS()'  required /></td>
    </tr>
	<tr><td><a href='#' class='Amk'>Need Assistance?</a></td></tr>
    </table>";
	}
}
if(isset($_POST['buttonImg'])){
	
	$target = "Img/".basename($_FILES['ashes']['name']);
    $cdnmj = $_FILES['ashes']['name'];
	$nkdj = "Img/".$_FILES['ashes']['name'];
	$tempn = $_FILES['ashes']['tmp_name'];
	
	move_uploaded_file($tempn,$target);

	 $cum = $_POST['gaga'];// StudentID 
	$yurh = $_POST['dopleer']; //Email
	$trs = $_POST['aud']; //GradYear
	$ult = $_POST['brik']; //AdmissionYear

		mysql_select_db($DB_name,$MySQL_CON);
	$nckj = mysql_query("SELECT SchoolID FROM libuser WHERE SchoolID ='$cum' ")or die(mysql_error());
	 $pery = mysql_num_rows($nckj);
	
	if($pery > 0){
		echo "StudentID Exists";
	}else{
mysql_select_db($DB_name,$MySQL_CON);
mysql_query("UPDATE libuser SET SchoolID = '$cum', UserImage = '$cdnmj', GradYear = '$trs', AdmYear = '$ult' WHERE Email = '$yurh'");

header('Location:LogIn.php');
	}
 

}


if(!empty($SKMf)){
	
     mysql_select_db($DB_name,$MySQL_CON);
	 mysql_query("DELETE FROM librarian WHERE Email = '$misd'  ")or die(mysql_error());
		
	
}

$poze="";
if(isset($_REQUEST['brut'])){
	$poze = $_REQUEST['brut'];
}
$tetra="";
if(isset($_REQUEST['tetra'])){
	$tetra = $_REQUEST['tetra'];
}
$train="";
if(isset($_REQUEST['train'])){
	$train = $_REQUEST['train'];
}
$sil="";
if(isset($_REQUEST['sil'])){
	$sil = $_REQUEST['sil'];
}
$ouip="";
if(isset($_REQUEST['ouip'])){
	$ouip = $_REQUEST['ouip'];
}
$bnm="";
if(isset($_REQUEST['bnm'])){
	$bnm = $_REQUEST['bnm'];
}
$midn="";
if(isset($_REQUEST['midn'])){
	$midn = $_REQUEST['midn'];
}

$dark="";
if(isset($_REQUEST['dark'])){
	$dark = $_REQUEST['dark'];
}

$ayay="";//LibrarName
if(isset($_REQUEST['ayay'])){
	$ayay = $_REQUEST['ayay'];
}
$spik="";//Stacks
if(isset($_REQUEST['spik'])){
	$spik = $_REQUEST['spik'];
}


$dang="";//Resources
if(isset($_REQUEST['dang'])){
	$dang = $_REQUEST['dang'];
}
$vacay="";//Insert to Resources
if(isset($_REQUEST['vacay'])){
	$vacay = $_REQUEST['vacay'];
}

$savg="";//ResourceLocale
if(isset($_REQUEST['savg'])){
	$savg = $_REQUEST['savg'];
}

$holla="";//Shelves
if(isset($_REQUEST['holla'])){
	$holla = $_REQUEST['holla'];
}

$sexx="";//Storey
if(isset($_REQUEST['sexx'])){
	$sexx = $_REQUEST['sexx'];
}
$krrr="";//Classification
if(isset($_REQUEST['krrr'])){
	$krrr = $_REQUEST['krrr'];
}



if(!empty($poze)){ // Next
	if($poze == 2488255){

	echo "<table class='bcja'>
	<tr><td colspan = '2'><span>Name Of Your Library?</span></td></tr>
	<tr><td colspan = '2'><input type='text' id='skj' placeholder='Library Name' class='hko' required/></td></tr>
	<tr><td colspan = '2'><span>How Many Storeys Does The Library Have?</span></td></tr>
	<tr><td colspan = '2'><input type='radio' id='KOD1' class='qpk' onclick='Ajkw(1,1)' value='0' name='poop' checked/><input type = 'text' class='wahs' value='Not a Building' readonly/></br>
	<input type='radio' id='KOD2' class='qpk' onclick='Ajkw(1,2)' value='1' name='poop' /><input type = 'text' class='wahs' value='1 Storey Ground Floor, 1st Floor' readonly/></br>
	<input type='radio' id='KOD3' class='qpk' onclick='Ajkw(1,3)' value='2' name='poop' /><input type = 'text' class='wahs' value='2 Stories Ground Floor, 1st,2nd Floor' readonly/></br>
	<input type='radio' id='KOD4' class='qpk'  onclick='Ajkw(1,4)' value='3' name='poop' /><input type = 'text' class='wahs' value='3 Stories Ground Floor, 1st,2nd,3rd Floor' readonly/></br>
	<input type='radio' id='KOD5' class='qpk' onclick='Ajkw(1,5)' value='4' name='poop' /><input type = 'text' class='wahs' value='4 Stories Ground Floor, 1st,2nd,3rd,4th Floor' readonly/></br>
	<input type='radio' id='KOD6' class='qpk' onclick='Ajkw(1,6)' value='5' name='poop' /><input type = 'text' class='wahs' value='5 Stories Ground Floor, 1st,2nd,3rd,4th,5th Floor' readonly/></td></tr>
	<tr><td><input type = 'button' value='Previous' onclick='uuh(2)'></td><td><input type='button' value='Next' onclick='mytor(2)'></td></tr></table>";
	}
	if($poze == 1258){
		
			mysql_select_db($DB_name,$MySQL_CON);
	$bkjj = mysql_query("SELECT * FROM library WHERE LibraryName ='$sil' ");
	$nkjkj = mysql_fetch_assoc($bkjj); 
	$bruyi = mysql_num_rows($bkjj);  
	
	$rui = "";
	if($bruyi > 0){
		$rui = ($bruyi + 1);
	}else{
		$rui=1;
	}
	
mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("UPDATE  librarian  SET  Library = '$sil' WHERE Email = '$dark' ")or die (mysql_error());

mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("UPDATE  library  SET  Staff = '$rui' WHERE LibraryName = '$sil' ")or die (mysql_error());
echo "<input type = 'hidden' value='5268' id='longy'>";


	}
	if($poze == 4587666){

$cult = array();

if($train == "1"){
	$cult = array("0"=>"Ground Floor","1"=>"1st Floor");
}elseif($train == "2"){
	$cult = array("0"=>"Ground Floor","1"=>"1st Floor","2"=>"2nd Floor");
}elseif($train == "3"){
	$cult = array("0"=>"Ground Floor","1"=>"1st Floor","2"=>"2nd Floor","3"=>"3rd Floor");
}elseif($train == "4"){
	$cult = array("0"=>"Ground Floor","1"=>"1st Floor","2"=>"2nd Floor","3"=>"3rd Floor","4"=>"4th Floor");
}elseif($train == "5"){
	$cult = array("0"=>"Ground Floor","1"=>"1st Floor","2"=>"2nd Floor","3"=>"3rd Floor","4"=>"4th Floor","5"=>"5th Floor");
}
$hit = (count($cult)-1);
foreach($cult as $cud => $bgahh){
	
	$pit ="";
	if($cud == 0){
		$pit ="style='display:block'";
	}else{
		$pit ="style='display:none'";
	}
	
	$mome=""; $starli="";
	if($hit == $cud){
		$mome = "Next"; $starli = "mytor($tetra)";
	}else{
		$mome = "OK"; $starli = "ring($tetra,$cud)";
	}
	$tels=""; $vix="";
	if($cud == 0){
		$tels = "uuh($tetra)"; $vix = "Back";
	}else{
		$tels = "ting($tetra,$cud)"; $vix = "Previous";
	}
	
	if($tetra == 10){
		$brzy=""; $cnt="";
		if($cud == $hit){
			$brzy="dhj"; $cnt="dodoi";
		}else{
			$brzy="dhj$cud"; $cnt="dodoi$cud";
		}
	echo "<div id='trth$cud' $pit><table class='ovr'>
	<tr><td colspan = '2'><span class='vmnm'>How Many Shelves does the library have on the $bgahh?</span></td></tr>
	<tr><td colspan = '2'><input type'text' placeholder='Number of Shelves' id='$brzy' ></td></tr>
1	<tr><td colspan = '2'><span class='vmnm'>How Many Book Stacks does each Shelve have on the $bgahh?</span></td></tr>
	<tr><td colspan = '2'><input type'text' placeholder='Number of Stack' id='$cnt' ></td></tr>
	<tr><td><input type = 'button' value='$vix' onclick='$tels' class='psl'></td><td><input type = 'button' value='$mome' class='fool' onclick='$starli'></td></tr></table></div>";
	}
	if($tetra == 11){
		$brzy=""; $cnt=""; $poop=""; $psh="";
		if($cud == $hit){
			$brzy="Cancel"; $cnt="Finish"; $poop="hit"; $psh="ler";
		}else{
			$brzy="Previous"; $cnt="OK"; $poop="hit$cud"; $psh="ler$cud";
		}
	echo "<div id='trth$cud' $pit><table class='ovr'>
	<tr><td colspan = '2'>";
	echo "<span class='vmnm'>List Down Resources Found In Your Library on the $bgahh</span></td></tr>
			<tr><td  colspan = '2'><textarea id='$poop'></textarea></td></tr>
	<tr><td  colspan = '2'><span class='vmnm'>Where Are The Resources Listed Above Found In Your Library on the $bgahh</span></td></tr>
			<tr><td  colspan = '2'><input type'text' placeholder='Locale of Resources' id='$psh' ></td></tr>";
			echo "<tr><td><input type='button' class='ferl' value = 'Add'  onclick='nvr($cud)'></td></tr>
	<tr><td><input type = 'button' value='$brzy' onclick='uuh(4)' class='psl'></td><td><input type = 'button' value='$cnt' class='fool' onclick='$starli'></td></tr></table></div>";
	}
}
	}
	if($poze == 15455){

echo "<input type='hidden' value='4154' id='filins'>";
	echo "<table class='ovr'>
	<tr><td colspan = '2'><span class='vmnm'>Please Select The Type of Classification System Used In Your Library</span></td></tr>
	<tr><td>
	<input type='radio' id='PKO1' class='qpk' onclick='Ajkw(14,1)' value='Dewey System' name='NKQJ' checked/><input type = 'text' class='wahs' value='Dewey System' readonly/></br>
	<input type='radio' id='PKO2' class='qpk' onclick='Ajkw(14,2)' value='Outside Shower Provided' name='NKQJ' /><input type = 'text' class='wahs' value='There is a bathroom outside the room' readonly/></br>
	<input type='radio' id='PKO3' class='qpk' onclick='Ajkw(14,3)' value='Fixed Hot Shower Provided' name='NKQJ' /><input type = 'text' class='wahs' value='There is hot water shower provided in the room' readonly/></br>
	<input type='radio' id='PKO4' class='qpk' onclick='Ajkw(14,4)' value='Wired Hot Shower Provided' name='NKQJ' /><input type = 'text' class='wahs' value='There is a shower inside the room with wiring for hot showered water' readonly/>
	</td></tr>
	<tr><td><input type = 'button' value='Previous' onclick='uuh(1)' class='psl'></td><td><input type = 'button' value='Next' class='fool' onclick='mytor(3)'></td></tr></table>";
	}
	if($poze == 4578){

	
	echo "<table class='ovr'>
	<tr><td colspan = '2'><span class='vmnm'>How Many Shelves does the library have?</span></td></tr>
				<tr><td colspan = '2'><input type'text' placeholder='Number of Shelves' id='dhj' ></td></tr>
1				<tr><td colspan = '2'><span class='vmnm'>How Many Book Stacks does each Shelve have?</span></td></tr>
				<tr><td colspan = '2'><input type'text' placeholder='Number of Stack' id='dodoi' ></td></tr>
	<tr><td><input type = 'button' value='Previous' onclick='uuh(3)' class='psl'></td><td><input type = 'button' value='Next' class='fool' onclick='mytor(4)'></td></tr></table>";
	}
	if($poze == 478454){
    $blvn = 68284;
	echo "<table class='ovr'>
	<tr><td colspan = '2'>";
	echo "<span class='vmnm'>List Down Resources Found In Your Library</span></td></tr>
			<tr><td  colspan = '2'><textarea id='hit'></textarea></td></tr>
	<tr><td  colspan = '2'><span class='vmnm'>Where Are The Resources Listed Above Found In Your Library</span></td></tr>
			<tr><td  colspan = '2'><input type'text' placeholder='Locale of Resources' id='ler' ></td></tr>";
			echo "<tr><td><input type='button' value = 'Add' class='ferl' onclick='nvr($blvn)'></td></tr>
	<tr><td><input type = 'button' value='Cancel' onclick='uuh(4)' class='psl'></td><td><input type = 'button' value='Finish' class='fool' onclick='mytor(5)'></td></tr></table>";
	}
	if($poze == 8522){
		
	mysql_select_db($DB_name,$MySQL_CON);
	$bkjj = mysql_query("SELECT * FROM library WHERE LibraryName ='$ayay' ");
	$nkjkj = mysql_fetch_assoc($bkjj); 
	$bruyi = mysql_num_rows($bkjj);  
	$rui = "";
	if($bruyi > 0){
		$rui = ($bruyi + 1);
	}else{
		$rui=1;
	}
	
	mysql_select_db($DB_name,$MySQL_CON);
$njknj = mysql_query ("INSERT INTO library(LibraryName,Staff,Shelves,Classification,Storey,ShlveStck) 
	VALUES('$ayay','$rui','$holla','$krrr','$sexx','$spik')") ;
	mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("UPDATE  librarian  SET  Library = '$ayay' WHERE Email = '$dark' ")or die (mysql_error());

echo "<input type = 'hidden' value='5268' id='longy'>";
	}
 

}
if(!empty($vacay)){
		mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("INSERT INTO resource(LibraryName,Storey,Resources,ResourceLocale) 
	VALUES('$ayay','$bnm','$dang','$savg')") ;
	
}
if(!empty($ouip)){
	if($ouip == 49888){
		mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("INSERT INTO storeylibrary(LibraryName,Storey,Shelves,ShlveStck) 
	VALUES('$ayay','$bnm','$holla','$spik')") ;
	}
	if($ouip == 5858){
				mysql_select_db($DB_name,$MySQL_CON);
mysql_query ("INSERT INTO resource(LibraryName,Storey,ResourceLocale,Resources) 
	VALUES('$ayay','$bnm','$savg','$dang')") ;

	}
	
}
if(!empty($midn)){
	if($midn == 56666){
     mysql_select_db($DB_name,$MySQL_CON);
	 mysql_query("DELETE FROM storeylibrary WHERE LibraryName = '$ayay' AND Storey = '$bnm' ")or die(mysql_error());
	}	
	if($midn == 5254){
     mysql_select_db($DB_name,$MySQL_CON);
	 mysql_query("DELETE FROM resource WHERE LibraryName = '$ayay' AND Storey = '$bnm' ")or die(mysql_error());
	}	 
}

?>
<?php
$lSDL="";
if(isset($_REQUEST['LASksE'])){
	$lSDL = $_REQUEST['LASksE'];
}

if(!empty($lSDL)){
	mysql_select_db($DB_name,$MySQL_CON);
	$DSPl = mysql_query("SELECT Password FROM latebkr WHERE Email ='$lSDL' ");
	$dWSD = mysql_fetch_assoc($DSPl); $KEO = mysql_num_rows($DSPl);
	$Fod = $dWSD['Password'];
	if($KEO == 1){
		$from="lateBooking@gmail.com";
$email = $lSDL;
$subject="Your Account Forgotten Password";
$message="Here is your Password:".$Fod.".For More assistance Email us at the address above";

mail( "To:".$email, $subject, $message, "From:".$from);
echo "Mail Sent Successfully";
	}elseif($KEO < 1){
		echo "Email Does Not Exist";
	}elseif($KEO > 1){
		echo "Security Abnormality!Your Account Could Have Been Hacked";
	}else{
		echo "Checking Password Failed";
	}
	
}
?>