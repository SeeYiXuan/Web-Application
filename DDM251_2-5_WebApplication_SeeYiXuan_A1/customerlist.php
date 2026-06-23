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
    <title>Customer List</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            position: fixed;
            height: 100vh;
            background-color: rgb(127, 214, 225);
            padding: 20px;
        }

        .content {
            margin-left: 240px;
            /* 200px sidebar + 40px spacing */
            padding: 20px;
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <h4> YX SHOP</h4>
        <a href="dashboard.php">Dashboard</a>
        <a href="#">Customer</a>
        <a href="#">Product</a>
        <a href="#">Order</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="content">
        <table width="1100">
            <tr>
                <th>Customer ID</th>
                <th width="300">Username</th>
                <th width="300">First Name</th>
                <th width="300">Last Name</th>
                <th width="200">Email</th>
                <th width="200">Gender</th>
            </tr>
            <?php

            $query = "SELECT * FROM customer";

            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><input type="button" value="Edit"></td>
                    <td><button>Delete</button></td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>

            <a href="addcustomer.php"><input type="submit" value="AddCustomer"></a>
        </table>


</body>

</html>