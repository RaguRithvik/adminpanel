<?php $page = "add-gallery"; 
include("center.php");
include("connection.php");
//insert Query
if(isset($_POST['add-gallery-image']))
{ 
//multiple image upload
    foreach($_FILES['images']['name'] as $key=>$val){
        $dir="images/gallery/";
        $image=$_FILES['images']['name'] [$key];
        $temp_name=$_FILES['images']['tmp_name'] [$key];  
    if($image!="")
      {
        if(file_exists($dir.$image))
				{
					$image= time().'_'.$image;
				}

        $fdir= $dir.$image;
        move_uploaded_file($temp_name, $fdir);
     }     
$query = "INSERT INTO gallery (images, status) VALUES ('$image', 'active')";
    if(mysqli_query($conn, $query)){
        echo '<script type="text/javascript">
                $(document).ready(function () {
                swal({
                title: "Gallery Added!"
                , text: "You clicked the button!"
                , icon: "success"
                , button: "Aww yiss!"
                , })
                });</script>';
    }  } }
?>
    <div class="card">
        <div class="card-header">
            <h5>Add New Gallery</h5> </div>
        <div class="card-block">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-xl-6  m-b-30">
                        <p class="fee-bold">Add Gallery's</p>
                        <input type="file" class="form-control img-responsive" name="images[]" multiple required accept="image/*">
                        <p class="dimension-image" id="myDIV">Size 500 X 333 (Only 20 Image)</p>
                        <script>
                            function myFunction() {
                                document.getElementById("myDIV").style.display = "none";
                            }
                        </script>
                        <script type="text/javascript">
                            $(function()
                            {
                            $("button[type='submit']").click(function(){
                            var $fileUpload = $("input[type='file']");
                            if (parseInt($fileUpload.get(0).files.length)>20){
                            alert("You can only upload a maximum of 20 files");
                                return false;
                            }
                            });    
                            });
                        </script>
                    </div>
                </div>
                <div class="form-group text-center center-block">
                    <button class="btn btn-new waves-effect waves-light" name="add-gallery-image" type="submit">Sumbit</button>
                </div>
            </form>
        </div>
    </div>
<?php
include("connection.php");
$i = 0;
$query = "SELECT * FROM gallery WHERE status = 'active' ORDER BY id DESC";  
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)) 
{ ?>   <form action="delete-all-gallery.php" method="post" >    
        <div class="card">
            <div class="card-header">
                <h5>Manage Image</h5><button type="submit" name="delete" class="btn btn-scuu" onclick="return checkNewDelete()"><i class="icofont icofont-ui-delete"></i> Delete</button> 
        </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" id="myTable" style="border:none">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($result)) 
                                 {
                                    echo '
                                         <tr>
                                            <td><label class="checkbox-inline"><input type="checkbox" value="'.($row["id"]).'" name="userid[]"> '.(++$i).'</label></td>
                                            
                                            <td><img src="images/gallery/'.($row["images"]).'"  alt="" class="user-img img-radius" width="40px" height="40px"></td>
                                                                                        
                                            <td><div class="btn-group-sm" style="float: none;"> 
                                            <a href="edit-gallery.php?id='. ($row["id"]).'" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;"><span class="icofont icofont-ui-edit"></span></a>
                                            
                                            <a href="delete-gallery.php?id='.($row["id"]).'" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;" onclick="return checkDelete()"><span class="icofont icofont-ui-delete"></span></a> </div></td>
                                         </tr>';
                                }
                                
                            } 
                             else {}
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('Are you sure?');
            }
        </script>
        <script type="text/javascript">
            function validateForm() 
            {
                var x = document.forms["myForm"]["fnames"].value;
                if (x == "")
                  {
                    alert("Select Box must be filled out");
                    return false;
                  }
            }
        </script>
        <script language="JavaScript" type="text/javascript">
            function checkNewDelete() { 
                return confirm('Are you sure? You want delete multiple files:');
            }
        </script>
        <?php include("footer.php"); ?>