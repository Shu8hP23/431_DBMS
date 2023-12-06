<?php

   include 'config.php';


    $decrease = $_GET['deleteid'];  

    
    $sql = "DELETE FROM User_Cart_Items
        WHERE Prod_Name = '$decrease'";


    $result = mysqli_query($connection, $sql);

    if ($result) {

        header("Location: shopping-cart.php");
    } else {
        echo'HEllo3';
        echo "Error: " . $resultCheckZero . "<br>" . $connection->error;
    }


    $connection->close();


?>