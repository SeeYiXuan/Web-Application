<?php
$servername = "localhost";
$username = "seeyixuan";
$password = "@rtRJ83CAv2a2N_A";
$dbname = "seeyixuan";
session_start();


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
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <button><a class="link" href="booklist.html">Back</a></button>
    <table>
        <tr>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Name</th>
            <th>Year Joined</th>
        </tr>
        <tr>
            <form action="test.php" method="POST">
                <td><input type="text" name="password"></td>
                <td><input type="text" name="confirm_password"></td>
                <td><input type="text" name="name"></td>
                <td><input type="text" name="year_joined"></td>
                <td><input type="submit"></td>
            </form>
        </tr>
    </table>
</body>

</html>