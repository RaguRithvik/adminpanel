<?php

include("connection.php");
        if(empty($_POST['userid'])) 
         {
            echo '<script>alert("please select any checkboxs");window.location = "add-gallery.php";</script>';
        }
elseif(isset($_POST['userid']))
    {
		foreach($_POST['userid'] as $id):
        mysqli_query($conn,"delete from gallery where id='$id'");
		endforeach;
        header("Location: add-gallery.php"); 
	}

?>