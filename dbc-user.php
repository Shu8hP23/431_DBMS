<?php

    $First_Name = $_POST['first_Name'];
    $Last_Name = $_POST['last_Name'];
    $Email = $_POST['email'];
    $Password = $_POST['password2'];
    $Phone_Num = $_POST['phone'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    
    $conn = mysqli_connect($host, $username, $password, $dbname);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO Users (First_Name, Last_Name, Email, mypassword, Phone_Number, myaddress, City, mystate)
            VALUES ('$First_Name', '$Last_Name', '$Email', '$Password', '$Phone_Num', 
            '$Address', '$City', '$State')";
        

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
        header("Location: view.php");
       

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }

    $conn->close();

?>

