<?php
require "functions.php";
// cek apakah tombol login sudah di tekan
// cek apakah username yg diketikan sama dengan yg ada di database
// Jika sama, cek apakah password yg di ketikkan sama dg yg ada di database
// jika usernama dan password benar, redirect ke halaman index$link = mysqli_connect("localhost", "root", "", "phpdasar");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" type="text/css">

</head>

<body>
    <h1>Halaman Login</h1>
    <ul>
        <form action="" method="POST">
            <li>
                <label>
                    Username
                    <input type=text name=username>
                </label>
            </li>
            <li>
                <label>
                    Password
                    <input type=password name=password>
                </label>
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </form>
    </ul>
</body>

</html>