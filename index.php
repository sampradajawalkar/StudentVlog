<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
    die();
  }
  

 
?>

<?php
header("refresh: 30");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>



  <!--bootstrap CsS file -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="custom.css"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Override Css -->
  <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
body {
  font-family: "Lato", sans-serif;

  background-image: url("bg.jpg");
 background-color: #cccccc;
  -webkit-background-size: cover;
 -moz-background-size: cover;
-o-background-size: cover;
height: 100%;
width: 100%;
background-size: cover;
background-attachment: fixed;
}


.navbar{
 background-color: #432436;
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
  background-color: #432436;
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

     </ul>
          <form class="form-inline my-2 my-lg-0 py-0" action="" method="post">
    
      <button type="submit" name="logout" class="btn btn-outline-light text-light btn-sm ">logout</button>

    </form>
      
  </div>
</nav>

<!--Dividing in coloumns -->
<div class="row">
<div class="col-md-4 mb-md-0 mb-3">

<div class=" justify-content-center  border w-75 h-75 border-dark rounded border border-5 px-5 my-5 py-5 ">
<h2>Your Profile</h2>

<div class="">
  
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
    <?php endif ?>

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

</div>
		</div>
<!--Profile-->

<!---posting php-->
</div>


    <!--posting system-->
    <!-- Trigger/Open The Modal -->
<div class="col-md-8 mb-md-0 mb-3">

<button id="myBtn" class="btn btn-outline-dark py-5 mt-5 px-5 mx-5 mb-5">write a post</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <!--post Body-->
    <div class="post-body border-4 border-dark rounded">

      <!----> 
<form class="w-50" action="post.php" method="post" >
  <div class="form-group ">
  <label for="title">Title:</label>
  <input type="text" class="form-control border-2 bg-light text-dark" name="title" placeholder="Write a title here!">
</div>

  <div class="form-group">
  <label for="postbody">Content:</label>
  <textarea class="form-control border-2 pink-textarea" rows="5" id="postbody" class="border-2 bg-light text-dark" name="postbody" placeholder="Write your post here!"></textarea>
</div>
<button type="submit" name="post">Submit</button>
</form>
</div>
  </div>

</div>


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






<!--Blog Entires-->
<div class="container-fluid border-5 border-dark py-5 px-5">
<h1>My Blog</h1>
  <?php 
include_once("connect.php");

$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = mysqli_query($db, $sql);

while ($row = mysqli_fetch_array($result) ) 
{
  echo "<table class='border-2 border-dark'>";
 echo "<tr>";
echo "<td><h3>" . $row['title'] . "</h3></td>";
echo "<td>" . $row['body'] . "</td>";
echo "</tr>";
echo "<hr/>";
echo "</table>";
}
  ?>
</div>
  </div>


<!---->
<div class="col-md-3 mb-md-0 mb-3">

    <!--notification system-->
</div>
</div>
    <!---->

    
    <div>
      
    </div>
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
                <a href="#!">Link 4</a>
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
<?php 
 if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>