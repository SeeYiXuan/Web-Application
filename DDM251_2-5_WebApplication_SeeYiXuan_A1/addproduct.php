<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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

        <button><a class="link" href="productlist.php">Back</a></button>
        <table>
            <tr>
                <th>productID</th>
                <th>productName</th>
                <th>description</th>
                <th>price</th>

            </tr>
            <tr>
                <form action="insertproduct.php" method="POST">
                    <td><input type="text" name="product_idD"></td>
                    <td><input type="text" name="productName"></td>
                    <td><input type="text" name="description"></td>
                    <td><input type="text" name="price"></td>
                    <td><input type="submit" value="add"></td>
                </form>
            </tr>
        </table>
    </div>
</body>

</html>