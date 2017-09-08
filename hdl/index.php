<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Epilen Health Data Lab & Solutions | impacting lives with data.";
		$urlDIR = "../";
		include '../meta.php';
		include '../openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include '../cmnImport.php'; // common
	?>
	
</head>

<body id="homeBody" class="pageScroll">
	
	<div id="homeCon" class="container-fluid">
    
    	<div id="homeConRo" class="row">
        	
        	<div id="homeConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax">
            	
                <div id="homeConLayer" class="cover-layer"></div>
                
                <?php
					include '../section/menu.php';
				?>
                
                <div id="homeContentRo" class="row-fluid pos-rel">
                	
                    <div id="homeContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-c">
                    
                    	<p id="homeTitle" identifier="title" class="w3">
                        	Creating a healthier tomorrow
                        </p>
                        
                        <p id="homeSubTitle" identifier="subTitle" class="w4">
                        	A healthier tomorrow will begin by understanding data today.
                        </p>
                    	
                        <a id="homeCTA" identifier="homeCTA" class="w4 prim-btn txt-decor-none cursor-p pos-rel">
                        	Learn more
                        </a>
                        
                    </div>
                    
             	</div>
            	
            </div>
        	    	
        </div>
        
    </div>
    
    <div id="homePageView">
    	
    	<?php 
			include 'section/intro.php';
			include 'section/abstract.php';
			include 'section/transparent.php';
			include 'section/outcome.php';
			include 'section/peopleOutcome.php';
			include 'section/govOutcome.php';
			include 'section/orgOutcome.php';
			include '../section/subscribe.php';
			include '../section/footer.php';
		?>
        
    </div>
    
</body>

<?php include '../section/promo.php'; ?>

<!-- Page specific JS -->
<script type="text/javascript" src="../scripts/hdl/core.js"></script>

</html>