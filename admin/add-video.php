<?php $page = "add-video"; 
include("center.php");
include("connection.php");
//insert Query
if(isset($_POST['add-video'])){    
  $url = $_POST['url'];  
  $query = " INSERT INTO video (url, status) VALUES ('$url','active')";
    if(mysqli_query($conn, $query))
    {
        echo '<script type="text/javascript">
                $(document).ready(function ()
                {
                swal({
                title: "video Added!"
                , text: "You clicked the button!"
                , icon: "success"
                , button: "Aww yiss!"
                ,       
                })
                });</script>';
    }

}

?>
<div class="card">
    <div class="card-header">
        <h5>Add Video</h5>
    </div>
    <div class="card-block">
        <form method="post" action="">
            <div class="row">
                <div class="col-sm-12 col-xl-6 m-b-30">
                    <p class="fee-bold">URL</p>
                    <input type="text" class="form-control fill" name="url" required>
                </div>
            </div>
            <div class="form-group text-center center-block">
                <button name="add-video" type="submit" class="btn btn-new waves-effect waves-light">Sumbit</button>
            </div>
        </form>
    </div>
</div>



<?php
include("connection.php");
$i      = 0;
$query  = "SELECT * FROM video WHERE status = 'active' ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)) 
{
?>
<div class="card">
    <div class="card-header">
        <h5>Manage Academic Year List</h5>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="myTable" style="border:none">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Video</th>
                        <th>ACtion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      while ($row = mysqli_fetch_array($result)) 
                         {
                           echo '
                           <tr>
                           <td>'.(++$i).'</td>
                           <td>
                                <iframe width="50%" height="40%" src="'.($row["url"]).'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </td>
                             
                           <td>
                            <div class="btn-group-sm"> 
                                <a href="edit-video.php?id='.($row["id"]).'" class="btn btn-primary waves-effect waves-light"><span class="icofont icofont-ui-edit"></span></a>
                                               
                                <a href="delete-video.php?id='.($row["id"]).'" class="btn btn-danger waves-effect waves-light" style="margin: 5px;" onclick="return checkDelete()"><span class="icofont icofont-ui-delete"></span></a>
                            </div>
                           </td>
                           </tr>';
                                }
                                
                            } 
                             else {
                                
                                }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you sure?');
    }
</script>
<?php include("footer.php"); ?>