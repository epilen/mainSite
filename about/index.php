<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "About Epilen | redesigning healthcare by combining software, hardware, and the actual doctors practicing all under one roof.";
		$urlDIR = "../";
		include '../meta.php';
		include '../openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include '../cmnImport.php'; // common
	?>
	
</head>

<body id="aboutBody" class="pageScroll">
	
	<div id="aboutCon" class="container-fluid">
    
    	<div id="aboutConRo" class="row">
        	
        	<div id="aboutConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax">
            	
                <div id="aboutConLayer" class="cover-layer"></div>
                
                <?php
					include '../section/menu.php'; 
				?>
                
            	<div id="aboutContentRo" class="row-fluid pos-rel">
                	
                    <div id="aboutContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-c">
                    
                    	<p id="aboutTitle" identifier="title" class="w4">
                        	Like many businesses that confront convention, Epilen’s origin came from a simple place: 
                        	a belief that there had to be a better way to take care of people when they access healthcare.
                        	<br />
                        	That's why, with the technology to create a more intelligent solution and the compassion to 
                        	know that every person matters, we are delivering a connected healthcare experience for 
                        	everyone who wants the best care for themselves.
                        </p>
                        
						<span identifier="arrowDown" class="epilen-arrowDownRound pos-rel cursor-p"></span>
                        
                    </div>
                    
             	</div>
            	
            </div>
        	    	
        </div>
        
    </div>
    
    <div id="aboutPageView">
    	
    	<?php 
			include 'section/evolution.php';
			include 'section/mission.php';
			include 'section/career.php';
			include '../section/subscribe.php';
			include '../section/footer.php';
		?>
        
    </div>
    
</body>

<?php include '../section/promo.php'; ?>

<!-- Page specific JS -->
<script type="text/javascript" src="../scripts/about/core.js"></script>

</html>