<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Terms of Usage - Epilen | redesigning healthcare by combining software, hardware, and the actual doctors practicing all under one roof.";
		$urlDIR = "../";
		include '../meta.php';
		include '../openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include '../cmnImport.php'; // common
	?>
    
</head>

<body id="termsBody" class="pageScroll">
	
	<div id="termsCon" class="container-fluid">
    
    	<div id="termsConRo" class="row">
        	
        	<div id="termsConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax">
            	
                <div id="termsConLayer" class="cover-layer"></div>
                
                <?php
					include '../section/menu.php'; 
				?>
            	
            	<div id="termsContentRo" class="row-fluid">
           	  	
           	  		<div id="termsContentCo" class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1 ta-c">
           	  			
           	  			<p id="termsTitle" identifier="title" class="w3">
                        	Terms &amp; Conditions
                        </p>
           	  			
           	  			<span identifier="arrowDown" class="epilen-arrowDownRound pos-rel cursor-p"></span>
           	  			
					</div>
           	  	
				</div>
           	  	            
            </div>
        	    	
        </div>
        
    </div>
    
    <div id="termsPageView">
    	
    	<?php 
			include 'section/note.php';
			include '../section/footer.php';
		?>
        
    </div>
    
</body>

<!-- Import Page Specific JS [../js/] -->
<script type="text/javascript" src="../scripts/terms/core.js"></script>

</html>