<?php 
  session_start(); 
error_reporting(0);
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
    die();
  }
  

 
?>

<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account Profile</title>

<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--bootstrap CsS file -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="custom.css"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Override Css -->
  <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
body {
  font-family: "Lato", sans-serif;

  background-image: url(".jpg");
 background-color: #ffk;
  -webkit-background-size: cover;
 -moz-background-size: cover;
-o-background-size: cover;
height: 100%;
width: 100%;
background-size: cover;
background-attachment: fixed;
font-family: lucida console;
}


.navbar{
 background-color: #000;
}

#profilecontainer {
  background-color: #ffdead;
  background-image: url(ight.jpg);
}

#postsomethinghereblock {
  background-image: url(mask.jpg);
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.post-body{

}

#loginForm  {
    display: none;
    background: #ccc;
    width: 250px;
    height: 100px;
    padding: 20px;
    color: #333;
}
#login {
    width: 290px;
    display:block;
    background:#069;
    color:#fff;
}

/* PROFILE FORM TOGGLE */
.hide_img{
  display :none;

}
.hide_img{
  opacity: 50;
  background:  repeat scroll 0 0 white;
  border: 2px solid #432436;
  border-radius: 4px;
  color: #78C102;
  height: 100px:
  margin-left: 12px;
  margin: 10px;
  padding: 10px 16px;
  width: 400px;
}

.profileclass:hover .hide_img
{
  display:block;
}

a{
  color:white;

}

.fa{
  color : white;
  padding: 7px;
  margin :4px;
  border-style: solid;
  border-radius: 50%;
  align-items: center;
  align-content: center;
}

footer{
  color: white;
  background-color: #000;
}

.page-footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  
  text-align: center;
}

</style>



</head>

<body>

        <?php

// Inialize session
        echo isset($_SESSION['logout']);
if (isset($_POST['logout'])) {

    # code...
    // Delete certain session
unset($_SESSION['login']);

header('LOCATION:login.php'); die();
}
// Delete certain sessio
// Delete all session variables
// session_destroy();

// Jump to login page


?>
<!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg  navbar-dark   " >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home.html">
    <img src="student.png" alt="logo" style="width:50px; height:60px;"  class="rounded-circle d-inline-block align-top " ><h4 class="text-light  navbar-text pt-2 pb-0 px-2 mb-0  ">StudentsHub</h4>
  </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">
      <li class="nav-item">
        <a class="nav-link py-0" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-0" href="account.php">My Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-0" href="members.php">Members</a>
      </li>

      <li class="nav-item">
        <a class="nav-link py-0" href="blog.php">Blog Entries &nbsp</a>
      </li>
     <li>
        <?php 
        include_once('connect.php');
        $username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($db, $sql);

//now adding members list
$rows = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];
$dp = $row['profileimgfolder'];

  echo "<div class='chip text-light'>
  <img class='img-fluid rounded-circle' src='$dp' alt='' width='40' height='40'><a class ='text-light' href = 'account.php'>".$row['username']."  &nbsp &nbsp </a>
  </div>   ";
}
        ?>

         
     </li>
     </ul>
          <form class="form-inline my-2 my-lg-0 py-0" action="" method="post">
    
      <button type="submit" name="logout" class="btn btn-outline-light text-light btn-sm ">logout</button>

    </form>
      
  </div>
</nav>

<!--Dividing in coloumns -->

<div class=" container-fluid  border w-100 h-100 border-light rounded border border-5 mx-2 px-2 my-2 py-2 " id="profilecontainer">

  <div class="row my-5">

    <div class="col-md-3 text-center">
    
    

<?php
include_once 'connect.php';
$id = $_SESSION['username'];

$sql1 = "SELECT * FROM users WHERE username='$id'";
$result1 = mysqli_query($db, $sql1);

while ($row = mysqli_fetch_assoc($result1) ) 
{
echo "<h2 class='text-dark'>".$row['name'];
 
}
   

?>
</h2>




<!-- PROFILE IMAGE FORM-->

<?php

include_once 'connect.php';
if(isset($_POST['submit'])){
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$folder = "uploads/".$fileName;


move_uploaded_file($fileTmpName, $folder);
$id = $_SESSION['username'];
$sql = "UPDATE users SET profileimgfolder='$folder' WHERE username='$id'";
$resut = mysqli_query($db, $sql);


}

?>


<!---->

<?php

$id = $_SESSION['username'];

$sql1 = "SELECT * FROM users WHERE username='$id'";
$result1 = mysqli_query($db, $sql1);

while ($row = mysqli_fetch_array($result1) ) 
{
  $email=$row['email'];
  $bio = "<p class='py-2 px-2 text-dark' '><b class='text-dark'>Bio: </b>".$row['user_bio']."</p>";
 $profileImg = "<img src='".$row['profileimgfolder']."' height='400' weight'400' class='img-fluid img-thumbnail' >";
if($row['profileimgfolder'] == NULL){
  $profileImg = '<img src="uploads/profiledefault.png" height="400" width="400"  class="img-fluid img-thumbnail" alt="'.$id.'">';

}

echo "<div class='profileclass '><a class'show_img' href='' class='btn'></a> ".$profileImg."</div>";
echo "<small class='text-dark'><b class='text-dark'>Username: </b>".$_SESSION['username']." </small><br>";
}


?>
<button id="myBtn" class="btn btn-outline-light py-2 mt-3 px-2 text-center text-light  mb-3">Change Proile Picture</button>

<!-- The Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
     <div class="modal-content">
        <span class="close">&times;</span>
    <!--post Body-->
        <div class="post-body border-4 border-dark rounded" >

          <form action="" method="POST" enctype="multipart/form-data">
  
            <input type="file" class="custom-file-input bg-dark" id="dp" name="file">

            <label class="custom-file-label bg-dark" for="dp"> Select an image </label>
            <button class="btn btn-outline-primary" type="submit" name="submit">Upload</button>
            </span>

          </form> 
        </div>
     </div>
   </div>
   <?php 


echo"<form method='POST' action='bio.php'>
  
    <div class='container-fluid '>
    <input class='form-control form-control-sm' type='text' placeholder='Write something creative!!!'  name='updatebio'>
    <button type='submit' value='change' name='submit' class='btn btn-outline-light text-light btn-sm '>Update Your Bio</button>

</div>
<hr>
<div class='container-fluid '>
    ".$bio."
</div>

   ";
   echo "<br><hr><div class='text-dark mb-3'>
<p><b class='text-dark'>Email: </b>".$email."</p>
<hr>
<b class='text-dark'>Joined Date: </b>".$row['date']."
</div><hr>";
   ?>
 

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <p>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);

          ?>
        </p>
      </div>
    <?php endif ?>

<script type="text/javascript">
  
  // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
     


<!--CURRENT Users POSTed BLOGS will be displayed here-->

<div class="col-md-8 w-100 bg-dark text-light text-center">
 <a class='btn btn-outline-light w-100 my-5 py-5 text text-center bg-secondary' id="postsomethinghereblock"  href='index.php' type="button" > Post Something Now! </a>   
<h1 class="border-dark bg-light mt-2 text-dark"> TimeLine</h1>

<?php

$uname = $_SESSION['username'];
   $result2 = "SELECT *  FROM posts WHERE username='$uname' ";

  $check2 = mysqli_query($db, $result2);
  $rows = mysqli_num_rows($check2);

  if(mysqli_num_rows($check2 )!= 0){
   while ($row = mysqli_fetch_assoc($check2)) {
     

   echo  " 
   <div class='card' style='font-size: 17px;'>
  <div class='card-header text-light bg-dark'>
    <small class='text-right '>by ".$row['username']." ".$row['date_added']."</small>
  </div>
  <div class='card-body text-dark'>
    <h4 class='card-title'>".$row['title']."</h4>
    <p class='card-text'>".$row['body']."</p>
  </div>
</div>
        <br>
      
      
    
";
}
}
?>


</div>
</div>


<!---->

  
    
</div>
</div>
<!--Profile-->

<!---posting php-->
</div>




<!---->

    <!---->

    <!-- Footer -->
      <!-- Footer -->
<footer class="footer font-small  pt-5 ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-center">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Warning :</h5>
          <p>Do Not abuse or cyber bully anyone 
           // and some quote // </p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                 <li>
                <a href="index.php">Home </a>
              </li>
                <a href="account.php">My Account</a>
              </li>
              <li>
                <a href="members.php">Members</a>
              </li>
          
              <li>
                <a href="aboutus.php">About Us</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Connect !</h5>

            <ul class="list-unstyled">
              <li>
                <a href="facebook.com"><i class="fa fa-facebook px-2"></i></a>
              </li>
              <li>
                <a href="instagram.com"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#!"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#!"><i class="fa fa-google-plus"></i></a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-lowercase">© 2019 Copyright:
      <a href=""> ProcrastinatorsNow</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
