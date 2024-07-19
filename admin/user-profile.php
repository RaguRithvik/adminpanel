<?php $page = "home";  
include("center.php");
include("connection.php");
//Edit Qurey
$id   = $_GET['admin'];
$sql    = "SELECT * FROM admin WHERE id  = '$id'";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_array($result);
//Upadte Query
if(isset($_POST['update-admin'])){
  $name = $_POST['name'];
  $mailid = $_POST['mailid'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];  
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $password = md5($password); 
  $dir="images/";
  $image=$_FILES['admin_image']['name'];   
  $temp_name=$_FILES['admin_image']['tmp_name'];
   if($image!="")
      {
        if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

        $fdir= $dir.$image;
            move_uploaded_file($temp_name, $fdir);
     }
    else
    {
//echo'<script>alert("No Image");</script>';
$image = $_POST['admin_image'];

    }

    if( empty($_POST['password'])){
  $query = "UPDATE admin SET name='$name', mailid='$mailid', phone='$phone', username='$username',admin_image='$image' WHERE id='$id'";
}else{
	 $query = "UPDATE admin SET name='$name', mailid='$mailid', phone='$phone', username='$username',password='$password',admin_image='$image' WHERE id='$id'";
}
    






    
    if(mysqli_query($conn, $query))
    {
        echo ' <script type="text/javascript"> alert("Details Updated!"); window.location = "index.php";</script>';
        
    }
    else{
        echo '<script>alert("Error")</script>';
    }

}
?>
<div class="card">
    <div class="card-header">
        <h5>Settings</h5>
    </div>
    <div class="card-block">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Name</p>
                    <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $row['name']; ?>">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Email ID</p>
                    <input type="email" class="form-control" placeholder="Email Id" name="mailid" required value="<?php echo $row['mailid']; ?>">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Phone No</p>
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required value="<?php echo $row['phone']; ?>">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">User Name</p>
                    <input type="text" class="form-control" placeholder="Name" name="username" required value="<?php echo $row['username']; ?>">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Password</p>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Logo</p>
                    <input type="file" class="form-control" name="admin_image">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Current Image</p> <img src="images/<?php echo $row['admin_image']; ?>" class="img-thumbnail">
                    <input type="hidden" value="<?php echo $row['admin_image'];?>" name="admin_image">
                </div>
            </div>
            <div class="form-group text-center center-block">
                <button name="update-admin" type="submit" class="btn btn-new waves-effect waves-light">Sumbit</button>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>