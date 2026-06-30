<?php
$servername = "localhost";
$username = "seeyixuan";
$password = "@rtRJ83CAv2a2N_A";
$dbname = "seeyixuan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ISBN = $_GET['ISBN'];

$query = "SELECT * FROM booklist WHERE ISBN='$ISBN'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>

<body>
    <button><a class="link" href="booklist.html">Back</a></button>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr>
            <form action="runeditbook.php" method="POST">
                <td> <input type="text" name="ISBN" value="<?php echo $row['ISBN']; ?>" readonly></td>
                <td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
                <td><input type="text" name="author" value="<?php echo $row['author']; ?>"></td>
                <td><input type="text" name="description" value="<?php echo $row['description']; ?>"></td>
                <td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
                <td><input type="submit"></td>
            </form>
        </tr>
    </table>

</body>

</html>