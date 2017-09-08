/*
	Talent Home Page JS
*/

$(document).ready(function(){
	
	//redirectToMobile("../m/careers/");
	
});

/* 
	Home Menu JQuery 
*/
	
// Redirect to 'about' page
$('#relationsMenuLink p[id="relationsMenuLinkHome"]').on('click', function(){
	ohref("https://www.epilen.com", "_blank");
});
	
// Redirect to 'careers' page
$('#relationsMenuLink p[id="relationsMenuLinkAbout"]').on('click', function(){
	ohref("https://www.epilen.com/about", "_blank");
});
	
/* 
	Footer Menu JQuery 
*/
	
// Redirect to 'about' page
$('#footerLinkGeneral a[identifier="about"] span').on('click', function(){
	ohref("https://www.epilen.com/about", "_blank");
});
	
// Redirect to 'Epilen home' page
$('#footerLinkGeneral a[identifier="epilenHome"] span').on('click', function(){
	ohref("https://www.epilen.com", "_blank");
});
	
// Redirect to 'mailto:care@epilen.com'
$('#footerLinkContact p span[identifier="text"]').on('click', function(){
	rhref("mailto:care@epilen.com");
});