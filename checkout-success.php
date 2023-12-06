<?php

include 'config.php';

$userid = 1;
$temp = 0;

$counter = "SELECT * FROM Order_History";
$result = mysqli_query($connection, $counter);

if ($result) {
    $rowcounter = mysqli_num_rows($result);

    printf("Total rows : %d\n", $rowcounter);

    $rowcounter = $rowcounter + 1;
    printf("Total rows : %d\n", $rowcounter);

    $temp = $rowcounter;
    printf("Total rows : %d\n", $temp);
}

$check_quantity_query = "SELECT COUNT(*) as invalid_quantity
    FROM User_Cart_Items UCI
    JOIN Product_Information PI ON UCI.Prod_Name = PI.Prod_Name
    WHERE UCI.User_ID = '$userid' AND UCI.Quantity > PI.Quantity";

$check_quantity_result = mysqli_query($connection, $check_quantity_query);

if ($check_quantity_result) {
    $row = mysqli_fetch_assoc($check_quantity_result);
    $invalid_quantity_count = $row['invalid_quantity'];

    if ($invalid_quantity_count > 0) {
        header("Location: rollback-page.html");
        exit;
    }
}

$process_checkout_queries = array(
    "START TRANSACTION;",
    "INSERT INTO ORDER_HISTORY (ORDER_ID, USER_ID) VALUES ('$temp', '$userid')",
    "INSERT INTO Order_History_Information (Order_ID, Prod_Name, Price, Quantity)
        SELECT '$temp', Prod_Name, Price, Quantity FROM User_Cart_Items",
    "UPDATE Product_Information PI
        JOIN User_Cart_Items UCI ON PI.Prod_Name = UCI.Prod_Name
        SET PI.Quantity = PI.Quantity - UCI.Quantity
        WHERE UCI.User_ID = '$userid' AND PI.Quantity >= UCI.Quantity",
);

$transaction_successful = true;

foreach ($process_checkout_queries as $query) {
    $result = mysqli_query($connection, $query);
    if (!$result) {
        $transaction_successful = false;
        break;
    }
}

if (!$transaction_successful) {
    header("Location: rollback-page.html");
    exit;
}

mysqli_query($connection, "COMMIT;");

$cleanup = array(
    "DELETE FROM User_Cart_Items",
    "DELETE FROM Shopping_Cart",
);

foreach ($cleanup as $clean) {
    $myres = mysqli_query($connection, $clean);
    if (!$myres) {
        echo "ERROR!";
    }
}

header("Location: shopping-cart.php");

$connection->close();
?>