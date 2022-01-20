<?php include('rform1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register an Account</title>
	<meta charset="UTF-8">
  <meta name="description" content="story blog">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Nikita&samprada">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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

</style>
<body>

<div class="row align-items-center">
  <div class="col-8">
<div class="container-fluid justify-content-center  border w-50 h-75 border-light rounded border border-3 px-5 ml-5 my-5 py-4 ">
  
<div class="justify-content-center">

  	<h2 class="px-5 pb-3 t">Register Now!</h2>

	<form  action="register.php" method="POST" id="rform">
		<?php include('error.php'); ?>
	<label class="text-light">Username: </label>
	<input type="text" class="form-control mb-4" id="username" name="username" value="<?php echo $username; ?>" placeholder="Username" >
	<label class="text-light">Name:</label>
	<input type="text" class="form-control mb-4" name" name="name" value="<?php echo $name; ?>" placeholder="name" >
	<label class="text-light">Password:</label>
	 <input type="password" class="form-control mb-4" id="pwd" name="password" placeholder="Password" required>
	<label class="text-light">Confirm Passowrd:</label>
	 <input type="password" class="form-control mb-4" id="pwd2" name="repassword" placeholder="Confirm Password" required> 
	<label class="text-light">E-mail:</label>
	<input type="email" class="form-control mb-4" id="email" name="email" value="<?php echo $email; ?>" placeholder="email">
	
<button type="submit" name="submit" class="btn text-light btn-outline-light">Register</button><p class="text-light"> or <a href="login.php">Login</a></p>
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
</body>
</html>

