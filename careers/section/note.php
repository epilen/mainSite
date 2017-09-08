<!--
	Note for Applicants
-->

<?php
	
	$bulletTextArr = array(
					"The pace is beyond fast. The work is super hard.",
					"This is not a 9-5 job. You won't sleep as much as you used to.",
					"Excellence is the passing grade.",
					"A scrappy mindset is a must. This definitely isn't for everyone.",
					"Our mission and purpose drive us here, not free lunches (although we do offer free coffee & tea with cookies which can be taken at all hours of the day!) There is only one free lunch, and it's on your first day.",
					"We're just getting started and the awards & accolades are not why we do what we do.",
					"Epilen is not just a health care company; it’s a health innovation company.",
					"If you are not passionate about making things better for our company, employees and humanity, you will hate it here.",
					"If you don’t exude passion, creativity, commitment, and fun, you will not make it.",
					"We like unique people with remarkable talents. Boring people need not apply.",
					"Check your ego at the door. We don’t allow them on the property.",
					"We care about people, growth, excellence and results. We tend to lose sleep over them as this is not easy.",
					"Understand our business and how what you do helps it accelerate at rocket speeds. Please remember to wear a seatbelt when you do this.",
					"Be hands-on & use your head. Serious brainpower required to work in this environment.",
					"When you think you are done, you begin again to make it better.",
					"Run from anyone who believes that Challenge exists in real!",
					"Prove your value every day. Work that doesn’t add value is not valuable.",
					"Be you! Being someone else all day is just plain exhausting.",
					"Love change, it happens here at the speed of light... maybe faster, but we have been unable to measure it because it is going too damn fast.",
					"Be proactive, we move too fast to be reactive.",
					"Always love to be challenged!",
					"Learn something new every day. Not doing so is just dumb.",
					"Communicate so everyone can understand what the heck you are trying to say.",
					"A burning desire to work for the company and change the face of healthcare.",
					"Epilen has zero tolerance for not following any of its policies.",
					"Bottom line, we are in search of real people that believe in and deliver the impossible every day."
					);

?>

<div id="noteCon" class="container-fluid">

	<div id="noteConRo" class="row">
    
    	<div id="noteConCo" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 
       	col-xs-10 col-xs-offset-1">
        
        	<div id="noteContent">
            	
            	<p identifier="title" class="noteTitle w4 ta-c cursor-d">
            		Invention is in our DNA
				</p>
           	
           		<p identifier="text" class="noteDesc w4 ta-c cursor-d">
           			Though we are a start-up yet we consider Invention is in our DNA. 
           			We don't just talk about developing breakthrough ideas but we take giant steps to work on the
           			missions that other thinks are impossible. We do not hesitate to set the goals just because it appears
           			absurdly ambitious by any reasonable standard. We have the potential here at Epilen
           			to have an incredible effect on the future of humanity and healthcare. 
           			You're the ones who are going to make it happen!
				</p>
            	
            </div>
            
            <div id="applyNoteContent">
            
            	<p identifier="title" class="noteTitle applyNoteTitle w4 ta-c cursor-d">
            		A few additional things to note before you apply:
				</p>
           		
           		<div id="applyNoteSep"></div>
           		
           		<div id="applyNoteRo" class="row applyNoteScroll of-x-h of-y-s">
           			
           			<div id="applyNoteCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           				
           				<?php for($k=1; $k<=count($bulletTextArr); $k++) : ?>
           					
           					<?php if($k!=1){$applyNoteBulletRowClass = "next";} if($k>9){$applyNoteBulletNumClass = "twoDigit";} ?>
           					
           					<div id="applyNoteBulletRo" class="row <?=$applyNoteBulletRowClass?>">
           					
           						<div id="applyNoteBulletNumCo" class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
           						
           							<div id="applyNoteBulletCircle">
										<span identifier="num" class="<?=$applyNoteBulletNumClass?> w3 pos-rel">
											<?=$k?>
										</span>
									</div>
          									
								</div>
         						
          						<div id="applyNoteBulletTextCo" class="col-lg-11 col-md-11 col-sm-11 col-xs-10">
          						
          							<p identifier="text" class="w4">
          								<?=$bulletTextArr[$k-1]?>
									</p>
          						
								</div>
          						
							</div>
          					
           				<?php endfor; ?>
           				
					</div>
          			
				</div>
           		
			</div>
       		
        </div>
       	
  	</div>
    
</div>