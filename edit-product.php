<?php
    include 'config.php';

    $Product_ID = $_GET['editid'];

    $retrieve =  "SELECT * FROM Products where Product_ID = $Product_ID";
    $result2 = mysqli_query($connection, $retrieve);
    $designated_row = mysqli_fetch_assoc($result2);

    $sellerid = $designated_row["seller_id"];
    $selleremail = $designated_row["seller_email"];
    $prod_name = $designated_row["prod-name"];
    $prod_desc = $designated_row["prod-description"];
    $company = $designated_row["company"];
    $prod_price = $designated_row["price"];
    $prod_quantity = $designated_row["quantity"];

    if(isset($_POST['submit'])){

        $sellerid = $_POST["seller_id"];
        $selleremail = $_POST["seller_email"];
        $prod_name = $_POST["prod-name"];
        $prod_desc = $_POST["prod-description"];
        $company = $_POST["company"];
        $prod_price = $_POST["price"];
        $prod_quantity = $_POST["quantity"];
    
    
        $sql = "UPDATE Products 
                SET Product_ID = $Product_ID, Seller_ID = $sellerid, Seller_Email = '$selleremail', Prod_Name = '$prod_name', Prod_Description = '$prod_desc', 
                Company = '$company', price = '$prod_price', 
                    quantity = $prod_quantity
                WHERE Product_ID = $Product_ID";
    
    
        $result = mysqli_query($connection, $sql);
    
        if($result){
          echo "Successful";
          header("Location: home.php");
        }
      }
    
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    
    <div>
        <form method="post">
            <input type="hidden" value= "<?php echo $Product_ID?>">
            <h2>Edit Inventory</h2>
    
            <label for="seller_id">Seller ID:</label>
            <input type="text" id="seller_id" name="seller_id" value=<?php echo $designated_row['Seller_ID'];?>>

            <label for="seller_email">Seller Email:</label>
            <input type="text" name="seller_email"  value=<?php echo $designated_row['Seller_Email'];?>>

            <label for="prod-name">Product Name:</label>
            <input type="text" name="prod-name" value=<?php echo $designated_row['Prod_Name'];?>>

            <label for="prod-description">Description:</label>
            <input type="text" name="prod-description"value=<?php echo $designated_row['Prod_Description'];?>>

            <label for="company">Company:</label>
            <input type="text" name="company" value=<?php echo $designated_row['Company'];?>>

            <label for="prod-name">Price:</label>
            <input type="text"name="price" value=<?php echo $designated_row['price'];?>>

            <label for="prod-description">Quantity:</label>
            <input type="text" name="quantity" value=<?php echo $designated_row['quantity'];?>>

            <button type="submit">Submit</button>
            <a href="/431_DBMS/home.php">home</a>
            </form>
        
    </div>
    
</body>
</html>