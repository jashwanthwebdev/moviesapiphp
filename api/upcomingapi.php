<?php
$api = '1d1d424f7bc232141bf1fe9f5dcea729';

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL, 'https://api.themoviedb.org/3/movie/upcoming?api_key='.$api); 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch,CURLOPT_HEADER,FALSE);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type:application/json')); 
$response = curl_exec($ch);
curl_close($ch); 
$res_upcoming = json_decode($response);                   
$result_upcoming = $res_upcoming->results;  
 

?>