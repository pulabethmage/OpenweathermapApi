<?php
//https://openweathermap.org/current
//api:ee8d3f18a85cf4651cc79486fc36b7b2

$response = array();
//$result = array();
$data = array();

$url = 'https://api.openweathermap.org/data/2.5/weather?q=san%20francisco&appid=ee8d3f18a85cf4651cc79486fc36b7b2';
$obj = json_decode(file_get_contents($url), true);
$main=  $obj['main'];
$tempfromfaren = ($main["temp"] - 273.15)*9/5 + 32;

$data["temp"] = $tempfromfaren." °F";
$data["feels_like"] = $main["feels_like"];

//$result[] = $data;


$response["Details"] = $data;

echo json_encode($response);
?>