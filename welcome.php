<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'config.php'; 
		include 'uptimefunctions.php';

	?>
</head>
<body>

<?php 

$userInput = $_GET['urlName'];

$sanitizedURL = mysqli_real_escape_string($conn, $userInput);

$urlRedirect = get_redirect_final_target($sanitizedURL);

$finalURL = get_final_url($urlRedirect);

$rCode = get_http_response_code($finalURL);
$cCode = curlResponseCode($finalURL);


if ($cCode == 0) {
	$cCode = $rCode;
}

/*
echo 'final url status code '.$cCode.'</br>';
echo 'get http url status code '.$rCode.'</br>';
echo "final url ".$finalURL.'</br>';
*/

// IF URL IS VALID
$isURL = is_url($finalURL);

// VARIABLE TO INSERT INTO DATABASE
$sql = "INSERT INTO uptimebot (url, statuscode) VALUES('".$finalURL."','".$cCode."')";

// VARIABLE TO CHECK IF URL EXIST IN DATABASE
$checkQuery = "SELECT urlID, url, statuscode, lastupdate FROM uptimebot WHERE url = '".$finalURL."'";

$result = $conn->query($checkQuery);

if ($isURL == TRUE) {
	if ($result->num_rows == 0) {
	// IF IT DOESNT EXIST IN DATABASE

	if (mysqli_query($conn, $sql)) {

            echo "recorded successfully";
          } else {
          echo "Could not able to execute sql".mysqli_error($conn);
          }
	} else {
		echo "Already exists in database"."</br>";
		while($row = $result->fetch_assoc()) {

		$id = $row["urlID"];
	 	$url = $row["url"];
	 	$statuscode = $row["statuscode"];
	 	$lastupdate = $row["lastupdate"];
	 	echo "id ".$id."</br>";
	 	echo "url ".$url."</br>";
	 	echo "statuscode ".$statuscode."</br>";
	 	echo "last updated at  ".$lastupdate."</br>";
		}
	}
} else {
	echo $finalURL." not a valid url";
}

?>


</body>
</html>


