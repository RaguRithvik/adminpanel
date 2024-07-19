<?php
include('connection.php');
$checks=$_SESSION['username'];
$sql    = "SELECT username FROM admin WHERE username = '$checks'";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_array($result);
$session=$row['username'];

if(!isset($session))
    {	
		echo '<script type="text/javascript">window.location = "index.php"</script>';
    }

?>
