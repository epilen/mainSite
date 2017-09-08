<!--
	Highlights
-->

<?php
	
	$benefitBGArr = array("ht-1.jpg", "ht-2.jpg", "ht-3.jpg", "ht-4.jpg", "ht-5.jpg", "ht-6.jpg", "ht-7.jpg", "ht-8.jpg");
	$benefitIconArr = array("happyFace", "virtualPractice", "saveTime", "digitalMoney", "24hour", "onlinePractice",
						   "medicalShield", "gift");
	$benefitTitleArr = array("Delight your Patients with Epilen practice", "A free Online Practice that expands your reach!",
							"Save your time with efficient practice", "Boost your income with Epilen practice",
							"Enjoy flexible practice hours", "Grow your practice with Epilen Profile",
							"Trusted Network of Doctors", "Zero On-board Cost");
	$benefitDescArr = array("Instantly enable doctor search, online booking, and cost estimates for your network, while giving your
							patients the best user experience in the market.",
						   "Get a fully equipped Online practice that gives you easy access to millions of patients worldwide. Epilen connects you to people looking for doctors with your expertise.",
						   "Epilen allows you to take charge of your time and make a positive contribution to people's lives.",
						   "We help cut down the overhead costs as well as increase the number of consultations you can squeeze into your day.",
						   "You enjoy the flexibility of practicing at any time convenient to both you and your patients.",
						   "Epilen practice not only builds your professional brand, it also helps you get noticed and serve more patients.",
						   "Epilen is a growing network of trusted Doctors and a secure environment to get your practice up and out.",
						   "Epilen offers you the art of practicing medicine in a new way. Plus it's quick, easy and free to sign up!");
	

?>

<div id="highlightCon" class="container-fluid">

	<div id="highlightConRo" class="row">
    
    	<div id="highlightConCo" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10
       	col-xs-offset-1">
        
        	<div id="highlightContent" class="ta-c">
            	
            	<p type="head" class="w5">
            		At Epilen, we believe that the future of medicine combines the best medical care with the 
					efficiency and grace of innovative technology.
            	</p>
            	
            	<p type="txt" class="w4">
            		We're looking for a motivated, energetic physician who is MCI certified. 
            		We are a small, but rapidly growing healthcare startup that is continually evolving. 
            		Our ideal doctor would be someone who is motivated to provide high quality patient-centered, 
            		comprehensive primary care. Our doctors will be equipped with innovative tools to help drastically 
					decrease charting as well as a dedicated care team to support you in all care coordination.
				</p>
           	
           		<p type="subHead" class="w5 txt-tr-uc">
            		Benefits of joining Epilen
            	</p>
            	
            </div>
            
            <div id="highlightVisual">
            	
            	<div id="highlightVisualRo" class="row">
            	
            		<?php for($ben=0; $ben<count($benefitBGArr); $ben++) : ?>
						
						<div id="highlightVisualCo" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 6vh;">
            			
            				<div id="highlightVisualBox" class="highlightVisualBox"
            				style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0,0,0,1) 100%, transparent), url('../images/doctor/home/<?=$benefitBGArr[$ben]?>');">
            					
            					<div id="highlightBoxContent" class="pos-rel">
            						
            						<div id="highlightBoxContentRo" class="row">
            						
            							<div id="highlightBoxContentIcoCo" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            								<span type="icon" class="epilen-<?=$benefitIconArr[$ben]?> pos-rel"></span>
										</div>
           						
           								<div id="highlightBoxContentTxtCo" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
           									
           									<p type="txt" class="w4"><?=$benefitTitleArr[$ben]?></p>
           									
           									<p type="desc" style="display: none;" class="w4">
            									<?=$benefitDescArr[$ben]?>
											</p>
           									
										</div>
            						
									</div>
            						
								</div>
            					
							</div>
            			
						</div>
								
					<?php endfor; ?>
				
				</div>
           	
			</div>
        
        </div>
    
	</div>
    
</div>