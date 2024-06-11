<?php

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db = "navigatormaritime";

    $conn = new mysqli($server_name,$username,$password,$db);

    if($conn->connect_error){
        echo "Failed to connect" . $conn->error;
    }else{
        // echo "Success";
    }

?>