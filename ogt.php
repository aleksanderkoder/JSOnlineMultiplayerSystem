<?php

$servername = "localhost";
$username = "id15398232_ogt";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password,"id15398232_onlinegametest");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo json_encode("Can't connect to database");
}

$sql = "SELECT * FROM Player";
$res = $conn->query($sql);

//echo json_encode($conn->affected_rows);
    if($conn->affected_rows > 0) 
    {
        $UserInfo = array();
        while($row = $res->fetch_object())
        {
            $UserInfo[] = $row->ID;
            $UserInfo[] = $row->PlayerName;
            $UserInfo[] = $row->LeftPos;
            $UserInfo[] = $row->TopPos;
        }
    
        echo json_encode($UserInfo);
        }
        else
        {
            echo json_encode("Error from database");
        }     
