<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Epilen Enterprise Solutions for Hospitals | Workflow automation and patient-first experience";
		$urlDIR = "../";
		include $urlDIR . 'meta.php';
		include $urlDIR . 'openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include $urlDIR . 'cmnImport.php'; // common
	?>
	
</head>

<body id="hosHomeBody" class="pageScroll">
	
    <div id="hosHomeCon" class="container-fluid">
    	
    	<div id="hosHomeConRo" class="row">
        	
        	<div id="hosHomeConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax h100">
            	
                <div id="hosHomeConLayer" class="cover-layer h100"></div>
            	
            	<?php
					include $urlDIR . 'section/menu.php'; 
				?>
      		   	
       		   	<div id="hosHomeContentRo" class="row-fluid">
                	
                    <div id="hosHomeContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-l">
                    	
                    	<div id="hosHomeContent" class="ta-c">
                    	
                    		<p id="hosHomeTitle" identifier="title" class="mar-b-null w3 hidden-xs">
                        		Data-driven technology that automates your workflow<br />and integrate experience in patient care.
                        	</p>
                        	
                        	<p id="hosHomeTitle" identifier="title" class="mar-b-null w3 visible-xs">
                        		Data-driven technology that automates your workflow and integrate experience in patient care.
                        	</p>
                        
                        	<a id="hosHomeCTA" identifier="hosJoinCTA" class="w4 prim-btn txt-decor-none cursor-p pos-rel noselect docJoinCTA">
                        		Register for Pilot
                        	</a>
                        
						</div>
                        
                    </div>
                    
             	</div>
            	    	
			</div>
			
   		</div>
    	
    </div>
    
    <div id="homePgView">
    	
    	<?php 
			include 'section/overview.php';
			include 'section/solution.php';
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
<script type="text/javascript" src="<?=$urlDIR?>scripts/hospital/core.js"></script>

</html>