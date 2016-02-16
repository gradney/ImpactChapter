function ajax_post()
{
	console.log("posting form values...");

	// Create new XMLHttpRequest object
	var hr = new XMLHttpRequest();

	// Create some variables we need to send to our PHP
	var url = "form/createaccount";
	var fn = document.getElementById("firstname").value;
	var ln = document.getElementById("lastname").value;
	var un = document.getElementById("username").value;
	var args = "firstname="+fn+"&lastname="+ln+"&username="+un;
	hr.open("POST", url, true);
	console.log("opening URL for processing...");

	// Set content type header information for sending url encoded variables
	hr.setRequestHeader("content-type", "application/x-www-form-urlencoded");

	// Access the onreadystatechange event for the XMLHttpRequest object
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			console.log("return data: "+return_data);
			document.write(return_data);
			//document.getElementById("status").innerHTML = return_data;
		}
	}

	// Send the data to PHP now...and wait for response to update the status div
	hr.send(args);
	console.log("args were sent...");
	document.getElementById("status").innerHTML = "processing...";
}
