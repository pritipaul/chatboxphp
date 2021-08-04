<?php 
include "si.php";

if (isset($_POST['subm'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp_name, "./img/$photo");


  $exitsql = "SELECT * FROM `chat`.`logdin`  WHERE name = '$name'" ;
  $result = mysqli_query($con, $exitsql);
 
  $num = mysqli_num_rows($result);
  if ($num > 0) {
    echo "error:you are alredy registerd";
  }
  else{

    
     
  $sql="INSERT INTO `chat`.`logdin` (`name`, `email`, `gender`, `photo`, `date of submit`) VALUES ('$name', '$email', '$gender','$photo',current_timestamp)";


                    if ($con->query($sql) == true) {
                        echo  "successful"; 
                        header("location:index.php?loging==Succesfuly");
                    }
                    else{
                         echo "error:$sql<br>$con->error";
                         
                     }
                     $con->close();
}
}
?>






<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="../img/chat.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<div class="div border border-dark d-block m-auto bg-info my-5" style="width: 700px; height: 550px">
<div>
    <h2 class="head d-flex justify-content-center align-content-center border border-dark d-block m-auto bg-danger my-5" style="width: 500px">Fill the Form</h2>
</div>

<form class="profile d-block m-auto " action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"  enctype="multipart/form-data" style="width:500px">
     <div class="form-group">
       <label for="exampleFormControlInput1">Name</label>
       <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Entered Your Name" value="" required>
    </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="" required>
  </div>
     <div class="form-group">
    <label for="exampleFormControlSelect1">Gender select</label>
    <select class="form-control" name="gender" id="exampleFormControlSelect1" value="" required>
        <option>Select</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>

    </select>
    <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" name="photo" type="file" id="formFile">
</div>
   <button class="num d-block m-auto my-3" name="subm">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>
