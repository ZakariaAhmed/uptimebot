<?php 
include 'uptimefunctions.php';
include 'urlparser.php';

// function returns whether site is up or not
function siteUp($url) {

$nURL = $url;


$domain =strtolower(str_replace('www.', '', $nURL));

// WE WANT FINAL REDIRECT TO CHECK FOR STATUSCODE, BUT NOT SAVE IT IN OUR DATABASE.
$statuscodeURL = get_redirect_final_target($domain);

$newURL = url_parser($statuscodeURL);

$domain2 =strtolower(str_replace('www.', '', $newURL));



$finalURL = stripURL($domain2);
//$httpCode = get_http_response_code($statuscodeURL);
$finalResponse  = get_http_response_code($statuscodeURL);



if ($finalResponse == 404) {
	// DO SOMETHING WHEN SITE IS DOWN
	return "site is down";
} 	


return "site is up with status code ".$finalResponse. " </br>  your url ".$statuscodeURL." </br>";;


}


 ?>