<?php

    include 'config.php';
    echo "Hello";
    

    // $counter = "SELECT Order_ID, Prod_Name FROM Order_History_Information;";
    // $counter = "SELECT Order_ID, User_ID FROM Order_History;";
    
    // $counter = "SELECT Product_ID FROM Product_Information";

    $counter = "SELECT 
                Order_History_Information.Order_ID,
                Order_History_Information.Prod_Name,
                Order_History.User_ID,
                Product_Information.Product_ID
            FROM 
                Order_History_Information
            INNER JOIN 
                Product_Information ON Order_History_Information.Prod_Name = Product_Information.Prod_Name
            INNER JOIN 
                Order_History ON Order_History_Information.Order_ID = Order_History.Order_ID";


    $result = mysqli_query($connection, $counter);

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
    echo $result;
    echo "hello3";
    
    

    $connection->close();

?>