<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Do::Re::Mi::Fa::Sol::La::Si::</title>
<!--TITULO MOVEMENT-->
<script src="js/move.js"></script>
<script src="js/loader.js"></script>
<!--METATAGS-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="publicidad, web design, multimedia, graphic design, bogota, advertising">
<meta name="description" content="Digital flute portfolio, digital design company, multimedia, web sites, animation, Apps, software development">
<meta name="keywords" content="design, websites, multimedia, ilustration, advertising, internet technologies, videogames, programming">
<meta name="description" content="offcial website - digital flute">
 <meta http-equiv="Content-Language" content="en_US" />
<meta property="og:title" content="DIE ZAUBERFLÖTE" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.dgflute.com/images/thumbnails/unitedCyberPunks.png" />

<link rel="SHORCUT ICON" href = "mozart.ico"type="image/x-icon"/> 

<link href="css/flutest.css" rel="stylesheet" type="text/css" />
<link href="css/loader.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="js/async.js" type="text/javascript"></script>
<script src="js/loader.js" type="text/javascript"></script>
<!--ACORDION-->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>


</head>

<body>
	<div id="bigPapaLoader">
  <div id="curtain">
    <div class="lodainer">
       <div class="anima"></div>
      <div class="loader"></div>
    </div>
  </div>
  <div id="magenta"></div>
</div>
<div id="container" align="center">
<div id="Accordion1" class="Accordion" tabindex="0">

<div class="AccordionPanel">
    <div class="AccordionPanelspecialTab">DIE ZAUBERFLÖTE</div>
    <div class="AccordionPanelspecialContent" id="sektorZero"><iframe  id="firstIntro" src="sessions/inicio/webgl/index.html"  scrolling="no" frameborder="0" ></iframe></div>
  </div>
  
  <div class="AccordionPanel" >
    <div id="sektorOne" class="AccordionPanelTab">INFORMATION</div>
    <div class="AccordionPanelContent" id="info">
	</div>
  </div>
  
  <div class="AccordionPanel">
    <div id="sektorTwo" class="AccordionPanelTab">EDUCATION</div>
    <div class="AccordionPanelContent" id="learn">
</div>
  </div>
  
  <div class="AccordionPanel">
    <div id="sektorThree"class="AccordionPanelTab">ENTERTAINMENT</div>
    <div class="AccordionPanelContent" id="fun"></div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">CONTACT</div>
    <div class="AccordionPanelContent" id="contacto"></div>
  </div>
</div>
<div id="footer">
	
</div>

</div>
<script type="text/javascript">
	 var reloadContact1 = { useFixedPanelHeights: true, defaultPanel: 0 }
	 var reloadContact2 = { useFixedPanelHeights: true, defaultPanel: 4 }
	
	 if(window.location=='http://www.dgflute.com/#contacto'){
	   alert("working");
		new Spry.Widget.Accordion("Accordion1",reloadContact2);
	}else{
		new Spry.Widget.Accordion("Accordion1",reloadContact1);
	}
	
	$( "#info" ).load( "sessions/infoSection.php" );
	$( "#learn" ).load( "sessions/learnSection.php" );
	$( "#fun" ).load( "sessions/funnySection.php" );
	$( "#contacto" ).load( "sessions/contact.php" );
	$( "#footer" ).load( "sessions/info.php" );
	
</script>
</body>
</html>
