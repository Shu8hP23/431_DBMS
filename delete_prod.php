<?php

   include 'config.php';


    $prod_id = $_GET['deleteid'];  
    
    $sql = "DELETE FROM Products WHERE Product_ID = $prod_id";

    $result = mysqli_query($connection,$sql);

    if ($connection->query($sql) === TRUE) {
        echo "Deleted successfully";
        header("Location: home.php");
       

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
        
    }
    
    $connection->close();


?>