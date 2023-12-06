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
        <a href="/431_DBMS/profile.php"><img id="icons" src="https://img.icons8.com/ios-filled/50/user.png"/></a>
    </div>
    <div>
    <a href="/431_DBMS/new_user.html">new User</a>
        <a href="/431_DBMS/add-product.html">Add Product</a>
        <a href="/431_DBMS/reviews.html">Post Review</a>
    </div>
    
</nav>

<body>

    <table align="center" border="1px" style="width:800px; line-height:40px">
        <tr>
            <th colspan="11"><h2>Reviews Submitted for this Product</h2></th>
        </tr>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Seller's Email</th>
            <th>User's First Name</th>
            <th>User's Last Name</th>
            <th>Review Rating</th>
            <th>Review Content</th>
        </tr>
<?php
    include 'config.php';

    $id = $_GET['reviewid'];

    $query = "SELECT
                PI.Product_ID AS myProductID,
                PI.Prod_Name AS myProductName,
                PSI.Seller_Email AS mySellerEmail,
                U.First_Name AS writerFirstName,
                U.Last_Name AS writerLastName,
                RI.Rating AS reviewRating,
                RI.Content AS reviewContent
            FROM
                Product_Information PI
            JOIN
                Product_Seller_Information PSI ON PI.Product_ID = PSI.Product_ID
            JOIN
                Reviews R ON PI.Product_ID = R.Product_ID
            JOIN
                Users U ON R.User_ID = U.Usernum
            JOIN
                Review_Information RI ON R.Review_ID = RI.Review_ID
            WHERE
                PI.Product_ID = '$id';";

    $result = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["Product_ID"];
        echo "<tr> 
            <td>" .$row["myProductID"]. "</td>
            <td>" .$row["myProductName"]."</td>
            <td>" .$row["mySellerEmail"]."</td>
            <td>" .$row["writerFirstName"]. "</td>
            <td>" .$row["writerLastName"]. "</td>
            <td>" .$row["reviewRating"]. "</td>
            <td>" .$row["reviewContent"]. "</td>

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
    