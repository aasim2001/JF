<?php

require __DIR__ .'\getJSON.php';

$headers = apache_request_headers();
$headerName = 'toekn';
$imageId = $_GET['imageId'];

header('Content-Type: application/json; charset=utf-8');

if(array_key_exists($headerName, $headers)) {
    if($headers[$headerName] == 'ABCD1234') {
      getJSON($imageId);

    } else {
        echo 'Unauthorized Access';
    }
    
} else {
    header("Location: https://www.w3schools.com/php/func_array_push.asp");
    exit();
}


?>

