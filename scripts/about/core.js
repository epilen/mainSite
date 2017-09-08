/*
	Epilen About Page JS
*/

$(document).load(function () {
 	$('#promoModal').modal('show');
});

$('#aboutContentCo span[identifier="arrowDown"]').click(function(){
	scrollTop("id", "evolutionCon", 1500);
});

// changing the opacity of components on scroll up and down [starts]
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();

	var scrollOpacity = ((height - scrollTop) / height);
	var onScrollOpacity = 1.3 - scrollOpacity;
	
	if(scrollOpacity == 1){
		$('#aboutContentCo').css("opacity", scrollOpacity);
	}
	else{
		$('#aboutContentCo').css("opacity", (scrollOpacity-0.4));
	}
	
    $('#aboutConLayer').css("background", "rgba(0,0,0," + onScrollOpacity + ")");
	
});

$('#careerContent a[id="goCareer"]').click(function(){
	var getRedirectSrc = $(this).attr("redirectSrc");
	ohref(getRedirectSrc + "careers/");
});