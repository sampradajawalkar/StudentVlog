<?php 
session_start();
include_once('connect.php');
$uname = $_SESSION['username'];
if($_POST['submit']=='change')
{
  $bioupdated = mysqli_real_escape_string($db, $_POST['updatebio']);
}
$uname = $_SESSION['username'];
  $sql = "UPDATE users SET user_bio='$bioupdated' WHERE username='$uname'";

if(mysqli_query($db, $sql)) {
	header('LOCATION:account.php'); die();
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>
