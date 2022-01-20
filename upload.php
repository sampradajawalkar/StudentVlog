
<?php

include_once 'connect.php';

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$folder = "uploads/".$fileName;
echo $folder;

move_uploaded_file($fileTmpName, $folder);


?>









  <?php /* include('rform1.php') */ ?>
<?php 
  /*

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
 
?>

  <?php
  
  include_once 'connect.php';
  $username = $_SESSION['username'];
 
if (isset($_POST['upload'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf' );

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = "profile".$username.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE profileimg SET status= 0 AND filename = '$fileDestination' WHERE userid='$id'";
				$resut = mysqli_query($db, $sql);
				header("Location: index.php?");
			} else {
				echo "Your file is too big";
			}

		}
		else {
			echo "There was an error uploading your file!";
		}
	} else {
		echo "You cannot upload files of this type!";
	 }



}
*/
  ?>