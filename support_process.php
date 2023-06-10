<?php
include 'koneksi.php';

$subject = $_POST['subject'];
$description = $_POST['problem'];


$sql = "INSERT INTO customer_support (subject, problem) VALUES ('$subject','$description')";
$query = mysqli_query($konek, $sql);

if ($query)
    header("location: support.php");
else
    echo ("Gagal Input Data");
