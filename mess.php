
<?php
error_reporting(0);

$room = $_GET['room'];
include "si.php";


$sql ="SELECT * FROM `chat`.`rooms` WHERE room = '$room'";

$result = mysqli_query($con, $sql);
// while ($row = mysqli_fetch_array($result)) 
if ($result) {
  if (mysqli_num_rows($result) > 1){
    $message = "This Room is alredy clamid";
    echo "$message";
  }
  else{

    echo "Your name is Correct So You Can Chat Here,$room";
    }       
}
else{
  echo "it is total error";
}


?>



<!DOCTYPE html>
							<html>
							<head>
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
							<style>
							body {
  									margin: 0 auto;
  									max-width: 800px;
 									 padding: 0 20px;
								}

							.container {
 									border: 2px solid #dedede;
  									background-color: #f1f1f1;
  									border-radius: 5px;
  									padding: 10px;
  									margin: 10px 0;
  									}
  							.darker {
  									border-color: #ccc;
  									background-color: #ddd;
									}

							.container::after {
  										content: "";
  										clear: both;
  										display: table;
										}

								.container img {
  										float: left;
  										max-width: 60px;
  											width: 100px;
  										margin-right: 20px;
  										border-radius: 50%;
										}

								.container img.right {
 										 float: right;
  										margin-left: 20px;
  										margin-right:0;
										}

									.time-right {
  											float: right;
  											color: #aaa;
											}

									.time-left {
  											float: left;
  											color: #999;
				                       }
				                    #message{
				                    	width: 650px

				                    }
				                    button{
				                    	width:80px;
				                    }
				                    .some{
				                    	height: 350px;
				                    	overflow-y:scroll; 
				                    }
</style>
</head>
<body class="bg-gradient-primary">
<div class="containering border border-primary rounded bg-dark" style="height: 650px">
   <div class="nav-scroller bg-danger">
    <nav class="nav d-flex bg-danger" >
      <a class="p-3 link-secondary text-white" href="#" >Make Profile</a>
      <a class="p-3 link-secondary text-white" href="#">ShowMany Profile</a>
      <a class="p-3 link-secondary text-white" href="#">Comment</a> 
    </nav>
   <nav class="navbar navbar-light bg-success ">
  
</div>
  
<h2 class="text-white d-flex justify-content-center align-content-center ">Chat Messages</h2>
<div class="some border border-dark p-3 mb-2" style="height: 450px">
<div class="container border border-danger bg-info text-dark">
  <p></p>
  <span class="time-right text-white"></span>
</div>
</div>
  <div class="d-flex align-content-center  m-3" >
  <input type="text" name="mess" id="message" placeholder="Entered Your Messages" class="right " style="height: 50px";>
  <button class="btn btn-default border border-dark  d-flex align-content-center flex-wrap bg-success" id="btn" name="btn" type="submit" style="height: 50px";>Send</button >
</div>

</div>
	
	
</body>
</html>

	

