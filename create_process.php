<?php
include 'koneksi.php';

$name = $_POST['name'];
$time = $_POST['time'];
$date = $_POST['date'];
$type = $_POST['type'];
$description = $_POST['description'];

$sql = "INSERT INTO schedule (id_type, schedule_name, schedule_time, schedule_date, schedule_description) VALUES ('$type','$name','$time','$date','$description')";
$query = mysqli_query($konek, $sql);

if ($query)
    header("location: schedule.php");
else
    echo ("Gagal Input Data");
