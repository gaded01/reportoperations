

<!doctype html>
<html class="no-js" lang="">
<?php include 'includes/header.php'?>
<body>
<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!$_SESSION["loggedin"]){
    header("location: ../index.php");
    exit;
}
?>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="../img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    
    
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Department</a>
                        </li>
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <li><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a>
                        </li>
                        <?php
                            if($_SESSION["role"] == "OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                            {
                                echo '<li><a data-toggle="tab" href="#opcr"><i class="fa fa-user-plus"></i> OPCR </a></li>';
                            }
                            if ($_SESSION["role"] == "DPCR Admin" || $_SESSION["role"] == "SUPER Admin"){
                                echo '<li><a data-toggle="tab" href="#dpcr"><i class="fa fa-user-plus"></i> DPCR </a></li>';
                            }
                            if($_SESSION["role"] == "BAR1 Admin" || $_SESSION["role"] == "SUPER Admin"){
                                echo '<li><a data-toggle="tab" href="#bar1"><i class="fa fa-user-plus"></i> BAR1 </a></li>';
                            }
                        ?>
                        <li><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Settings</a>
                        </li>
                        <li><a data-toggle="tab" href="#account"><i class="fa fa-user-secret"></i> Account</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.php">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="department" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-department.php">Add Department</a>
                                </li>
                                <li><a href="manage-department.php">Manage Department</a>
                                </li>
                            </ul>
                        </div>
                        <div id="event" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-event.php">Add Event</a>
                                </li>
                                <li><a href="manage-event.php">Manage Event</a>
                                </li>
                            </ul>
                        </div>
                        <div id="campus" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-campus.php">Add Campus</a>
                                </li>
                                <li><a href="manage-campus.php">Manage Campus</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div id="user" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-user.php">Add User</a>
                                </li>
                                <li><a href="manage-user.php">Manage User</a>
                                </li>
                            </ul>
                        </div>
                        <div id="opcr" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-opcr-form.php">Add Form</a>
                                </li>
                                <li><a href="manage-opcr-form.php">Manage Forms</a>
                                </li>
                            </ul>
                        </div>
                        <div id="dpcr" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-dpcr-form.php">Add Form</a>
                                </li>
                                <li><a href="manage-dpcr-form.php">Manage Forms</a>
                                </li>
                            </ul>
                        </div>
                        <div id="bar1" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-bar1-form.php">Add Form</a>
                                </li>
                                <li><a href="manage-bar1-form.php">Manage Forms</a>
                                </li>
                            </ul>
                        </div>
                        <div id="report" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <li><a href="add-types.php">Add Types</a>
                                </li>
                                <li><a href="manage-types.php">Manage Types</a>
                                </li>
                            </ul>
                        </div>
                        <div id="account" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                                <li><a href="profile.php">Profile</a>
                                </li>
                                <li><a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">10</span></h2>
                            <p>Number of Departments</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-building fa-4x text-success"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">5</span></h2>
                            <p>Number of Campuses</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-users fa-4x text-info"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1</span></h2>
                            <p>Number of Users</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-user fa-4x text-warning"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">25</span></h2>
                            <p>Number of Events</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-calendar fa-4x text-danger"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<?php include 'includes/footer.php'?>
</body>

</html>