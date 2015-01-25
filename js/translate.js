$(function(){
	$(".boxShow").hide();
	$(".btnOk").bind('click', {}, cargas);
	
	function cargas(event){
		$(".menuInfo").fadeOut();
		$(".boxShow").show();
	
		if(this.className=='btnOk info'){
			
			infoCharge(event.target.id);
		}
		if(this.className=='btnOk learn'){
			
			learnCharge(event.target.id);
		}
		if(this.className=='btnOk fun'){
			
			funCharge(event.target.id);
		}
		if(this.className=='btnOk site'){
			
			siteCharge(event.target.id,event.target.name);
		}
	}
	function infoCharge(infok){
		document.getElementById("spot1").src = "../images/info/"+infok+".jpg";
	}
	function learnCharge(learnk){
		document.getElementById("spot2").src = "../images/edu/"+learnk+".jpg";
	}
	function funCharge(funk){
		document.getElementById("spot3").src = "../images/enter/"+funk+".jpg";
	}
	function siteCharge(sitio,lugar){
		document.getElementById("spot"+lugar).src = "../sessions/"+sitio+".html";
	}
	

	$(".boxShow").click(function(){
		$(".menuInfo").fadeIn();
		$(".boxShow").hide();
	document.getElementsByClassName("menuInfo").contentDocument.location.reload(true);
	});
});