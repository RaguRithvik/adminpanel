<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu <?php if($page=='home'){echo 'active';} ?>">
                            <a href="home.php" class="waves-effect waves-dark"> <span class="pcoded-micon"><i class="feather icon-home"></i></span> <span class="pcoded-mtext">Dashboard</span> </a>
                        </li>
                        <li class="pcoded-hasmenu <?php if($page=='add-project'){echo 'active pcoded-trigger';} ?>">
                            <a href="javascript:void(0)" class="waves-effect waves-dark"> <span class="pcoded-micon">
                                    <i class="feather icon-box"></i>
                                </span> <span class="pcoded-mtext">Project Details</span> </a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="add-project.php" class="waves-effect waves-dark"> <span class="pcoded-mtext">Add Project's</span> </a>
                                </li>
                            </ul>
                        </li>                     
                        <li class="pcoded-hasmenu <?php if($page=='add-gallery'){echo 'active pcoded-trigger';} ?>">
                            <a href="javascript:void(0)" class="waves-effect waves-dark"> <span class="pcoded-micon">
                                    <i class="feather icon-box"></i>
                                </span> <span class="pcoded-mtext">Gallery Details</span> </a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="add-gallery.php" class="waves-effect waves-dark"> <span class="pcoded-mtext">Add Gallery's</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu <?php if($page=='add-video'){echo 'active pcoded-trigger';} ?>">
                            <a href="javascript:void(0)" class="waves-effect waves-dark"> <span class="pcoded-micon">
                                    <i class="feather icon-box"></i>
                                </span> <span class="pcoded-mtext">Video Details</span> </a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="add-video.php" class="waves-effect waves-dark"> <span class="pcoded-mtext">Add Video's</span> </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">