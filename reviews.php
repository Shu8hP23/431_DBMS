<?php
include 'config.php';

    $prod_id = $_POST['product_id'];
    $rating = $_POST['rating'];
    $content = $_POST['content'];
    $time = $_POST['time'];
    $userid = $_POST['userid'];

    $count = "SELECT COUNT(*) as count_pet FROM Reviews";
    $result23 = mysqli_query($connection, $count);
    

    $row = mysqli_fetch_assoc($result23);
    $count = $row['count_pet'];

    echo "Count of records in ReviewInformation: $count";

    $increment === $count + 1;

    echo "Count of records in ReviewInformation: $increment";

    
    $query = "INSERT INTO ReviewInformation(Review_ID, Rating, Content, curr_time) 
            VALUES ($increment, $rating, '$content', '$time')";
    
    $query2 = "INSERT INTO Reviews(Review_ID, Userid, Product_ID)
            VALUES($increment, $userid, $product_id)"; 

    

    if ($connection->query($query) === TRUE) {

        if($connection->query($query2) === TRUE) {
            echo "New user created successfully";
            header("Location: view.php");
        }
    } else {
        echo "Error";
        echo "Error: " . $query . "<br>" . $connection->error;
    }

    $connection->close();
?>
