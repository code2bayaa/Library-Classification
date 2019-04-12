

var nsj
function moro(){
	setTimeout("nja(4)",20);
	var amnch = document.getElementById("AMaq").value;
	
	var dh = 62565;
	sessionStorage.dh = amnch;
	
	document.getElementById("aka").value = amnch; 
	nsj  = sessionStorage.dh;
	
}

function bkjh(g){
	
	var hbg;
	if(g == 1){
	hbg = document.getElementById("Dkas").value;
	}
	if(g == 2){
	hbg = document.getElementById("tell").value;
	
	}
	if(g == 52){
	hbg = "Computer Science";
	}
	if(g == 3){
	hbg = "Computer Science";
	hbg = document.getElementById("ahb").value;

	}
	
		var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("turd").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","https//www.googleapis.com/books/v1/volumes?q="+hbg,true);
	RKLX.send();
}
var fer;
function nja(m){
fer = sessionStorage.selff;
	var xlsk;
	if(m == 1){
		xlsk = 5757;
		document.getElementById("dd").addEventListener('click',bkjh(52));
	}
	if(m == 4){
		
		xlsk = 54254+"&jhj="+fer;
	}
	if(m == 52){
			document.getElementById("dd").addEventListener('click',bkjh(3));
		xlsk = 52544+"&jhj="+fer;
	}


			var RKLX = new XMLHttpRequest();
	RKLX.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		document.getElementById("wnwmn").innerHTML = this.responseText;
	}	
	};
	RKLX.open("GET","Booksrr.php?q="+xlsk+"&kdm="+nsj,true);
	RKLX.send();
}

