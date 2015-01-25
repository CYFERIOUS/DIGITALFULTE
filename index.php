<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://www.digital-flute.com/ns#">
<head>

<title>Do::Re::Mi::Fa::Sol::La::Si::</title>
<!--TITULO MOVEMENT-->
<script src="js/move.js"></script>
<!--METATAGS-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="publicidad, web design, multimedia, graphic design, bogota, advertising, flash">
<meta name="description" content="Pagina Oficial de Digital Flute, empresa de diseño digital, multimedia, web sites, animacion, etc">
<meta name="keywords" content="diseño, websites, multimedia, ilustracion, publicidad, internet, videogames">
<meta name="description" content="Pagina Oficial Digtal Flute INTERPRETANDO EL DISEÑO COMO ARMONIAS GRAFICAS">
 <meta http-equiv="Content-Language" content="en_US" />
<meta property="og:title" content="DIE ZAUBERFLÖTE" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.digital-flute.com/images/dgFlte.jpg" />

<link rel="SHORCUT ICON" href = "mozart.ico"type="image/x-icon"/> 

<link href="css/flutest.css" rel="stylesheet" type="text/css" />

<!--ACORDION-->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container" align="center">

 <iframe src="sessions/inicio/bannerUp/bannerUp.html" width="950" height="100" frameborder="0"></iframe>
<div id="Accordion1" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">HOME</div>
    <div class="AccordionPanelContent"><iframe id="intro" src="sessions/inicio/inside/alephcolor.html" width="950" height="500" frameborder="0"></iframe></div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">INFORMATION</div>
    <div class="AccordionPanelContent">
<?php include("sessions/infoSection.php"); ?></div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">EDUCATION</div>
    <div class="AccordionPanelContent"><?php include("sessions/learnSection.php"); ?></div>
  </div>
  
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">ENTERTAINMENT</div>
    <div class="AccordionPanelContent"><?php include("sessions/funnySection.php"); ?></div>
  </div>
   <div class="AccordionPanel">
    <div class="AccordionPanelTab">CONTACT</div>
    <div class="AccordionPanelContent">   
<?php include("sessions/contact.php"); ?></div>
  </div>
</div>
<?php include("sessions/info.php"); ?>
</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>
