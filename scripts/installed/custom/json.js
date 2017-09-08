$('#btn').click(function(){
	
	var jsonURL = "_master-data/positions/jobOpening.json";

	var objectName = "epilenJobs";
	
	var fetchKeys = ["id", "type", "title", "area"];
	
	var query = "type=FT";
	
	var fetchJsonValArr = readJSON(jsonURL, objectName, fetchKeys, query);
	var arrCol = fetchJsonValArr[0].length;
	var arrRow = fetchJsonValArr.length;
	
	for(var r=0; r<arrRow; r++){
		for(var c=0; c<arrCol; c++){
			alert(fetchJsonValArr[r][c]);
		}
	}
	
});

function readJSON(jsonURL, objectName, fetchKeys, query){
	
	var countJson = countJsonArray(jsonURL, objectName, query);
	var jsonValArr = Array();
	
	for(var k=0; k<countJson; k++){
		jsonValArr[k] = [[]];
	}
	
	//var jsonValArr = new Matrix(fetchKeys.length,countJson);
	
	$.ajax({
  		url: jsonURL,
  		dataType: 'json',
  		async: false,
  		success: function(data) {
    		for (var i in data[objectName]) {
				
				if(query!="" || query!=null){
					
					query = query.replace(" ", "");
					var queryFilter = query.split("=");
					
					for(var k = 0; k<fetchKeys.length; k++){
						
						if((data[objectName][i])[queryFilter[0]] == queryFilter[1]){
							var key = fetchKeys[k];
							jsonValArr[i][k] = (data[objectName][i])[key];
						}
						
					}
				}
				else{
							
					for(var k = 0; k<fetchKeys.length; k++){
					
						var key = fetchKeys[k];
						jsonValArr[i][k] = (data[objectName][i])[key];
				
					}
					
				}
				
			}
  		}
	});
	return jsonValArr;
	
}

// count number of total arrays in json
function countJsonArray(jsonURL, objectName, query){
	var count = 0;
	$.ajax({
  		url: jsonURL,
  		dataType: 'json',
  		async: false,
  		success: function(data) {
    		if(query!="" || query!=null){
				query = query.replace(" ", "");
				var queryFilter = query.split("=");
				for (var i in data[objectName]){
					if((data[objectName][i])[queryFilter[0]] == queryFilter[1]){
						count++;
					}
				}
			}
			else{
				for (var i in data[objectName]) {
					count++;
				}
			}
		}
	});
	return count;
}

// creating a matrix of an array
var Matrix = function (rows, columns)  {
	this.rows = rows;
    this.columns = columns;
    this.myarray = new Array(this.rows);
    for (var i=0; i < this.columns; i +=1) {
		this.myarray[i]=new Array(this.rows);
    }
	return this.myarray;
}