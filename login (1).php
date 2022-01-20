<?php include('rform1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv='content-type' content='text/html;charset=utf-8' />

  <title>Login</title>

  <meta charset="UTF-8">
  <meta name="description" content="story blog">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Nikita&samprada">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap CsS file -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="custom.css"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Override Css -->
  <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
   body{
    background-color: #000;
  
   }
h2{
  text-align: center;
  color : white;
}

  </style>
</head>



<body>

<div class="row align-items-center">
  <div class="col-8">
<div class="container-fluid justify-content-center  border w-50  border-light rounded border border-3 px-5 ml-5 my-5 py-4 ">
  
<div class="justify-content-center">
  	<h2 class="px-5 pb-3 t">Login</h2>
  
	 
  <form class="h-50" method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label class="text-light">Username</label>
  		<input type="text" name="username" placeholder="username" >
  	</div>
  	<div class="input-group">
  		<label class="text-light">Password</label>
  		<input type="password" name="password" placeholder="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn text-light btn-outline-light" name="login_user">Login</button>
  	</div>
  	<p class="text-light">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</div>

</div>
<!--IMAGE CSS -->
<div class="col-4">

  <h1 class="text-light"> The Student Hub </h1>
  <br>
 <script type="text/javascript">
  var image_tracker = 'f';

function change() {
  var image = document.getElementById('social');
  if(image_tracker == 'f') {
    image.src = 'matter.png';
    image_tracker = 't';
  } 
   else {
    image.src = 'word.png';
    image_tracker = 'f';
  }
}

setInterval ('change()', 1000);

</script>

<img class="justify-content-center  " src="word.png" alt="logos" height="400" width="400" id="social" onclick="change();">
</div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>