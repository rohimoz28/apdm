<?php
require "functions.php";
// cek apakah tombol daftar sudah di tekan
if (isset($_POST["daftar"])) {
    if (daftar($_POST) > 0) {
        echo "<script>
        alert('User baru berhasil di tambahkan');
        </script>";
    } else {
        echo mysqli_error($link);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Halaman Daftar Admin</h1>
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
                <label>
                    Ulangi Password
                    <input type=password name=password2>
                </label>
            </li>
            <li>
                <button type="submit" name="daftar">Daftar</button>
            </li>
        </form>
    </ul>
</body>

</html>