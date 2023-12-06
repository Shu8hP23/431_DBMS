
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
        <h1 id="title"><a href="/431_DBMS/home.php">E-Commerce</a></h1>

        <div>
            <a href="/431_DBMS/view.php"> <img id="icons" src="https://img.icons8.com/ios-filled/50/user.png" /></a>
            <a href="/431_DBMS/shopping-cart.php"><img id="icons" src="https://img.icons8.com/ios-filled/50/shopping-cart.png"/></a>
        </div>
    </nav>
<body>

   
    <table align="center" border="1px" style="width:600px; line-height:40px">
        <tr>
            <th colspan="12"><h2>User's Database</h2></th>
        </tr>
        <tr>
            <th>USER ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr> 
        <?php
            
            include 'config.php';

            $sql = "SELECT * FROM USERS";
            $result = mysqli_query($connection, $sql);

            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
             
            } 
            while ($row = mysqli_fetch_assoc($result)) {

                $id = $row["Usernum"];
                echo "<tr> 
                    <td>" .$id. "</td>
                    <td>" .$row["First_Name"]. "</td>
                    <td>" .$row["Last_Name"]. "</td>
                    <td>" .$row["Email"]. "</td>
                    <td>" .$row["mypassword"]. "</td>
                    <td>" .$row["Phone_Number"]. "</td>
                    <td>" .$row["myaddress"]. "</td>
                    <td>" .$row["City"]. "</td>
                    <td>" .$row["mystate"]. "</td>

                    
                
                    <td><Button><a href='updateuser.php?updateid=".$id."'>Edit</a></Button></td>
                    
                    <td><button><a href='dbc-delete.php?deleteid=".$id."'>Delete</a></button></td>
                </tr>"
        ?>
           
        <?php 
            }
            $connection->close();

        ?>
    </table>
</body>


</html>