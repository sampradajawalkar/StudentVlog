<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
    die();
  }
  

 
?>

<?php
header("refresh: 300");
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
  <meta charset="UTF-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--bootstrap CsS file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="custom.css"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Override Css -->
  <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
body {
  font-family: "Lato", sans-serif;

  background-image: url("blue.jpg");
 background-color: grey;
  -webkit-background-size: cover;
 -moz-background-size: cover;
-o-background-size: cover;
height: 100%;
width: 100%;
background-size: cover;
background-attachment: fixed;

font-family: lucida console;
}

.header {
  padding: 60px;
  text-align: center;
  background: #000;
  background-image: url("Factfiction.jpg");
  color: white;
  font-size: 30px;
  width: 100%;
  border-radius: 0;
  margin-top: 0;
}

.navbar{
 background-color: #000;
}

/* DIV FORMAT */

#abdiv {
border-lenght:2px;
border:navyblue;
margin:50px;
padding:30px;
color:white;
background:black;
text-align:center;
align:center;
float:center;
}

.h2{
color:black;
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

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

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


<!--HEADER-->

<div class="header">
  
</div>


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




<!--ABOUT US START-->



<body style=" background-image: url(blue.jpg);background-opacity:0.5;" >


<div id="abdiv">
<img src="treehouse.jpg" alt="Girl in a jacket" width="500" height="300">
<p>Stories You�ll Love.
Whatever you�re into, there is something you�ll love on Scribbled.

And if you can�t find exactly what you�re looking for, you have the power to create it yourself.

</p>
</div>

<div id="abdiv">
<img src="bulb.jpg" alt="Girl in a jacket" width="500" height="300">
<p>Storytelling Redefined
Scribbled takes everything you love about storytelling, and turns it into a social, on-the-go experience. The result is a one-of-a-kind adventure in creation and discovery.

Today, the global Scribbled community is made up of more than 65 million people. We�re proudly based in Toronto, Canada, but Scribbled stories transcend borders, interests, and language.</p>
</div>

<div id="abdiv">
<img src="mask.jpg" alt="Girl in a jacket" width="500" height="300">
<p>A Captivated Audience
In a world of 7-second attention spans, people everywhere still long to be immersed in content that matters to them. The Scribbled community collectively spends an incredible 15 billion minutes each month using Scribbled.</p>
</div>

<div id="abdiv">
<img src="Factfiction.jpg" alt="Girl in a jacket" width="500" height="300">
<p>
Freedom to Discover and Create
Scribbled gives people from around the world access to an audience of millions, and connects them with content they can�t find anywhere else.

You can discover the things that speak to you, or choose to create them from scratch. It�s the freedom to express yourself with an authentic voice, and the knowledge that you will be heard.
</p>
</div>


<!---->






<!----->




    <!--\-->
    <!-- ABOUT US END -->
    




    <!-- Footer -->
      <!-- Footer -->
<footer class="footer font-small pt-5 ">

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
