<?php 

// CURL INFO
// http://codular.com/curl-with-php
$url = "example.com/cron.php";
$APIkey = '6JTZ7VMQJS8103YRHXONPU5SV0448WEZ';
$timezone = '(UTC+2) Stockholm';
$newCronURL = 'https://www.setcronjob.com/api/cron.add?token='.$APIkey.'&minute=1&hour=1,2,3&url='.$url.'&timezone='.$timezone;

$cronURL = 'https://www.setcronjob.com/api/cron.add?token=******&expression=*/3 1,2,3 * * *&url=http%3A%2F%2Fexample.com%2Fcron.php';

/*
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $newCronURL,
    CURLOPT_USERAGENT => 'CD'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
*/


echo $newCronURL;

?>