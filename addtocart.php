<?php

    include 'config.php';
    


    $Product_ID =  $_GET['addedid'];

    $User_ID = 3;
    $Quantity = 1;



    $sql = "INSERT INTO Shopping_Cart(Product_ID, usernum, Quantity)
            VALUES ($Product_ID, 3, $Quantity)";

    
        

    if ($connection->query($sql) === TRUE) {
        echo "Added to cart created successfully";
        header("Location: home.php");
    

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
        
    }

    $connection->close();

?>