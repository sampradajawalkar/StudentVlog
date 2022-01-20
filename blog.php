<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>My Blog</h1>
	<?php 
include_once("connect.php");

$sql = "SELECT FROM posts ORDER BY id DESC";
$result = mysqli_query($db, $sql);

while ($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$content = $row['postbody'];
}

	?>

	<h2><?php echo $title; ?></h2>
	<p><?php echo $content; ?></p>
	<hr/>


</body>
</html>