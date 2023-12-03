
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <h1><a href="/431_DBMS/home.php">home</a></h1>
  
    </div>
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
            
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecommerce";

            $conn = mysqli_connect($host, $username, $password, $dbname);


            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM USERS";
            $result = mysqli_query($conn, $sql);

            if ($conn->query($sql) === FALSE) {
                echo "New record created successfully";
               
               
             
            } 
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr> 
                    <td>" .$row["USER_ID"]. "</td>
                    <td>" .$row["First_Name"]. "</td>
                    <td>" .$row["Last_Name"]. "</td>
                    <td>" .$row["Email"]. "</td>
                    <td>" .$row["mypassword"]. "</td>
                    <td>" .$row["Phone_Number"]. "</td>
                    <td>" .$row["myaddress"]. "</td>
                    <td>" .$row["City"]. "</td>
                    <td>" .$row["mystate"]. "</td>
                    <td><Button><a href='edit.php?id=".$row["User_ID"]."'>Edit</a></Button></td>
                    <td><Button><a href='dbc-delete.php?id=6'>Delete</a></Button></td>

          
                

                </tr>"
        ?>
           
        <?php 
            }

        ?>
    </table>
</body>
</html>