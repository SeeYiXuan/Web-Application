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
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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
    <table width="600">
        <tr>
            <th width="150">name</th>
            <th width="200">email</th>
            <th width="150">yearjoin</th>
        </tr>

        <?php

        $query = "SELECT * FROM student WHERE email='$email'";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['yearjoin']; ?></td>
                <td><button>edit</button></td>
            </tr>
        <?php
        }
        mysqli_close($conn);
        ?>
        <a href=""><input type="submit" value="back"></a>

    </table>
</body>

</html>