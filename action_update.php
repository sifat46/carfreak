<?php

$id = $_POST['id'];
$customer_name=$_POST['customer_name'];
$brand_name=$_POST['brand_name'];
$advance_payment=$_POST['advance_payment'];
$phone=$_POST['phone'];
$estimate_delivery=$_POST['estimate_delivery'];


$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "cse_bu";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE preorder SET customer_name='$customer_name', brand_name='$brand_name', advance_payment='$advance_payment', phone='$phone', estimate_delivery='$estimate_delivery' WHERE id=$id";
$result=$conn->query($sql);

if ($result) {
    header("Location:index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>
