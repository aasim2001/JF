<?php
$headers = apache_request_headers();
$headerName = 'toekn';

if(array_key_exists($headerName, $headers)) {
    if($headers[$headerName] == 'ABCD1234') {

    } else {
        echo 'Unauthorized Access'
    }
    
} else {
    $url = 'https://tinypng.com/';
    header("Location: https://www.w3schools.com/php/func_array_push.asp");
    exit();
}
?>