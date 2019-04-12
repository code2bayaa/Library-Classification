document.body.addEventListener('onload',gtrr());



function hara(){
	var contid = sg.split(" ");
	var anjq = amk.split(" ");
	var plqo = akmj.split(" ");
	var qplw = ekl.split(" ");
var lok = contid.length;
var naj = anjq.length;
var amq = plqo.length;
var qmm = qplw.length;
for(var gat = 1;gat < lok;gat++){
	var tsg = contid[gat];
	checkId.push(tsg);
}
for(var gat = 1;gat < naj;gat++){
	var tsg = anjq[gat];
	loanId.push(tsg);
}
for(var gat = 1;gat < amq;gat++){
	var ed = plqo[gat];
	rcvchck.push(ed);
}
for(var gat = 1;gat < qmm;gat++){
	var tsg = qplw[gat];
	day.push(tsg);
}
	
var chrtd = {
	labels: day,
	datasets: [
	{
	label:"Students Visit Library",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	data: checkId
	},
	{
	label:"Students Book Loan",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	data: loanId
	},
	{
	label:"Students Return Loan",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	data: rcvchck
	}
	]
};
		var ctx = document.getElementById("mcnv").innerHTML;	
		
		var lgj = new Chart(ctx, {
			type: 'line',
			data: chrtd
			
		})
	
}