

var Brka;  // Gender 
function wako(imbe){
	Brka = document.getElementById("AKAss"+imbe).value;
	
}
var SPAkks,haoai,SPKa,LAMJ5,LAMJ6,LAMJ1,LAMJ2,LAMJ3,LAMJ4,LAMJ8,LAMJ7,Ipori;

$(document).ready(function(){
	var spt = "kiki="+26525;
		$.ajax({
		url:"UserDets.php",
		type:"GET",
		data:spt,

		success:function(ata)
		{
			
			document.getElementById('DSJDK').innerHTML = ata;
		}
	})
	
		$.ajax({
		url:"UserDets.php",
		type:"GET",
		data:"famil=6525",

		success:function(ata)
		{	
			document.getElementById('gone').innerHTML = ata;
		}
	})
});
var skjSw;
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
	
			 skjSw = "SPAPdl="+LAMJ1.value+"&ALLw="+LAMJ2.value+"&dsna="+LAMJ3.value+"&DAK="+LAMJ4.value+"&APsl="+LAMJ5.value+"&AkLZMX="+LAMJ6.value+"&xmcmAL="+LAMJ8.value+"&KDJk="+LAMJ7.value+"&AJSgs="+Ipori+"&kiki=525";
			 
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

function ting(cud){ //back
var bolp;
var bad = (cud - 1);

document.getElementById("trth"+bad).style.display="block";
document.getElementById("trth"+cud).style.display="none";

}

function ring(pko,tong){ //Nxt

	
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

 
 if(rreser == "undefined"){
	 ser += "";
 }else{
	 for(var f = 1; f < rreser; f++){
		 ser += ",";
		ser += document.getElementById("alw"+f).value; 
		
	 }
 }
		
	if(ser == "" || roun == ""){
			moji = 1;
			if(roun == ""){
				alert("Please Input Resource Location or Skip!");
			}
			if(ser == ""){
				alert("Please Input Resources or Skip!");
			}	
		}else{
			moji = 2;
			madd = 5858+"&dang="+ser+"&savg="+roun+"&bnm="+tong+"&ayay="+hoi+"&shout="+scene;
		}
		
	}

	
	if(moji > 1){
var bad = (tong + 1);
var madd,goose,bump,ser,roun;
document.getElementById("trth"+bad).style.display="block";
document.getElementById("trth"+tong).style.display="none";
	
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
var shout;
var scene;

function sushi(wnt){
	
	var pro  = document.getElementById("file"+wnt).files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);
		frmD.append("doeri",hoi); //LibName
	frmD.append("watid",wnt); //storey
	

	$.ajax({
		url:"Imag.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#wqrf'+wnt).html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			alert(data);
			$('#wqrf'+wnt).html(data);
		}
	})
}
$(document).ready(function(){
$(document).on('change','#file',function(){

	
	var pro  = document.getElementById("file").files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);
	frmD.append("doeri",hoi); //LibName
	frmD.append("watid",gew); //storey

	$.ajax({
		url:"Img.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#wqrf').html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			
			$('#wqrf').html(data);
			
		}
	})
});	
});

var bert;
var lov,inpk;
var telepo;
$(document).on('change','#dois',function(){
	
		var pro  = document.getElementById("dois").files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);
	frmD.append("doeri",hoi); //LibraryName

	$.ajax({
		url:"Imag.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#wqrf').html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			
			$('#wqrf').html(data);
			
		}
	})
});
var rreser; 
function fukn(){
	var wee = document.getElementById("aunt").value;
	
	$.ajax({
		url:"UserDets.php",
		type:"GET",
		data:"hole="+wee,

		success:function(data)
		{
			
			document.getElementById('lyf').innerHTML += data;
			rreser = document.getElementById('past').value;
			
		}
	})
}
function cluse(mii){
	var wee = document.getElementById("aunt"+mii).value;
	
	$.ajax({
		url:"UserDets.php",
		type:"GET",
		data:"hole="+wee,

		success:function(data)
		{
			
			document.getElementById('lyf'+mii).innerHTML += data;
			rreser = document.getElementById('past').value;
			
		}
	})
}
function mytor(nkajh){
	
	var milli;

	var soll,moji;
	if(nkajh == 1){
		moji = 2;
		byrt = document.getElementById("bitch").value; //Library
		if(byrt == 0){
			soll = 15455;
		}else{
			milli = 2;
			soll = 1258+"&alli=625&SPAPdl="+LAMJ1.value+"&ALLw="+LAMJ2.value+"&dsna="+LAMJ3.value+"&DAK="+LAMJ4.value+"&APsl="+LAMJ5.value+"&AkLZMX="+LAMJ6.value+"&xmcmAL="+LAMJ8.value+"&KDJk="+LAMJ7.value+"&AJSgs="+Ipori+"&sil="+byrt;
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
		
		vai = document.getElementById("hit").value; //Resources
		
		 if(rreser == "undefined"){
	 vai += "";
 }else{
	 for(var f = 1; f < rreser; f++){
		 vai += ",";
		vai += document.getElementById("alw"+f).value; 	 
	 }
 }

		poli = document.getElementById("ler").value; // resourcelocale
		
	if(vai == "" || poli == ""){
			moji = 1;
			if(poli == ""){
				alert("Please Input Resource Location or Skip!");
			}
			if(vai == ""){
				alert("Please Input Resources or Skip!");
			}	
		}else{
				soll = 8522;
				moji = 2;
		}
	}
	if(nkajh == 7){
		
		lov = document.getElementById("sec").value; //Fine
		inpk = document.getElementById("rets").value; // Duration
		if(lov == "" || inpk == ""){
		if(lov == ""){
			document.getElementById("sec").style.borderBottom = "1px solid red";
			}
			if(inpk == ""){
			document.getElementById("rets").style.borderBottom = "1px solid red";
			}
		}else{
			moji = 2;
			soll = 625585;
		}
	}
	if(nkajh == 6){
		milli = 2;

	soll = 65255+"&alli=625&ayay="+hoi+"&holla="+liss+"&krrr="+gig+"&bnm="+gew+"&spik="+nxt+"&dang="+vai+"&savg="+poli+"&shout="+shout+"&art="+lov+"&okpl="+inpk+"&ric="+telepo+"&SPAPdl="+LAMJ1.value+"&ALLw="+LAMJ2.value+"&dsna="+LAMJ3.value+"&DAK="+LAMJ4.value+"&APsl="+LAMJ5.value+"&AkLZMX="+LAMJ6.value+"&xmcmAL="+LAMJ8.value+"&KDJk="+LAMJ7.value+"&AJSgs="+Ipori;
		moji = 2;
	}

	if(nkajh == 10){
	
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
			soll = 4587666+"&tetra="+11+"&train="+gew;
		}
	}
	if(nkajh == 11){
	
	
		vai = document.getElementById("hit").value; //resources
		poli = document.getElementById("ler").value; // resourcelocale

 if(rreser == "undefined"){
	 vai += "";
 }else{
	 for(var f = 1; f < rreser; f++){
		 vai += ",";
		vai += document.getElementById("alw"+f).value; 	 
	 }
 }
			if(vai == "" || poli == ""){
			moji = 1;
			if(poli == ""){
				alert("Please Input Resource Location or Skip!");
			}
			if(vai == ""){
				alert("Please Input Resources or Skip!");
			}	
		}else{
				soll = 8522;
				moji = 2;
		}
	}
	
	if(moji > 1){
	
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
	
		if(milli == 2){
		document.getElementById("gone").style.display = "block";
	}
	}
	

	
}
function ahara(){
	
			var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("DSJDK").innerHTML = this.responseText;
	}	
	};
	OPKX.open("GET","UserDets.php?brut=8522",true);
	OPKX.send();
}

function nanar(){
	location.assign('LogIn.php');
}
var biht;

function hair(po){
	
	if(po == 1){
		document.getElementById("half").style.display = "block";
		document.getElementById("wait").style.display = "none";
	}
	if(po == 2){
				document.getElementById("half").style.display = "none";
		document.getElementById("wait").style.display = "block";
	}
}
function coop(mkl,po){
	
	if(po == 1){
		document.getElementById("half"+mkl).style.display = "block";
		document.getElementById("wait"+mkl).style.display = "none";
	}
	if(po == 2){
				document.getElementById("half"+mkl).style.display = "none";
		document.getElementById("wait"+mkl).style.display = "block";
	}
}
function nvr(hia){
var crss,whts,gang;

var tym,pryd;
		
if(hia == 68284){
 whts = document.getElementById("hit").value; //Resources
  document.getElementById("hit").value = "";
tym = ""; 
pryd = shout;
 if(rreser == "undefined"){
	 whts += "";
 }else{
	 for(var f = 1; f < rreser; f++){
		whts += document.getElementById("alw"+f).value; 
		 whts += ",";
		 document.getElementById("alw"+f).value = "";
	 }
 }

 gang = document.getElementById("ler").value; //Resource de Locale
 document.getElementById("ler").value = ""; 
 crss = gew;
}else{
	
	tym = hia; 
	pryd = scene;
 whts = document.getElementById("hit"+hia).value; //Resources
 document.getElementById("hit"+hia).value = "";
 gang = document.getElementById("ler"+hia).value; //Resource de Locale
 document.getElementById("ler"+hia).value = "";
 crss = hia;
}

	document.getElementById("half"+tym).style.display = "none";
	document.getElementById("wait"+tym).style.display = "block";
document.getElementById("wqrf").InnerHTML = "";

	var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("rb").innerHTML = this.responseText;
	}	
	};
	OPKX.open("GET","UserDets.php?vacay="+65256+"&ayay="+hoi+"&dang="+whts+"&savg="+gang+"&bnm="+crss+"&shout="+pryd,true);
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
	if(dick == 5){
		bon = "brut=8522";
	}
	if(dick == 6){
		bon = "brut=625585";
	}
	if(dick == 10){
		bon = "brut=2488255";
		
		gew = 0;
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


$(document).on('click','#kaye',function(){
	
	setTimeout('edchan(1)',2000);

});
$(document).on('click','#dripn',function(){

		setTimeout('edchan(2)',1000);
});
var sacr;

$(document).on('change','#bck',function(){

	
	var pro  = document.getElementById("bck").files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);
frmD.append("watid",LAMJ5.value); //Email

	$.ajax({
		url:"Profile.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#wqrf').html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			
			$('#wqrf').html(data);
			
		}
	})
});
function edchan(og){
	var ger;
	var brk = document.getElementById("gaga").value; //Degree
	var boki = document.getElementById("taok").value; //Title
	var ery = document.getElementById("aud").value; //Grad Year
	var yui = document.getElementById("brik").value; //Adm Year
	
	
	if(ery == "" || yui == ""){
			moji = 1;
			if(ery == ""){
			document.getElementById("aud").style.borderBottom = "1px solid red";
			}
			if(yui == ""){
			document.getElementById("brik").style.borderBottom = "1px solid red";
			}
		}else{
		
	if(og == 1){
		ger = 65625+"&cum="+brk+"&trs="+ery+"&ult="+yui+"&yurh="+LAMJ5.value+"&bih="+sacr+"&hyp="+boki+"&SPAPdl="+LAMJ1.value+"&ALLw="+LAMJ2.value+"&dsna="+LAMJ3.value+"&DAK="+LAMJ4.value+"&APsl="+LAMJ5.value+"&AkLZMX="+LAMJ6.value+"&xmcmAL="+LAMJ8.value+"&KDJk="+LAMJ7.value+"&AJSgs="+Ipori+"&kiki=525";
	}
	if(og == 2){
		ger = 525+"&kiki=65225";
	}
	
	var OPKX = new XMLHttpRequest();
	OPKX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("rb").innerHTML = this.responseText;
				
		if(og == 1){
			document.getElementById("gone").style.display = "block";
	
		setTimeout('hsS()',2000);
		}else{
			document.getElementById("tonit").style.display = "none";
		}
	}	
	};
	OPKX.open("GET","UserDets.php?alli="+ger,true);
	OPKX.send();
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