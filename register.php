<?php include('rform1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register an Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<!--bootstrap CsS file -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="custom.css"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Override Css -->
  <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
   body{
    background-color: #432436;
  
   }
h2{
  text-align: center;
  color : white;
}

  </style>
</head>
<style type="text/css">
.navbar{
 background-color: #563d7c;
}
form, content{
  width: 75%;
}
</style>
<body>

<div class="container justify-content-center  border w-50 h-75 border-info rounded border border-3 px-5 ml-5 my-5 py-4 ">
  
<div class="justify-content-center">
  	<h2 class="px-5 pb-3 t">Register Now!</h2>

	<form  action="register.php" method="POST" id="rform">
		<?php include('error.php'); ?>
	username:<input type="text" class="form-control mb-4" id="username" name="username" value="<?php echo $username; ?>" placeholder="Username" >
	Name:<input type="text" class="form-control mb-4" name" name="name" value="<?php echo $name; ?>" placeholder="name" >
	password:
	 <input type="password" class="form-control mb-4" id="pwd" name="password" placeholder="Password" required>
	confirm passowrd:
	 <input type="password" class="form-control mb-4" id="pwd2" name="repassword" placeholder="Confirm Password" required> 
	email:
	<input type="email" class="form-control mb-4" id="email" name="email" value="<?php echo $email; ?>" placeholder="email">
<button type="submit" name="submit" class="btn text-dark btn-outline-info">Register</button> or <a href="login.php">Login</a>
</form>
</div>
</div>
</body>
</html>

