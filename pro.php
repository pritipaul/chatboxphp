<?php 

include "si.php";

if (isset($_POST['subm'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pho = $_POST['pho'];
    $gender = $_POST['gender'];
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "./img/$photo");

	$sql="INSERT INTO `chat`.`logdin` (`name`, `email`, `pho`, `gender`, `photo`, `date of submit`) VALUES ('$name', '$email', '$pho', '$gender', '$photo', current_timestamp)";


                    if ($con->query($sql) == true) {
                        echo  "successful"; 
                        // header("location:home.php?loging==Succesfuly");
                    }
                    else{
                         echo "error:error";
                         
                     }
                     $con->close();


}







  // $exitsql = "SELECT * FROM `forum` . `plog`  WHERE hass = '$hass'" ;
  // $result = mysqli_query($con, $exitsql);
 
  // $num = mysqli_num_rows($result);
  // if ($num > 0) {
  //   echo "error:you are alredy registerd";
  // }
  // else{
  //    if ($hass==$chass) {
































 ?>