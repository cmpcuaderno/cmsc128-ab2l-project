$(document).ready(function(){
	//change cursor to pointer
	$('.toggle').hover(function(){
		$(this).css( 'cursor', 'pointer' );  
	});
	//set hide as default
	$($('div.initHide')).hide();
	//toggle between hide and show
	$("#hideFirstSem").click(function(){
		$("#firstsem").toggle("slow");
		$("#button").show("slow");
	});
	$("#hideSecondSem").click(function(){
		$("#secondsem").toggle("slow");
		$("#button").show("slow");
	});
});