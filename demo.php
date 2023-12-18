<?php
$askoracle_api_key = "demo";
//$dt = date("Y-m-d");
$dt = "2023-04-11";
$url = "https://api.ask-oracle.com/v2/?key={$askoracle_api_key}&dt={$dt}";
$data = file_get_contents($url);
$json = json_decode($data);

// Loop through each zodiac sign and retrieve the horoscope
foreach ($json->{'content'}->{'daily'}->{'overview'} as $sign => $horoscope) {
    echo $sign . ' horoscope: ' . $horoscope . '<br>';
}
?>
