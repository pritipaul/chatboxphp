<h1>You are Logout Successfully</h1>


<!doctype html>
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


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
   <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex bg-success">
      <a class="p-3 link-secondary text-white" href="#" ><h2>Home</h2></a>
      <a class="p-3 link-secondary text-white" href="#"><h2>About</h2></a>
      <a class="p-3 link-secondary text-white" href="#"><h2>Contact</h2></a> 
    
   <nav class="navbar navbar-light bg-success ">
     <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title>
        </a>
      </div>
    </div>
  </header>
</nav>
      </nav>
   
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-info">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic text-dark" >Priti's Chat Group </h1>
       <?php
        if (isset($_GET['loging']) && $_GET['loging']==true)
        
        
        {
            ?>
      <p class="lead my-3 text-dark">Here Myltiple type of fetures Avelable, Chat with Your Friend. Join & Enjoy</p>
      <p class="lead mb-0 "><a href="logout.php" class="text-dark fw-bold">Logout</a></p>
<?php
}else{?>
     <p class="lead my-3 text-dark">You want to chat here so you make your profile or click the login button</p>
      <p class="lead mb-0 "><a href="log.php" class="text-dark fw-bold">Login</a></p>
<?php   }
?>
      <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

  
         

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="./img/ij.jpg" alt="Card image cap" style="height: 300px">
    <div class="card-body">
      <a class="card-title" href="log.php"><h5 >Make Profile</h5></a>
      <p class="card-text">You want to make Your Profile here so you can neet it .</p>
      <button><a class="card-title" href="log.php">Click Here & Go</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="./img/ij2.jpg" alt="Card image cap" style="height: 300px">
    <div class="card-body">
      <a class="card-title" href="show.php"><h5 >ShowMany Profile</h5></a>
      <p class="card-text">Many Candited make a Profile Here You can see all the candited profile.</p>
      <button><a class="card-title" href="show.php">Click Here & Go</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="./img/ij1.jpg" alt="Card image cap" style="height: 300px">
    <div class="card-body">
      <a class="card-title" href="profile.php"><h5 >Comment</h5></a>
      <p class="card-text">Any dought,Any confution,Any Like so you can comment Here.</p>
     <button><a class="card-title" href="profile.php">Click Here & Go</a></button>
    </div>
  </div>
</div>
     
     <?php
        if (isset($_GET['loging']) && $_GET['loging']==true)
        
        
        {
            ?>

      <article class="blog-post border border-primary rounded p-5 bg-warning my-3">
        <h2 class="blog-post-title">Chat Form</h2>
        
        <form action="room.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Chat Room Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="room" aria-describedby="emailHelp" placeholder="Enter Your Chat Room Name">
    <small id="emailHelp" class="form-text text-muted">Please Entered Your Room Name Carefuly</small>
  </div>
  <div class="form-group">  
  <button type="submit" name="btn" class="btn btn-primary my-3">Send</button>
</div>
</form>

</article>
<?php            
  }
  ?>
        <p class="blog-post-meta my-3">Thankyou For Use Our Webchat</p>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
  </body>
</html>
