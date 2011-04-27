<?php
$lat = 0.0;
$lon = 0.0;

$distance = 999999999999;
$details = array();

$closestShop = '';
$closestAddr = '';

include('maryland.php');

foreach ($shops as $shop) {
  $details = explode(':', $shop->get());
  $dis = distanceInMeters($lat, $lon, $details[2], $details[3]);
  if($dis < $distance) {
    $closestShop = $details[0];
    $closestAddr = $details[1];
    $distance = $dis;
  }
}

echo 'Closest Shop: ' . $closestShop . "\n";
echo $closestAddr . "\n";
echo $distance . " meters\n";

function distanceInMeters($myLat, $myLon, $mlLat, $mlLon) {
  $dLat = $mlLat - $myLat;
  $dLon = $mlLon - $myLon;
  /* lat/lon is in 60 nautical miles */
  /* 1 nautical mile = 1852 meters */
  return floor(sqrt(($dLat * $dLat) + ($dLon * $dLon)) * 60 * 1852);
}

?>
