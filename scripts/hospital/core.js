/*
	Epilen for Hospitals (Enterprise) Home Page JS
*/

$(document).load(function () {
 	$('#promoModal').modal('show');
});

$('.docJoinCTA').click(function(){
	
	$('#joinResultCol').css("display", "none");
	$('#joinModalVisualCol').css("display", "block");
	$('#joinModalActionCol').css("display", "block");
	
	$('#joinModal').modal('show');
	$('#name').focus();
	
});

$('#joinCTA').click(function(){
	
	var dataStringToOperate = $('#joinForm div :input').serialize();
	var dataStringToValidate = dataStringToOperate;
	var dbTableName = "hospitals";
	
	var sqlOp = sqlOperate(dataStringToValidate, dataStringToOperate, dbTableName, true, true);
	
	var success = sqlOp[0];
	var duplicate = sqlOp[1];
	var error = sqlOp[2];
	
	
	var getName = $('#name').val();
	var getFName = extractFirstName(getName);
	
	$('#joinModalVisualCol').css("display", "none");
	$('#joinModalActionCol').css("display", "none");
	$('#joinResultCol').css("display", "block");
	
	if(success == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailSuccess.png");
		$('#joinResultContentPanel p[type="head"]').html("Thank you " + getFName);
		$('#joinResultContentPanel p[type="note"]').html("Thanks for providing the information. Our Business Operation Team will contact you shortly for next steps.");
	}
	else if(duplicate == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailDuplicate.png");
		$('#joinResultContentPanel p[type="head"]').html("Thank you " + getFName);
		$('#joinResultContentPanel p[type="note"]').html("You have already provided the information. Our Business Operation Team will soon contact you.");
	}
	else if(error == "Yes"){
		$('#joinResultContent img[type="img"]').attr("src", "../images/subscribe/mailError.png");
		$('#joinResultContentPanel p[type="head"]').html("Hello " + getFName);
		$('#joinResultContentPanel p[type="note"]').html("There is a temporary issue with our Network. Please try after some time to register.");
	}
	
	
});

/* typeahead in city input */
var hintCityArr = [];

$.getJSON('../_master-data/json/city.json', function(data) {

     for (var i in data.city) {
         hintCityArr.push({
            code: data.city[i].code,
            name: data.city[i].name,
            state: data.city[i].state
         });
     }

});


$('#city').typeahead({
    
	minLength: 0,

     source: function(query, process){
        states = [];
        map = {};

        $.each(hintCityArr, function (i, state) {
            map[state.name] = state;
            states.push(state.name);
        });
        process(states);
    },
    updater: function (item) {
        // implementation
        selectedState = map[item].name;
        return item;
    },
    matcher: function (item) {
        // implementation
        if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
            return true;
        }
    },
    sorter: function (items) {
        // implementation
        return items.sort();
    },
    highlighter: function (item) {
		
        // implementation
        var regex = new RegExp( '(' + this.query + ')', 'gi' );
        var itemNew = item.replace( regex, "<strong>$1</strong>" );

        html = '<div class="row bodBot">' +
        '<div class="col-lg-8">' +
        '<p id="hintCityName">' + itemNew + '</p>' +
        '</div>' +
        '</div>';

        return html;
    }
	
});