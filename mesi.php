<?php
include "si.php";

$mess = $_POST['mess'];
$room = $_POST['room'];
$ip = $_POST['ip'];


$sql = "INSERT INTO `chat`.`message` (`mess`, `room`, `ip`,`date of submetion`) VALUES ('$mess', '$room', '$ip',current_timestamp)";
mysqli_query($con, $sql);
$con->close();




























?>