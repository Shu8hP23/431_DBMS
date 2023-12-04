<?php
include 'config.php';

    $userid = $_POST['userid'];
    $orderid = $_POST['orderid'];
    $message = $_POST['message'];

    $query = "INSERT INTO HelpRequest(usernum, orderid, challenges) 
            VALUES ($userid, '$orderid','$message')";

    if ($connection->query($query) === TRUE) {
        echo "New user created successfully";
        header("Location: view.php");
    } else {
        echo "Error";
        echo "Error: " . $query . "<br>" . $connection->error;
    }

    $connection->close();
?>
