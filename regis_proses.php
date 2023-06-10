<?php
include 'koneksi.php';
$id_user = "";
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];


$query = mysqli_query(
    $konek,
    "INSERT INTO user
VALUES('$id_user','$email','$password','$name','$number')"
) or die(mysqli_error($konek));
header("location: login.php?message=berhasil");
