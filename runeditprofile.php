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

$name = $_POST['name'];
$password = $_POST['password'];
$yearjoin = $_POST['year_joined'];

// SQL to update a record
$sql = "UPDATE student SET name = '$name', password = '$password', yearjoin = '$yearjoin' WHERE email = '" . $_SESSION["email"] . "'";

if (mysqli_query($conn, $sql)) {
    header("Location: profile.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
