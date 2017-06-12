<?php  
include 'config.php';
include 'allFunction.php';
// fills an array with all urls from database 
$query = "SELECT url FROM uptimebot";

$result = $conn->query($query);

$urlArr = array();

while ($row = $result->fetch_assoc()) {
	$urlArr[] = $row['url'];
}


foreach ($urlArr as $url) {
	
	$userInput = $url;
	// checks the status codes of all urls

	$urlRedirect = get_redirect_final_target($userInput);
	$finalURL = get_final_url($urlRedirect);
	$rCode = get_http_response_code($finalURL);
	$cCode = curlResponseCode($finalURL);

	if ($cCode == 0) {
	$cCode = $rCode;
	}
	echo "url ".$finalURL."</br>";
	echo "updated status code ".$cCode."</br>";


	//finally  updates statuscodes in mysql database
}



?>