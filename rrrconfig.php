<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medical";
    
    $conn = new mysqli($server,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Error");
    }
?>