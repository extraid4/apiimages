<?php


$image_url = 'https://github.com/Mahesh622/clgwebsite/blob/master/images/hero_1.jpg'.'?raw=true';
$api_credentials = array(
    'key' => 'acc_878dfbe16f89e58',
    'secret' => '17501cd5bedec8934c6e3324a959408f'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.imagga.com/v2/tags?image_url='.urlencode($image_url));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'].':'.$api_credentials['secret']);

$response = curl_exec($ch);
curl_close($ch);

$json_response = json_decode($response);
var_dump($json_response);
?>