<?php  
include 'config.php';
include 'allFunction.php';
// fills an array with all urls from database 
$query = "SELECT url, lastupdate FROM uptimebot";

$result = $conn->query($query);

$urlArr = array();

while ($row = $result->fetch_assoc()) {
	$urlArr[]= $row['url'];
}


foreach ($urlArr as $url) {
	// checks the status codes of all urls
	$rCode = get_http_response_code($url);
	$cCode = curlResponseCode($url);
	
	if ($cCode == 0) {
	$cCode = $rCode;
	}
	//echo "url ".$finalURL."</br>";
	//echo "updated status code ".$cCode."</br>";


	//finally  updates statuscodes in mysql database
	$sqlUpdate = "UPDATE uptimebot SET lastupdate=now(), statuscode ='".$cCode."'  WHERE url = '$url'";
	if (mysqli_query($conn, $sqlUpdate)) {
		echo "recorded successfully </br>";
	} else {
		echo "Could not able to execute sql".mysqli_error($conn);
	}

}



?>