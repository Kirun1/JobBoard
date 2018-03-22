<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed'); 
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js " lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>JobBoard - 404</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo base_url("assets/404/base.css" ); ?> ">  
   <link rel="stylesheet" href="<?php echo base_url("assets/404/main.css") ; ?> ">
   <link rel="stylesheet" href="<?php echo base_url("assets/404/vendor.css") ; ?> ">     

   <!-- script
   ================================================== -->
	<script src="<?php echo base_url("assets/404/modernizr.js") ; ?> "></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="">

</head>

<body>

  
	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-particle-js"><canvas class="pg-canvas" style="display: block;" width="1920" height="943"></canvas>

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  		
			  			<h1 class="kern-this" aria-label="404 Error." style="font-size: 94px;"><span class="char1" aria-hidden="true">4</span><span class="char2" aria-hidden="true">0</span><span class="char3" aria-hidden="true">4</span><span class="char4" aria-hidden="true"> </span><span class="char5" aria-hidden="true">E</span><span class="char6" aria-hidden="true">r</span><span class="char7" aria-hidden="true">r</span><span class="char8" aria-hidden="true">o</span><span class="char9" aria-hidden="true">r</span><span class="char10" aria-hidden="true">.</span></h1>
			  			<p>
						Ooops! Looks like nothing was found at this location.
						Maybe try one of the links below or click on the top menu.
			  			</p>

			  			   			

			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">
		   			
		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="<?php echo base_url(); ?>">Homepage</a></li>		                    
				   	</ul>
				   	<div class="credits">
				   		<p>&copy <?php echo date('Y');  ?> All Rights Reserved With JobBoard</p>
				   	</div>
			   	</div>   		   		

		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader" style="display: none;"> 
    	<div id="loader" style="display: none;"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?php echo base_url("assets/404/jquery-2.js") ; ?> "></script>
   <script src="<?php echo base_url("assets/404/plugins.js") ; ?> "></script>
   <script src="<?php echo base_url("assets/404/main.js") ; ?> "></script>



</body>
</html>