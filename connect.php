<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("can't connect: ".mysqli_connect_error());
    }

    // echo "success";
?>