<?php
$api =  '1d1d424f7bc232141bf1fe9f5dcea729';       

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "https://api.themoviedb.org/3/movie/top_rated?api_key=" . $api);
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE); 
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json")); 
$response = curl_exec($ct);
curl_close($ct);    
$toprated = json_decode($response);
//print_r($toprated->results);      
 

?>