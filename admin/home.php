<?php $page = "home"; include("center.php") ?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header card" style="margin:0 0 30px -15px">
            <div class="align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Welcome to Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12 col-xl-4">
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="fas fa fa-fax bg-c-blue"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-25"><b>Need Support</b></h6>
                        <p class="m-b-0">Call Technical Team to Landline: 044-4352 8840, Support: 98409 60535</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card comp-card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <i class="fas far fa-id-badge bg-c-green"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-25">Contact us</h6>
                        <p class="m-b-0" style="margin-bottom: 2px;">No 4, Chavadi Street, <br>   Pallavaram, Chennai - 600043</p>
                            <p class="m-b-0" style="margin-bottom: 2px;"><b>Email</b> <br>
                            support@vjmtech.com</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h5>Feel Free to Contact at any time</h5>
            </div>
            <div class="card-block">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 m-b-30">
                            <div class="row">
                                <div class="col-md-3 m-b-30">
                                    <p class="fee-bold">Assist For</p>
                                </div>
                                <div class="col-md-9 m-b-30"><select required class="form-control required fill" name="status">
                                        <option value="">Select</option>
                                        <option value="General">General</option>
                                        <option value="Requirement">Requirement</option>
                                        <option value="Review">Review</option>
                                        <option value="Invite">Bugs</option>
                                    </select></div>
                                <div class="col-md-3">
                                    <p class="fee-bold">Note</p>
                                </div>
                                <div class="col-md-9"><textarea rows="3" class="form-control" placeholder="Any Text Here" name="note" required=""></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center center-block">
                        <button class="btn btn-new waves-effect waves-light" name="add-message" type="button">Sumbit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</div>
<?php include("footer.php"); ?>