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
        <a href="/431_DBMS/add-product.html">Add Product</a>
    </div>
    
</nav>

<body>


    

    <table align="center" border="1px" style="width:600px; line-height:40px">
        <tr>
            <th colspan="11"><h2>List of Products</h2></th>
        </tr>
        <tr>
            <th>Product ID</th>
            <
            <th>Name</th>
            <th>Description</th>
            <th>Company</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
            <th>Edit</th>
            
            <th>Add</th>
            
        </tr>
        <?php
            
            include 'config.php';
            
            $sql = "SELECT * FROM Product_Information";
            $result = mysqli_query($connection, $sql);

            if ($connection->query($sql) === TRUE) {
                echo "successfully";
               
               
             
            } 
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["Product_ID"];
                echo "<tr> 
                    <td>" .$id. "</td>
                    
                    <td>" .$row["Prod_Name"]. "</td>
                    <td>" .$row["Prod_Description"]."</td>
                    <td>" .$row["Company"]."</td>
                    <td>" .$row["Price"]. "</td>
                    <td>" .$row["Quantity"]. "</td>
                    
                    <td><Button><a href='delete_prod.php?deleteid=".$id."'>Delete</a></Button></td>
                    
                    <td><button><a href='edit-product.php?editid=".$id."'>Edit</a></button></td>

                    <td><Button><a href='addtocart.php?addedid=".$id."'>Add to Cart</a></Button></td>
                </tr>"
        ?>
           
        <?php 
            }
            $connection->close();
        ?>

        
    </table>
    
  



</body>

<script src="app.js"></script>

</html>
