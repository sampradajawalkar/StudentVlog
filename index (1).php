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
	<title>Index Page</title>
  

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




<!---->




<!---->






<!---posting php-->




    <!--posting system-->
    <!-- Trigger/Open The Modal -->
    <div class="row">
      <div class="col-8">
    <div class="container-fluid">
<div class="border-2 bg-success mx-5 my-5 px-4 py-4">
<h1 class="text-light text-center"> What's on your mind? </h1>
      <!----> <hr class="bg-light"/>
<form class="w-100" action="post.php" method="post" id="post_form" >
  <div class="form-group ">
  <label class="text-light" for="title">Title:</label>
  <input type="text" class="form-control border-2 bg-light text-dark" id="title" name="title" placeholder="Write a title here!">
</div>

  

  <div class="form-group">
  <label class="text-light" for="postbody">Content:</label>
  <textarea class="form-control border-2 pink-textarea" rows="5" id="postbody" class="border-2 bg-light text-dark" name="postbody" placeholder="Write your post here!"></textarea>
</div>
<button class="btn btn-outline-light px-5 text-bold" type="submit" name="post">Submit</button>
</form>
</div>
  </div>

</div>

<script>
         CKEDITOR.replace( 'postbody' );
</script>


<!---->
<div class="col-4 ">
<div class="w-75 bg-dark pl-2 mt-5 py-0 float-right">

   <!--notification system-->
<?php 
include_once("connect.php");

$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
$result = mysqli_query($db, $sql);
echo "<table class='table table-hover table-success table-sm mt-3 '>
  <thead class='text-light bg-dark'>
    <tr>
      <th scope='col'>Notification Tabl</th>
      <th scope='col'></th></tr>
  ";

while ($row = mysqli_fetch_array($result) ) 
{
  
 echo "</thead><table class='table table-hover table-success table-sm'><tbody class='table-sm table-hover table-success'>
    <tr><a href='blog.php'>
      <th scope='row my-0'>".$row['username']." Just now posted on the Blog Entries!</th>
      <td><small>".$row['date_added']."</small></td></a></tr>
      ";
    echo "</tbody>
</table>";
}
?>

</div>
</div>
</div>
</div>
    <!---->


<script>

$(document).ready(function(){

// updating the view with notifications using ajax

function load_unseen_notification(view = '')

{

 $.ajax({

  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)

  {

   $('.dropdown-menu').html(data.notification);

   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }

  }

 });

}

load_unseen_notification();

// submit form and get new records

$('#post_form').on('title', function(event){
 event.preventDefault();

 if($('#title').val() != '' && $('#postbody').val() != '')

 {

  var form_data = $(this).serialize();

  $.ajax({

   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)

   {

    $('#post_form')[0].reset();
    load_unseen_notification();

   }

  });

 }

 else

 {
  alert("Both Fields are Required");
 }

});

// load new notifications

$(document).on('click', '.dropdown-toggle', function(){

 $('.count').html('');

 load_unseen_notification('yes');

});

setInterval(function(){

 load_unseen_notification();;

}, 5000);

});

</script>

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
