/*
	Terms of Usage JS
*/

// on click of Terms Screen 'Arrow Down' Icon [starts]
$('#termsContentCo span[identifier="arrowDown"]').click(function(){
	scrollTop("id", "noteCon", 1500);
});

// changing the opacity of components on scroll up and down [starts]
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();

	var scrollOpacity = ((height - scrollTop) / height);
	var onScrollOpacity = 1.3 - scrollOpacity;
	
	if(scrollOpacity == 1){
		$('#termsContentCo').css("opacity", scrollOpacity);
	}
	else{
		$('#termsContentCo').css("opacity", (scrollOpacity-0.4));
	}
	
    $('#termsConLayer').css("background", "rgba(0,0,0," + onScrollOpacity + ")");
	
});