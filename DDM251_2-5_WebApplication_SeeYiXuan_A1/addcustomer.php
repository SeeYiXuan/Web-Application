<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
        <button><a class="link" href="customerlist.php">Back</a></button>

        <table>
            <tr>
                <th>Customer ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
            <tr>
                <form action="insertcustomer.php" method="POST">
                    <td><input type="text" name="customer_id"></td>
                    <td><input type="text" name="username"></td>
                    <td><input type="text" name="first_name"></td>
                    <td><input type="text" name="last_name"></td>
                    <td><input type="text" name="email"></td>
                    <td><input type="text" name="gender"></td>
                    <td><input type="submit" value="add"></td>
                </form>
            </tr>
        </table>
</body>

</html>