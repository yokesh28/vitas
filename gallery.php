<!DOCTYPE html>
<html>
  <head>
     
    <meta charset="utf-8">
    <title>Vitas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.css" rel="stylesheet">        
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css">
    
    <link href="css/style.css" rel="stylesheet" media="screen">
    
    
    <!-- Add jQuery library -->
<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
    
    
    
    
    
    
    
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   
      <!--   <link rel="shortcut icon" href="../assets/ico/favicon.png">-->
       
       <style type="text/css">
    .input-append button.add-on { 
        height: inherit !important;
    }
</style>
      
       
       
  </head>
  <body>
    
    
    <div class="container">
    
    <!-- header -->
   <?php include 'header.php';?>
                
       
                    
           <!-- inner part -->
           
     <div class="container" style="margin-bottom: 30px;">
         <div class="row">
                 
              
              <div class="span3">
             
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
              

              </div>    
              
               
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
          </div>
          
        <div class="row" style="margin-top: 20px;">
              
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
              <div class="span3">
              <a class="fancybox" rel="" href="img/gallery/gbig.png"><img src="img/gallery/gbig.png" alt="" /></a>
         
              
              </div> 
           </div>    
              
              
              
              
            
               
           
    </div>
           
      
    </div>       
     <div class="row">      
       <div class="span6 project_vitas">
        <a class="ongoing" rel="group" href="img/ongoing1.png"><img src="img/ongoing.png" alt="" /></a>
        <a class="ongoing" rel="group" href="img/ongoing1.png"><img src="img/upcoming.png" alt="" /></a>
                  
          </div>   
       </div>            
           
           
           
           
           
                    
       <!-- footer --> 
       <?php include 'footer.php';?>
 

      
        <script src="js/jquery.flexslider.js"></script>   
         <script src="js/scripts.js"></script>  
         
            <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
$(".ongoing").click(function() {
	    
	    $.fancybox.open([
	        {
	            href : 'img/ongoing1.png',                
	           
	        }
	        
	       
	    ], {
	        padding : 0
	    });
	    
	    return false;
	    
	});

$(".upcoming").click(function() {
	    
	    $.fancybox.open([
	        {
	            href : 'img/upcoming1.png',                
	           
	        }
	       
	    ], {
	        padding : 0
	    });
	    
	    return false;
	    
	});
	
</script>
       
    
  </body>
</html>
