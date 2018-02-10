$(function(){
	
	
	$( ".scrollerTittle" ).css( "font-size", "40px" );
	$( ".scrollerTittle" ).css( "margin-left", "25%" );
	
	$(".boxShow").hide();
	$(".rightMenu").bind('click', {}, cargas);
	$(".rightMenu").bind('click', {}, cargas);
	$(".btnOk").bind('click', {}, cargas);
	
	function cargas(event){
		$(".menuInfo").fadeOut();
		$(".boxShow").show();
	
		if(this.className == 'rightMenu info' || this.className == 'btnOk info' ){
			var fichasInfo1 = event.target.getAttribute("data-text");
			var fichasInfo2 = event.target.getAttribute("data-image");
			infoCharge(fichasInfo2,fichasInfo1);
		}
		if(this.className=='rightMenu learn'|| this.className == 'btnOk learn'){
			var fichasLearn1 = event.target.getAttribute("data-text");
			var fichasLearn2 = event.target.getAttribute("data-image");
			learnCharge(fichasLearn2,fichasLearn1);
		}
		if(this.className=='rightMenu fun'|| this.className == 'btnOk fun'){
			var fichasFun1 = event.target.getAttribute("data-text");
			var fichasFun2 = event.target.getAttribute("data-image");
			funCharge(fichasFun2,fichasFun1);
			
		}
		if(this.className=='rightMenu site'){
			siteCharge(event.target.id,event.target.name);
		}
	}
	function infoCharge(infok,ficha){
		document.getElementById("spot1").src = "../images/info/"+infok+".jpg";
		document.getElementById("descriptorInfo1").innerHTML = "Company:  " + datosInfo.Desc[ficha].Empresa;
		document.getElementById("descriptorInfo2").innerHTML = "Description:   " + datosInfo.Desc[ficha].Descripcion;
		document.getElementById("descriptorInfo3").innerHTML = "Technology:   " + datosInfo.Desc[ficha].Tecnologia;
	}
	function learnCharge(learnk,ficha){
		document.getElementById("spot2").src = "../images/edu/"+learnk+".jpg";
		document.getElementById("descriptorLearn1").innerHTML = "Company:  " + datosEdu.Desc[ficha].Empresa;
		document.getElementById("descriptorLearn2").innerHTML = "Description:  " + datosEdu.Desc[ficha].Descripcion;
		document.getElementById("descriptorLearn3").innerHTML = "Technology:  " + datosEdu.Desc[ficha].Tecnologia;
	}
	function funCharge(funk,ficha){
		
		document.getElementById("spot3").src = "../images/enter/"+funk+".jpg";
		document.getElementById("descriptorFun1").innerHTML = "Company:  " + datosFun.Desc[ficha].Empresa;
		document.getElementById("descriptorFun2").innerHTML = "Description:  " + datosFun.Desc[ficha].Descripcion;
		document.getElementById("descriptorFun3").innerHTML = "Technology:  " + datosFun.Desc[ficha].Tecnologia;
	}
	function siteCharge(){
		
		document.getElementById("spot3").src = "../sessions/ilustracion.html";
		document.getElementById("descriptorFun1").innerHTML = "Illustration portfolio of NOSSA'S brothers"
	}
	$(".boxShow").click(function(){
		$(".menuInfo").fadeIn();
		$(".boxShow").hide();
	});
});