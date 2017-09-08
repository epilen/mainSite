<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Epilen | redesigning healthcare by combining software, hardware, and the actual doctors practicing all under one roof.";
		$urlDIR = "";
		include 'meta.php';
		include 'openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include 'cmnImport.php'; // common
	?>
	
</head>

<body id="homeBody" class="pageScroll of-x-h">
	
	<div id="homeCon" class="container-fluid">
    
    	<div id="homeConRow" class="row">
        	
        	<div id="homeConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bgProp parallax h100">
            	
                <div id="homeConLayer" class="cover-layer h100"></div>
                
                <?php
					include 'section/menu.php';
				?>
                
                <div id="homeContentRo" class="row-fluid">
                	
                    <div id="homeContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-c pos-rel">
                    
                    	<p id="homeTitle" identifier="title" class="w3">
                        	Epilen is redesigning healthcare by combining software, hardware, and the actual 
                        	doctors practicing all under one roof.
                        </p>
                        
                        <a id="homeCTA" identifier="homeCTA" class="w4 prim-btn txt-decor-none cursor-p pos-rel noselect">
                        	Learn more
                        </a>
                        
                    </div>
                    
             	</div>
             	
             	<div id="homeBottomRo" class="row-fluid">
             		
             		<div id="homeBottomCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-c">
             			
             			<p id="feaText" class="w4">
             				Epilen got featured in eHealth, Asia's first monthly magazine on the Enterprise of Healthcare.
             				<a class="readMoreCTA w4 cursor-p pos-rel noselect" href="https://goo.gl/kMNsPc" target="_blank">
             					Read More
             				</a>
             			</p>            			
             			
             		</div>
             		
             	</div>
            	
            </div>
        	    	
        </div>
        
    </div>
    
    <div id="homePageView">
    	
    	<?php 
			include 'section/intro.php';
			include 'section/care.php';
			include 'section/benefit.php';
			include 'section/member.php';
			include 'section/hdl.php';
			include 'section/subscribe.php';
			include 'section/footer.php';
		?>
        
    </div>
    
</body>

<?php include 'section/promo.php'; ?>

<script type="text/javascript" src="scripts/home/core.js"></script>

</html>