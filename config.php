<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "myIceSkate");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>