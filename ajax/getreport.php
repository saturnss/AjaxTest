<?php
// get the report parameter from URL //
$REPORT = $_REQUEST["r"];

$REPORT_NAME = "";
$XML = '';
// Using the report option selected, return the second option and the report name //
switch($REPORT){
	case "report1":
		$REPORT_NAME = "Report 1";
		$XML .= '<select>';
			$XML .= '<option value="a">A</option>';
			$XML .= '<option value="b">B</option>';
			$XML .= '<option value="c">C</option>';
		$XML .= '</select>';
		break;
	case "report2":
		$REPORT_NAME = "Report 2";
		$XML .= '<select>';
			$XML .= '<option value="d">D</option>';
			$XML .= '<option value="e">E</option>';
		$XML .= '</select>';
		break;
	case "report3":
		$REPORT_NAME = "Report 3";
		$XML .= '<select>';
			$XML .= '<option value="f">F</option>';
			$XML .= '<option value="g">G</option>';
			$XML .= '<option value="h">H</option>';
		$XML .= '</select>';
		break;
	default:
		$REPORT_NAME = "No Report";	
}

// Display the Report Name and the report options //
echo $REPORT_NAME . "<br>";
echo $XML;
?>