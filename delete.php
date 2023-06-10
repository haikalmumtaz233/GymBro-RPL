<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM schedule WHERE id_schedule = '$id'";
$query = mysqli_query($konek, $sql);

if ($query)
    header("location: schedule.php");
else
    echo "Proses Hapus Data Gagal";
