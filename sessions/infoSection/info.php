<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Demo: A Fullscreen Slideshow using Skrollr.js</title>
    <meta name="description" content="Learn how to create a fullscreen slideshow for your scrolling website.">
    
    <link rel="author" href="https://plus.google.com/u/0/109859280204979591787/about"/>

    <!--iOS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
        * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
        * Want to see more similar demos and tutorials?
        * Help by spreading the word about Ihatetomatoes blog.
        * Facebook - https://www.facebook.com/ihatetomatoesblog
        * Twitter - https://twitter.com/ihatetomatoes
        * Google+ - https://plus.google.com/u/0/109859280204979591787/about
    -->
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="../../../js/jquery-2.1.0.min.js" type="text/javascript"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/grained.js" type="text/javascript"></script>
    <script src="js/behaviors.js" type="text/javascript"></script>

</head>
<body data-0="background-image:linear-gradient(0deg, hsl(196, 15%, 62%), hsl(196, 67%, 40%));" data-10500="background-image:linear-gradient(3600deg, hsl(196, 38%, 66%), hsl(196, 0%, 60%));">

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<div id="progress" data-0="width:0%; background-color:rgba(255,255,255,0.5);"  data-end="width:100%; background-color:rgba(57,156,191,1); "></div>

	<!-- Demo content -->			
	<div id="page-content" >
    
      <div class="target"></div>
      
      <div id="tv"></div>
    
    	<div id="slides-container" data-bottom-top="background-position: 50% 0%" data-top-bottom=" background-position: 50% -20%">
        	<div id="slides"
            data-0p="transform:translate(0%,0%); "
            data-50p=""
            data-150p="transform:translate(0%,-50%); "
            data-200p=""
            data-300p="transform:translate(-50%,-50%);"
            data-350p=""
            data-450p="transform:translate(-50%,0%);"
            data-500p=""
            data-600p="transform:translate(-100%,0%);"
            data-650p=""
            data-750p="transform:translate(-100%,-50%);"
            data-800p=""
            data-900p="transform:translate(-150%,-50%);"
            data-950p=""
            data-1050p="transform:translate(-150%,0%);"
            data-1100p=""
            data-1200p="transform:translate(-200%,0%);"
            data-1250p=""
            data-1350p="transform:translate(-200%,-50%);"
           >
           
            
           
             	<div class="slide" align="center">
                  
                    <div  class="left" data-start="transform[swing]:translate(0%,0%);" data-500-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-start="transform[swing]:translate(0%,0%);" data-500-start="transform:translate(100%,0%);"></div>
                    <div  class="bckgr" data-start="transform[swing]:translate(0%,0%);" data-500-start=" transform[swing]:translate(0%,-100%);">
                    <?php include("infoSection.php"); ?>
                     
                    </div>
                    <div class="floor" data-start="opacity:1;" data-200-start="opacity:0;"></div>
                   
                </div>
                
                
                <div id="slide2" class="slide" align="center">
                    <div class="left" data-1100-start="transform[swing]:translate(0%,0%);"  data-2000-start="transform[swing]:translate(-100%,0%);"></div>
                    <div class="right" data-1100-start="transform[swing]:translate(0%,0%);" data-2000-start="transform[swing]:translate(100%,0%);"></div>
                    <div class="bckgr" data-anchor-target="#slide2" data-1100-start="transform[swing]:translate(0%,0%);" data-2000-start=" transform[swing]:translate(0%,-100%);">
                            <div  class="arrow-down"></div>
                            <div class="bckgrImg" ></div>   
                    </div>
                    <div class="floor" data-1100-start="opacity:1;" data-2000-start="opacity:0;"></div>
                </div>
                
                
          
                <div id="slide3" class="slide" align="center">
     				<div class="left" data-2100-start="transform:translate(0%,0%);" data-2500-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-2100-start="transform:translate(0%,0%);" data-2500-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-2100-start="transform[swing]:translate(0%,0%);" data-2500-start=" transform[swing]:translate(0%,100%);">
                    	
                        <p>WHERE PROGRAMMING AND ART BECOME AN ALCHEMISTIC OPERA</p>
                       <div class="bckgrImg" ></div>
                    </div>
                    <div class="floor" data-2100-start="opacity:1;" data-2500-start="opacity:0;"></div>
                </div>
                
                
                <div id="slide4" class="slide"  align="center">
					<div class="left" data-3200-start="transform:translate(0%,0%);" data-4000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-3200-start="transform:translate(0%,0%);" data-4000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-3200-start="transform[swing]:translate(0%,0%);" data-4000-start=" transform[swing]:translate(0%,-100%);">
                    
                        <div class="arrow-down"></div>
                    </div>
                    <div class="floor" data-3200-start="opacity:1;" data-4000-start="opacity:0;"></div>
                </div>
          
                
                <div id="slide5" class="slide"  align="center">
                	<div class="left" data-4200-start="transform:translate(0%,0%);" data-5000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-4200-start="transform:translate(0%,0%);" data-5000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-4200-start="transform[swing]:translate(0%,0%);" data-5000-start=" transform[swing]:translate(0%,-100%);">
                    	
                        <p>OUR FLUTE IS THE PENCIL AND YOUR PROJECT IS THE MELODY</p>
                       
                    </div>
                    <div class="floor" data-4200-start="opacity:1;" data-5000-start="opacity:0;"></div>
                </div>
                
                
                <div id="slide6" class="slide"  align="center">
                	<div class="left" data-5200-start="transform:translate(0%,0%);" data-6000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-5200-start="transform:translate(0%,0%);" data-6000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-5200-start="transform[swing]:translate(0%,0%);" data-6000-start=" transform[swing]:translate(0%,-100%);">
                    	
                        <div class="arrow-down"></div>
                    </div>
                    <div class="floor" data-5200-start="opacity:1;" data-6000-start="opacity:0;"></div>
                </div>
                
                
                 <div id="slide7" class="slide"  align="center">
                	<div class="left" data-6300-start="transform:translate(0%,0%);" data-7000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-6300-start="transform:translate(0%,0%);" data-7000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-6300-start="transform[swing]:translate(0%,0%);" data-7000-start=" transform[swing]:translate(0%,100%);">
                    
                        <p>WE ARE BIRD CATCHERS OF IDEAS</p>
                    </div>
                    <div class="floor" data-6300-start="opacity:1;" data-7000-start="opacity:0;"></div>
                </div>
                
                
                 <div id="slide8" class="slide"  align="center">
                	<div class="left" data-7300-start="transform:translate(0%,0%);" data-8000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-7300-start="transform:translate(0%,0%);" data-8000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-7300-start="transform[swing]:translate(0%,0%);" data-8000-start=" transform[swing]:translate(0%,-100%);">
                    
                        <div class="arrow-down"></div>
                    </div>
                    <div class="floor" data-7300-start="opacity:1;" data-8000-start="opacity:0;"></div>
                </div>
                
                
                 <div id="slide9" class="slide"  align="center">
                	<div class="left" data-8300-start="transform:translate(0%,0%);" data-9000-start="transform:translate(-100%,0%);"></div>
                    <div class="right" data-8300-start="transform:translate(0%,0%);" data-9000-start="transform:translate(100%,0%);"></div>
                    <div class="bckgr" data-8300-start="transform[swing]:translate(0%,0%);" data-9000-start=" transform[swing]:translate(0%,-100%);">
                    	
                        <p>WELCOME AND SEE ALL OUR ARIAS PERFORMED FOR CLIENTS AS YOU</p>
                    </div>
                    <div class="floor" data-8300-start="opacity:1;" data-9000-start="opacity:0;"></div>
                </div>
                
              
                 <div id="slide10" class="slide"  align="center">
                	<div class="left"></div>
                    <div class="right"></div>
                    <div class="bckgr">
                    <div class="arrow-down"></div>
                    </div>
                    <div class="floor"></div>
                </div>
                 
            </div>
        </div>
        
      
	</div>
	<!-- /Demo content -->   
    <script src="js/skrollr.min.js"></script>
	   <script type="text/javascript">
		var s = skrollr.init({
				render: function(data) {
        		//Log the current scroll position.
       				console.log(data.curTop);
    			},
				smoothScrolling: true,
				mobileDeceleration: 0.004
			}); 
    </script>

</body>
</html>
