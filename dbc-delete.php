<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = mysqli_connect($host, $username, $password, $dbname);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



    $userid = $_GET["USER_ID"];
    $sql = "DELETE FROM Users WHERE USER_ID = '$userid'";


    $result = mysqli_query($conn,$sql);


    header("Location: view.php");

    $conn->close();


?>