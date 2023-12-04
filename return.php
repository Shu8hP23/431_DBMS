<?php

    include 'config.php';
    
    $Order_ID =  $_GET['addedid'];

    $prod_name = "SELECT * FROM `Product_Information` WHERE Product_ID = $Product_ID;";
    $result = mysqli_query($connection, $prod_name);

    if ($result) {
        $userid = 1;
        $row = $result->fetch_assoc();
        $prod_name = $row['Prod_Name'];
        $prod_price = $row['Price'];
        $prod_quantity = 1;
        $prod_total_price = $prod_quantity * $prod_price;

        // echo $userid, $prod_name, $prod_price, $prod_quantity, $prod_total_price;

        $sql2 = "INSERT INTO User_Cart_Items (User_ID, Prod_Name, Price, Quantity, Total_Price)
            VALUES ('$userid', '$prod_name', '$prod_price', '$prod_quantity', '$prod_total_price')";
        
        $result2 = mysqli_query($connection, $sql2);

        if ($result2) {
            echo "In result2";
            echo "Added to Cart";
            header("Location: shopping-cart.php");
            exit;
        } else {
            echo "In result3";
            echo "Error: " . $query . "<br>" . $connection->error;
        }

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();

?>