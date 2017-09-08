/*
	Epilen for Doctors Home Page JS
*/

$(document).load(function () {
 	$('#promoModal').modal('show');
});

// on hover of Highlight Panel BG
$('.highlightVisualBox').hover(function(){
    
	var resW = detectResolutionWidth();
	
	if(resW > 1200){
		$(this).find('#highlightBoxContent').css("padding-top", "16vh");
	}
	else if(992 <= resW >= 1200){
		$(this).find('#highlightBoxContent').css("padding-top", "20vh");
	}
	else{
		
	}
	
	$(this).find('#highlightBoxContentIcoCo span[type="icon"]').css("color", "#000");
	$(this).find('#highlightBoxContentTxtCo p[type="txt"]').addClass("w5");
	$(this).find('#highlightBoxContentTxtCo p[type="txt"]').css("color", "#000");
	$(this).find('#highlightBoxContentTxtCo p[type="desc"]').slideDown(0);
	
	
}, function(){
    
	var resW = detectResolutionWidth();
	
	if(resW > 1200){
		$(this).find('#highlightBoxContent').css("padding-top", "34vh");
	}
	else if(992 <= resW >= 1200){
		$(this).find('#highlightBoxContent').css("padding-top", "28vh");
	}
	else{
		
	}
	
	$(this).find('#highlightBoxContentIcoCo span[type="icon"]').css("color", "#fff");
	$(this).find('#highlightBoxContentTxtCo p[type="txt"]').removeClass("w5");
	$(this).find('#highlightBoxContentTxtCo p[type="txt"]').addClass("w4");
	$(this).find('#highlightBoxContentTxtCo p[type="txt"]').css("color", "#fff");
	$(this).find('#highlightBoxContentTxtCo p[type="desc"]').slideUp(0);
	
});

$('.docJoinCTA').click(function(){
	
	if($("#specialization option").length==0){
		$.getJSON('../doctor/_master-data/docSpeciality.json', function(data) {
        
        	for (var i in data.specialities) {
            	$('#specialization')
         			.append($("<option></option>")
         			.attr("value", data.specialities[i].code)
         			.text(data.specialities[i].name)); 
			}
   
  		});
	}
	else{
		$("#joinForm div input").val("");
		$("#joinForm div input").attr("placeholder", "");
		$("#joinForm div").removeClass("has-warning");
	}
	
	$('#joinResultCol').css("display", "none");
	$('#joinModalVisualCol').css("display", "block");
	$('#joinModalActionCol').css("display", "block");
	
	$('#joinModal').modal('show');
	$('#name').focus();
	
});

$('#joinCTA').click(function(){
	
	var dataStringToValidate = $('#joinForm div :input[name!=specialization]').serialize();
	var dataStringToOperate = $('#joinForm div :input').serialize();
	var dbTableName = "doctors";
	
	var sqlOp = sqlOperate(dataStringToValidate, dataStringToOperate, dbTableName, true, true);
	
	var success = sqlOp[0];
	var duplicate = sqlOp[1];
	var error = sqlOp[2];
	
	var getDocName = $('#name').val();
	var getDocFName = extractFirstName(getDocName);
	
	$('#joinModalVisualCol').css("display", "none");
	$('#joinModalActionCol').css("display", "none");
	$('#joinResultCol').css("display", "block");
	
	if(success == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailSuccess.png");
		$('#joinResultContentPanel p[type="head"]').html("Thank you Dr. " + getDocFName);
		$('#joinResultContentPanel p[type="note"]').html("Thanks for applying to Epilen. We'll send you an email as soon as your application is approved.");
	}
	else if(duplicate == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailDuplicate.png");
		$('#joinResultContentPanel p[type="head"]').html("Thank you Dr. " + getDocFName);
		$('#joinResultContentPanel p[type="note"]').html("You have already applied at Epilen. We'll send you an email as soon as your application is approved.");
	}
	else if(error == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailError.png");
		$('#joinResultContentPanel p[type="head"]').html("Hello Dr. " + getDocFName);
		$('#joinResultContentPanel p[type="note"]').html("There is a temporary issue with our Network. Please sign up again to register at Epilen.");
	}
	
	
});