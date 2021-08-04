<?php
// error_reporting(0);
$room = $_POST['room'];


if (strlen($room)>20 or strlen($room)<2) 
{

	$message = "Please Entered Your Name between 2 to 20 Charecter";
	echo "$message";
}
else if(!ctype_alnum($room)) 
{
	$message = "Please Entered Alphanumeric Charecter";
	echo "$message"; 
}
else{
	include "si.php";


$sql = "SELECT * FROM `chat`.`rooms` WHERE room = '$room'";

$result = mysqli_query($con, $sql);

if ($result) 
{
	if (mysqli_num_rows($result)>0) {
		$message = "Please Choose a Different Room Name This Name is claimed";
	echo "$message";

	}

	else{
		$sqli = "INSERT INTO `chat` . `rooms` (`room`, `date of reply`) VALUES ('$room', CURRENT_TIMESTAMP)";

			 if ($con->query($sqli) == true) {
          		echo  "successful?room='$room'";     
       			include "mess.php";
         
      		}
      		else{
           	echo "error:$sqli<br>$con->error";
       		}
      		$con->close();
    }

}
else{
	echo "this is an error";
}
	


}

?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  
