<?php
$FKL="";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $FKL ="&". htmlentities($_SERVER['QUERY_STRING']);
}

$suio = $_SERVER['PHP_SELF'];

$Ssdok = 1; $DLSs = 2;

if(isset($_GET['DKSLkk'])){
	$DSsd = "CSDnb"; $sbdjhF = "FSKaka"; $DdkjaL ="Create Account";
	$LDK ="Register.php"; $DSL = "ForgotPAss.php";  $GLWk ="Forgot Password";
}elseif(isset($_GET['FSKaka'])){
$DSsd = "DKSLkk"; $sbdjhF = "CSDnb"; $DdkjaL ="LogIn";
	$LDK ="LogIn.php"; $DSL = "Register.php";  $GLWk ="Create Account";
}elseif(isset($_GET['CSDnb'])){
	$DSsd = "DKSLkk"; $sbdjhF = "FSKaka"; $DdkjaL ="LogIn";
	$LDK ="LogIn.php"; $DSL = "ForgotPAss.php";  $GLWk ="Forgot Password";
}else{
	  
if($suio == "/LibManager/LogIn.php"){
	$DSsd = "CSDnb"; $sbdjhF = "FSKaka";
$LDK = "Register.php";  
$DSL = "ForgotPAss.php"; $GLWk = "Forgot Password"; $DdkjaL = "Create Account";
}else{
	$DSsd = "DKSLkk"; $sbdjhF = "FSKaka";
$LDK = "LogIn.php";  
$DSL = "ForgotPAss.php"; $GLWk = "Forgot Password"; $DdkjaL = "LogIn.php";	
}
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
    <link style="text/css" rel="stylesheet" href="wanna.css">
		<title>EasyLibrary</title>
	</head>
	<body class="shakiti">
	<div id="Header" class="DKIADLJnsDFKos">
	<span class="QQQS">EasyLibrary</span>
		<form name="DKS" method="GET" action="<?php  printf("$LDK?%s",$FKL); ?>">
<a href="<?php printf("$LDK?%s=%d",$DSsd,$Ssdok);?>" class="ajdi"  ><?php echo $DdkjaL; ?></a></form>

	<form name="DSML"  method="GET" action="<?php  printf("$DSL?%s",$FKL); ?>">
<a class="onek" href="<?php printf("$DSL?%s=%d",$sbdjhF,$DLSs); ?>" ><?php echo $GLWk; ?></a>
</form>
    </div>
	</body>
</html>