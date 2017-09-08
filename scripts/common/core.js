/*
	Common JS
*/

$(document).ready(function() {
	
	/* 
		Home Menu JQuery 
	*/
	
	// Redirect to 'doctor' page
	$('#homeMenuLink p[id="homeMenuLinkDoctor"]').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + "doctor/", "_blank");
	});
	
	// Redirect to 'hospital' page
	$('#homeMenuLink p[id="homeMenuLinkHospital"]').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + "hospital/", "_blank");
	});
	
	// Redirect to 'hdl' page
	$('#homeMenuLink p[id="homeMenuLinkHDL"]').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + "hdl/", "_blank");
	});
	
	// Redirect to 'about' page
	$('#homeMenuLink p[id="homeMenuLinkAbout"]').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		rhref(getRedirectSrc + "about/");
	});
	
	// Redirect to 'careers' page
	$('#homeMenuLink p[id="homeMenuLinkCareer"]').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + "careers/", "_blank");
	});
	
	/* 
		Footer Menu JQuery 
	*/
	
	// Redirect to 'Epilen Facebook' page
	$('#footerSocial p span[identifier="fb"]').on('click', function(){
		ohref('https://www.facebook.com/EpilenHealth/', '_blank');
	});
	
	// Redirect to 'Epilen Twitter' page
	$('#footerSocial p span[identifier="tw"]').on('click', function(){
		ohref('https://www.twitter.com/Epilen/', '_blank');
	});
	
	// Redirect to 'about' page
	$('#footerLinkGeneral a[identifier="about"] span').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		rhref(getRedirectSrc + "about/");
	});
	
	// Redirect to 'careers' page
	$('#footerLinkGeneral a[identifier="career"] span').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + "careers/", "_blank");
	});
	
	// Redirect to 'mailto:care@epilen.com'
	$('#footerLinkContact p span[identifier="text"]').on('click', function(){
		rhref("mailto:care@epilen.com");
	});
	
	
	/* 
		Parallax on iPAD
	*/
	
	var device = detectOS();
	if(device == "iPad"){
		if ($('div.cover-bg.parallax').hasClass("parallax")) {		
		
			$('div.cover-bg.parallax').addClass("bg-scroll");
			$('div.cover-bg.parallax').removeClass("parallax");

		}
	}
	
	/* 
		Subscribe JQuery
	*/
	
	// Redirect to 'terms & conditions' page
	$('#subscribe_terms a').on('click', function(){
		var getRedirectSrc = $(this).attr("redirectSrc");
		ohref(getRedirectSrc + 'terms/', '_blank');
	});
	
	// on click of any Input, remove warning class if it exists
	$('#subscribeInputCo div[class="form-group"]').click(function(){
		$(this).removeClass("has-warning");
	});
	
	$('#subscribeInputCo div[class="form-group"]').focusin(function(){
		$(this).removeClass("has-warning");
		$('#subscribe_name').attr("placeholder", "Enter your name");
		$('#subscribe_email').attr("placeholder", "Enter your email address");
	});
	
	// Upon click of 'Subscribe CTA'
	$('#subscribe_cta span').click(function () {
    	
		var dataStringToValidate = $('#subscribeInputCo div :input').serialize();
		var dataStringToOperate = $('#subscribeInputCo div :input').serialize();
		var dbTableName = "subscribers";
		
		var sqlOp = sqlOperate(dataStringToValidate, dataStringToOperate, dbTableName, true, true);
	
		var success = sqlOp[0];
		var duplicate = sqlOp[1];
		var error = sqlOp[2];
		
		// get subscriber name
		var sName = $('#subscribe_name').val();
		var sFirstName = extractFirstName(sName);
		
		subscribeResultHTML(success, duplicate, error, sFirstName);
		
		// function to show subscribe result
		function subscribeResultHTML(success, duplicate, error, sFirstName){
			
			var titleText;
			var subTitleText;
			
			$('#subscribe_cta span[identifier="icon"]').css("display", "");
			$('#subscribe_cta img[identifier="loader"]').css("display", "none");
				
			$('#subscribeContent').css("display", "none");
			$('#subscribeForm').css("display", "none");
			
			if(success == "Yes"){
				$('#subscribeResult img[identifier="success"]').css("display", "");	
				titleText = "Thanks " + sFirstName + "!";
				subTitleText = "We've received your mailing information and we'll keep you posted on latest developments on what is important to know.";
			}
			else if (duplicate == "Yes"){
				$('#subscribeResult img[identifier="duplicate"]').css("display", "");
				titleText = "Hello " + sFirstName + "!";
				subTitleText = "We've already received your mailing information earlier and we'll keep you posted on latest developments on what is important to know.";
			}
			else if(error == "Error"){
				$('#subscribeResult img[identifier="error"]').css("display", "");
				titleText = "Hello " + sFirstName + "!";
				subTitleText = "We're encountering some technical issues at this time, please try again subscribing after some time.";
			}
			
			$('#subscribeResultContent p[identifier="title"]').html(titleText);
			$('#subscribeResultContent p[identifier="subTitle"]').html(subTitleText);
			
			$('#subscribeResult').css("display", "");
			
		}
		
	});
	
});