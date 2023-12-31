

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<nav>
    <h1 id="title"><a href="/431_DBMS/home.php">E-Commerce</a></h1>
    
    <div>
        <a href="/431_DBMS/request_form.html"><img width="24" height="24" src="https://img.icons8.com/material-rounded/24/application-form.png" /></a>
        
        <a href="/431_DBMS/shopping-cart.php"> <img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
        <a href="/431_DBMS/new_user.html">new User</a>
        <a href="/431_DBMS/add-product.html">Add Product</a>
        <a href="/431_DBMS/profile.php"><img id="icons" src="https://img.icons8.com/ios-filled/50/user.png"/></a>
    </div>
    
</nav>


<body>

 

    <div style="margin-top: 20px;">
        <button id="checkoutFail"><a href="checkout-success.php">Checkout</a></button>
    </div>

    <section>
        <div style="margin-top: 20px;">
            <h2>Payment Options</h2>
            <p>The Table for a User's Available Payment Options will be here.</p>
            <!-- SQL: SELECT Card_Number, CCV_Num, Expiration_Date FROM Transactions WHERE Transactions.User_ID = currentUserID;-->
        </div>

        <div style="margin-top: 20px;">
            <h2>Your Shopping Cart</h2>
            <p>The Table for a User's Shopping Cart will be here.</p>
            <!-- SQL: SELECT Product_ID, Quantity FROM Shopping_Cart WHERE Shopping_Cart.User_ID = currentUserID;-->
            <table align="center" border="1px" style="width:600px; line-height:40px">
                <tr>
                    <th colspan="8">
                        <h2>List of Products</h2>
                    </th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Delete</th>


                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT Prod_Name, Price, SUM(Quantity) as TotalQuantity, SUM(Total_Price) as TotalPrice FROM User_Cart_Items GROUP BY Prod_Name;";
      
                $result = mysqli_query($connection, $sql);

                $total = 0;
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["Product_ID"];
                        $total +=  $row["Price"] * $row["TotalQuantity"];
                        echo "<tr> 
                                <td>" . $row["Prod_Name"] . "</td>
                                <td>" . $row["Price"] . "</td>
                                <td>" . $row["TotalQuantity"] . "</td>
                                <td>" . $row["TotalPrice"] . "</td>
                                <td><button><a href='cart-delete.php?deleteid=".$row["Prod_Name"]."'>Delete</a></button></td>
                            </tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }

                echo "<h1>" . $total . "</h1>";
                $connection->close();
                ?>
            </table>

            
        </div>
    </section>

    <script src="app.js"></script>
</body>

</html>
