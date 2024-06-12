
<?php 

$customer_name=$_POST['customer_name'];
$brand_name=$_POST['brand_name'];
$advance_payment=$_POST['advance_payment'];
$phone=$_POST['phone'];
$estimate_delivery=$_POST['estimate_delivery'];



$server_name="localhost";
$user_name="root";
$password="";
$database_name="cse_bu";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

// else{
//     echo "Connected Successfully";
// }


$sq="INSERT INTO preorder( id, customer_name, brand_name, advance_payment, phone, estimate_delivery) 
VALUES ( NULL, '$customer_name','$brand_name','$advance_payment','$phone','$estimate_delivery')";
 
 $result=$conn->query($sq);

if($result){
 
 header('location:index.php');
}
else{
    echo "Data not inserted";
}


$conn->close();

?>