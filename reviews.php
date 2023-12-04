<?php
    include 'config.php';

    $userid = $_POST['userid'];
    $prod_id = $_POST['product_id'];
    $rating = $_POST['rating'];
    $content = $_POST['content'];
    $time = $_POST['time'];
    

    $countquery = "SELECT COUNT(*) as countme FROM Reviews";
    $result23 = mysqli_query($connection, $countquery);
    

    $row = mysqli_fetch_assoc($result23);
    $count = $row['countme'];

    // echo "Count of records in ReviewInformation: $count\n";

    $increment = ($count + 1); // don't use this... use auto increment
    // so you dont have to worry about it.

    echo "New Count: $increment <br>";
    echo "New rating: $rating <br>";
    echo "New content: $content<br>";
    echo "New time: $time <br>";


    echo "New Count 2: $increment <br>";
    echo "New userid 2: $userid <br>";
    echo "New product 2: $prod_id <br>";

    $query = "INSERT INTO Reviews(User_ID, Product_ID)
    VALUES($userid, $prod_id)"; 

    $result = mysqli_query($connection, $query);
    
    if ($result) {
        $query2 = "INSERT INTO Review_Information(Rating, Content, MyTime) 
        VALUES ($rating, '$content', '$time')";

        $result2 = mysqli_query($connection, $query2);

        if ($result2) {
            echo "In result2";
            echo "New user created successfully";
            header("Location: view.php");
            exit;
        } else {
            echo "In result3";
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    } else {
        echo "In result3";
        echo "Error: " . $query . "<br>" . $connection->error;
    }

    $connection->close();
?>

