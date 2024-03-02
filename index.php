<?php
$headers = apache_request_headers();
$headerName = 'toekn';
header('Content-Type: application/json; charset=utf-8');

if(array_key_exists($headerName, $headers)) {
    if($headers[$headerName] == 'ABCD1234') {
      $servername = "localhost:3309";
      $username = "root";
      $password = "";
      $dbname = "JF";
      
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      
      $sql = "SELECT * FROM cameraupload WHERE id=1";
      $result = $conn->query($sql);
      $myObj = new stdClass();
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         // echo "id: " . $row["id"]. " - Name: " . $row["base64"]. "<br>";
         $myObj->id = $row["id"];
         $myObj->base64 = $row["base64"];
         
        }
      } else {
        echo "0 results";
      }
      
      $myJSON = json_encode($myObj);
      echo $myJSON;
      $conn->close();

    } else {
        echo 'Unauthorized Access';
    }
    
} else {
    header("Location: https://www.w3schools.com/php/func_array_push.asp");
    exit();
}




?>

