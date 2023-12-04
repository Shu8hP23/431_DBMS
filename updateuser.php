<?php
  include 'config.php';
  $userid = $_GET['updateid'];
  $retrieve =  "SELECT * FROM Users where Usernum = $userid";
  $result2 = mysqli_query($connection, $retrieve);
  $designated_row = mysqli_fetch_assoc($result2);

  $First_Name = $designated_row['first_Name'];
  $Last_Name = $designated_row['last_Name'];
  $Email = $designated_row['email'];
  $Password = $designated_row['password2'];
  $Phone_Num = $designated_row['phone'];
  $Address = $designated_row['address'];
  $City = $designated_row['city'];
  $State = $designated_row['state'];

  if(isset($_POST['submit'])){

    $First_Name = $_POST['first_Name'];
    $Last_Name = $_POST['last_Name'];
    $Email = $_POST['email'];
    $Password = $_POST['password2'];
    $Phone_Num = $_POST['phone'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $State = $_POST['state'];


    $sql = "UPDATE Users 
            SET Usernum = $userid, First_Name = '$First_Name', Last_Name = '$Last_Name', Email = '$Email', 
                mypassword = '$Password', Phone_Number = '$Phone_Num', 
                myaddress = '$Address', City = '$City', mystate = '$State' 
            WHERE Usernum = $userid";


    $result = mysqli_query($connection, $sql);

    if($result){
      echo "Successful";
      header("Location: view.php");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Setup</title>
  <style>


    form {
      max-width: 300px;
      margin: 0 auto;
    }

    .information{
      display: flex;
      flex-direction: column;
    }
    .sub-div1{
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-content: flex-start;
    }
    .sub-div2{
      display: flex;
      flex-direction: row;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <form method="post">

        <input type="hidden" value= "<?php echo $userid?>">
        <h2>Edit Setup</h2>

        <div class="information">
            <div class="sub-div1">
                <label for="firstName">First Name:</label>
                <label for="lastName">Last Name:</label>
            </div>
                
            <div class="sub-div2">
                
              <input type="text" id="firstName" name="first_Name" value=<?php echo $designated_row['First_Name'];?>>


                <input type="text" id="lastName" name="last_Name" value="<?php echo $designated_row['Last_Name']; ?>">

            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $designated_row['Email']; ?>">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password2" value="<?php echo $designated_row['mypassword']; ?>">

            <label for="phone">Phone Number:</label>
            <input type="phone" id="phone_num" name="phone" value="<?php echo $designated_row['Phone_Number'] ?>">

            <label for="address">Address</label>
            <input type="address" id="address" name="address" value="<?php echo $designated_row['myaddress'] ?>">

            <div class="sub-div1">
                <label for="city">City</label>
                <label for="state2">State</label>

            </div>
            <div class="sub-div2">
                <input type="city" id="city" name="city" value="<?php echo $designated_row['City'] ?>">
                <input type="state" id="state2" name="state" value="<?php echo $designated_row['mystate'] ?>">
            </div>
        </div>
        <button name = "submit" type="submit">Update</button>
        <a href="/431_DBMS/view.php">home</a>
    </form>

</body>
</html>
