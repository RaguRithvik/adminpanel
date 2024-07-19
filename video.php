<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sakthi Builders</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style type="text/css">
        .pagination>.active>a{
            height: 36px;
            background-color: #f79646;
            border-color: #f79646;
        }
        .pagination>.active>a:hover{
            cursor: pointer;
            color: #fff;
            background-color: #020ecc;
        }
        .pagination>li>a{
            height: 36px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header header-style-two">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <div class="top-left">
                            <p>Welcome to our <b>Sakthi Builders</b></p>
                        </div>
                        <div class="top-right clearfix">
                            <ul class="social-icon-one">
                                <li><a href="#" class="email-top"><i class="fa fa-envelope"></i> info@sakthibuilder.in</a></li>
                            </ul>
                            <ul class="clearfix">
                                <li class="quote-btn-box"><a href="enquiry.php" class="quote-btn">Quick Enquiry</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">
                        <div class="pull-left logo-outer">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="" title=""></a>
                            </div>
                        </div>
                        <div class="pull-right upper-right clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="turnkey-project.html">Turnkey Project</a></li>
                                                <li><a href="labour-contract.html">Labour Contract</a></li>
                                                <li><a href="consultancy.html">Consultancy</a></li>
                                            </ul>
                                        </li>
                                        <li class="current"><a href="projects.html">Projects</a>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="clients.html">Clients</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="turnkey-project.html">Turnkey Project</a></li>
                                            <li><a href="labour-contract.html">Labour Contract</a></li>
                                            <li><a href="consultancy.html">Consultancy</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="projects.html">Projects</a>
                                    <li class="current"><a href="gallery.html">Gallery</a></li>
                                    <li><a href="clients.html">Clients</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->
        </header>
        <section class="page-title" style="background-image:url(images/background/10.jpg);">
            <div class="auto-container">
                <div class="title-box">
                    <h2>Gallery</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="cases-section cases-page">
            <div class="auto-container">
                <div class="sec-center">
                    <div class="sec-title">
                        <h2>Projects</h2>
                        <div class="separater"></div>
                    </div>
                </div>
                <div class="row clearfix">
                    <?php
                        include("admin/connection.php");
                        $num_rec_per_page=50;
                        if (isset($_GET["page"]))
                            { 
                                $page  = $_GET["page"]; 
                            } 
                        else 
                            {
                                $page=1; 
                            } 
                        $start_from = ($page-1) * $num_rec_per_page; 
                        $sql = "SELECT * FROM video where status ='active' ORDER BY id DESC LIMIT $start_from, $num_rec_per_page";
                        $rs_result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($rs_result) > 0)
                        {
                        while ($row = mysqli_fetch_array($rs_result)) 
                        { ?>
                        <!--Case Block-->
                        <div class="case-block col-sm-6 col-xs-12">
                            <iframe width="100%" height="350" src="<?php echo $row["url"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!--Case Block-->
                        <?php }} ?>
                        <!-- row-close -->
            <div class="col-md-12">
                <ul class="pagination">
                    <br>
                    <?php 
                             $sqls = "SELECT * FROM video where status='active'";   
                             $rs_result = mysqli_query($conn, $sqls); //run the query
                             $rows = mysqli_fetch_array($rs_result);                
                             $total_records = mysqli_num_rows($rs_result);  //count number of records
                             $total_pages = ceil($total_records / $num_rec_per_page); 
                             echo '<li><a href="projects.php?page=1"><i class="fa fa-angle-left"></i> <i class="fa fa-angle-left"></i></a></li>'; // Goto 1st page  
                                for ($i=1; $i<=$total_pages; $i++)
                                    { ?>
                                        <li class="<?php if($page==$i){ echo 'active';} ?>"><a href="projects.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php } ?>
                            <li><a href="projects.php?page=<?php echo $total_pages; ?>"><i class="fa fa-angle-right"></i> <i class="fa fa-angle-right"></i></a></li>
                      
                      
                </ul>
            </div>
                </div>
            </div>
        </section>
        <!--Project Section-->
        <!--End Project Section-->
        <!--Services Section-->
        <!--End Services Section-->
        <!--Call To Action Section-->
        <section class="call-to-action-section cosn">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-md-9 col-sm-12 col-xs-12">
                        <h2>We have been delivering first class Quality buildings for more than 14 years</h2> </div>
                    <!--Btn Column-->
                    <div class="btn-column col-md-3 col-sm-12 col-xs-12"> <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a> </div>
                </div>
            </div>
        </section>
        <!--End Call To Action Section-->
        <!--Main Footer-->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Big Column-->
                        <div class="big-column col-md-12 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="footer-column col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="widget-content">
                                            <h2>Contact Us</h2>
                                            <ul class="contact-info">
                                                <li>
                                                    <div class="icon"><span class="flaticon-placeholder"></span></div><span class="title">Sakthi Builders</span>No: 55 ,3rd street, MM Nagar, Sholinghur, Ranipet Dt Tamil Nadu</li>
                                                <li>
                                                    <div class="icon"><span class="flaticon-phone-call"></span></div>+91 82206 07547</li>
                                                <li>
                                                    <div class="icon"><span class="flaticon-email"></span></div>info@sakthibuilder.in</li>
                                                <li>
                                                    <div class="icon"><span class="fa fa-globe"></span></div>www.sakthibuilder.in</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 0;">
                                    <div class="footer-widget links-widget">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <h2>Main Links</h2>
                                                <ul class="services-list">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="projects.html">Projects</a>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="clients.html">Clients</a></li>
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                        <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <h2>Services</h2>
                                                <ul class="services-list">
                                                    <li><a href="turnkey-project.html">Turnkey Project</a></li>
                                                    <li><a href="labour-contract.html">Labour Contract</a></li>
                                                    <li><a href="consultancy.html">Consultancy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-column col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-widget contact-widget">
                                        <h2>QR Code</h2> <img src="images/qrcode.png"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright"> Copyrights &copy; 2021 Sakthi Builders. All Rights Reserved. Designed by
                                <a href="https://www.vjmtech.com/"><img src="images/vjm.png"></a>
                            </div>
                        </div>
                        <!--Nav Column-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--End pagewrapper-->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/graph.js"></script>
</body>

</html>