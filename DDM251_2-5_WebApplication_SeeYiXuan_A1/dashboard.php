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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidebar {
            background-color: rgb(127, 214, 225);
            height: 100vh;
            width: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4> YX SHOP</h4>

        <a href="dashboard.php">Dashboard</a>

        <a href="customerlist.php">Customer</a>

        <a href="productlist.php">Product</a>

        <a href="#">Order</a>

        <a href="logout.php">Logout</a>
    </div>
</body>

</html>