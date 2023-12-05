

<?php

    include 'config.php';

    $userid = 1;
    $temp = 0;
    
    // $fetch_cart = "SELECT Prod_Name, Price, SUM(Quantity) as TotalQuantity, SUM(Total_Price) as TotalPrice FROM User_Cart_Items GROUP BY Prod_Name;";
    // $result = mysqli_query($connection, $fetch_cart);
   
    $counter = "SELECT * FROM Order_History";
    $result = mysqli_query($connection, $counter);

    if($result){
        $rowcounter = mysqli_num_rows($result);

        printf("Total rows : %d\n", $rowcounter);

        $rowcounter = $rowcounter + 1;
        printf("Total rows : %d\n", $rowcounter);

        $temp = $rowcounter;
        printf("Total rows : %d\n", $temp);

    }
  
    $transfer = "INSERT INTO Order_History_Information (Order_ID, Prod_Name, Price, Quantity)
                SELECT '$temp', Prod_Name, Price, Quantity
                FROM User_Cart_Items;";
    $result2 = mysqli_query($connection, $transfer);

    echo $result2;




    
    $connection->close();
        
?>


