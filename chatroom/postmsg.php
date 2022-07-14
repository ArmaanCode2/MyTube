<?php

include 'db/db.php';

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql = "INSERT INTO `messages` (`msg`, `room`, `ip`) VALUES('$msg','$room','$ip')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>