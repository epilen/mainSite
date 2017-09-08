<!--
	Subscription
-->

<div id="subscribeContainer" class="container-fluid">

	<div id="subscribeContainerRow" class="row">
    
    	<div id="subscribeContainerCol" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1
       	col-xs-12 pos-rel">
        	
            <div id="subscribeView" class="ta-c">
            	
                <div id="subscribeViewRow" class="row">
                	
                    <div id="subscribeContentCol" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	
                        <div id="subscribeContent" class="ta-c">
                        	
                        	<p identifier="title" class="w4">
                        		Subscribe to hear more from us
							</p>
                        	
                        	<p identifier="subTitle" class="w4">
                        		We stay on top of the constant changes and give you the heads up on what is important to know.
							</p>
                        	
                        </div>
                        
                        <div id="subscribeForm">
                        
                        	<div id="subscribeInputRo" class="row">
                            	
                                <div id="subscribeInputCo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	
                                    <div id="subscribe_nameFG" class="form-group">
                                    	
                                        <input type="text" class="form-control w5 outln-none" autocomplete="off" iType="name" iRequire="true" id="subscribe_name" name="subscribe_name" placeholder="Enter your name" 
                                        value="">
                                        
                                    </div>
                                	
                                	<div id="subscribe_emailFG" class="form-group">
                                    	
                                        <input type="text" class="form-control w5 outln-none" autocomplete="off" iType="email" iRequire="true" id="subscribe_email" name="subscribe_email" placeholder="Enter your email address" value="">
                                        
                                    </div>
                                	
									<p id="subscribe_terms" class="w5 ta-c">By submitting your email, you accept the 
										<a class="w5 txt-decor-none cursor-p" redirectSrc="<?=$urlDIR?>">Terms &amp; Conditions.</a>
                               		</p>
                               		
									<p id="subscribe_cta" class="ta-c" redirectSrc="<?=$urlDIR?>">
										<span class="w5 txt-tr-uc pos-rel cursor-p" identifier="text">Submit</span>
										<span identifier="icon" class="epilen-arrowNextRound pos-rel cursor-p"></span>
                              			<img class="pos-rel" identifier="loader" src="<?=$urlDIR?>images/loader_large.gif" 
                              			style="display: none;" />
                               		</p>
                                	
                                </div>
                                
                            </div>
                            
						</div>
                       	
                    	<div id="subscribeResult" style="display: none;">
                    		
                    		<div id="subscribeResultContent" class="ta-c">
                    			<p identifier="title" class="w5"></p>
                        		<p identifier="subTitle" class="w4"></p>
                    		</div>
                    		
                    		<img identifier="success" src="<?=$urlDIR?>images/subscribe/mailSuccess.png" class="pos-rel" 
                    		style="display: none;" />
                    		<img identifier="duplicate" src="<?=$urlDIR?>images/subscribe/mailDuplicate.png" class="pos-rel"
                    		style="display: none;" />
                    		<img identifier="error" src="<?=$urlDIR?>images/subscribe/mailError.png" class="pos-rel"
                    		style="display: none;" />
                    	
						</div>
                   		
                    </div>
                    
                </div>
                
            </div>
            
        </div>
       	
  	</div>
    
</div>