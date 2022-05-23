<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php';
include_once('../configs/Database.php');

$output = array('error' => false);

$database = new Connection();
$db = $database->open();
session_start();
?>
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
<body>
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
                        <li><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#office"><i class="fa fa-building"></i> Office</a>
                        </li>
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <?php
                            if($_SESSION["role"] == "SUPER Admin")
                            {
                                echo '<li><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a></li>';
                            }
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
                            if($_SESSION["role"] == "Department Admin" || $_SESSION["role"] == "SUPER Admin"){
                                echo '<li><a data-toggle="tab" href="#department"><i class="fa fa-bar-chart"></i> Department</a>';
                            }
                        ?>
                        <li><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Settings</a>
                        </li>
                        <li><a data-toggle="tab" href="#account"><i class="fa fa-user-secret"></i> Account</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.php">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="office" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-office.php">Add Office</a>
                                </li>
                                <li><a href="manage-office.php">Manage Offices</a>
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
                        <div id="campus" class="tab-pane active notika-tab-menu-bg animated flipInX">
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
                        <div id="department" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-department-form.php">Add Form</a>
                                </li>
                                <li><a href="manage-department-form.php">Manage Forms</a>
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

    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <form id="addForm">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Add Campus</h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Campus ID</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm code" placeholder="ex. CMPS 001" name="code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Campus Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm name" placeholder="ex Can-avid" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->
    
    <!-- Edit modal -->
    

   <!-- Edit modal -->
<?php include 'includes/footer.php'?>
    <!-- datapicker JS
		============================================ -->
    <script src="../jquery.min.js"></script>
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
    <script src="js/campus.js"></script>
</body>

</html>