<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="home.php"> <img class="img-fluid" src="images/file/main-logo.png" alt="Theme-Logo" /> </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!"> <i class="feather icon-menu icon-toggle-right"></i> </a>
                        <a class="mobile-options waves-effect waves-light"> <i class="feather icon-more-horizontal"></i> </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown"> <img src="images/file/admin.png" class="img-radius" alt="User-Profile-Image"> <span>Admin</span> <i class="feather icon-chevron-down"></i> </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<!--
                                        <li>
                                            <a href="profile.php"> <i class="feather icon-user"></i> Profile </a>
                                        </li>
-->
                                        <?php
                                            include("connection.php");
                                            $query = "SELECT * FROM admin ORDER BY id DESC";
                                            $sql = mysqli_query($conn, $query);
                                            while($row = mysqli_fetch_array($sql))
                                            {
                                              echo '<li>
                                                <a href="user-profile.php?admin='.$row["id"].'"> <i class="feather icon-settings"></i> Settings </a>
                                            </li>';  
                                            }

                                        ?>
                                            <li>
                                                <a href="logout.php"> <i class="feather icon-log-out"></i> Logout </a>
                                            </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>