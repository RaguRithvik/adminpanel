<?php $page = "add-gallery";
include("center.php");
include("connection.php");
//Edit 
$id     = $_GET['id'];
$sql    = "SELECT * FROM projects WHERE id  = '$id'";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_array($result);

//insert Query
if (isset($_POST['update'])) {
    $status      = $_POST['status'];
    $name= $_POST['project_name'];
    $dir         = "images/project/";
    $image       = $_FILES['images']['name'];
    $temp_name   = $_FILES['images']['tmp_name'];
    if ($image != "") {
        if (file_exists($dir . $image)) {
            $image = time() . '_' . $image;
        }
        
        $fdir = $dir . $image;
        move_uploaded_file($temp_name, $fdir);
    }
    else
    {
//echo'<script>alert("No Image");</script>';
$image = $_POST['images'];
    }
    $new_query = " UPDATE projects SET status = '$status', images = '$image', project_name = '$name' WHERE  id  = '$id'";
    if (mysqli_query($conn, $new_query)) {
        echo '
<script type="text/javascript">
    alert("Project Updated!");
    window.location = "add-project.php";  
    
</script>
';
        
    }
    else{
        echo '<script>alert("not working")</script>';
    }
    
}
?>
    <div class="card">
        <div class="card-header">
            <h5>Edit Project Detail</h5> </div>
        <div class="card-block">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="row">
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Project Name</p>
                    <input type="text" class="form-control fill" value="<?php echo $row['project_name'];?>"  name="project_name" required>
                </div>
                    <div class="col-sm-12 col-xl-4 m-b-30">
                        <p class="fee-bold">Status</p>
                        <select required class="form-control required fill" name="status">
                            <option value="">Choose Status</option>
                            <option value="active">Active</option>
                            <option value="in-active">In-Active</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-xl-4 m-b-30">
                        <p class="fee-bold">Project Images</p>
                        <input type="file" class="form-control img-responsive" name="images" accept="image/*">
                        <p class="dimension-image" id="myDIV">Image Dimension is within 500 X 333</p>
                        <script>
                            function myFunction() {
                                document.getElementById("myDIV").style.display = "none";
                            }
                        </script>
                    </div>
                    <div class="col-sm-12 col-xl-4 m-b-30">
                        <p class="fee-bold">Current Image</p> <img src="images/project/<?php echo $row['images']; ?>" alt="" class="img-thumbnail">
                        <input type="hidden" value="<?php echo $row['images'];?>" name="images"> </div>
                </div>
                <div class="form-group text-center center-block">
                    <button class="btn btn-new waves-effect waves-light" name="update" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    <?php
include("footer.php");
?>