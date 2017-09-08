/*
	Epilen Talent (Careers) Home Page JS
*/

$(document).load(function () {
 	$('#promoModal').modal('show');
});

// on page load, load the Job Openings from root/_master-data/positions/jobOpening.json file
$(document).ready(function(){
	
	// fetch job Headers from root/_master-data/positions/jobOpening.json
	var jsonURL = "_master-data/positions/jobOpening.json"; // json file location
	
	var fetchID = ["id", "type", "title", "area"];
	
	//readJSON(jsonURL, "epilenJobs", fetchID);
	
	$.getJSON(jsonURL, function(data) {
		for (var i in data.epilenJobs) {
			var getJobID = data.epilenJobs[i].id;
			var getJobType = data.epilenJobs[i].type;
			var getJobTitle = data.epilenJobs[i].title;
			var getJobArea = data.epilenJobs[i].area;
			
			var passJobID = "\'" + getJobID + "\'";
			var passJobType = "\'" + getJobType + "\'";
			
			if(getJobType == "FT"){
			
				$('#openingListFT').append(
										"<div id=\"openingListRo\" class=\"row openingListBorder cursor-d\">" +
										"<div id=\"openingJobCo\" class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">" +
										"<p identifier=\"jobName\" class=\"jobName w6 txt-tr-uc\">" +
										getJobTitle +
										"</p>" +
										"</div>" +
										"<div id=\"openinDeptCo\" class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">" +
										"<p identifier=\"jobDept\" class=\"jobDept w6 txt-tr-uc\">" +
										getJobArea +
										"</p>" +
										"</div>" +
										"<div id=\"openingExploreCo\" class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">" +
										"<span jobID=\"" + getJobID + "\" jobType=\"" + getJobType + "\" identifier=\"jobExplore\" " +
										"class=\"talent-arrowNext jobExplore pos-rel flt-rt cursor-p\" " +
										"onClick=\"javascript:exploreJob(" + passJobID + "," + passJobType + ");\"></span>" +
										"</div>" +
										"</div>"
									);
			
			}
			else if(getJobType == "AS"){
			
				$('#openingListAS').append(
										"<div id=\"openingListRo\" class=\"row openingListBorder cursor-d\">" +
										"<div id=\"openingJobCo\" class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">" +
										"<p identifier=\"jobName\" class=\"jobName w6 txt-tr-uc\">" +
										getJobTitle +
										"</p>" +
										"</div>" +
										"<div id=\"openinDeptCo\" class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">" +
										"<p identifier=\"jobDept\" class=\"jobDept w6 txt-tr-uc\">" +
										getJobArea +
										"</p>" +
										"</div>" +
										"<div id=\"openingExploreCo\" class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">" +
										"<span jobID=\"" + getJobID + "\" jobType=\"" + getJobType + "\" identifier=\"jobExplore\" " +
										"class=\"talent-arrowNext jobExplore pos-rel flt-rt cursor-p\" " +
										"onClick=\"javascript:exploreJob(" + passJobID + "," + passJobType + ");\"></span>" +
										"</div>" +
										"</div>"
									);
			
			}
			
		}
	});
	
});

// on click of "Explore Job Icon" on 'opening.php' section [starts]
function exploreJob(jobID, jobType){
    
	// fetch job Description from root/_master-data/positions/jobOpening.json
	var jsonURL = "_master-data/positions/jobOpening.json"; // json file location
	
	$.getJSON(jsonURL, function(data) {
		
		for (var i in data.epilenJobs) {
			
			var getJobID = data.epilenJobs[i].id;
			
			if(jobID == getJobID){
				
				var jobTitle = data.epilenJobs[i].title;
				var jobArea = data.epilenJobs[i].area;
				var jobPostDate = data.epilenJobs[i].postDate;
				var jobLocation = data.epilenJobs[i].location;
				var jobOverview = data.epilenJobs[i].overview;
				var jobProfiles = data.epilenJobs[i].profiles;
				var jobBenefits = data.epilenJobs[i].benefits;
				
				$('#jobTitle').html(jobTitle);
				$('#jobArea').html(jobArea);
				$('#jobPostDate').html(jobPostDate);
				$('#jobLocation').html(jobLocation);
				$('#jobOverview').html(jobOverview);
				
				$('#jobProfiles').html('');
				$('#jobBenefits').html('');
				
				var jobProfilesArr = jobProfiles.split('<br />');
				
				for(var k = 0; k<jobProfilesArr.length; k++){
					$('#jobProfiles').append('<li class="jInfo w5">' + jobProfilesArr[k] + '</li>');	
				}
				
				var jobBenefitsArr = jobBenefits.split('<br />');
				
				for(var k = 0; k<jobBenefitsArr.length; k++){
					$('#jobBenefits').append('<li class="jInfo w5">' + jobBenefitsArr[k] + '</li>');	
				}
				
				$('#jobPositionApply').attr("jobID", jobID);
				$('#jobPositionApply').attr("jobType", jobType);
				
				break;
				
			}
			else{
				// do nothing
			}
			
		}
	
	});
	
	// fetch Job Note from root/_master-data/positions/jobNote.json
	var jsonURL = "_master-data/positions/jobNote.json"; // json file location
	
	$.getJSON(jsonURL, function(data) {
		
		for (var i in data.epilenJobNote) {
			
			var getJobType = data.epilenJobNote[i].type;
			if(jobType == getJobType){
				
				$('#jobNotes').html('');
				
				var jobNotes = data.epilenJobNote[i].note;
				
				var jobNotesArr = jobNotes.split('<br />');
				
				for(var k = 0; k<jobNotesArr.length; k++){
					$('#jobNotes').append('<li class="jInfo w5">' + jobNotesArr[k] + '</li>');	
				}
				
			}
		}
		
	});
	
	$('#openingInfoPanelBody').slideUp();
	$('#jobBriefPanelBody').slideDown();
	
	scrollTop("id", "openingInfoCo", 800);
	
}

$('#jobBriefView div[id="backAllJob"] p[identifier="text"] span').click(function(){
	
	$('#jobBriefPanelBody').slideUp();
	$('#openingInfoPanelBody').slideDown();
	
	scrollTop("id", "openingInfoCo", 800);
	
});

$('#jobPositionApply').click(function(){
	
	var jobType = $(this).attr("jobType");
	
	if(jobType=="FT"){
		ohref("https://goo.gl/forms/nrOt8fwooXmVE1A43", "_blank");
	}
	else if(jobType=="AS"){
		ohref("https://goo.gl/forms/szXVcAdCmUy2F5ge2", "_blank");
	}
	
});

$('#jobAlertCTA').click(function(){
	ohref("https://goo.gl/forms/K045yg4a3PxLfERG2", "_blank");
});

// changing the opacity of components on scroll up and down [starts]
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();

	var scrollOpacity = ((height - scrollTop) / height);
	var onScrollOpacity = 1.3 - scrollOpacity;
	
	if(scrollOpacity == 1){
		$('#talentHomeContentCo').css("opacity", scrollOpacity);
	}
	else{
		$('#talentHomeContentCo').css("opacity", (scrollOpacity-0.4));
	}
	
    $('#talentHomeConLayer').css("background", "rgba(0,0,0," + onScrollOpacity + ")");
	
});