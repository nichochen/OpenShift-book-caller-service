Response from remote service: 
<?php

$hello_service = getenv('SERVICE_HELLO_SERVICE_HOST');
$goodbye_service = getenv('SERVICE_GOODBYE_SERVICE_HOST');

if ($_GET['action'] == 'hello')
  $url = $hello_service;
else if ($_GET['action'] == 'goodbye')
  $url = $goodbye_service;
else
  $url = '';

if ($url != '' ){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url . ":8080");
    $response = curl_exec($ch);
    curl_close($ch);
}else{
    echo 'Invalid action.';
}

?>

