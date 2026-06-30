<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yxshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];


$sql = "INSERT INTO product (product_id, product_name, description, price)
VALUES ('$product_id', '$product_name', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
    header("Location: productlist.php");
}

$conn->close();
