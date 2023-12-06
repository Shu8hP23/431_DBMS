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
        <a href="/431_DBMS/view.php">All Users</a>
    </div>
</nav>

<body>
    <div>
        <form method="get" action="/431_DBMS/home.php">
            <button type="submit" name="sort" value="asc">Sort by Price (Ascending)</button>
            <button type="submit" name="sort" value="desc">Sort by Price (Descending)</button>
        </form>
    </div>

    <?php
    include 'config.php';
    $sort = isset($_GET['sort']) ? $_GET['sort'] : 'default';
    $sql = "SELECT * FROM Product_Information";

    if ($sort == 'asc') {
        $sql .= " ORDER BY Price ASC";
    } elseif ($sort == 'desc') {
        $sql .= " ORDER BY Price DESC";
    }

    $result = mysqli_query($connection, $sql);
    echo "
    <table align='center' border='1px' style='width:600px; line-height:40px'>
        <tr>
            <th colspan='11'><h2>List of Products</h2></th>
        </tr>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Company</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
            <th>Add to Cart</th>
            <th>Reviews</th>
        </tr>
    ";

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
                <td><Button><a href='addtocart.php?addedid=".$id."'>Add to Cart</a></Button></td>
                <td><Button><a href='displayreview.php?reviewid=".$id."'>Reviews</a></Button></td>
            </tr>";
    }

    echo "</table>";

    $connection->close();
    ?>
</body>

<script src="app.js"></script>

</html>