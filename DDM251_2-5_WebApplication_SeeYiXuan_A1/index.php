<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yxshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "" || $password == "") {

        $error =  "Please enter username and password";
    } else {

        $sql = "SELECT * FROM customer WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {

            $error = "Username not found";
        } else {

            $row = $result->fetch_assoc();

            if ($row['password'] != $password) {

                $error = "Wrong password";
            } else {

                header("Location: dashboard.php");
                exit();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            font-size: 20px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
        }

        .header {
            background: rgb(127, 214, 225);
            color: white;
            text-align: center;
            padding: 25px;
            border-radius: 6px;
        }

        input[type="submit"] {
            background: rgb(0, 183, 235);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="header">
            <h2>Welcome to YX Shop</h2>
            <h3>Sign in</h3>
        </div>
        <?php if ($error != "") { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>

        <div id="email">
            <form target="_self" method="POST">
                <h2>Enter your Email</h2>
                <input type="text" name="email">
                <br />
                <h2>Password</h2>
                <input type="password" name="password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>

</html>