<?php include("connection.php");
$id = $_GET['id'];
$query = "DELETE FROM gallery WHERE id=$id"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
header("Location: add-gallery.php"); 
?>
