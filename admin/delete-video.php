<?php
include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM video WHERE id ='$id'";
$row = mysqli_query($conn, $query) or die (mysqli_error());
header("Location: add-video.php");
?>