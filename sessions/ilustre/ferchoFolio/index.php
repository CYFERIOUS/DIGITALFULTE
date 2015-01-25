<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Camilo::Nossa</title>

<script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="js/scriptos.js" type="text/javascript"></script>
<script src="js/filter.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<div id="header">
<div id="menu">
	<h2>HUMBERTO NOSSA - ILUSTRADOR</h2>
    <input id="search" style="float:right"type="text" placeholder="search"/>
</div>
</div>
<div id="overlay"></div>

<div id="frame">
 
	<img id="main" src="" alt="img"/> 
  
    <table id="frame-arrows">
	
    <tr>
		<td id="left">
        	<img src="images/flechas2.png" alt="left"/>
        </td>
        <td><div id="description">
    <p>  </p>
    </div></td>
		<td id="right">
        	<img src="images/flechas.png" alt="right"/>
        </td>
	</tr>
   
</table>

</div>

<div id="wraper">
<ul id="filter">
	<li class="active">Todo</li>
	<li>Infantil</li>
	<li>Ciencia Ficción</li>
    <li>Cyberpunk</li>
    <li>Horror</li>
</ul>
<ul id="portfolio">
	<?php include_once("list.html") ?>
</ul>
</div>
</body>
</html>
