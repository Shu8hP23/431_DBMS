<?php

   include 'config.php';


    $prod_id = $_GET['deleteid'];  
    
    $sql = "DELETE FROM Product_Seller_Information WHERE Product_ID = $prod_id";

    $result = mysqli_query($connection,$sql);

    if ($result) {
        
        
        $sql2 = "DELETE FROM Product_Information WHERE Product_ID = $prod_id";
       
        $result2 = mysqli_query($connection,$sql2);

        if($result2) {
            header("Location: home.php");
        }
        else{
            echo "ERROR";
        }
       

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
        
    }
    
    $connection->close();


?>