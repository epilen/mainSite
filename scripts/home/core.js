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
	
	$(document).on('scroll', function() {
		if($(this).scrollTop()>=$('#homeContentCo').position().top){
    		fadeOnScroll("homeContentCo", "introContent", "homeConLayer");
		}
	});
	
});

$('#hdlCTA').click(function(){
	ohref("hdl/", "_blank");
});

// to fade in and fade out on scroll up and down
function fadeOnScroll(topElemID, elemToFade, topLayer){
	
	var scrollTop = $(window).scrollTop();
    var height = $(window).height();

	var scrollOpacity = ((height - scrollTop) / height);
	var onScrollOpacity = 1.3 - scrollOpacity;
	
	if(scrollOpacity == 1){
		$('#' + topElemID).css("opacity", scrollOpacity);
	}
	else{
		$('#' + topElemID).css("opacity", (scrollOpacity-0.4));
	}
	
	if(scrollOpacity <= 0.2){
		$('#' + elemToFade).fadeIn(5000);
	}
	
    $('#' + topLayer).css("background", "rgba(0,0,0," + onScrollOpacity + ")");
	
}