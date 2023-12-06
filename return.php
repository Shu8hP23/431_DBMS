
    <?php

    include 'config.php';
    // $counter = "SELECT Order_ID, Prod_Name FROM Order_History_Information;";
    // $counter = "SELECT Order_ID, User_ID FROM Order_History;";
    
    // $counter = "SELECT Product_ID FROM Product_Information";
    // $sql = "SELECT Prod_Name, SUM(Price) as TotalPrice, SUM(Quantity) as TotalQuantity FROM Order_History_Information
    // GROUP BY Prod_Name;";

    $orderid = $_GET['orderid'];
    $nameto =  $_GET['nameto'];

    $userid = 1;

    $getProductInfo = "SELECT * FROM Order_History_Information
    WHERE Order_ID = '$orderid' AND Prod_Name = '$nameto';";

    $result = mysqli_query($connection, $getProductInfo);

    if ($result) {

        echo "Details of getProductInfo:<br>";
        var_dump($result);

        $row = $result->fetch_assoc();
    
        if ($row) {
            $order_id = $row["Order_ID"];
            $prod_name = $row["Prod_Name"];
    
            $sql2 = "INSERT INTO Return_Order(Order_ID, User_ID, Status, Prod_Name)
                    VALUES('$order_id', '$userid', 'Returned', '$prod_name')";
    
            $result2 = mysqli_query($connection, $sql2);
    
            if ($result2) {
                echo "Added to Cart";
                header("Location: profile.php");
                exit;
            } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($connection);
            }
        } else {
            echo "No data found for Order ID '$orderid' and Product Name '$nameto'";
        }
    } else {
        echo "Error: " . $getProductInfo . "<br>" . mysqli_error($connection);
    }

    $connection->close();

?>
        

    