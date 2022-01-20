

<?php
session_start();

    /* Attempt MySQL server connection. */

    $link = mysqli_connect("localhost", "root", "", "discussion_forum");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
   
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $postbody = mysqli_real_escape_string($link, $_POST['postbody']);
    $user = $_SESSION['username'];
    

    // attempt insert query execution
    $sql = "INSERT INTO posts ( id, userid, username, title, body, date_added, hashtags) VALUES ('', '$userid','$user','$title', '$postbody',now(),'')";
   

    if(mysqli_query($link, $sql)){
        
        header('LOCATION:index.php'); die();
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>




