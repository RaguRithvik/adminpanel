<?php $page = "add-video"; 
include("center.php");
include("connection.php");
//EditQuery
$id = $_GET['id'];
$query = "SELECT * FROM video WHERE id = '$id'";
$edit_query = mysqli_query($conn, $query);
$row = mysqli_fetch_array($edit_query);
//insert Query
if(isset($_POST['update-video']))
  {
  $academic_year = $_POST['url'];   
  $status = $_POST['status'];    
  $query = "UPDATE video SET url = '$academic_year', status = '$status' WHERE id = '$id'";    
  if(mysqli_query($conn, $query))
    {
        echo ' <script type="text/javascript"> alert("Video Updated!"); window.location = "add-video.php";</script>';
        
    }

}

?>
<div class="card">
    <div class="card-header">
        <h5>Edit Video</h5>
    </div>
    <div class="card-block">
        <form method="post" action="">
            <div class="row">
               
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">URL</p>
                    <input type="text" class="form-control" name="url" required value="<?php echo $row["url"] ?>">
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Current Video</p>
                    <iframe width="100%" height="200px" src="<?php echo $row['url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-xl-4 m-b-30">
                    <p class="fee-bold">Status</p>
                    <select name="status" class="form-control fill" required>
                        <option value="">Choose Status</option>
                        <option value="Active">Active</option>
                        <option value="In-Active">In-Active</option>
                    </select>
                </div>
            </div>
            <div class="form-group text-center center-block">
                <button name="update-video" type="submit" class="btn btn-new waves-effect waves-light">Update</button>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>