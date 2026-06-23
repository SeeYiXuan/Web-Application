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

$customer_id = $_POST['customer_id'];
$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "INSERT INTO customer (customer_id, username, first_name, last_name, email, gender)
VALUES ('$customer_id', '$username', '$first_name', '$last_name', '$email', '$gender')";

if ($conn->query($sql) === TRUE) {
    header("Location: customerlist.php");
}

$conn->close();
