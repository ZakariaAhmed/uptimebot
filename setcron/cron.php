<?php 

$url;
$API = '6JTZ7VMQJS8103YRHXONPU5SV0448WEZ';
$newCronURL = 'https://www.setcronjob.com/api/cron.add?token='.$API.'&minute=1&hour=1,2,3&url='.$url;

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $newCronURL,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

?>