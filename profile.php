<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<link rel="stylesheet" href="style.css">
<script src="app.js"></script>

<nav>
    <h1 id="title"><a href="/431_DBMS/home.php">E-Commerce</a></h1>
    
    <div>
        <a href="/431_DBMS/request_form.html"><img width="24" height="24" src="https://img.icons8.com/material-rounded/24/application-form.png" /></a>
        
        <a href="/431_DBMS/shopping-cart.php"><img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
        <a href="/431_DBMS/new_user.html">new User</a>
        <a href="/431_DBMS/add-product.html">Add Product</a>
        <a href="/431_DBMS/profile.php"><img id="icons" src="https://img.icons8.com/ios-filled/50/user.png"/></a>
    </div>
    
</nav>




   

<body>

    <section>

        <div style="margin-top: 20px;">
            <h2>Your Order History</h2>
            <table align="center" border="1px" style="width:600px; line-height:40px">
                <tr>
                    <th colspan="8">
                        <h2>History</h2>
                    </th>
                </tr>
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Return</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM Order_History_Information;";
    
                $result = mysqli_query($connection, $sql);

                $total = 0;
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                        echo "<tr> 
                                <td>" . $row["Order_ID"] . "</td>
                                <td>" . $row["Prod_Name"] . "</td>
                                <td>" . $row["Price"] . "</td>
                                <td>" . $row["Quantity"] . "</td>

                                <td><Button><a href='return.php?orderid=".$row["Order_ID"]."&nameto=".$row["Prod_Name"]."'>Return</a></Button></td>
                                
                            </tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }

                $connection->close();
                ?>
            </table>

            <table align="center" border="1px" style="width:600px; line-height:40px">
                <tr>
                    <th colspan="8">
                        <h2>Return Order</h2>
                    </th>
                </tr>
                <tr>
                    
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th>Status</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM Return_Order;";
    
                $result = mysqli_query($connection, $sql);

                $total = 0;
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                        echo "<tr> 
                                
                                
                                <td>" . $row["Order_ID"] . "</td>
                                <td>" . $row["Prod_Name"] . "</td>
                                <td>" . $row["Status"] . "</td>
                                
                            </tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }

                $connection->close();
                ?>
            </table>

            <div style="margin-top: 20px;">
            
            <table align="center" border="1px" style="width:600px; line-height:40px">
                <tr>
                    <th colspan="8">
                        <h2>Help Request</h2>
                    </th>
                </tr>
                <tr>
                    <th>Ticket Number</th>
                    <th>User ID</th>
                    <th>Order ID</th>
                    <th>Message</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM HelpRequest
                ";
    
                $result = mysqli_query($connection, $sql);

                $total = 0;
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    
                        echo "<tr> 
                                <td>" . $row["ticketnum"] . "</td>
                                <td>" . $row["usernum"] . "</td>
                                <td>" . $row["orderid"] . "</td>
                                <td>" . $row["challenges"] . "</td>
                                
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
   
   
    
</body>



<style>
    .shopping-list {
    position: relative;
        display: grid;
        flex-direction: row;

        justify-content: space-evenly;
        
    }
    .column-1{
        display: grid;
        flex-direction: column;
    }
    .main-item{
        justify-content: space-evenly;
    }
    .card-body{
        display: flex;
        flex-direction: row;
        
        
    }     
    h3{
    margin-left: 100px;
    }
</style>

</html>