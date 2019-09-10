<?php
$handle = curl_init();
 
$url = "https://manchestercity-api.coronersconnect.co.uk/api/appointments/getinquests?dateFrom=2019-08-01&dateTo=2019-09-30&Active=true";
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);
 
echo $output;
?>
