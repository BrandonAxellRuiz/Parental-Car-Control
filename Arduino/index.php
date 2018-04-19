<?php
function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}
 
echo httpGet("https://backhome-16b56.firebaseio.com/ParentalCarControl/Car/1/-LAT91H5ZBOZWWTjE2TV/status/.json");

?>