<?php

$ip = $_SERVER['REMOTE_ADDR'];

$location = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
$country = $location["geoplugin_countryName"];
$city = $location["geoplugin_city"];
$lalitude = $location['geoplugin_latitude'];
$longitude = $location['geoplugin_longitude'];


$response = [];
$response['country'] = $country;
$response['city'] = $city;
$response['lalitude'] = $lalitude;
$response['longitude'] = $longitude;

echo json_encode($response);