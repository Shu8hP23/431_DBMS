<?php

   include 'config.php';


    $decrease = $_GET['deleteid'];  

    $sql = "UPDATE Shopping_Cart 
        SET Quantity = Quantity - 1
        WHERE Product_ID = $decrease";

    $result = mysqli_query($connection, $sql);

    if ($result) {

        $zerocheck = "SELECT * FROM Shopping_Cart WHERE Product_ID = $decrease AND Quantity < 1";
        $resultCheckZero = mysqli_query($connection, $zerocheck);

        if (mysqli_num_rows($resultCheckZero) > 0) {

            $deleteRow = "DELETE FROM Shopping_Cart WHERE Product_ID = $decrease";
            $resultDelete = mysqli_query($connection, $deleteRow);

            if ($resultDelete) {
                
                header("Location: shopping-cart.php");
            } else {
                echo "Error: " . $resultDelete . "<br>" . $connection->error;
            }
        } else {
            
            
            header("Location: shopping-cart.php");
        }
    } else {
        echo "Error: " . $resultCheckZero . "<br>" . $connection->error;
    }

    
    // $sql = "UPDATE Shopping_Cart 
    //         SET Quantity = Quantity - 1
    //         WHERE Product_ID = $decrease";
    


    // $result = mysqli_query($connection,$sql);


    // if ($connection->query($sql) === TRUE) {
    //     echo "Deleted successfully";
    //     header("Location: view.php");
       

    // } else {
    //     echo "Error";
    //     echo "Error: " . $sql . "<br>" . $connection->error;
        
    // }
    

    $connection->close();


?>