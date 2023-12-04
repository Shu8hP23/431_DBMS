<?php

include 'config.php';

$userid = 1;

$fetch_cart = "SELECT Prod_Name, Price, SUM(Quantity) as TotalQuantity, SUM(Total_Price) as TotalPrice FROM User_Cart_Items GROUP BY Prod_Name;";
$result = mysqli_query($connection, $fetch_cart);

if ($result) {
    // Fetch each row in the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $prod_name = $row['Prod_Name'];
        $prod_price = $row['Price'];
        $total_quantity = $row['TotalQuantity'];
        $total_price = $row['TotalPrice'];

        $sql2 = "INSERT INTO Order_History (User_ID)
            VALUES ('$userid');";
        
        $result2 = mysqli_query($connection, $sql2);

        if ($result2) {
            $countquery = "SELECT COUNT(*) as countme FROM Order_History";
            $result23 = mysqli_query($connection, $countquery);

            $row = mysqli_fetch_assoc($result23);
            $count = $row['countme'];

            $sql3 = "INSERT INTO Order_History_Information (Order_ID, Prod_Name, Price, Quantity)
                VALUES ('$count', '$prod_name', '$total_price', '$total_quantity');";
            
            $result3 = mysqli_query($connection, $sql3);

            if ($result3) {
                echo "Checkout Success";
                echo "Added to Order History";
                // You may want to remove the header redirect if you are echoing output
                header("Location: profile.php");

            } else {
                echo "In result3";
                echo "Error: " . $sql3 . "<br>" . mysqli_error($connection);
            }
        } else {
            echo "In result2";
            echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
        }
    }
} else {
    echo "Error";
    echo "Error: " . $fetch_cart . "<br>" . mysqli_error($connection);
}

$connection->close();

?>