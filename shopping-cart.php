

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <h1 id="title"><a href="/431_DBMS/home.php">E-Commerce</a></h1>

        <div>
            <a href="/431_DBMS/view.php"> <img id="icons" src="https://img.icons8.com/ios-filled/50/user.png" /></a>
            <a href="/431_DBMS/shopping-cart.php"> <img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png" /></a>
        </div>

    </nav>

    <div style="margin-top: 20px;">
        <button id="checkoutFail">Checkout (Fail)</button>
        <button id="checkoutSuccess">Checkout (Success)</button>
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
                    <th colspan="7">
                        <h2>List of Products</h2>
                    </th>
                </tr>
                <tr>
                    <th>Product ID</th>

                    <th>Name</th>
                    <th>Description</th>
                    <th>Company</th>
                    <th>Price</th>
                    <th>Quantity</th>

                    <th>Delete</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM Shopping_Cart, Products 
                        WHERE Shopping_Cart.Product_ID = Products.Product_ID
                        GROUP BY Shopping_Cart.Product_ID";

                $result = mysqli_query($connection, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["Product_ID"];
                        echo "<tr> 
                                <td>" . $id . "</td>
                                <td>" . $row["Prod_Name"] . "</td>
                                <td>" . $row["Prod_Description"] . "</td>
                                <td>" . $row["Company"] . "</td>
                                <td>" . $row["price"] . "</td>
                                <td>" . $row["Quantity"] . "</td>
                                <td><button><a href='dbc-delete.php?deleteid=" . $id . "'>Delete</a></button></td>
                            </tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }

                $connection->close();
                ?>
            </table>

            
        </div>
    </section>

    <script src="app.js"></script>
</body>

</html>
