<!-- FOR TESTING PURPOSES -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
include 'uptimefunctions.php';
include 'config.php';

$userInput = $_GET['urlName'];
$cronSelect = $_GET['cronselect'];
$sanitizedURL = mysqli_real_escape_string($conn, $userInput);

$urlRedirect = get_redirect_final_target($sanitizedURL);

$finalURL = get_final_url($urlRedirect);
$strippedURL = stripURL($finalURL);

$redirecStatus = curlResponseCode($sanitizedURL);


$rCode = get_http_response_code($finalURL);
$cCode = curlResponseCode($finalURL);

// removes all paths
$strippedURL = stripURL($finalURL);


echo 'redirect status code '.$redirecStatus.'</br>';
echo 'get http url status code '.$cCode.'</br>';
echo "stripped url ".$strippedURL.'</br>';
echo "cron task schedule ".$cronSelect.'</br>';

 ?>

</body>
</html>

