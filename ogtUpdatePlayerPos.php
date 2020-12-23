<?php

$servername = "localhost";
$username = "id15398232_ogt";
$password = "pass";
$leftpos = $_POST["LeftPos"];
$toppos = $_POST["TopPos"];
$name = $_POST["Name"];

// Create connection
$conn = new mysqli($servername, $username, $password,"id15398232_onlinegametest");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo json_encode("Can't connect to database");
}

$sql = "UPDATE Player SET LeftPos = '$leftpos', TopPos = '$toppos' WHERE PlayerName = '$name'";
$res = $conn->query($sql);


    if($conn->affected_rows > 0) 
    {
        
    
        echo json_encode("OK");
        }
        else
        {
            echo json_encode("Error");
        }  
