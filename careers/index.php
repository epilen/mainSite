<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<!-- Meta Tags, Open Graph Tags & Viewport -->
	<?php 
		$pgTitle = "Career Opportunities at Epilen | A career at Epilen gives you the opportunity to join in the creation of technologies that change the face of healthcare.";
		$urlDIR = "../";
		include '../meta.php';
		include '../openGraph.php';
		
		// Style/Script Imports
		include 'pgImport.php'; // page specific
		include '../cmnImport.php'; // common
	?>
	
</head>

<body id="talentHomeBody" class="pageScroll">
	
    <div id="talentHomeCon" class="container-fluid">
    	
    	<div id="talentHomeConRo" class="row">
        	
        	<div id="talentHomeConCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-bg bg-parallax">
            	
                <div id="talentHomeConLayer" class="cover-layer"></div>
            	
            	<?php include '../section/menu.php'; ?>
       		    	
       		   	<div id="talentHomeContentRo" class="row-fluid">
                	
                    <div id="talentHomeContentCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ta-c">
                    
                    	<p id="talentHomeTitle" identifier="title" class="mar-b-null w3 hidden-xs">
                        	Enabling better Care for<br />7.5 billion people on Earth.
                        </p>
                        
                        <p id="talentHomeTitle" identifier="title" class="mar-b-null w3 visible-xs">
                        	Enabling better Care for 7.5 billion people on Earth.
                        </p>
                        
                    </div>
                    
             	</div>
            	    	
			</div>
		
   		</div>
    	
    </div>
    
	<div id="homePgView">
    	
    	<?php 
			include 'section/tag.php';
			include 'section/note.php';
			include 'section/opening.php';
			include 'section/working.php';
			include '../section/subscribe.php';
			include '../section/footer.php';
		?>
        
    </div>
    
</body>

<?php include '../section/promo.php'; ?>

<!-- Page specific JS -->
<script type="text/javascript" src="../scripts/career/core.js"></script>

</html>