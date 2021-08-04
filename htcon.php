<?php
$room = $_POST['room'];
include "si.php";

$sql = "SELECT * FROM `chat`.`message` WHERE room = '$room'";

$res = "";
$result = mysqli_query($con, $sql);


if (!empty($result) &&  mysqli_num_rows($result)>0) {

		while ($row = mysqli_fetch_array($result)) {
			$res = $res . '<div class="container">';
			// $res = $res . $row['ip'];
			$res = $res . "$room<p>" . $row["mess"];
			$res = $res . '</p> <span class="time=right">' . $row["date of submetion"] . '</span></div>';
		}
}

echo $res;

?>