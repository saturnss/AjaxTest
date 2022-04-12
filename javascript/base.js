function chooseReport(report){
	if(report == ""){
		// We don't have a report selected //
		// Display "No Report Selected" to the div //
		document.getElementById("reportOptions").innerHTML = "No Report Selected";
		return;
	}
	else {
		// We selected a report so get the information to display //
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// Display our information depending on what option was selected //
				document.getElementById("reportOptions").innerHTML = this.responseText;
			}
		};
		// Run our PHP File to get the report information //
		// Passing report option selected to r in the url //
		xmlhttp.open("GET", "./ajax/getreport.php?r=" + report, true);
		xmlhttp.send();
	}
}