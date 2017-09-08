<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Epilen Relations | Comitted to build a sustainable health care business for our people, investors, partners & Users in long-term.";
		$urlDIR = "";
		include 'meta.php';
		include 'openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include 'cmnImport.php'; // common
	?>
  	
</head>

<body id="relationsHomeBody" class="pageScroll">
	
    <div id="relationsHomeCon" class="container-fluid">
    	
    	<div id="relationsHomeContainerRow" class="row">
        	
        	<div id="relationsHomeContainerCol" class="col-lg-12 col-md-12 col-sm-12 cover-bg bg-parallax">
            	
                <div id="relationsHomeContainerLayer" class="cover-layer"></div>
            	
            	<?php include 'pgView/menu.php'; ?>
       		    	
       		   	<div id="relationsHomeContentRow" class="row-fluid">
                	
                    <div id="relationsHomeContentCol" class="col-lg-12 col-md-12 col-sm-12 ta-c">
                    	
                    	<div id="relationsHomeContentBlock">
                       		<p id="relationsHomeTitle" identifier="title" class="mar-b-null w3">
                        		Comitted to build a sustainable health care business for our people, users, partners &amp; investors in long-term.
                        	</p>
						</div>
                        
                    </div>
                    
             	</div>
            	    	
			</div>
		
   		</div>
    	
    </div>
    
	<!-- Div to include Page View begins -->
    <div id="homePgView">
    	
    	<?php 
			include 'pgView/intro.php';
			include 'pgView/state.php';
			include 'pgView/solution.php';
			include 'pgView/step.php';
			include 'pgView/way.php';
			include 'pgView/footer.php';
		?>
        
    </div>
    <!-- Div to include Page View ends -->
	
</body>

<!-- Page JS -->
<script type="text/javascript" src="scripts/home.js"></script>

</html>