<?php

function getJSON($id) {
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
    
    $sql = "SELECT * FROM cameraupload WHERE id=".$id;
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
}

?>