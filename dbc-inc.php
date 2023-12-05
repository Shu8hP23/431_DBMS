<?php

    include 'config.php';


    $sellerid = $_POST["seller_id"];
    $selleremail = $_POST["seller_email"];
    $prod_name = $_POST["prod-name"];
    $prod_desc = $_POST["prod-description"];
    $company = $_POST["company"];
    $prod_price = $_POST["price"];
    $prod_quantity = $_POST["quantity"];


    $sql = "INSERT INTO Product_Information (Prod_Name, Prod_Description, Company, Price, Quantity)
         VALUES ('$prod_name', '$prod_desc', '$company', '$prod_price', '$prod_quantity')";

    if ($connection->query($sql) === TRUE) {
        echo "Product_Information Added Successfully.";

        $sql2 = "INSERT INTO Product_Seller_Information (Seller_ID, Seller_Email)
        VALUES ('$sellerid', '$selleremail')";
    
        // $sql = "INSERT INTO Products (Seller_ID, Seller_Email, Prod_Name, Prod_Description, Company, price, quantity)
        //     VALUES ('$sellerid', '$selleremail', '$prod_name', '$prod_desc', '$company', '$prod_price', '$prod_quantity')";
        if ($connection->query($sql2) === TRUE) {
            echo "Added Product Seller Info Successfully.";
           
            header("Location: profile.php");
    
        } else {
            echo "Error: " . $sql2 . "<br>" . $connection->error;
        }

    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $conn->close();

?>

