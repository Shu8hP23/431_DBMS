<?php

    $sellerid = $_POST["seller_id"];
    $selleremail = $_POST["seller_email"];
    $prod_name = $_POST["prod-name"];
    $prod_desc = $_POST["prod-description"];
    $company = $_POST["company"];
    $prod_price = $_POST["price"];
    $prod_quantity = $_POST["quantity"];



    $sql = "INSERT INTO Products (Seller_ID, Seller_Email, Prod_Name, Prod_Description, Company, price, quantity)
        VALUES ('$sellerid', '$selleremail', '$prod_name', '$prod_desc', '$company', '$prod_price', '$prod_quantity')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
       
        header("Location: home.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

