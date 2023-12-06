<?php

    include 'config.php';

    

    // $fname = test_input($_POST["fname"]);
    // $lname = test_input($_POST["lname"]);

    $email = $_POST["email"];
    $lname = $_POST["password"];
   
    // echo $fname;
    // echo $lname;


    $sql = "SELECT * FROM Users 
            WHERE Email = '$email'";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0) {
        Header("Location: home.php");
    }
    else{
        Header("Location: login.html");
    }

    $connection->close();

  
    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
  
?>

