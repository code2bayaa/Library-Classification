
	
/* $(document).ready(function(){
	
	var stack = sessionStorage.selff;
	
	$.ajax({
		url:"http://localhost/LibManager/graph.php",
		type: "GET",
		success:function(){
			
			var dayarr = ["Monday","Tuesday","Wednesday"];
			var checkarr = ["10","10","10"];
			var loanarr = ["24","24","24"];
			var returarr = ["27","27","27"];
			
			/* for(var i in kata){
				
				dayarr.push(kata[i].Day);
				checkarr.push(kata[i]);
				loanarr.push(kata[i]);
				returarr.push(kata[i]);
			}
			
			alert(kata[1].Day);
			$("#ANMKDJ").html(kata); 
			
			var chrtd = {
				
	labels: dayarr,
	datasets: [
	{
	label:"Students Visit Library",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	
	data: checkarr
	},
	{
	label:"Students Book Loan",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	data: loanarr
	},
	{
	label:"Students Return Loan",
	fill: false,
	lineTension:0.1,
	backgroundColor:"rgba(59,89,152,0.75)",
	borderColor:"rgba(59,89,152,1)",
	pointHoverBackgroundColor:"rgba(59, 89, 152,1)",
	pointHoverBorderColor: "rgba(59, 89, 152,1)",
	data: returarr
	}
	]
};
	
		var ctx = document.getElementById('mcnv').getContext('2d');	
		
		window.myLine = new Chart(ctx).Line(chrtd,{
			responsive:true
		});
			
					/* var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config); 
			
		},
		error : function(kata){
			
		}
    
	});
})*/