<?php
$id = $_GET['editid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "cse_bu";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM preorder WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<html>
    <head>
        <title>Update Pre-order Information</title>
        <style>
            div { background-color: #f2f2f2; width: 30%; margin: auto; border-radius: 7px; padding: 16px; }
            input[type=text], input[type=email], input[type=date], input[type=number] {
                width: 100%; padding: 14px 8px; margin: 5px; border-radius: 5px;
            }
            input[type=submit] {
                width: 100%; padding: 14px 8px; margin: 5px; border-radius: 5px;
                background-color: #2ecc71; color: #ffffff; font-size: 20px;
            }
            input[type=submit]:hover {
                background-color: #27ae60; color: #ffffff;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Update Pre-order Information</h1>

            <form action="action_update.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">


                <label>Customer Name</label>
                <input type="text" name="customer_name" value="<?php echo $row['customer_name']; ?>">


                <label>Brand Name</label>
                <input type="text" name="brand_name" value="<?php echo $row['brand_name']; ?>">



                <label>Advance Payment</label>
                <input type="number" name="advance_payment" value="<?php echo $row['advance_payment']; ?>">


                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>">



                <label>Estimate Delivery</label>
                <input type="date" name="estimate_delivery" value="<?php echo $row['estimate_delivery']; ?>">


                


                <input type="submit" value="Update">

            </form>
        </div>
    </body>
</html>
