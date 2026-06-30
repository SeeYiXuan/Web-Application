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

$ISBN = $_POST['ISBN'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$price = $_POST['price'];

// SQL to update a record
$sql = "UPDATE booklist SET title = '$title', author = '$author', description = '$description', price = '$price' WHERE ISBN = '$ISBN'";

if (mysqli_query($conn, $sql)) {
    header("Location: booklist.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
