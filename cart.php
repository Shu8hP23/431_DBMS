<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<script src="app.js"></script>


<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<link rel="stylesheet" href="style.css">

<nav>
    <h1 id="title"><a href="/index.html">E-Commerce</a></h1>
    
    <div>
        <a href="/profile.html"> <img id="icons" src="https://img.icons8.com/ios-filled/50/user.png"/></a>
        <a href="/cart.html"> <img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
 
    </div>
    
</nav>

<body>
    
    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = mysqli_connect($host, $username, $password, $dbname);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM Shopping_Cart";
    $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === FALSE) {
        echo "New record created successfully";
    
    
    
    } 
    while ($row = mysqli_fetch_assoc($result)) {

        echo " 
        <div>
            <div> 
                <h1>".$row["Seller_ID"]. "</h1>
                <h1>".$row["Seller_Email"]."</h1>
            </div>

            <div> 
                <h1>".$row["Product_ID"]. "</h1>
                <h1>".$row["Product_Name"]."</h1>
                <h1>" .$row["Prod_Description"]."</h1>    
                <h1>" .$row["Company"]."</h1>    
            </div>
            <h1>" .$row["price"]. "</h1>
            <h1>" .$row["quantity"]. "</h1>

        </div>
                    
        <Button><a href='".$row["User_ID"]."'>Edit</a></Button>
        <Button><a href=''>Delete</a></Button>
        <Button><a href='".$row["User_ID"]."'>Add to Cart</a></Button>

        "

       
    ?>

    <?php 
}
?>
  
    
</body>




</html>