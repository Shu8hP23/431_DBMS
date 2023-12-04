<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<link rel="stylesheet" href="style.css">

<nav>
    <h1 id="title"><a href="/431_DBMS/home.php">E-Commerce</a></h1>
    
    <div>
        <a href="/431_DBMS/request_form.html"><img width="24" height="24" src="https://img.icons8.com/material-rounded/24/application-form.png" /></a>
        
        <a href="/431_DBMS/shopping-cart.php"> <img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
        <a href="/431_DBMS/new_user.html"><img id="icons" src="https://img.icons8.com/ios-filled/50/user.png"/</a>
 
    </div>
    
</nav>

<body>
    

    <table align="center" border="1px" style="width:600px; line-height:40px">
        <tr>
            <th colspan="11"><h2>List of Products</h2></th>
        </tr>
        <tr>
            <th>Product ID</th>
            <th>Seller ID</th>
            <th>Seller Email</th>
            <th>Name</th>
            <th>Description</th>
            <th>Company</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Add</th>
        </tr>
        <?php
            
            include 'config.php';
            
            $sql = "SELECT * FROM Products";
            $result = mysqli_query($connection, $sql);

            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
               
               
             
            } 
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["Product_ID"];
                echo "<tr> 
                    <td>" .$id. "</td>
                    <td>" .$row["Seller_ID"]."</td>
                    <td>" .$row["Seller_Email"]. "</td>
                    <td>" .$row["Prod_Name"]. "</td>
                    <td>" .$row["Prod_Description"]."</td>
                    <td>" .$row["Company"]."</td>
                    <td>" .$row["price"]. "</td>
                    <td>" .$row["quantity"]. "</td>
                    
                    <td><Button><a href='delete_prod.php?deleteid=".$row["Product_ID"]."'>Delete</a></Button></td>
                    <td><button><a href='dbc-delete.php?deleteid=".$row["Product_ID"]."'>Edit</a></button></td>

                    <td><Button><a href='addtocart.php?addedid=".$id."'>Add to Cart</a></Button></td>




          
                

                </tr>"
        ?>
           
        <?php 
            }
        ?>

        
    </table>
    
  

    <div>
        <form action="dbc-inc.php" method="post">
            <h2>Add a Product</h2>
    
            <label for="seller_id">Seller ID:</label>
            <input type="text" id="seller_id" name="seller_id">

            <label for="seller_email">Seller Email:</label>
            <input type="text" name="seller_email">

            <label for="prod-name">Product Name:</label>
            <input type="text" name="prod-name">

            <label for="prod-description">Description:</label>
            <input type="text" name="prod-description">

            <label for="company">Company:</label>
            <input type="text" id="email" name="company">

            <label for="prod-name">Price:</label>
            <input type="text" id="firstName" name="price">

            <label for="prod-description">Quantity:</label>
            <input type="text" id="lastName" name="quantity">

            <button type="submit">Submit</button>
            
            </form>
        
    </div>
    


</body>

<script src="app.js"></script>

</html>
