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
             <div class="container">
            <div class="row">
                
                  <div class="span12 project_bg">
                 <img class="visible-desktop"   alt="" src="img/project.png">
                     <div class=" span3 project_cont">
                      <a class="ongoingproject" rel="group" href="img/ongoing1.png"><img src="img/on1.png" alt="" /></a>
                      </div>
                      <div class=" span3 project_cont1">
                     <a class="upcomingproject" rel="group" href="img/upcoming1.png"><img src="img/up1.png" alt="" /></a>
                      </div>
                 </div> 
                 
               </div>  
                 
              </div>      
          
           
           
    </div>       
           
           
           
           
           
           
           
                    
    
           
           
           
           
                    
       <!-- footer --> 
       <?php include 'footer.php';?>
 

      
        <script src="js/jquery.flexslider.js"></script>   
         <script src="js/scripts.js"></script>  
<script type="text/javascript">

var navigation = responsiveNav("#nav", {
    animate: true,        // Boolean: Use CSS3 transitions, true or false
    transition: 400,      // Integer: Speed of the transition, in milliseconds
    label: "Menu",        // String: Label for the navigation toggle
    insert: "after",      // String: Insert the toggle before or after the navigation
    customToggle: "",     // Selector: Specify the ID of a custom toggle
    openPos: "relative",  // String: Position of the opened nav, relative or static
    jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
    init: function(){},   // Function: Init callback
    open: function(){},   // Function: Open callback
    close: function(){}   // Function: Close callback
  });





</script>
        
            <script type="text/javascript">

          
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});


$(".ongoingproject").click(function() {
    
    $.fancybox.open([
        {
            href : 'img/ongoing1.png',                
           
        }
        
       
    ], {
        padding : 0
    });
    
    return false;
    
});

$(".upcomingproject").click(function() {
    
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
