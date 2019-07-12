
var chchill = sessionStorage.selff; var diamond; var whst; 
var racae = []; var gang = []; var wquy = [];
var dancin = []; var brin; var dun;
var wizi = "bookfirst524"; var hazi; var mynd; var isht;
$(document).ready(function(){
		
		"";
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256&tayra="+chchill,

	success:function(data)
		{
			document.getElementById("ANMKDJ").innerHTML = (data);
			var vtag = document.getElementById("sing").value;
				var gas = document.getElementById("lsyt").value;
			var metr = document.getElementById("valent").value;

	 sessionStorage.yoko = vtag; //Course
	 sessionStorage.anme = gas; 
		sessionStorage.wizi = metr;
			},
	});
	
});
$(document).ready(function(){
	var slip =sessionStorage.anme;
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"tayra="+slip+"&saf=2154",

	success:function(data)
		{
			document.getElementById("mudre").innerHTML = (data);

			},
	});
	
});

function PLeo(Et){
	
document.getElementById("AQKmw").addEventListener('click',hung());
	
if(andjd == 1){
	alert("Your In another line");
}else{
	 EPk = document.getElementById("PWk").value;
	
		
	if( Et == 1 ){
		KLk = "PKlrgf";
	}else{
		KLk = "JHIiu";
	}
	
	var PKLR = new XMLHttpRequest();
	PKLR.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("ANMKDJ").innerHTML = this.responseText;
		
		var gas = document.getElementById("lsyt").value;
		 var nvre = document.getElementById("valent").value;
	
	 sessionStorage.anme = gas;
	 sessionStorage.wizi = nvre;
	 
	}	
	};
	PKLR.open("GET","Homer.php?"+KLk+"="+EPk+"&forme=5768&tayra="+chchill,true);
	PKLR.send();
}
	
}
var moha = "msk625";
function hung(){
	var slip = sessionStorage.anme;
	
		$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"tayra="+slip+"&saf=2154",

	success:function(data)
		{
			document.getElementById("mudre").innerHTML = (data);

			},
	});
}

$(document).ready(function(){	
$(document).on('click','#dd',function(){ // When clicking shelve
			whst = 1;  var ayn; var wake;
	$(document).ready(function(){
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256",

	success:function(data)
		{
			document.getElementById("sang").innerHTML = (data);
			var gas = document.getElementById("lsyt").value;
			var metr = document.getElementById("valent").value;
			
				sessionStorage.anme = gas; //LibraryName
	sessionStorage.wizi = metr; //First Shelve
	
			},
	});
	});
$(document).ready(function(){
	ayn = sessionStorage.anme;

	 wake = sessionStorage.wizi;
	
		$.ajax({
		url:"Classification.php",
		data:"rmk="+wake,
type: "GET",
	
	success:function(response){
			
			
		 brin = $.parseJSON(response);
		 
		 sessionStorage.moha = brin;
	
	},
	
	});	
});

$(document).ready(function(){
		
	 
	 xlsk = 5757;
	
	 
		$.ajax({
		url:"Booksrr.php",
		data:"q="+xlsk+"&kdm="+ayn,
type: "GET",
	
	success:function(response){
			
			
		 document.getElementById("turd").innerHTML = (response);
	
	},
	
	});
	});
	$(document).ready(function(){ //If book is in the library
	
	 
		$.ajax({
		url:"Booksrr.php",
		data:"madn=524&kdm="+ayn,
type: "GET",
	
	success:function(bad){
			
			var unity = $.parseJSON(bad);
			
			for(var w in unity){
				var mortye = unity[w].BookName;
				var ironic = unity[w].Quantity;
				var oiiu = unity[w].BookShelf;
			
				racae.push(ironic);
			gang.push(mortye);
			wquy.push(oiiu);
			}
	
	},
	
	});
	});
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+brin,
dataType: "json",
	
	success:function(response){
		var mahn = (response.items.length/5);
		
		document.getElementById("snk").innerHTML = "";
		document.getElementById("snk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+brin+" "+wake+"</label>";
			document.getElementById("snk").innerHTML += "<input type='text' value='1' id='menufo' class='rsde'>";
			document.getElementById("snk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chza'>";
			document.getElementById("snk").innerHTML += "<button id='zae' class='meki'>Previous</button>";
			document.getElementById("snk").innerHTML += "<button id='tengaze' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5);	var enj = (hoi - srs);		 var srs = 1;
		
for(var n = enj;n < sina; n++){	
		
document.getElementById("snk").innerHTML += "<table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
		var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny,orag;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button>";
	orag  = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br>"+tiny+"</label>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
		orag = "";
	}
	
			document.getElementById("snk").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("snk").innerHTML += "<td>"+orag+"</td>";
			document.getElementById("snk").innerHTML += "<td>"+oathtic+"</td></tr></table>";
			
			var GUD =response.items[n].accessInfo.id;
			
		}
		
		
	},
	type:"GET"
	});
	});
	});
 var enj;  var chom; 
$(document).on('click','#tengaze',function(){ // When clicking Next
 chom = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;
	
		if(chom < mbo){
		chom++; var st = 5; var sr = 1;
		var comm = (chom * 5); 
		 enj = (((chom - sr) + st) - 1);
		 pegr = setTimeout("neesin()",1000);
		}	
});
$(document).on('click','#zae',function(){
	
	clearTimeout(pegr);
 chom = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;

if(chom > 1){
			chom--; var st = 5; var sr = 1;
			var comm = (chom * 5);
		 enj = (comm - st);
	pegr = setTimeout("neesin()",1000);	
}
});

function neesin(){
	
	var tuld = sessionStorage.wizi;


	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+brin,
dataType: "json",
	
	success:function(response){
		var mahn = (response.items.length/5);
		console.log(response);
		
		
		document.getElementById("snk").innerHTML = "";
		document.getElementById("snk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+brin+" "+tuld+"</label>";
			document.getElementById("snk").innerHTML += "<input type='text' value='"+chom+"' id='menufo' class='rsde'>";
			document.getElementById("snk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chza'>";
			document.getElementById("snk").innerHTML += "<button id='zae' class='meki'><i class='fas fa-book'></i> Previous</button>";
			document.getElementById("snk").innerHTML += "<button id='tengaze' class='sdr'><i class='fas fa-book'></i> Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (chom * 5);			
		
for(var n = enj;n < sina; n++){	
		
document.getElementById("snk").innerHTML += "<table class='basis'><tr>";
		dancin.push(response.items[n].volumeInfo.title);
	var krek = response.items[n].volumeInfo.title;
	
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny,orag;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button>";
	
	orag = "<label id='noge' class='sadf' ><span class='shiuy'>Quantity In Library</span><i class='fas fa-amount'></i><br>"+tiny+"</label>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
		orag = "";
	}
			document.getElementById("snk").innerHTML  += "<td><label class='geni'><a  href='"+response.items[n].volumeInfo.infoLink+"'><img src='"+response.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+response.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("snk").innerHTML += "<td>"+orag+"</td>";
			document.getElementById("snk").innerHTML += "<td>"+oathtic+"</td></tr></table>";
			
			var GUD =response.items[n].accessInfo.id;
	
		}
		
	},
	type:"GET"
	});
	}
	
	
		
function mwend(nigs){ // Loan Book
		var slip = sessionStorage.anme;
		 var ayn; var wake;
	$(document).ready(function(){
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256",

	success:function(data)
		{
			document.getElementById("sang").innerHTML = (data);
			var gas = document.getElementById("lsyt").value;
			var metr = document.getElementById("valent").value;
			
				sessionStorage.anme = gas; //LibraryName
	sessionStorage.wizi = metr; //First Shelve
	
			},
	});
	});
	var slip = sessionStorage.anme;
		
		var bthj = dancin[nigs];
		
		var styn = "callme="+slip+"&lav="+bthj+"&tayra="+chchill;
		
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
function duh(wre){
			
	$(document).ready(function(){
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256",

	success:function(data)
		{
			document.getElementById("sang").innerHTML = (data);
			var gas = document.getElementById("lsyt").value;
			
				sessionStorage.anme = gas; //LibraryName
	
			},
	});
	});
	var slip = sessionStorage.anme;
	
	var nevty = document.getElementById("lpopl").value;
	var nihy; 
	if(nevty > wre ){
		nihy = "&dolls="+5267777;
		
	}else{
		nihy = "";
	}


			var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("turd").innerHTML = this.responseText;
		var dghh = document.getElementById("hjg").value;
							   var assis = 0;
							   
							   var afgh;
	if(dghh > 9){
		afgh = (dghh * 10);
	}else{
		afgh = "0"+dghh+"0";
	}
	sessionStorage.wizi = afgh;
			setTimeout('bumbum()',1000);
		 
	}	
	};
	RKLX.open("GET","Booksrr.php?kdm="+slip+"&q=5757"+nihy+"&hity="+wre,true);
	RKLX.send();
	
}
function bumbum(){
var lins = sessionStorage.wizi;	
	
$(document).ready(function(){
		$.ajax({
		url:"Classification.php",
		type:"GET",
		data:"rmk="+lins,

	success:function(data)
		{
			 brin = $.parseJSON(data);
			
			setTimeout('dissa()',1000);
			},
	});
	});
}
function dissa(){
	
	var baeu = sessionStorage.wizi;
		$(document).ready(function(){		
					
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+brin,
dataType: "json",
	
	success:function(bark){
		var mahn = (bark.items.length/5);
		document.getElementById("snk").innerHTML = "";
		
			document.getElementById("snk").innerHTML += "<label class='nali'><i class='fas fa-book'></i> "+brin+" "+baeu+"</label>";
			document.getElementById("snk").innerHTML += "<input type='text' value='1' id='menufo' class='rsde'>";
			document.getElementById("snk").innerHTML += "<input type='text' value='"+mahn+"' id='wannab' class='chza'>";
			document.getElementById("snk").innerHTML += "<button id='zae' class='meki'>Previous</button>";
			document.getElementById("snk").innerHTML += "<button id='tengaze' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5); var enj = (hoi - 1);
		for(var n = enj;n < sina; n++){
			
			console.log(bark.items[n]);
document.getElementById("snk").innerHTML += "<table class='basis'><tr>";

		dancin.push(bark.items[n].volumeInfo.title); var krek = bark.items[n].volumeInfo.title;
		
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
	}
	
		document.getElementById("snk").innerHTML  += "<td><label class='geni'><a  href='"+bark.items[n].volumeInfo.infoLink+"'><img src='"+bark.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("snk").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("snk").innerHTML += "<td>"+oathtic+"</td></tr></table>";
  var GUD =bark.items[n].accessInfo.id;
	}
	},
	});	
	});	

}
function njdjjd(wkn){
	 var dun;
	if(wkn > 9){
		dun = (wkn * 10);
	}else{
		dun = "0"+wkn+"0";
	}
	
	sessionStorage.wizi = dun; 
	
$(document).ready(function(){
		$.ajax({
		url:"Classification.php",
		type:"GET",
		data:"rmk="+dun,

	success:function(data)
		{
			 brin = $.parseJSON(data);
			setTimeout('dissa()',1000);
			
			},
	});
});
}

function lyth(wom){
			
		 var ayn; 
	$(document).ready(function(){
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256",

	success:function(data)
		{
			document.getElementById("sang").innerHTML = (data);
			var gas = document.getElementById("lsyt").value;
			
				sessionStorage.anme = gas; //LibraryName
	
			},
	});
	});
	
	var slip = sessionStorage.anme;
	
		var nevty = document.getElementById("lpopl").value;
		var pumi = document.getElementById("nidr").value;
	var nihy; 

	if(nevty > pumi ){
		nihy = "&dolls="+2555;
		
	}else{
		nihy = "";
	}

	var fjv; var poorch;
	var rins = document.getElementById("ferll").value; // How many shelves
	var plsk = document.getElementById("namet").value; //Changing no
	var kmmmm = document.getElementById("hjg").value; //First no
	var mattr = document.getElementById("happ").value;
	
	var ghhn = (kmmmm - 1);
	
	if(wom > 1){
	
		 if(rins < mattr){
			
		  rins++; plsk++;
	}
		
	}else{  
	if(plsk > kmmmm){
		rins--; plsk--; 
		}
		
		}
	
	
	
		var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("bigsh").innerHTML = this.responseText;
		document.getElementById("ferll").value = rins; 
		document.getElementById("namet").value = plsk; 
	}	
	};
	RKLX.open("GET","Booksrr.php?kdm="+slip+"&q=5757"+nihy+"&star="+rins+"&gril="+plsk+"&hity="+pumi,true);
	RKLX.send();
}
 var fer;

function nja(){
fer = sessionStorage.selff;
		 var ayn; 
	$(document).ready(function(){
		
	$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"forme=6256",

	success:function(data)
		{
			document.getElementById("sang").innerHTML = (data);
			var gas = document.getElementById("lsyt").value;
			var metr = document.getElementById("valent").value;
			
				sessionStorage.anme = gas; //LibraryName
	
			},
	});
	});

	var slip = sessionStorage.anme;
	var xlsk;
		
		xlsk = 54254+"&jhj="+fer;
		


			var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("turd").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","Booksrr.php?q="+xlsk+"&kdm="+slip,true);
	RKLX.send();
}

var Araina; var anme = "libr8245"; var yoko = "schl526526";
var namee = [];
var pum,andjd;
function old(){
	var room,biun,strk;
	
		var cell = document.getElementById("carW").value;
		var usedr = document.getElementById("lsyt").value;
		
		if(cell == "CheckIn"){
			strk = 4546;
		}else{
			strk = 2525;
		}
		
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("felkr").innerHTML = this.responseText;
		var asio = document.getElementById("famm").value;
		if(asio == 656){
			pum = setInterval('Emmy()',2000);
			andjd = 1;
		}
		if(asio == 6655){
			document.getElementById("carW").value = "CheckIn";
		}
	}	
	};
	RKLX.open("GET","Homer.php?saf="+strk+"&tayra="+chchill+"&hao="+usedr,true);
	RKLX.send();		
}
function Emmy(){
	
	var usedr = document.getElementById("lsyt").value;
	
	var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("felkr").innerHTML = this.responseText;
		var kale = document.getElementById("grant").value;
		if(kale == 5424){
			clearInterval(pum);
			document.getElementById("carW").value = "CheckOut";
			
		}
	}	
	};
	RKLX.open("GET","Homer.php?tayra="+chchill+"&hed=5265&hao="+usedr,true);
	RKLX.send();
}
var EPk,KLk;

function heven(){
	var wlk = document.getElementById("plug").value;
	
	if(wlk == 0){
	document.getElementById("hevy").style.display = "block";
	}else{
		document.getElementById("hevy").style.display = "none";
	}
	
	

	
		var PKLR = new XMLHttpRequest();
	PKLR.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("hevy").innerHTML = this.responseText;
			document.getElementById("plug").value = 1;
	}	
	};
	PKLR.open("GET","Homer.php?kolak=62562&tayra="+chchill,true);
	PKLR.send();
}

$(document).ready(function(){
	

$(document).on('click','#every',function(){
	
	var gabj = sessionStorage.anme;
	
		$.ajax({
		url:"Homer.php",
		type:"GET",
		data:"tymj="+gabj,

	success:function(data)
		{
				document.getElementById("turd").innerHTML = data;
			
			},
	});
	
});
});





	var kip;
var wata = []; var sumsn = []; var mmh = [];
	$(document).ready(function(){
	
$(document).on('click','#erh',function(){
	 kip  = document.getElementById("Dkas").value;	
 
$(document).ready(function(){
	var pooo = sessionStorage.anme;
		$.ajax({
		url:"Booksrr.php",
		type:"GET",
		data:"witm="+kip+"&kdm="+pooo,

	success:function(data)
		{
			var pitch = $.parseJSON(data);
			 for(var b in pitch){
				 wata.push(pitch[b].LibraryName);
				 sumsn.push(pitch[b].BookShelf);
				 mmh.push(pitch[b].Description);
			 }
			 
			
			},
	});
});
	

	
  
	
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+kip,
		dataType: "json",
	
	success:function(bark){
		
	
		var mahn = (bark.items.length/5);
		document.getElementById("viatu").innerHTML = "";
		
	
			document.getElementById("viatu").innerHTML += "<input type='hidden' value='1' id='menufo' class='rsde'>";
			document.getElementById("viatu").innerHTML += "<input type='hidden' value='"+mahn+"' id='wannab' class='chza'>";
			document.getElementById("viatu").innerHTML += "<button id='utta' class='meki'>Previous</button>";
			document.getElementById("viatu").innerHTML += "<button id='taff' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5); var enj = (hoi - 1);
		for(var n = enj;n < sina; n++){
			
document.getElementById("viatu").innerHTML += "<table class='basis'><tr>";

		dancin.push(bark.items[n].volumeInfo.title); var krek = bark.items[n].volumeInfo.title;
		
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny,sisi;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
	 sisi = wquy[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button><label>BookShelf "+sisi+"</label>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
	}
	
		document.getElementById("viatu").innerHTML  += "<td><label class='geni'><a  href='"+bark.items[n].volumeInfo.infoLink+"'><img src='"+bark.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("viatu").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("viatu").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("viatu").innerHTML += "<td>"+oathtic+"</td></tr></table>";

			
  var GUD =bark.items[n].accessInfo.id;
	}
		
		
	},
	type:"GET"
	
	});
});
});

$(document).ready(function(){
	
$(document).on('click','#mlo',function(){
	

var gelli = sessionStorage.yoko;
	
	

	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+gelli,
		dataType: "json",
	
	success:function(bark){
		
var mahn = (bark.items.length/5);
		document.getElementById("turd").innerHTML = "";
		
			document.getElementById("turd").innerHTML += "<input type='hidden' value='1' id='menufo' class='chza'>";
			document.getElementById("turd").innerHTML += "<input type='hidden' value='"+mahn+"' id='wannab' class='chall'>";
			document.getElementById("turd").innerHTML += "<button id='dola' class='meki'>Previous</button>";
			document.getElementById("turd").innerHTML += "<button id='pen' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5); var enj = (hoi - 1);
		for(var n = enj;n < sina; n++){
			
			console.log(bark.items[n]);
document.getElementById("turd").innerHTML += "<table class='basis'><tr>";

		dancin.push(bark.items[n].volumeInfo.title); var krek = bark.items[n].volumeInfo.title;
		
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
var joded,tiny,sisi;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
	 sisi = wquy[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button><label>BookShelf "+sisi+"</label>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
	}
	
		document.getElementById("turd").innerHTML  += "<td><label class='geni'><a  href='"+bark.items[n].volumeInfo.infoLink+"'><img src='"+bark.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("turd").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("turd").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("turd").innerHTML += "<td>"+oathtic+"</td></tr></table>";

		}
	},
	type:"GET"
	
	});
});
});
var somal; var depo; var pahco; var kata;
$(document).on('click','#taff',function(){ // When clicking Next
 somal = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;
	
		if(somal < mbo){
		somal++; var st = 5; var sr = 1;
		var comm = (somal * 5); 
		 pahco = (((somal - sr) + st) - 1);
		 pegr = setTimeout("freshi()",1000);
		}	
});
$(document).on('click','#utta',function(){
	
	clearTimeout(pegr);
 somal = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;

if(somal > 1){
			somal--; var st = 5; var sr = 1;
			var comm = (somal * 5);
		 pahco = (comm - st);
	pegr = setTimeout("freshi()",1000);	
}
});
$(document).on('click','#pen',function(){ // When clicking Next
 depo = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;
	
		if(depo < mbo){
		depo++; var st = 5; var sr = 1;
		var comm = (depo * 5); 
		 kata = (((depo - sr) + st) - 1);
		 pegr = setTimeout("ramad()",1000);
		}	
});
$(document).on('click','#dola',function(){
	
	clearTimeout(pegr);
 depo = document.getElementById("menufo").value;
var mbo = document.getElementById("wannab").value;

if(depo > 1){
			depo--; var st = 5; var sr = 1;
			var comm = (depo * 5);
		 kata = (comm - st);
	pegr = setTimeout("ramad()",1000);	
}
});
function freshi(){
	
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+kip,
dataType: "json",
	
	success:function(bark){
		var wert = (bark.items/5);
		document.getElementById("viatu").innerHTML = "";
		

			document.getElementById("viatu").innerHTML += "<input type='hidden' value='"+somal+"' id='menufo' class='chza'>";
			document.getElementById("viatu").innerHTML += "<input type='hidden' value='"+wert+"' id='wannab' class='chall'>";
			document.getElementById("viatu").innerHTML += "<button id='utta' class='meki'>Previous</button>";
			document.getElementById("viatu").innerHTML += "<button id='taff' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5); 
		for(var n = pahco;n < sina; n++){
			
			console.log(bark.items[n]);
document.getElementById("viatu").innerHTML += "<table class='basis'><tr>";

		dancin.push(bark.items[n].volumeInfo.title); var krek = bark.items[n].volumeInfo.title;
		
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
	var joded,tiny;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
	}
	
		document.getElementById("viatu").innerHTML  += "<td><label class='geni'><a  href='"+bark.items[n].volumeInfo.infoLink+"'><img src='"+bark.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("viatu").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("viatu").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("viatu").innerHTML += "<td>"+oathtic+"</td></tr></table>";
			
  var GUD =bark.items[n].accessInfo.id;
	}
		
	},
	type:"GET"
	});
	}

function ramad(){
	var gelli = sessionStorage.yoko;
	$.ajax({
		url:"https://www.googleapis.com/books/v1/volumes?q="+gelli,
dataType: "json",
	
	success:function(bark){
var mahn = (bark.items.length/5);
		document.getElementById("turd").innerHTML = "";
		
			document.getElementById("turd").innerHTML += "<input type='hidden' value='"+depo+"' id='menufo' class='chza'>";
			document.getElementById("turd").innerHTML += "<input type='hidden' value='"+mahn+"' id='wannab' class='chall'>";
			document.getElementById("turd").innerHTML += "<button id='dola' class='meki'>Previous</button>";
			document.getElementById("turd").innerHTML += "<button id='pen' class='sdr'>Next</button>";
			var hoi = document.getElementById("menufo").value;
			var sina = (hoi * 5); var enj = (hoi - 1);
		for(var n = enj;n < sina; n++){
			
			
document.getElementById("turd").innerHTML += "<table class='basis'><tr>";

		dancin.push(bark.items[n].volumeInfo.title); var krek = bark.items[n].volumeInfo.title;
		
	var oathtic;
	var war = jQuery.inArray(krek,gang); 
	
var joded,tiny,sisi;
if(war > -1){
for(var key in gang){
	 joded = gang[key];
	 sisi = wquy[key];
 if(krek == joded){
	tiny = racae[key]; 

 }
	}
	oathtic = "<button id='kero' onclick='mwend("+n+")' class='champ' ><i class='fas fa-book'></i> Loan Book</button><label>BookShelf "+sisi+"</label>";
	}else{
		tiny = 0;
		oathtic = "<label class='sad'>Not In Library</label>";
	}
	
		document.getElementById("turd").innerHTML  += "<td><label class='geni'><a  href='"+bark.items[n].volumeInfo.infoLink+"'><img src='"+bark.items[n].volumeInfo.imageLinks.thumbnail+"' class='rstt' /></a></label></td>";
			document.getElementById("turd").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.authors+"</label></td>";
			document.getElementById("turd").innerHTML += "<td><label class='sad'>"+bark.items[n].volumeInfo.title+"</label></td>";
			document.getElementById("turd").innerHTML += "<td>"+oathtic+"</td></tr></table>";

		}
		
	},
	type:"GET"
	});
	}


function mklw(){
	location.assign('LogIn.php');
}


function ramp(){
	document.getElementById("viatu").innerHTML = "";
}
var fer;





