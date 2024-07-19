<?php 
include("center.php");
include("connection.php");
//insert Query
if(isset($_POST['add-year']))
{ 
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
  $query = " INSERT INTO admin (name, mailid, phone, username, password, admin_image) VALUES ('$name', '$mailid', '$phone', '$username', '$password', '$image')";
    if(mysqli_query($conn, $query))
    {
        echo '<script type="text/javascript">
                $(document).ready(function () 
                {
                swal({
                title: "Year Added!"
                , text: "You clicked the button!"
                , icon: "success"
                , button: "Aww yiss!"
                , })
                });
              </script>';
    }

}

?>
<div class="card">
    <div class="card-header">
        <h5>Profile</h5>
    </div>
    <div class="card-block">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Name</p>
                    <input type="text"  name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Email ID</p>
                    <input type="email" name="mailid" class="form-control" placeholder="Email Id" required>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Phone No</p>
                    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">User Name</p>
                    <input type="text" class="form-control" name="username" placeholder="Name" required>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Password</p>
                    <input type="password" class="form-control" name="password"  placeholder="Password" required>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Image</p>
                    <input type="file" class="form-control" name="admin_image" required>
                </div>
            </div>
            <div class="form-group text-center center-block">
                <button name="add-year" type="submit" class="btn btn-new waves-effect waves-light">Sumbit</button>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>