var mid,want,poj;

var ndani = 0;
var nje = 10;

function mksls(){

	var mirt = document.getElementById("bejh").value;
	var tek = document.getElementById("felkr").value;
	
	if(mirt == "Other"){ //Fade In
	document.getElementById("faya").style.display = "block";
	
	var NeW = ndani/10;
	document.getElementById("faya").style.opacity = NeW;
	ndani++;
	if(ndani == 10){
		document.getElementById("faya").style.opacity = 1;
		clearTimeout(nloui);
		ndani = 0;
		document.getElementById("bejh").value = "Znegin";
		return false;
		
	}
	nloui = setTimeout('mksls()',50);
	
	}
	if(mirt == "Znegin"){ //Fade Out
	
	var NeW = nje/10;
	document.getElementById("faya").style.opacity = NeW;
	nje--;
	if(nje == 0){
		document.getElementById("faya").style.opacity = 0;
		document.getElementById("faya").style.display = "none";
		clearTimeout(nloui);
		nje = 10;
		document.getElementById("bejh").value = "Other";
		return false;
		
	}
	nloui = setTimeout('mksls()',50);
	
	}
}


//Librarian
var mig;
$(document).ready(function(){
	
	  dun = sessionStorage.momery;
	 console.log(dun);
	 
		$.ajax({
		url:"Classification.php",
		data:"rmk="+dun,
type: "GET",

	success:function(response){
				
			
		 newR = $.parseJSON(response);
	
	},
	
	});
	});
$(document).ready(function(){

	mig = setInterval('thruu()',200);
	clearInterval(dan);
	clearInterval(say);
	var chchill = sessionStorage.selff;
	
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("mudre").innerHTML = this.responseText;
		var murn = document.getElementById("lrge").value;
		sessionStorage.momery = murn;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+chchill+"&kolak=64828",true);
	RKLX.send();
	
});
	
			
var sg,amk,akmj,ekl;		var dun;

function thruu(){

			
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("shhs").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?saf=6525"+"&tayra="+clap+"&xteen=1",true);
	RKLX.send();
		
}
/*$(document).ready(function(){
	
$(document).on('click','#wack',function(){
    alert("The paragraph is now hidden");
        
		
		
    });
}); */


var dan,say; var clap = sessionStorage.selff; var fsgfh 
var herti;
var clasf = []; var newR; var dancin = []; var gang = []; var mama = []; var racae = []; var sniky = []; var slum = [];  var shlipee = []; var mortye
var tidashi;
$(document).on('click','#kols',function(){
	
	var beab = document.getElementById("stoop").value;
	
	$(document).ready(function(){
	
	 
		$.ajax({
		url:"LibHomer.php",
		data:"madn=524&tayra="+clap,
type: "GET",
	
	success:function(bad){
			
			var unity = $.parseJSON(bad);
			
			for(var w in unity){
				 mortye = unity[w].BookName;
				var ironic = unity[w].Quantity;
				var strin = unity[w].Price;
				var titu = unity[w].BookShelf;
			
				racae.push(ironic);
			gang.push(mortye);
			sniky.push(strin);
			mama.push(titu);
			}
	
	},
	
	});
	});
			
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+beab,
dataType: "json",
	
	success:function(response){
		
for(var n in response.items){	
		
		document.getElementById("mon").innerHTML = "";
document.getElementById("mon").innerHTML += "<div id='wine'><table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
	var olua;
	var slipin;
		var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 
chnm = sniky[key]
 }
	}
	oathtic = "<button onclick='numbr("+n+")' id='grvty"+n+"' class='champ' ><i class='fas fa-delete'></i></button>";
	slipin = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br><input type='number' id='lyza"+n+"' onkeyup='ego("+n+")' class='picha' value='"+tiny+"'></label>";
	olua = "<label id='noge' class='sadf' ><span class='shiuy'>Price</span><i class='fas fa-coins'></i><br>Ksh <input type='text' id='afrr"+n+"' onkeyup='garll("+n+")' class='picha' value='"+chnm+"'></label>";
	}else{
		
slipin = "";
   olua = "";
		oathtic = "<button id='chst"+n+"' class='champ' onclick='coupl("+n+")'>Add Book</button>";
	}
	 
			document.getElementById("mon").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("mon").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("mon").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("mon").innerHTML += "<td>"+slipin+"</td>";
			document.getElementById("mon").innerHTML += "<td>"+olua+"</td>";
			document.getElementById("mon").innerHTML += "<td>"+oathtic+"</td></tr></table></div>";
			
			var GUD =response.items[n].accessInfo.id;
		}
		
	},
	type:"GET"
	});
});

$(document).ready(function(){
	
	  dun = sessionStorage.momery;
	 
		$.ajax({
		url:"Classification.php",
		data:"rmk="+dun,
type: "GET",
	
	success:function(response){
			
			
		 newR = $.parseJSON(response);
	
	},
	
	});

$(document).on('click','#carO',function(){ // When clicking book
	
	tidashi = 1;
	$(document).ready(function(){
	
	clearInterval(mig); 
	 
		$.ajax({
		url:"LibHomer.php",
		data:"mdke=524&mom=10&tayra="+clap,
type: "GET",
	
	success:function(response){
			
			
		 document.getElementById("mudre").innerHTML = response;
	document.getElementById("uhh").style.backgroundColor = "#fff";
	document.getElementById("uhh").style.color = "#000";
	},
	
	});
	});
	$(document).ready(function(){
	
	 
		$.ajax({
		url:"LibHomer.php",
		data:"madn=524&tayra="+clap,
type: "GET",
	
	success:function(bad){
			
			var unity = $.parseJSON(bad);
			
			for(var w in unity){
				 mortye = unity[w].BookName;
				var ironic = unity[w].Quantity;
				var ijoo = unity[w].Price;
			
				racae.push(ironic);
			gang.push(mortye);
			sniky.push(ijoo);
			}
	
	},
	
	});
	});
			
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+newR,
dataType: "json",
	
	success:function(response){
		
		var mahn = (response.items.length/5);
		console.log(response);
		document.getElementById("brkk").innerHTML = "";
		document.getElementById("brkk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+newR+" "+dun+"</label>";
			document.getElementById("brkk").innerHTML += "<input type='text' value='1' id='menufo' class='chza'>";
			document.getElementById("brkk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chall'>";
			document.getElementById("brkk").innerHTML += "<button id='undec' class='meki'>Previous</button>";
			document.getElementById("brkk").innerHTML += "<button id='cheek' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5);	var srs = 1;		
		var enj = (hoi - srs);
		
for(var n = enj;n < sina; n++){	
		
document.getElementById("brkk").innerHTML += "<div id='wine'><table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
	var olua;
	var slipin;
		var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 
chnm = sniky[key]
 }
	}
	oathtic = "<button onclick='numbr("+n+")' id='grvty"+n+"' class='champ' ><i class='fas fa-delete'></i></button>";
	slipin = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br><input type='number' id='lyza"+n+"' onkeyup='ego("+n+")' class='picha' value='"+tiny+"'></label>";
	olua = "<label id='noge' class='sadf' ><span class='shiuy'>Price</span><i class='fas fa-coins'></i><br>Ksh <input type='text' id='afrr"+n+"' onkeyup='garll("+n+")' class='picha' value='"+chnm+"'></label>";
	}else{
		
slipin = "";
   olua = "";
		oathtic = "<button id='chst"+n+"' class='champ' onclick='coupl("+n+")'>Add Book</button>";
	}
	 
			document.getElementById("brkk").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td>"+slipin+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+olua+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+oathtic+"</td></tr></table></div>";
			
			var GUD =response.items[n].accessInfo.id;
		}
		
	},
	type:"GET"
	});
	});
});
 var enj; var chom; var pegr;
$(document).on('click','#cheek',function(){ // When clicking Next
 chom = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;
clearTimeout(pegr);
	
		if(chom < mbo){
		chom++; var st = 5; var sr = 1;
		var comm = (chom * 5); 
		 enj = (((chom - sr) + st) - 1);
		 pegr = setTimeout("Beth()",1000);
		}
		
});
$(document).on('click','#undec',function(){
	
	clearTimeout(pegr);
 chom = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;

if(chom > 1){
			chom--; var st = 5; var sr = 1;
			var comm = (chom * 5);
		 enj = (comm - st);
	pegr = setTimeout("Beth()",1000);	
}
});
	
	function Beth(){

	
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+newR,
dataType: "json",
	

	success:function(response){
				var mahn = (response.items.length/5);
		console.log(response);
		document.getElementById("brkk").innerHTML = "";
		document.getElementById("brkk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+newR+" "+dun+"</label>";
			document.getElementById("brkk").innerHTML += "<input type='text'  id='menufo' value='"+chom+"' class='chza'>";
			document.getElementById("brkk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chall'>";
			document.getElementById("brkk").innerHTML += "<button id='undec' class='meki'>Previous</button>";
			document.getElementById("brkk").innerHTML += "<button id='cheek' class='sdr'>Next</button>";
		var sina = (chom * 5);
		
for(var n = enj;n < sina; n++){	
		
document.getElementById("brkk").innerHTML += "<div id='wine'><table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
	var olua;
	var slipin;
		var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 
chnm = sniky[key]
 }
	}
	oathtic = "<button onclick='numbr("+n+")' id='grvty"+n+"' class='champ' ><i class='fas fa-delete'></i></button>";
	slipin = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br><input type='number' id='lyza"+n+"' onkeyup='ego("+n+")' class='picha' value='"+tiny+"'></label>";
	olua = "<label id='noge' class='sadf' ><span class='shiuy'>Price</span><i class='fas fa-coins'></i><br>Ksh <input type='text' id='afrr"+n+"' onkeyup='garll("+n+")' class='picha' value='"+chnm+"'></label>";
	}else{
		
slipin = "";
   olua = "";
		oathtic = "<button id='chst"+n+"' class='champ' onclick='coupl("+n+")'>Add Book</button>";
	}
	 
			document.getElementById("brkk").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td>"+slipin+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+olua+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+oathtic+"</td></tr></table></div>";
			var GUD =response.items[n].accessInfo.id;
}
		
	},
	type:"GET"
	});
	}
var phnx;
function ego(bn){ //Change quantity
	


var bthj = document.getElementById("lyza"+bn).value;
var ngwau;

		
			ngwau = dancin[bn];
		
		var styn = "tayra="+clap+"&sit="+bthj+"&pand="+ngwau+"&tohi="+bn;
		
	$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:styn,

	success:function(data)
		{
				alert(data);
			
			},
	});
}

function garll(bn){ //Change Price
	


var bthj = document.getElementById("afrr"+bn).value;
var ngwau;

		
			ngwau = dancin[bn];
		
		var styn = "tayra="+clap+"&urop="+bthj+"&pand="+ngwau+"&tohi="+bn;
		
	$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:styn,

	success:function(data)
		{
				alert(data);
			
			},
	});
}

function numbr(ins){ //Delete Book

var bthj = "";

		
			bthj = dancin[ins];

		var styn = "tayra="+clap+"&humm="+bthj;
		
	$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:styn,

	success:function(data)
		{
				alert(data);
			document.getElementById("grvty"+ins).innerHTML = "<i class='fas fa-book'></i> Deleted";
			},
	});
}
function coupl(hlp){ //Add Book

var bthj = "";

		
			bthj = dancin[hlp];

		var styn = "tayra="+clap+"&stry="+bthj+"&iou="+dun;
		
	$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:styn,

	success:function(data)
		{
				alert(data);
			document.getElementById("chst"+ins).innerHTML = "<i class='fas fa-book'></i> Added";
			},
	});
}


function nsjw(pry){ 
	var sha,sty;

	document.getElementById("mudre").style.display = "block";
	
	if(pry == 1){//CheckIn
		sha = "hed="+52441;
		
		dan =  setInterval('bvksj()',2000);
		setTimeout('bed()',1000);
		
	}
	if(pry == 5){
		sha = "onye=8255"; 	clearInterval(mig);
	}
	if(pry == 6){
		sha = "progr=8255"; clearInterval(mig);	
	}
	if(pry == 4){
		sha = "wrth=524"; 
		say = setInterval('IwN()',1000); clearInterval(mig);
	}
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("mudre").innerHTML = this.responseText;

		if(pry == 5){
				document.getElementById("dan").style.backgroundColor = "#fff";
	document.getElementById("dan").style.color = "#000";
		}
	}	
	};
	RKLX.open("GET","LibHomer.php?"+sha+"&tayra="+clap,true);
	RKLX.send();
}
function bed(){
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("gal").innerHTML = this.responseText;

	}	
	};
	RKLX.open("GET","LibHomer.php?hed="+4524+"&tayra="+clap+"&xteen=2",true);
	RKLX.send();
}
function reg(k){
	if(k == 45){
		document.getElementById("rava").style.display = "block";
		document.getElementById("vatu").style.display = "none";
	}
	if(k == 54){
		document.getElementById("rava").style.display = "none";
		document.getElementById("vatu").style.display = "block";
		say = setInterval('IwN()',200);
		document.getElementById("datt85255").style.backgroundColor = "#000";
		document.getElementById("datt85255").style.color = "#fff";
	}

}
function lpo(hty){
	
	
				document.getElementById("geno").style.display="none";
				document.getElementById("brkk").style.display="none";
				document.getElementById("bunt").style.display="none";
				
	 document.getElementById("jqk").style.display = "block";
	
	var poor,jetch,trnhg;
if(hty == 1){
	
	poor = 2;
	jetch = "kopl"; trnhg = "bool";
}else{
	poor = 1;
	jetch = "bool"; trnhg = "kopl";
}
		document.getElementById(jetch).style.backgroundColor="#fff";
	document.getElementById(jetch).style.color="#000";

	document.getElementById("uhh").style.backgroundColor="#000";
	document.getElementById("uhh").style.color="#fff";
	document.getElementById("bell").style.backgroundColor="#000";
	document.getElementById("bell").style.color="#fff";
	document.getElementById(trnhg).style.backgroundColor="#000";
	document.getElementById(trnhg).style.color="#fff";
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("jqk").innerHTML = this.responseText;

	}	
	};
	RKLX.open("GET","LibHomer.php?playn="+poor+"&tayra="+clap,true);
	RKLX.send();
}
function tek(){
document.getElementById("brkk").style.display="block";
	document.getElementById("geno").style.display="block";
	document.getElementById("jqk").style.display="none";
	document.getElementById("bunt").style.display="none";
	
	document.getElementById("uhh").style.backgroundColor="#fff";
	document.getElementById("uhh").style.color="#000";

	document.getElementById("kopl").style.backgroundColor="#000";
	document.getElementById("kopl").style.color="#fff";
	document.getElementById("bool").style.backgroundColor="#000";
	document.getElementById("bool").style.color="#fff";
	
	document.getElementById("bell").style.backgroundColor="#000";
	document.getElementById("bell").style.color="#fff";
}
$(document).on('click','#bell',function(){ 

document.getElementById("brkk").style.display="none";
	document.getElementById("geno").style.display="none";
	document.getElementById("jqk").style.display="none";
	document.getElementById("bunt").style.display="block";
	
	document.getElementById("uhh").style.backgroundColor="#000";
	document.getElementById("uhh").style.color="#fff";

	document.getElementById("kopl").style.backgroundColor="#000";
	document.getElementById("kopl").style.color="#fff";
	document.getElementById("bool").style.backgroundColor="#000";
	document.getElementById("bool").style.color="#fff";
	
	document.getElementById("bell").style.backgroundColor="#fff";
	document.getElementById("bell").style.color="#000";
});
	var rudi = [];

function nyth(wom,wr,skt,mat,tr,rins,plsk){

	var nihy; 

	if(wr > skt ){
		nihy = "&dolls="+2555;
		
	}else{
		nihy = "";
	}

	var fjv;
	 rins;  // How many shelves
	  plsk; //First no
	
	if(wom > 1){
	
	if(rins < mat){
			
		fjv = 2444;  rins++; plsk++;
	}
		
	}else{  
	if(plsk > tr){
		rins--; plsk--; fjv = 682; 
		}
		
	}


		var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("geno").innerHTML = this.responseText; 
		document.getElementById("ferll").value = rins; 
		document.getElementById("namet").value = plsk;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&mdke=524"+nihy+"&skkk="+fjv+"&nik="+525+"&star="+rins+"&gril="+plsk+"&hity="+skt,true);
	RKLX.send();
}

function shark(rnji){
	
	
	if(rnji > 9){
		dun = (rnji * 10);
	}else{
		dun = "0"+rnji+"0";
	}
	tidashi = 2;
	
		$.ajax({
		url:"Classification.php",
		type:"GET",
		data:"rmk="+dun,

	success:function(response)
		{
			setTimeout('pbts()',1000);
			 newR = $.parseJSON(response);
				
			
			},
	});
	
	
	
}

function pbts(){
	
			var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		
		var response = $.parseJSON(this.responseText);
		
		
		var mahn = (response.items.length/5);
		
		document.getElementById("brkk").innerHTML = "";
			document.getElementById("brkk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+newR+" "+dun+"</label>";
			document.getElementById("brkk").innerHTML += "<input type='text' value='1' id='menufo' class='chza'>";
			document.getElementById("brkk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chall'>";
			document.getElementById("brkk").innerHTML += "<button id='meki' class='meki'>Previous</button>";
			document.getElementById("brkk").innerHTML += "<button id='cheek' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5);			
		var enj = (hoi - 1);
		
for(var n = enj;n < sina; n++){	
		
document.getElementById("brkk").innerHTML += "<div id='wine'><table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
	var olua;
	var slipin;
		var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 
chnm = sniky[key]
 }
	}
	oathtic = "<button onclick='numbr("+n+")' id='grvty"+n+"' class='champ' ><i class='fas fa-delete'></i></button>";
	slipin = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br><input type='number' id='lyza"+n+"' onkeyup='ego("+n+")' class='picha' value='"+tiny+"'></label>";
	olua = "<label id='noge' class='sadf' ><span class='shiuy'>Price</span><i class='fas fa-coins'></i><br>Ksh <input type='text' id='afrr"+n+"' onkeyup='garll("+n+")' class='picha' value='"+chnm+"'></label>";
	}else{
		
slipin = "";
   olua = "";
		oathtic = "<button id='chst"+n+"' class='champ' onclick='coupl("+n+")'>Add Book</button>";
	}
	 
			document.getElementById("brkk").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("brkk").innerHTML += "<td>"+slipin+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+olua+"</td>";
			document.getElementById("brkk").innerHTML += "<td>"+oathtic+"</td></tr></table></div>";
			
			var GUD =response.items[n].accessInfo.id;
		}

	}	
	};
	RKLX.open("GET","https://www.googleapis.com/books/v1/volumes?q="+newR,true);
	RKLX.send();

}
var yuoi;
var dgd,iswr;
function nsdj(nh){
	var chchill = sessionStorage.selff;
	var BN = document.getElementById("ramp"+nh).value; //BkName
		$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:"gui="+BN+"&tayra="+chchill,

	success:function(data)
		{
		alert("Returned");
			
			},
	});
	
}
$(document).on('click','#skai',function(){


	
	document.getElementById("thing").style.display = "none";
	document.getElementById("poli").style.display = "block";
});
$(document).on('click','#blur',function(){

	
	document.getElementById("poli").style.display = "none";
	document.getElementById("thing").style.display = "block";
});

var dghh; var dun;
function huh(fnj,fh){
	var nihy;
	
	sessionStorage.cnt = undefined;
	
	if(fh > fnj ){
		nihy = "&dolls="+5267777;
		
	}else{
		nihy = "";
	}
	 
	 $(document).ready(function(){
		$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:"tayra="+clap+"&mdke=524"+nihy+"&hity="+fnj+"&skkk="+6525,

	success:function(data)
		{
			
			 	document.getElementById("geno").innerHTML = (data);
			dghh = document.getElementById("hjg").value;
			if(dghh == ""){
				document.getElementById("brkk").style.display = "none";
			}else{
				document.getElementById("brkk").style.display = "block";
			}
						   var assis = 0;
	if(dghh > 9){
		dun = (dghh * 10);
	}else{
		dun = "0"+dghh+"0";
	}
	
			document.getElementById("anja"+fnj).addEventListener('click',juck());;
			},
	});
	});
	
}
function juck(){
			$.ajax({
		url:"Classification.php",
		type:"GET",
		data:"rmk="+dun,

	success:function(data)
		{
			
			 newR = $.parseJSON(data);
			 
			setTimeout('pbts()',1000);
			
			},
	});
}

function senRI(nji){
				$.ajax({
		url:"Classification.php",
		type:"GET",
		data:"rmk="+nji,

	success:function(data)
		{
			document.getElementById("memo").style.display = "block";
			 document.getElementById("memo").innerHTML = $.parseJSON(data);
			
			},
	});
}
function terr(ji){
	document.getElementById("memo").style.display = "none";
}

var say,mulit,jerry;
function Iser(vind){
 var spaceshp = document.getElementById("yu"+vind).value;
 
 var maf = 2552;
 
 sessionStorage.maf = spaceshp;
mulit = sessionStorage.maf;
 
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("fallap").innerHTML = this.responseText;
		document.getElementById("datt"+vind).style.background = "#000";
		document.getElementById("datt"+vind).style.color = "#fff";

	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&wrth=8268&morty=652",true);
	RKLX.send();		
}
function IwN(){
	var bett;
	if(mulit == undefined){
		bett = "Staff"; 
	}else{
		bett = mulit;
	}
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("binw").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?ferl="+bett+"&tayra="+clap,true);
	RKLX.send();
}

function phuu(){
		var bett;


	var fae = document.getElementById("gnon").value;
	if(fae == ""){
		alert("Input Text Please");
	}else{
			if(mulit == undefined){
		bett = "Staff"; 
	}else{
		bett = mulit;
	}
	
	
		var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("luth").innerHTML = this.responseText;
		document.getElementById("gnon").value = "";
	}	
	};
	RKLX.open("GET","LibHomer.php?sad="+bett+"&msg="+fae+"&tayra="+clap,true);
	RKLX.send();
	}
	
}

function kings(){ 

	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("gal").innerHTML = this.responseText;
		
	}	
	};
	RKLX.open("GET","LibHomer.php?hed="+4524+"&xteen=2&tayra="+clap,true);
	RKLX.send();
}
function bvksj(){

	
		$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:"hed="+8455+"&xteen=4&tayra="+clap,

	success:function(data)
		{
			document.getElementById("fut").innerHTML = data;		
			},
	});
}

function aler(pud){


var shosho = document.getElementById("tell").value; //Email

var upot;
if(pud == 1){
	upot = 286;
	
}
if(pud == 2){
	upot = 7825;
}


	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("luth").innerHTML = this.responseText;
	dan = setInterval('bvksj()',2000);
 setTimeout('kings()',100); 
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&wnkj="+shosho+"&chacha="+upot+"&xteen=1",true);
	RKLX.send();	
	
}
function dui(acc){

var gys;
if(acc == 45){
	gys = 2;
}else{
	gys = 1;
}
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("gal").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&hed="+4524+"&xteen="+gys,true);
	RKLX.send();
}
function nkjln(){
	document.getElementById("AKJKL").style.display = "none";
}
function sumthn(ghi,gon){
	
	var bath = document.getElementById("nntn"+gon).value; //Email 
	var dayup = document.getElementById(gon+"way"+ghi).value; //Msg
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("luth").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&hatr="+bath+"&styip="+dayup+"&suk="+ghi,true);
	RKLX.send();
}
function echos(){

	var bath = document.getElementById("stay").value; //Week 
	var dayup = document.getElementById("compr").value; //Month
	var cruse = document.getElementById("minu").value; //Year
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("mudre").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&hert="+bath+"&banjil="+dayup+"&pats="+cruse+"&sera=52&wrth=525",true);
	RKLX.send();	
}
function tangl(ui){
	
	document.getElementById("wert").style.display = "none";
	document.getElementById("fik").style.display = "none";
	document.getElementById("wik").style.display = "block";

	var liq,or; 
	
		if(ui == 0){
			liq = "xdf";
		or =  "hors";
	}
	if(ui == 1){
		liq = "hors";
		or =  "xdf";
	}
		
		document.getElementById(liq).style.backgroundColor = "#fff";
	document.getElementById(liq).style.color = "#000";
	
	document.getElementById("dup").style.backgroundColor = "#000";
	document.getElementById("dup").style.color = "#fff";
	document.getElementById(or).style.backgroundColor = "#000";
	document.getElementById(or).style.color = "#fff";
	document.getElementById("dan").style.backgroundColor = "#000";
	document.getElementById("dan").style.color = "#fff";
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("wik").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","LibHomer.php?tayra="+clap+"&onye=5252&mbuni="+ui,true);
	RKLX.send();
}
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
function cersei(drp){
	var liq,or,heven,dislo; 
	if(drp == 1){
		liq = "fik";
		or =  "wert";
		heven = "dup";
		dislo = "dan";
	}
	if(drp == 2){
		liq = "wert";
		or =  "fik";
		heven = "dan";
		dislo = "dup";
	}
	
		document.getElementById(liq).style.display = "block";
	document.getElementById(or).style.display = "none";
	document.getElementById("wik").style.display = "none";
	
		document.getElementById(heven).style.backgroundColor = "#fff";
	document.getElementById(heven).style.color = "#000";
	
	document.getElementById(dislo).style.backgroundColor = "#000";
	document.getElementById(dislo).style.color = "#fff";
	document.getElementById("xdf").style.backgroundColor = "#000";
	document.getElementById("xdf").style.color = "#fff";
	document.getElementById("hors").style.backgroundColor = "#000";
	document.getElementById("hors").style.color = "#fff";
}
function ANSkqjP(){ //Home
	var ADKje = document.getElementById("Dkas").value;
	
	if(ADKje == ""){

		document.getElementById("Dkas").style.color = "red";
	}else{
	document.getElementById("mek").style.display = "block";
	
	var NeW = ndani/10;
	document.getElementById("mek").style.opacity = NeW;
	ndani++;
	if(ndani == 10){
		document.getElementById("mek").style.opacity = 0.9;
		clearTimeout(sukk);
		ndani = 0;
		
		return false;
				
	}
	sukk = setTimeout('ANSkqjP()',100);
		
	var XWPT = new XMLHttpRequest();
	XWPT.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("mek").innerHTML = this.responseText;
				
		}
	};
	XWPT.open("GET","LibHomer.php?blonde="+ADKje,true);
	XWPT.send();
	}
}
function then(cate){
	var dab = document.getElementById("smok"+cate).value;

	
		var XWPT = new XMLHttpRequest();
	XWPT.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("yuz").innerHTML = this.responseText;
				
		}
	};
	XWPT.open("GET","LibHomer.php?trap="+dab+"&tayra="+clap,true);
	XWPT.send();
}



var shout;

$(document).ready(function(){
	
$(document).on('change','#file',function(){

	
	var pro  = document.getElementById("file").files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);


	$.ajax({
		url:"Img.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#upldImg').html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			
			$('#upldImg').html(data);
			
			
		}
	})
});	
});

	$(document).ready(function(){
	
$(document).on('click','#boyy',function(){
	
		var bonk = document.getElementById("thot").value; //Location
	var ser = document.getElementById("delus").value;
	var whisd = document.getElementById("asde").value; //Library
	var topik = document.getElementById("conc").value; //Storey	



	var pro  = document.getElementById("file").files[0];
	var frmD = new FormData();
	
	frmD.append("file",pro);
frmD.append("nono",bonk);
frmD.append("pilo",ser);
frmD.append("watid",topik);
frmD.append("doeri",whisd);


	$.ajax({
		url:"luhy.php",
		type:"POST",
		data:frmD,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			$('#upldImg').html("<label class='txt'> Image Uploading </label>");
		},
		success:function(data)
		{
			
			$('#upldImg').html(data);
			
			
		}
	})
	
	
	});	
});
	
	
$(document).on('click','#carkt',function(){

	document.getElementById("mudre").style.display = "none";
	document.getElementById("shot").style.display = "block";
	document.getElementById("chik").style.display = "block";
	
	$(document).ready(function(){
		$.ajax({
		url:"LibHomer.php",
		type:"GET",
		data:"bum=6566",
		
		success:function(kata)
		{
			
			document.getElementById("shot").innerHTML = kata;
		},
		
		});
	});

	$.ajax({
		url:"graph.php",
		type:"GET",
		data:"bum="+clap,

	
		success:function(kata)
		{

				var seri = $.parseJSON(kata);
						var dayarr = [];
			var checkarr = [];
			var loanarr = [];
			var returarr = [];
		
			
			for(var i in seri){
				
				dayarr.push(seri[i].Day);
				loanarr.push(seri[i].NumberBorrowedBook);
				checkarr.push(seri[i].NumberCheckedIn);
				returarr.push(seri[i].NumberReturnedBook);
			
			
			}
			
			
			
					var chartData = {
			labels: dayarr,
			datasets: [{
				type: 'line',
				label: 'Students Visit Library',
				borderColor: window.chartColors.blue,
				borderWidth: 2,
				fill: false,
				data: checkarr
			}, {
				type: 'bar',
				label: 'Students Loaned Books',
				backgroundColor: window.chartColors.red,
				data:loanarr,
				borderColor: 'white',
				borderWidth: 2
			}, {
				type: 'bar',
				label: 'Students Returned Books',
				backgroundColor: window.chartColors.green,
				data: returarr
			}]

		};
		
					var ctx = document.getElementById('scaleh').getContext('2d');
			window.myMixedChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
				options: {
					responsive: true,
					title: {
						display: true,
						text: 'Chart.js Combo Bar Line Chart'
					},
					tooltips: {
						mode: 'index',
						intersect: true
					}
				}
			});
			
		}
	})
});	

$(document).on('click','#bundo',function(){
	
	
	var vadmn = document.getElementById("with").value; //year
	var upe = document.getElementById("bet").value; //week
	
	if(vadmn =="Year" || upe =="Week" ){
		alert("Fill out fields");
	}else{
	
	$.ajax({
		
	
		
		url:"graph.php",
		type:"GET",
		data:"bum="+clap+"&think="+vadmn+"&gond="+upe,

	
		success:function(kata)
		{
	
				var seri = $.parseJSON(kata);
			
						var dayarr = [];
			var checkarr = [];
			var loanarr = [];
			var returarr = [];
			
			for(var i in seri){
				
				dayarr.push(seri[i].Day);
				loanarr.push(seri[i].NumberBorrowedBook);
				checkarr.push(seri[i].NumberCheckedIn);
				returarr.push(seri[i].NumberReturnedBook);
			
			}
			
					var chartData = {
			labels: dayarr,
			datasets: [{
				type: 'line',
				label: 'Students Visit Library',
				borderColor: window.chartColors.blue,
				borderWidth: 2,
				fill: false,
				data: checkarr
			}, {
				type: 'bar',
				label: 'Students Loaned Books',
				backgroundColor: window.chartColors.red,
				data:loanarr,
				borderColor: 'white',
				borderWidth: 2
			}, {
				type: 'bar',
				label: 'Students Returned Books',
				backgroundColor: window.chartColors.green,
				data: returarr
			}]

		};
		
					var ctx = document.getElementById('scaleh').getContext('2d');
			window.myMixedChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
				options: {
					responsive: true,
					title: {
						display: true,
						text: 'Chart.js Combo Bar Line Chart'
					},
					tooltips: {
						mode: 'index',
						intersect: true
					}
				}
			});
			
		}
	});
	}
});	

function keepin(){

	var det = document.getElementById("with").value;//year
	var tll = document.getElementById("bet").value; //week
	
	$.ajax({
		
		url:"LibHomer.php",
		type:"GET",
		data:"tayra="+clap+"&lovlk="+tll+"&chann="+det,

	
		success:function(kata)
		{
			
			
			document.getElementById("lod").innerHTML = kata;
		},
	});
}

function simu(lo,pl){
var tery;

if(lo > 0){	
tery = (lo - 1);
}else{
tery = pl;
}

document.getElementById("beat"+lo).style.display = "block";
document.getElementById("beat"+tery).style.display = "none";

}
function perf(lo,pl){
var tery;

if(lo > 0){	
tery = (lo - 1);
}else{
tery = pl;
}

document.getElementById("wor"+lo).style.display = "block";
document.getElementById("wor"+tery).style.display = "none";

var enem = document.getElementById("rgti"+lo).value;

$.ajax({
		
		url:"LibHomer.php",
		type:"GET",
		data:"sterl="+enem+"&tayra="+clap,

	
		success:function(kata)
		{
			alert("Changed to "+enem);
		},
	}); 

}

function mklw(){
	
	sessionStorage.jurt = "";
	sessionStorage.lihet = "";
	sessionStorage.CMks = "";
	sessionStorage.dude = "";
	sessionStorage.igp = "";
	sessionStorage.AMlka = "";
	sessionStorage.wyne = "";
	sessionStorage.rude = "";
	sessionStorage.selff = "";
	sessionStorage.serI = "";
	sessionStorage.waya = "";
	sessionStorage.misb = "";
	sessionStorage.dark = "";
	sessionStorage.buij = "";
	sessionStorage.rel = "";
	
	location.assign('LogIn.php');
}