<?php
$link = mysqli_connect("localhost", "root", "", "phpdasar");

function daftar($data)
{
    global $link;
    // buat variabel dari yg diketikkan user
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($link, $data["password"]);
    $password2 = mysqli_real_escape_string($link, $data["password2"]);
    // cek apakah password berbeda dengan konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('Konfirmasi Password Salah!');
        </script>";
    }
    die;
    // cek apakah nama user yg di ketikkan sudah ada di db
    // enkripsi password
    // masukkan data username dan password ke database
    // return affected rows untuk konfirmasi apakah data berhasil di tambahkan ke db

    return mysqli_affected_rows($link);
}
