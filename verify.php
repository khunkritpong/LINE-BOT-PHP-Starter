<?php
$access_token = 'YGMFNhsEAUwSG1T+/LCu5KlgHDsA643dkIz/MySFHV8A6KuxWxGxjVOElaFkPIKlrEhmjvhQpAS+UFS197QfMmZ87E86/IqKjiIr2gt0Of1YoXqmRQ55NDDKTXcaA4CmYJJdFMSKQNjI/RPaZDesgwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;