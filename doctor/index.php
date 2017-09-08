<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Epilen for Doctors | redesigning healthcare by combining software, hardware, and the actual doctors practicing all under one roof.";
		$urlDIR = "../";
		include $urlDIR . 'meta.php';
		include $urlDIR . 'openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include $urlDIR . 'cmnImport.php'; // common
	?>
	
</head>

<body id="docHomeBody" class="pageScroll">
	
    <div id="docHomeCon" class="container-fluid">
    	
    	<div id="docHomeConRo" class="row">
        	
        	<div id="docHomeConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax h100">
            	
                <div id="docHomeConLayer" class="cover-layer h100"></div>
            	
            	<?php
					include $urlDIR . 'section/menu.php'; 
				?>
      		   	
       		   	<div id="docHomeContentRo" class="row-fluid">
                	
                    <div id="docHomeContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-l">
                    	
                    	<div id="docHomeContent" class="ta-c">
                    	
                    		<p id="docHomeTitle" identifier="title" class="mar-b-null w3 hidden-xs">
                        		Are you looking for an innovative practice model that uses<br />technology
                        	 	to provide high-quality patient-centered care? 
                        	</p>
                        	
                        	<p id="docHomeTitle" identifier="title" class="mar-b-null w3 visible-xs">
                        		Are you looking for an innovative practice model that uses technology
                        	 	to provide high-quality patient-centered care? 
                        	</p>
                        
                        	<a id="docHomeCTA" identifier="docJoinCTA" class="w4 prim-btn txt-decor-none cursor-p pos-rel noselect docJoinCTA">
                        		Join now, it's free
                        	</a>
                        
						</div>
                        
                    </div>
                    
             	</div>
            	    	
			</div>
			
   		</div>
    	
    </div>
    
    <div id="homePgView">
    	
    	<?php 
			include 'section/highlight.php';
			include 'section/experience.php';
			include $urlDIR . 'section/subscribe.php';
			include $urlDIR . 'section/footer.php';
			include 'section/joinModal.php';
		?>
        
    </div>
    
</body>

<?php include '../section/promo.php'; ?>

<!-- Page specific JS -->
<script type="text/javascript" src="<?=$urlDIR?>scripts/doctor/core.js"></script>

</html>