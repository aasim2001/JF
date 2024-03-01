<?php
$headers = apache_request_headers();
$headerName = 'Connection';

if(array_key_exists($headerName, $headers)) {
    echo $headers[$headerName];
} else {
    $url = 'https://tinypng.com/';
    header("Location: https://www.w3schools.com/php/func_array_push.asp");
    exit();
}
?>