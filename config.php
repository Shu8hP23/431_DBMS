<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $connection = mysqli_connect($host, $username, $password, $dbname);


    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }



?>