<?php
$servername = "localhost";
$username = "seeyixuan";
$password = "@rtRJ83CAv2a2N_A";
$dbname = "seeyixuan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ISBN = $_POST['ISBN'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO booklist (ISBN, title, author, description, price)
VALUES ('$ISBN', '$title', '$author', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
    header("Location: booklist.php");
}


$conn->close();
