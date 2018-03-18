<?php
//Info about the maps

//SSL controll
$arrContextOptions=array(
  "ssl"=>array(
      "verify_peer"=>false,
      "verify_peer_name"=>false,
  ),
);
// config parameters
$api_key = "AIzaSyAJb4AB6sspkdtXONhfzfMFf3BguUG2k48";

$addres = urlencode(trim($_SESSION["address_receiver"]));
$city = urlencode(trim($_SESSION["city_receiver"]));

// Webservices
$google_maps_url   = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $addres . "," . $city . "&key=" . $api_key;
$google_maps_json  = file_get_contents($google_maps_url, false, stream_context_create($arrContextOptions));
$google_maps_array = json_decode($google_maps_json, true);

// Get Location
$latitude          = ($google_maps_array["results"][0]["geometry"]['location']['lat']);
$longitude         = ($google_maps_array["results"][0]["geometry"]['location']['lng']);
$formatted_address = ($google_maps_array["results"][0]["formatted_address"]);
?>
