<?php
    
    include 'config.php';
    
    $First_Name = $_POST['first_Name'];
    $Last_Name = $_POST['last_Name'];
    $Email = $_POST['email'];
    $Password = $_POST['password2'];
    $Phone_Num = $_POST['phone'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];

   

    $sql = "INSERT INTO Users (First_Name, Last_Name, Email, mypassword, Phone_Number, myaddress, City, mystate)
            VALUES ('$First_Name', '$Last_Name', '$Email', '$Password', '$Phone_Num', 
            '$Address', '$City', '$State')";
        

    if ($connection->query($sql) === TRUE) {
        echo "New user created successfully";
        header("Location: view.php");
       

    } else {
        echo "Error";
        echo "Error: " . $sql . "<br>" . $connection->error;
        
    }

    $connection->close();

?>


