<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            <form action="runeditprofile.php" method="POST">
                <td><input type="text" name="password"></td>
                <td><input type="password" name="confirm_password"></td>
                <td><input type="text" name="name"></td>
                <td><input type="text" name="year_joined"></td>
                <td><input type="submit"></td>
            </form>
        </tr>
    </table>

</body>

</html>