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

$sumn="";
if(isset($_REQUEST['sumn'])){
	$sumn = $_REQUEST['sumn'];
}
if(!empty($jsd)){

$MALS = mysqli_query($MySQL_CON,"SELECT * FROM libuser WHERE Email = '$jsd'")or die(mysqli_error($MySQL_CON));
$nmaS = mysqli_fetch_assoc($MALS); $slkd = mysqli_num_rows($MALS);
$osi = $nmaS['Email']; $yay = $nmaS['Name'];  $lkd = $nmaS['Password'];  $DKLss= md5($sjkjh);  
 $stop = ""; $recs = "";
if(($slkd == 1)){
if(($jsd == $osi) && ($lkd == $DKLss)){
	$stop = "$yay Please Wait"; $recs = 1;
	
}else{
	$stop = "User Not Found"; $recs = 0;
}
}else{
$swr = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Email = '$jsd'")or die(mysqli_error($MySQL_CON));
$bygg = mysqli_fetch_assoc($swr); $chggg = mysqli_num_rows($swr);
$nkknnk = $bygg['Email'];  $tree = $bygg['Password'];  $njkkkh = md5($sjkjh); 

if(($chggg == 1)){
if(($jsd == $nkknnk) && ($tree == $njkkkh)){
	$stop = "$yay Your Management experience awaits..";	$recs = 2;
}else{
	$stop = "User Not Found"; $recs = 0;
}
}else{
	$stop = "Invalid User"; $recs = 0;
}
}
 
$bed[$recs] = $stop;

print_r(json_encode($bed));
}

if(!empty($sumn)){
echo "<table name='ADKAD' id='cumn' class='hiya' >
	<tr><th><span class='Amk'>LogIn Here</span></th></tr>
    <tr><td><input type='email' id='DSKDKS' class='ADAa' onclick='ASLS(145)' placeholder=' example@gmail.com ' required /></td></tr>
   
     <tr><td><input type='password' id='AZSjdsSa' class='ADAa' onclick='ASLS(875)' placeholder='Password' required /></td></tr>
    
	  <tr><td><input type='button' id='SDKjasA' class='SDKdakk' value='LogIn' onclick='SDKD()'  required readonly/></td></tr>
    <tr><td class='Amk'>To get assistance please click<a href='#' > Here</a></td></tr>
    </table>";
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

$alli="";
if(isset($_REQUEST['alli'])){
	$alli = $_REQUEST['alli'];
}
$chess="";
if(isset($_REQUEST['chess'])){
	$chess = $_REQUEST['chess'];
}
$famil="";
if(isset($_REQUEST['famil'])){
	$famil = $_REQUEST['famil'];
}

$goThru = "";

// Remember to put email and names in lowercase
$cht = "";  $lpsd = "";
if(!empty($Slks)){
if(empty($alli)){
	
$gargo = ""; $job = ""; $jug=""; 
	if($lask == "Student"){
		$gargo = "libuser";  $jug="5265";
	}elseif($lask == "Librarian"){
		$gargo = "librarian"; $jug="8245";
	}
	
	$cnakj = mysqli_query($MySQL_CON,"SELECT * FROM $gargo WHERE Email ='$Slks' ")or die(mysqli_error($MySQL_CON)); 
	 $ohu = mysqli_num_rows($cnakj);

	 if($ohu > 0){
		 
		  echo "<input type='hidden' value='2265' id='sert'  >";
	 }else{
	
	$crwd = mysqli_query($MySQL_CON,"SELECT * FROM $gargo WHERE TelephoneNo ='$kejkv' ")or die(mysqli_error($MySQL_CON));
	 $reddt = mysqli_num_rows($crwd);
	 
	 	 if($reddt > 0){
		 
		  echo"<input type='hidden' value='45887' id='sert'>"; 
		 }else{
	
	echo"<input type='hidden' value='528666' id='sert'>"; 
	
	$goThru = 52545; 
	
	if($lask == "Student"){
	
	echo "
	<table class='ovr' id='tonit' ><tr>
		        <td><select id='gaga' class = 'hoes'>";
				echo "<option>B.Science</option>";
				echo "<option>B.Engineering</option>";
			
				echo "</select>
				</td>
		        <td><select id='taok' class = 'hoes'>";
				echo "<option>Computer Science</option>";
				echo "<option>Actuarial Science</option>";
				echo "<option>Mechanical</option>";
				echo "</select>
				</td></tr>
					<tr><td><input type='text' id='brik' class='hko' placeholder='Admission Year' required/></td><td><input type='text' id='aud' class='hko' placeholder='Graduation Year' required/></td></tr>
	<tr><td colspan = '2'><label class='ncnkp'> Profile Picture </label></td></tr>
	<tr><td colspan = '2'><input type='file'  class='mser' name='ashes' id='bck'></td></tr>
	<tr><td colspan = '2'><div id='wqrf'><i class='fas fa-user'></i></div></td></tr>
	<tr><td><input value='Cancel' class='psl' id='dripn' type='button' ></td><td><input type='button' id='kaye' class='psl'  value ='Finish' ></td></tr>
				</table>
		";			
	}elseif($lask == "Librarian"){

	
	$niggz = mysqli_query($MySQL_CON,"SELECT * FROM library ")or die(mysqli_error($MySQL_CON));
	 $tick = mysqli_fetch_assoc($niggz); $drift=0;
	 
	 	echo "<input type='hidden' value='5268' id='longy'>";
		
		echo "<table class='ovr' id='tonit'>
		        <tr><td colspan = '2'><span class='ncnkp'>Welcome Librarian $KEDJ</span></td></tr>
		        
				<tr><td colspan = '2'><span class='ncnkp'>Select The Library Where You Work<br>If It's Not There Select Create New Library</span></td></tr>
				<tr><td colspan = '2'><select id='bitch' class='seus'><option value='0'>Create New Library</option>";
				do{
					$drift++;
					$syd = $tick['LibraryName'];
					echo "<option >$syd</option>";
				}while($tick = mysqli_fetch_assoc($niggz));
				echo "</select></td></tr>
				<tr><td><input type = 'button' value='Back' class='psl' onclick='uuh(1)'></td><td><input type='button' class='psl' value='Next' onclick='mytor(1)'></td></tr>
				</table>";

	}
		 }
	 }

}	
}
$cum = "";
if(isset($_REQUEST['cum'])){
	$cum = $_REQUEST['cum'];
}
$yurh="";
if(isset($_REQUEST['yurh'])){
	$yurh = $_REQUEST['yurh'];
}
$trs="";
if(isset($_REQUEST['trs'])){
	$trs = $_REQUEST['trs'];
}
$ult="";
if(isset($_REQUEST['ult'])){
	$ult = $_REQUEST['ult'];
}
$bih="";
if(isset($_REQUEST['bih'])){
	$bih = $_REQUEST['bih'];
}
$hyp="";
if(isset($_REQUEST['hyp'])){
	$hyp = $_REQUEST['hyp'];
}
if(!empty($famil)){
	echo "<div class='lds-css ng-scope'>
<div class='lds-spin' style='width:100%;height:100%'><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div></div>";
}

if($alli == 65625){

$goThru = 6526265; $cht = "$KEDJ $LSKAlk"; $lpsd = md5($Slmsl); 	

mysqli_query($MySQL_CON,"UPDATE libuser SET Name = '$cht', Password = '$lpsd', Email = '$Slks', TelephoneNo = '$kejkv', Gender = '$SLA', NationalID = '$KSLak',
Degree = '$cum', Title = '$hyp', GradYear = '$trs', AdmYear = '$ult' WHERE Email = '$yurh'")or die(mysqli_error($MySQL_CON));


}

if(!empty($kiki)){
	if(empty($goThru)){
	  echo "  <table name='SDODIO' class='ADPDAO' >
	<tr><th colspan='2' class='asnk'>Create Account</th></tr>
    <tr><td>
    <input type='text' id='ASLSkks6452' class='wanh' placeholder=' First Name ' onclick='DKmS(6452)' required /></td>
    <td>  <input type='text' id='ASLSkks24578' class='wanh' placeholder=' Last Name ' onclick='DKmS(24578)' required /> </td>
    </tr>
    <tr>
    <td>
      <input type='password' id='ASLSkks4241' class='wanh' placeholder='Password' onclick='DKmS(4241)' required /></td>
      <td>  <input type='password' id='ASLSkks5415' class='wanh' placeholder='Confirm Password' onclick='DKmS(5415)' required /></td>
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
        <select id='ASLSkks425' name='SKLDkk' class='wanh' onclick='DKmS(425)'>
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

$hole="";
if(isset($_REQUEST['hole'])){
	$hole = $_REQUEST['hole'];
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

$tht="";//Classification
if(isset($_REQUEST['shout'])){
	$tht = $_REQUEST['shout'];
}

$art="";//fines
if(isset($_REQUEST['art'])){
	$art = $_REQUEST['art'];
}
$okpl="";//duration of loan
if(isset($_REQUEST['okpl'])){
	$okpl = $_REQUEST['okpl'];
}
$ric = ""; //TempName
if(isset($_REQUEST['ric'])){
	$ric = $_REQUEST['ric'];
}



if(!empty($hole)){	

$mnb = ($hole + 1);
for($drnk = 1;$drnk < $mnb;$drnk++){

echo "<textarea id='alw$drnk' class='rem'></textarea><br>";

echo "<input type = 'hidden' value='$mnb' id='past'>";
}

}
if(!empty($poze)){ // Next
	if($poze == 2488255){
echo "<input type = 'hidden' value='52552' id='longy'>";
	echo "<table class='ovr'>
	<tr><td colspan = '2'><span class='ncnkp'>Name Of Your Library?</span></td></tr>
	<tr><td colspan = '2'><input type='text' id='skj' placeholder='Library Name' class='hko' required/></td></tr>
	<tr><td colspan = '2'><span class='ncnkp'>How Many Storeys Does The Library Have?</span></td></tr>
	<tr><td colspan = '2'>
	<input type='radio' id='KOD1' class='qpk' onclick='Ajkw(1,1)' value='0' name='poop' checked/><div class='wahs' >Not a Building</div></br>
	<input type='radio' id='KOD2' class='qpk' onclick='Ajkw(1,2)' value='1' name='poop' /><div class='wahs' >1 Storey Ground Floor, 1st Floor</div></br>
	<input type='radio' id='KOD3' class='qpk' onclick='Ajkw(1,3)' value='2' name='poop' /><div class='wahs' >2 Stories Ground Floor, 1st,2nd Floor</div></br>
	<input type='radio' id='KOD4' class='qpk'  onclick='Ajkw(1,4)' value='3' name='poop' /><div class='wahs'>3 Stories Ground Floor, 1st,2nd,3rd Floor</div></br>
	<input type='radio' id='KOD5' class='qpk' onclick='Ajkw(1,5)' value='4' name='poop' /><div class='wahs'>4 Stories Ground Floor, 1st,2nd,3rd,4th Floor</div>
	<tr><td><input type = 'button' class = 'psl' value='Previous' onclick='uuh(2)'></td><td><input class = 'psl' type='button' value='Next' onclick='mytor(2)'></td></tr></table>";
	}
	if($poze == 1258){
		
$goThru = 6526265; $cht = "$KEDJ $LSKAlk"; $lpsd = md5($Slmsl); 	

		
	$bkjj = mysqli_query($MySQL_CON,"SELECT * FROM library WHERE LibraryName ='$sil' ");
	$nkjkj = mysqli_fetch_assoc($bkjj); 
	$bruyi = mysqli_num_rows($bkjj);  
	
	 $jeal = $nkjkj['Staff'];
	 
	if($bruyi > 0){
		$rui = ($jeal + 1);
	}else{
		$rui=1;
	}
	
$job = mysqli_query($MySQL_CON,"INSERT INTO librarian (Name, Password, Email, TelephoneNo, Gender, NationalID,Library,StaffLevel) VALUES 
	('$cht', '$lpsd','$Slks','$kejkv','$SLA','$KSLak','$sil','$rui')")or die(mysqli_error($MySQL_CON));

mysqli_query($MySQL_CON,"UPDATE  library  SET  Staff = '$rui' WHERE LibraryName = '$sil' ")or die (mysqli_error($MySQL_CON));
echo "<input type = 'hidden' value='5268' id='longy'>";


	}
	if($poze == 4587666){
echo "<input type = 'hidden' value='52552' id='longy'>";
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
		$tels = "ting($cud)"; $vix = "Previous";
	}
	
	if($tetra == 10){
		$brzy=""; $cnt="";
		if($cud == $hit){
			$brzy="dhj"; $cnt="dodoi";
		}else{
			$brzy="dhj$cud"; $cnt="dodoi$cud";
		}
	echo "<div id='trth$cud' $pit><table class='ovr'>
	<tr><th colspan = '2'>Shelves</th></tr>
	<tr><td colspan = '2'><span class='ncnkp'>How Many Shelves does the library have on the $bgahh?</span></td></tr>
	<tr><td colspan = '2'><input type='number' placeholder='Number of Shelves' class='hko' id='$brzy' ></td></tr>
	<tr><td colspan = '2'><span class='ncnkp'>How Many Book Stacks does each Shelve have on the $bgahh?</span></td></tr>
	<tr><td colspan = '2'><input type='number' placeholder='Number of Stack' class='hko' id='$cnt' ></td></tr>
	<tr><td><input type = 'button' value='$vix' onclick='$tels' class='psl'></td><td><input type = 'button' value='$mome' class='psl' onclick='$starli'></td></tr></table></div>";
	}
	if($tetra == 11){
		$brzy=""; $cnt=""; $poop=""; $psh=""; $singl = ""; $yuu = ""; $hedr = "";
		if($cud == $hit){
			$brzy="Cancel"; $cnt="Finish"; $poop="hit"; $psh="ler"; $singl = "file"; $yuu = "wqrf"; $hedr = "";
		}else{
			$brzy="Previous"; $cnt="OK"; $poop="hit$cud"; $psh="ler$cud"; $singl = "file$cud";  $yuu = "wqrf$cud"; $hedr = "onchange='sushi($cud)'";
		}
			echo "
	<div id='trth$cud' $pit>
	<div id='wait$cud'>
	<table class='ovr'>
	<tr><th >Resources</th><td><button class='deep' onclick='ahara()'>Skip</button></td></tr>
	<tr><td colspan = '2'>";
	echo "<span class='ncnkp'>List Down Resources Found In Your Library In Specific Rooms on the $bgahh</span></td></tr>
			<tr><td><input type='number' class='drp' id='aunt$cud' ></td>
			<td><button class='lowr' onclick='cluse($cud)'><i class='fas fa-plus'></i> Add Items</button></td></tr>
			<tr><td colspan = '2'><div id='lyf$cud' class='goin'><textarea id='$poop' class='rem'></textarea></div></td></tr>
				<tr><td  colspan = '2'><span class='ncnkp'>Where Are The Resources Listed Above Found In Your Library on the $bgahh</span></td></tr>
			<tr><td colspan = '2'><input type'text' placeholder='Locale of Resources' class='hko' id='$psh' ></td></tr>
			<tr><td><input type = 'button' value='$brzy' onclick='uuh(4)' class='psl'></td><td><input type = 'button' value='Go'  class='psl' onclick='coop($cud,1)'></td></tr></table>
			</div><div id='half$cud' style='display:none;'>
			<table class='ovr'><tr><td  colspan = '2'><span class='ncnkp'>Insert Picture(s) of Resources Found In Your Library on the $bgahh</span></td></tr>
			<tr><td  colspan = '2'><input type='file' class='mser' name='file' $hedr id='$singl' ></td></tr>
			<tr><td  colspan = '2'><div id='$yuu'  class='para'><i class='fas fa-layer-group'></i></div></td></tr>
";			echo "<tr><td colspan = '2'><button class='psl' onclick='nvr($cud)'><i class='fas fa-plus'></i> More Rooms</button></td></tr>
	<tr><td><input type = 'button' value='Back' onclick='coop($cud,2)' class='psl'></td><td><input type = 'button' value='$mome' id='boyy' class='psl' onclick='$starli'></td></tr>
	</table></div></div>";
	}
}
	}
	if($poze == 15455){

echo "<input type='hidden' value='4154' id='longy'>";
	echo "<table class='ovr'>
	<tr><th colspan = '2'>Classification</th></tr>
	<tr><td colspan = '2'><span class='ncnkp'>Please Select The Type of Classification System Used In Your Library</span></td></tr>
	<tr><td  colspan = '2'>
	<input type='radio' id='PKO1' class='qpk' onclick='Ajkw(14,1)' value='Dewey System'  checked/><div class='wahs'>Dewey System</div></br>
	</td></tr>
	<tr><td><input type = 'button' value='Previous' onclick='uuh(1)' class='psl'></td><td><input type = 'button' value='Next' class='psl' onclick='mytor(3)'></td></tr></table>";
	}
	if($poze == 4578){

	echo "<input type = 'hidden' value='6256' id='longy'>";
	echo "<table class='ovr'>
	<tr><th colspan = '2'>Shelves</th></tr>
	<tr><td colspan = '2'><span class='ncnkp'>How Many Shelves does the library have?</span></td></tr>
				<tr><td colspan = '2'><input type = 'number' placeholder='Number of Shelves' class='hko' id='dhj' ></td></tr>
				<tr><td colspan = '2'><span class='ncnkp'>How Many Book Stacks does each Shelve have?</span></td></tr>
				<tr><td colspan = '2'><input type = 'number' placeholder='Number of Stack' class='hko' id='dodoi' ></td></tr>
	<tr><td><input type = 'button' value='Previous' onclick='uuh(3)' class='psl'></td><td><input type = 'button' value='Next' class='psl' onclick='mytor(4)'></td></tr></table>";
	}
	if($poze == 478454){
    
	echo "<input type = 'hidden' value='6256' id='longy'>";
	
			$blvn = 68284;
	echo "<div id='wait'>
	<table class='ovr'>
	<tr><th >Resources</th><td><button class='deep' onclick='ahara()'>Skip</button></td></tr>
	<tr><td colspan = '2'>";
	echo "<span class='ncnkp'>List Down Resources Found In Your Library In Specific Rooms</span></td></tr>
			<tr><td colspan = '2'><input type='number' class='drp' id='aunt' >
			<button class='lowr' onclick='fukn()'><i class='fas fa-plus'></i> Add Items</button></td></tr>
			<tr><td colspan = '2'><div id='lyf'><textarea id='hit' class='rem'></textarea></div></td></tr>
				<tr><td  colspan = '2'><span class='ncnkp'>Where Are The Resources Listed Above Found In Your Library</span></td></tr>
			<tr><td colspan = '2'><input type'text' placeholder='Locale of Resources' class='hko' id='ler' ></td></tr>
			<tr><td><input type = 'button' value='Previous' onclick='uuh(4)' class='psl'></td><td><input type = 'button' value='OK'  class='psl' onclick='hair(1)'></td></tr></table>
			</div><div id='half'>
			<table class='ovr'><tr><td  colspan = '2'><span class='ncnkp'>Insert Picture(s) of Resources Found In Your Library </span></td></tr>
			<tr><td  colspan = '2'><input type='file' class='mser' name='file' id='file' ></td></tr>
			<tr><td  colspan = '2'><div id='wqrf'><i class='fas fa-layer-group'></i></div></td></tr>
";			echo "<tr><td colspan = '2'><button class='psl' onclick='nvr($blvn)'><i class='fas fa-plus'></i> More Rooms</button></td></tr>
	<tr><td><input type = 'button' value='Back' onclick='hair(2)' class='psl'></td><td><input type = 'button' value='Next' id='boyy' class='psl' onclick='mytor(5)'></td></tr>
	</table></div>";
	
	}
	if($poze == 8522){
		echo "<input type='hidden' value='4154' id='longy'>";
		echo "
	<table class='ovr'>
	<tr><th colspan = '2' >Finance</th></tr>
	<tr><td colspan = '2'><span class='ncnkp'>How much Is The Library Fine</span></td></tr>
	<tr><td  colspan = '2'><input type = 'number' placeholder='Fine Per Book' class='hko' id='sec' ></td></tr>
	<tr><td  colspan = '2'><span class='ncnkp'>Duration of book loan</span></td></tr>
	<tr><td  colspan = '2'><input type = 'text' placeholder='Duration of Loan' class='hko' id='rets'></td></tr>
		<tr><td><input type ='button' value='Previous' class='psl' onclick='uuh(6)'></td><td><input class='psl' type='button' onclick='mytor(7)' value='Next'></td></tr></table>";

	}
	if($poze == 625585){
		echo "<input type='hidden' value='4154' id='longy'>";
	echo "

	<table class='ovr' id='tonit'>
	<tr><th colspan = '2'>Library Image</th></tr>
	<tr><td colspan = '2'><span class='ncnkp'>Input Images For Your Library </span></td></tr>
			<tr><td  colspan = '2'><input type='file' class='mser'  id='dois' ></td></tr>
			<tr><td  colspan = '2'><div id='wqrf'><i class='fas fa-building'></i></div></td></tr>
	<tr><td><input type ='button' value='Back' class='psl' onclick='uuh(5)'></td><td><input class='psl' type='button' onclick='mytor(6)' value='FINISH'></td></tr></table></form>";
	}
 if($poze == 65255){
	echo "<input type='hidden' value='5268' id='longy'>";
	
	$goThru = 6526265;$cht = "$KEDJ $LSKAlk"; $lpsd = md5($Slmsl); 
	
	
	$bkjj = mysqli_query($MySQL_CON,"SELECT * FROM storeylibrary WHERE LibraryName ='$ayay' ");
	$nkjkj = mysqli_fetch_assoc($bkjj); 
	$bruyi = mysqli_num_rows($bkjj); 

	$some = mysqli_query($MySQL_CON,"SELECT * FROM librarian WHERE Library ='$ayay' ");
	$day = mysqli_num_rows($some); 
	
	
	$rui = ($day + 1); $onst = "";
	
	if($bruyi > 0){
		 $resl = array();
				do{
		 $lpok = $nkjkj['Shelves'];
		
		array_push($resl,$lpok);
		
		}while($nkjkj = mysqli_fetch_assoc($bkjj));
		
		$onst = (array_sum($resl) + 1);
	}else{
		 $onst = 0;
	}
	
		$job = mysqli_query($MySQL_CON,"INSERT INTO librarian (Name, Password, Email, TelephoneNo, Gender, NationalID,Library,StaffLevel) VALUES 
	('$cht', '$lpsd','$Slks','$kejkv','$SLA','$KSLak','$ayay','$rui')")or die(mysqli_error($MySQL_CON));
	
mysqli_query($MySQL_CON,"UPDATE library SET Staff = '$rui', Shelves = '$holla', Classification = '$krrr',
Storey = '$bnm', ShlveStck = '$spik', First = '$onst', Fine = '$art', Duration = '$okpl' WHERE LibraryName = '$ayay'")or die(mysqli_error($MySQL_CON));

}

}

if(!empty($ouip)){
	if($ouip == 49888){
		
	$holy = mysqli_query($MySQL_CON,"SELECT * FROM storeylibrary WHERE LibraryName ='$ayay' ");
	$nkjkj = mysqli_fetch_assoc($holy); 
	$tekni = mysqli_num_rows($holy); 
	
	$onst =  "";  $playn = array();
		if($tekni > 0){
		$resl = array();
		do{
		 $lpok = $nkjkj['Shelves'];
		$aroun = $nkjkj['Storey'];
		array_push($resl,$lpok);
		array_push($playn,$aroun);
		
		}while($nkjkj = mysqli_fetch_assoc($holy));
		
		$onst = (array_sum($resl) + 1);
	}else{
		$onst = 0;
	}
		
		if(in_array($bnm,$playn)){
			
mysqli_query($MySQL_CON,"UPDATE storeylibrary SET  Shelves = '$holla', ShlveStck = '$spik', First = '$onst' WHERE LibraryName = '$ayay' AND Storey = '$bnm'")or die (mysqli_error($MySQL_CON));
		}else{
		mysqli_query($MySQL_CON,"INSERT INTO storeylibrary(LibraryName,Storey,Shelves,ShlveStck,First) 
	VALUES('$ayay','$bnm','$holla','$spik','$onst')") ;	
		}
	}
	if($ouip == 5858){
			
$apok = explode(",",$dang);		 $pdkfo = array();

	foreach($apok as $pnzi => $teka){
		if($teka !== ""){
			array_push($pdkfo,$teka);
		}
	}
	
	$clamoo = implode("<br>",$pdkfo);

foreach($clamoo as $trndn){
	
	mysqli_query($MySQL_CON,"UPDATE resource SET Resources = '$trndn', ResourceLocale = '$savg' WHERE  Storey = '$bnm' AND LibraryName = '$ayay'")or die (mysqli_error($MySQL_CON));
	}
	}
	
}


?>
<?php
$lSDL="";
if(isset($_REQUEST['LASksE'])){
	$lSDL = $_REQUEST['LASksE'];
}

if(!empty($lSDL)){
	
	$DSPl = mysqli_query($MySQL_CON,"SELECT Password FROM latebkr WHERE Email ='$lSDL' ");
	$dWSD = mysqli_fetch_assoc($DSPl); $KEO = mysqli_num_rows($DSPl);
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