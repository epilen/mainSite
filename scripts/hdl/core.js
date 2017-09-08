/*
	Epilen Home JS
*/

$(document).load(function () {
 	$('#promoModal').modal('show');
});

$('#homeCTA').click(function(){
	scrollTop("id", "introCon", 1500);
});

// change opacity on scroll up and down
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();

	var scrollOpacity = ((height - scrollTop) / height);
	var onScrollOpacity = 1.3 - scrollOpacity;
	
	if(scrollOpacity == 1){
		$('#homeContentCo').css("opacity", scrollOpacity);
		$('#introDesc').css("opacity", 1-scrollOpacity);
	}
	else{
		$('#homeContentCo').css("opacity", (scrollOpacity-0.4));
		$('#introDesc').css("opacity", (0.7-scrollOpacity));
	}
	
	if(scrollOpacity == 0){
		$('#introDesc').css("opacity", 1);
		$('#arrowSVG').fadeIn(3000);
	}
	
    $('#homeConLayer').css("background", "rgba(0,0,0," + onScrollOpacity + ")");
	
});

$('#arrowSVG').click(function(){
	scrollTop("id", "abstractCon", 1000);
});

$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#abstractCon').position().top-300){
    	$('#abstractViewRo').fadeIn(1000);	
	}
});

$('#epilenDataCTA').click(function(){
	ohref("../about/");
});

// on scrolling to outcome.php [starts]
$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#outcomeCon').position().top-300){
    	$('#outcomeViewRo').fadeIn(1000);	
	}
});

// on click upon 'outcomeStakeholderBox' of 'outcome.php', scroll to specific div [starts]
function outcomeStakeholderBox(boxName){
	scrollTop("id", boxName + "OutcomeCon", 1800);
}

// on 'oc - outcome' Container "More" Link click [starts]
$('.ocMoreLink').click(function(){
	var getOCName = $(this).attr("identifier"); // retrieving the identifier
	ocExtensionView("Show", "ocMoreLink", getOCName);
});


/* Close the Outcome Extension Div upon click of Close Button Icon [starts] */
$('.ocExtensionViewClose').click(function(){
	var getOCName = $(this).attr("role"); // retrieving the role
	ocExtensionView("Hide", "ocExtensionViewClose", getOCName);
});

// method to execute show and hide of Outcome Extension Div upon click [starts]
function ocExtensionView(mode, className, getOCName){
	
	var hh;
	
	if(mode == "Show"){
		$('.' + className + '[identifier="' + getOCName + '"]').fadeOut(); // fade Out the Link Text
		hh = 100; // interval timer
	}
	else if(mode == "Hide"){
		$('.ocMoreLink[identifier="' + getOCName + '"]').fadeIn();
		hh = 88; // interval timer
	}
	
	var extensionID = "#" + getOCName + "OCExtension"; // creating the extension id to be displayed as part of an extension
	var ocContainerID = "#" + getOCName + "OutcomeCon"; // creating the container ID
	
	if(mode == "Hide"){
		scrollTop("id", extensionID, 900);
	}
	
	$(extensionID).slideToggle(960); // show or hide the extension Div
	
	var ocInterval = setInterval(function(){
		
		var ocTimerCondition;
		
		if(mode == "Show"){
			hh--;
			ocTimerCondition = Boolean(hh<88);
		}
		else if(mode == "Hide"){
			hh++;
			ocTimerCondition = Boolean(hh>99);
		}
		
		$(ocContainerID).css("min-height", hh + "vh");
		
		if(ocTimerCondition){
			
			clearInterval(ocInterval); // clear the Interval
			
			if(mode == "Show"){
				
				scrollTop("id", extensionID, 1500);
				
				/* display (fadeIn) the Down Arrow Icon of seGov>intro */
				if(getOCName == "gov"){
					$('#segIntroContent span[identifier="arrowDown"]').fadeIn(8000);
				}
				else{
					// do nothing
				}
				
			}
			else{
				scrollTop("id", ocContainerID, 1000);
			}
		
		}
		
	}, 80);
	
}