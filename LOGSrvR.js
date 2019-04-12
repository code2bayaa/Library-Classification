
function SDKD(){ //*LogIn*

document.getElementById("SDKjasA").addEventListener('click',duka());

	var WFC = document.getElementById("DSKDKS").value;
	var PKK = document.getElementById("AZSjdsSa").value;
	var ADKJ = document.getElementById("Sks");
   

	
if((WFC =="") || (PKK =="") ){
	
	document.getElementById("Sks").style.display = "block";
	if(WFC==""){
			document.getElementById("DSKDKS").style.border = "1px solid red";
			ADKJ.innerHTML += "Email Required!<br>";
	}
			if(PKK==""){
		 document.getElementById("AZSjdsSa").style.border = "1px solid red";
		 ADKJ.innerHTML += "Password Required!<br>";
	}

}else{
	
		var SPL = "PELW="+WFC+"&SDPL="+PKK;
	
	var SXTE = new XMLHttpRequest();
	SXTE.onreadystatechange = function(){
		if(SXTE.readyState == 4 && SXTE.status == 200){
			ADKJ.innerHTML = this.responseText;
var ydtyw = document.getElementById("ewk").value;	
var morfo = document.getElementById("beng").value;	
if( ydtyw == "Loading"){
	if(morfo == 79889){
	setTimeout('wEgE()',1000)
	}
if(morfo == 65452){
	setTimeout('blurt()',1000)
}
	}		
		}
	};
SXTE.open("POST","UserDets.php",true);
SXTE.setRequestHeader("Content-type","application/x-www-form-urlencoded");
SXTE.send(SPL);
WFC = "";
}  
	
}

function wEgE(){
	location.assign('Home.php');
}
function blurt(){
	location.assign('LibHome.php');
}

function ASLS(njkl){
	var nsAM	= document.getElementById("Sks").innerHTML;
	if(nsAM!=""){
		document.getElementById("Sks").style.display ="none";
		if(njkl == 875){
		 document.getElementById("AZSjdsSa").style.borderTop = "none"; 
		 document.getElementById("AZSjdsSa").style.borderLeft = "none"; 
		 document.getElementById("AZSjdsSa").style.borderRight = "none"; 
		}
	 if(njkl == 145){
		 document.getElementById("DSKDKS").style.borderTop = "none";
		 document.getElementById("DSKDKS").style.borderLeft = "none";
		 document.getElementById("DSKDKS").style.borderRight = "none";
	 }
	}
	document.getElementById("Sks").innerHTML = "";

}



var Brka;  // Gender 
function wako(imbe){
	Brka = document.getElementById("AKAss"+imbe).value;
	
}
var SPAkks,haoai,SPKa,LAMJ5,LAMJ6,LAMJ1,LAMJ2,LAMJ3,LAMJ4,LAMJ8,LAMJ7,Ipori;

function del(){
	var spt = "kiki="+26525;
	
			var AKS = new XMLHttpRequest();
	AKS.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("DSJDK").innerHTML = this.responseText;
		}
	};
	AKS.open("POST","UserDets.php",true);
	AKS.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	AKS.send(spt);
}

function sdjhDS(){ //*Registration*


	 LAMJ1 = document.getElementById("ASLSkks6452"); // First Name
	 LAMJ2 = document.getElementById("ASLSkks24578"); // Last Name
	 LAMJ3 = document.getElementById("ASLSkks4241"); // Password
	 LAMJ4 = document.getElementById("ASLSkks5415"); // Confirm Password
	 LAMJ5 = document.getElementById("ASLSkks7845"); // Email 
	 LAMJ6 = document.getElementById("ASLSkks122425"); // telephone 
	 LAMJ8 = document.getElementById("ASLSkks9685"); // ID 
	 LAMJ7 = document.getElementById("ASLSkks425"); // Status 
	 Ipori;
	if(Brka == undefined){
		Ipori = "Male";
	}else{
		Ipori = Brka;
	}
	
	 SPAkks = document.getElementById("DKAOhd").innerHTML;
	
			var skjSw = "&SPAPdl="+LAMJ1.value+"&ALLw="+LAMJ2.value+"&dsna="+LAMJ3.value+"&DAK="+LAMJ4.value+"&APsl="+LAMJ5.value+"&AkLZMX="+LAMJ6.value+"&xmcmAL="+LAMJ8.value+"&KDJk="+LAMJ7.value+"&AJSgs="+Ipori+"&kiki=525";
			 
			 // Look for Email Pattern To which it must be the same as the pattern for it to be able to log In.
			 if((LAMJ1.value==""||LAMJ2.value==""||LAMJ3.value==""||LAMJ4.value==""||LAMJ5.value==""||LAMJ6.value==""||LAMJ8.value==""||LAMJ7.value =="Are You..."||LAMJ4.value!=LAMJ3.value)){ 
			 document.getElementById("DKAOhd").style.display = "block";
		 haoai = 2;
			 if(SPAkks==""){
			document.getElementById("DKAOhd").style.color = "red";
			if(LAMJ4.value!=LAMJ3.value){ LAMJ4.style.border = "2px solid orange"; LAMJ3.style.border = "2px solid orange"; document.getElementById("DKAOhd").innerHTML ="Password Does Not Match! </br>";}
			 if(LAMJ1.value==""){ LAMJ1.style.border = "2px solid red";  document.getElementById("DKAOhd").innerHTML += "First Name Required </br>";}
			 if(LAMJ2.value==""){ LAMJ2.style.border = "2px solid red";  document.getElementById("DKAOhd").innerHTML += "Last Name Required </br>";}
			 if(LAMJ3.value==""){ LAMJ3.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML += "Please Input Password </br>";}
			 if(LAMJ4.value==""){ LAMJ4.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML += "Please Confirm Password </br>";}
			 if(LAMJ5.value==""){ LAMJ5.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML += "Please Input Email </br>"}
			 if(LAMJ6.value==""){ LAMJ6.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML +="Please Input Telephone Number </br>"}
			 if(LAMJ8.value==""){ LAMJ8.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML +="National ID Required </br>";}	
			 if(LAMJ7.value=="Are You..."){ LAMJ7.style.border = "2px solid red"; document.getElementById("DKAOhd").innerHTML +="Choose Prominent Status </br>";}	
			 }
			 }
			 else{

		var AKS = new XMLHttpRequest();
	AKS.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("DSJDK").innerHTML = this.responseText;
			var stck = document.getElementById("sert").value;
			if(stck == 2265){
				alert("Email Exists");
			}
			if(stck == 45887){
				alert("Telephone No Exists");
			}
		}
	};
	AKS.open("POST","UserDets.php",true);
	AKS.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	AKS.send(skjSw);
	
			}	
}

var byrt,nxt,nkwm,hoi,dew,frg,wer,moji,cdfg,gew,liss,poli,gig,vai,sdc,jok,payd,cri,nhrt,bxjj,ity,dans;

 function Ajkw(subra,nigz){

 if(subra == 14){
	gig = document.getElementById("PKO"+nigz).value; // Classification	
 }
 if(subra == 1){
	gew = document.getElementById("KOD"+nigz).value; // Storeys	
 }
}

function ting(jing,cud){ //back
var bolp;
var bad = (cud - 1);

document.getElementById("trth"+bad).style.display="block";
document.getElementById("trth"+cud).style.display="none";

if(jing == 10){

		
	bolp ="bnm="+cud+"&ayay="+hoi+"&midn="+56666;
}
if(jing == 11){

		
	bolp ="bnm="+cud+"&ayay="+hoi+"&midn="+5254;
}

	var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("rb").innerHTML = this.responseText;
	}	
	};
	OPKX.open("GET","UserDets.php?"+bolp,true);
	OPKX.send();	
}

function ring(pko,tong){ //Nxt
var bad = (tong + 1);
var madd,goose,bump,ser,roun;
document.getElementById("trth"+bad).style.display="block";
document.getElementById("trth"+tong).style.display="none";
	
	if(pko == 10){
			goose = document.getElementById("dhj"+tong).value;//Shelves
	        bump = document.getElementById("dodoi"+tong).value; //number of stacks
			
		madd = 49888+"&spik="+bump+"&holla="+goose+"&bnm="+tong+"&ayay="+hoi;
		if(bump == ""|| goose == ""){
			moji = 1;
					if(goose == ""){
			document.getElementById("dhj"+tong).style.borderBottom = "1px solid red";
					}
					if(bump == ""){
			document.getElementById("dodoi"+tong).style.borderBottom = "1px solid red";
					}
		}else{
			moji = 2;
		}
		
	}
	if(pko == 11){
		ser = document.getElementById("hit"+tong).value; //resources
		roun = document.getElementById("ler"+tong).value; // resourcelocale
		
			if(ser == "" || roun == ""){
			moji = 1;
			if(roun == ""){
				document.getElementById("ler"+tong).style.borderBottom = "1px solid red";
			}
			if(ser == ""){
				document.getElementById("hit"+tong).style.borderBottom = "1px solid red";
			}	
		}else{
			moji = 2;
			madd = 5858+"&dang="+ser+"&savg="+roun+"&bnm="+tong+"&ayay="+hoi;
		}
		
	}

	
	if(moji == 2){
	
	var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("rb").innerHTML = this.responseText;
	}	
	};
	OPKX.open("GET","UserDets.php?ouip="+madd,true);
	OPKX.send();
	}
}
var bert;
function mytor(nkajh){
	
	

	var soll,moji;
	if(nkajh == 1){
		moji = 2;
		byrt = document.getElementById("bitch").value; //Library
		if(byrt == 0){
			soll = 15455;
		}else{
			soll = 1258+"&dark="+LAMJ5.value+"&sil="+byrt;
		}
	}
	if(nkajh == 2){
				hoi = document.getElementById("skj").value;//Library name
				
				if(hoi == "" ){
				document.getElementById("skj").style.borderBottom = "1px solid red";
				}else{
					
				moji = 2;
				if(gew == 0 || gew == undefined ){
					soll = 4578;
				}else{
					soll = 4587666+"&train="+gew+"&tetra="+10;
				}
				}

	}
	if(nkajh == 3){
	if(gig == undefined ){
		gig = "Dewey System";
	}		
			moji = 2;
			soll = 2488255;	
	}
	if(nkajh == 4){
		
		nxt = document.getElementById("dodoi").value; //number of stacks
		liss = document.getElementById("dhj").value; //number of shelves
		
		if(nxt == "" || liss == ""){
			if(nxt == ""){
				document.getElementById("dodoi").style.borderBottom = "1px solid red";
			}
			if(liss == ""){
			document.getElementById("dhj").style.borderBottom = "1px solid red";
			}
		}else{
		soll = 478454;
		moji = 2;
				}
	}
	if(nkajh == 5){
		
		vai = document.getElementById("hit").value; //resources
		poli = document.getElementById("ler").value; // resourcelocale
		
	soll = 8522+"&ayay="+hoi+"&holla="+liss+"&krrr="+gig+"&sexx="+gew+"&spik="+nxt+"&dang="+vai+"&savg="+poli+"&vacay=151"+"&dark="+LAMJ5.value;
		moji = 2;
	}

		if(nkajh == 10){
	soll = 4587666+"&tetra="+11+"&train="+gew;
		nxt = document.getElementById("dodoi").value; //number of stacks
		liss = document.getElementById("dhj").value; //number of shelves
		if(nxt == "" || liss == ""){
			moji = 1;
			if(nxt == ""){
			document.getElementById("dodoi").style.borderBottom = "1px solid red";
			}
			if(liss == ""){
			document.getElementById("dhj").style.borderBottom = "1px solid red";
			}
		}else{
			moji = 2;
		}
	}
	if(nkajh == 11){
	soll = 8522+"&ayay="+hoi+"&holla="+liss+"&krrr="+gig+"&sexx="+gew+"&spik="+nxt+"&dang="+vai+"&savg="+poli+"&vacay=151&dark="+LAMJ5.value;
		vai = document.getElementById("hit").value; //resources
		poli = document.getElementById("ler").value; // resourcelocale
		if(vai == "" || poli == ""){
			moji = 1;
			if(vai == ""){
				document.getElementById("hit").style.borderBottom = "1px solid red";
			}
			if(poli == ""){
				document.getElementById("ler").style.borderBottom = "1px solid red";
			}	
		}else{
			moji = 2;
		}
	}
	
	if(moji == 2){
	
		var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("DSJDK").innerHTML = this.responseText;
		var filij = document.getElementById("longy").value;
		if(filij == 5268){
			setTimeout('nanar()',3000);
		}
	}	
	};
	OPKX.open("GET","UserDets.php?brut="+soll,true);
	OPKX.send();
	}
	
}

function nanar(){
	location.assign('LogIn.php');
}

function nvr(hia){
var crss,whts,gang;
if(hia == 68284){
 whts = document.getElementById("hit").value; //Resources
 gang = document.getElementById("ler").value; //Resource de Locale
 crss = gew;
}else{
 whts = document.getElementById("hit"+hia).value; //Resources
 gang = document.getElementById("ler"+hia).value; //Resource de Locale
 crss = hia;
}


	var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("rb").innerHTML = this.responseText;
		if(hia == 68284){
		document.getElementById("hit").value = "";
		document.getElementById("ler").value = "";
		}else{
		document.getElementById("hit"+hia).value = "";
		document.getElementById("ler"+hia).value = "";
		}
	}	
	};
	OPKX.open("GET","UserDets.php?vacay="+65256+"&ayay="+hoi+"&dang="+whts+"&savg="+gang+"&bnm="+crss,true);
	OPKX.send();
}

function uuh(dick){
	
	var bon;
	if(dick == 1){
		bon = "kiki=64256&SKMf=6565&lyn="+LAMJ5.value;
	}
	if(dick == 2){
		bon = "brut=15455";
	}
	if(dick == 3){
		bon = "brut=2488255";
	}
	if(dick == 4){
		bon = "brut=4578";
	}
	if(dick == 10){
		bon = "brut=2488255";
	}
	if(dick == 11){
		bon = "brut=4587666&tetra="+10;
	}

	
			var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("DSJDK").innerHTML = this.responseText;
	}	
	};
	OPKX.open("GET","UserDets.php?"+bon,true);
	OPKX.send();
}

function DKmS(nsj){
	
	var person = document.getElementById("DKAOhd").innerHTML;
	document.getElementById("DKAOhd").style.display = "none";
	if(haoai == 2){
	document.getElementById("ASLSkks"+nsj).style.border = "#000 1px solid";

		 document.getElementById("DKAOhd").innerHTML = "";
	}
}


function sjdA(){ //*ForrgotPassword***
	var Ptruty = document.getElementById("DksEr");
	var Aksij = document.getElementById("Skdgj");
	if(Ptruty.value ==""){
		Ptruty.style.border ="1px solid 1px solid red";
		Ptruty.style.background ="purple";
		Aksij.innerHTML = "Please Input Your Email Address";
		Aksij.style.color = "1px solid red";
	}else{
		var Ldksd = Ptruty.value;
		var LPXWY = new XMLHttpRequest();
	LPXWY.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("Skdgj").innerHTML = this.responseText;
			Aksij.style.color = "1px solid red";
			setTimeout('hsS()',100);
		}
	};
	LPXWY.open("POST","UserDets.php",true);
	LPXWY.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	LPXWY.send("LASksE="+Ldksd);
	
	}
}
function SDhds(){
	var Ptruty = document.getElementById("DksEr"); var Aksij = document.getElementById("Skdgj");
	Ptruty.style.border ="1px solid #000";
		Ptruty.style.background ="orange"; Aksij.innerHTML ="";
}
function hsS(){
	location.assign('LogIn.php');
}