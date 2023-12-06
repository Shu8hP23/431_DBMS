<?php
    include 'config.php';

    $temp = 0;

    $userid = $_POST['userid'];
    $prod_id = $_POST['product_id'];
    $rating = $_POST['rating'];
    $content = $_POST['content'];
    $time = $_POST['time'];
    

    $counter = "SELECT * FROM Reviews";
    $result = mysqli_query($connection, $counter);

    if($result){
        $rowcounter = mysqli_num_rows($result);

        printf("Total rows : %d\n", $rowcounter);

        $rowcounter = $rowcounter + 1;
        printf("Total rows : %d\n", $rowcounter);

        $temp = $rowcounter;
        printf("Total rows : %d\n", $temp);
        
    }
    

    $sql3 = "INSERT INTO Reviews (Review_ID, User_ID, Product_ID)
    VALUES ('$temp', '$userid', '$prod_id');";


    $result15 = mysqli_query($connection, $sql3);
    
    if ($result15) {
        $query2 = "INSERT INTO Review_Information(Review_ID, Rating, Content, MyTime) 
        VALUES ('$temp', '$rating', '$content', '$time')";

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

