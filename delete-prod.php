<?php

   include 'config.php';


    $userid = $_GET['deleteid'];  
    
    $sql = "DELETE FROM Users WHERE Usernum = $userid";
    // $sql = "DELETE FROM Users WHERE USER_ID = '$userid'";


    $result = mysqli_query($connection,$sql);


    if ($connection->query($sql) === TRUE) {
        echo "Deleted successfully";
        header("Location: view.php");
       

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
        
    }
    

    $connection->close();


?>