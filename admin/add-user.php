<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php'?>
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
<body>
<?php
    include_once('../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();

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
                        <li><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Department</a>
                        </li>
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a>
                        </li>
                        <li><a data-toggle="tab" href="#ipdo"><i class="fa fa-user-plus"></i> IPDO </a>
                        </li>
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
                        <div id="user" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-user.php">Add User</a>
                                </li>
                                <li><a href="manage-user.php">Manage User</a>
                                </li>
                            </ul>
                        </div>
                        <div id="ipdo" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-ipdo.php">Add IPDO</a>
                                </li>
                                <li><a href="manage-ipdo.php">Manage IPDO</a>
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
                                <li><a href="#">Account</a>
                                </li>
                                <li><a href="../">Logout</a>
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
                        <form id="addform">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>User Information</h2>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">User ID No.</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="ex. user-234-21" name="id_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">First Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="First Name" name="firstname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Last Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Last Name" name="lastname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Middle Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Middle Name" name="middlename">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Gender</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <select class="form-control input-sm" data-live-search="true" name="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="hrzn-fm">Department</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <select name="department" id="from_select" class="form-control">
                                            <?php
                                                $sql = 'SELECT * FROM department';
                                                foreach ($db->query($sql) as $row) {
                                            ?>
                                                <option value=" <?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                            <?php } ?>
                                            </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Contact</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="contact">
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="hrzn-fm">Email</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="email">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Username</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="password" class="form-control input-sm" name="password">
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
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Form Element area End-->
   
<?php include 'includes/footer.php'?>
    <!-- datapicker JS
		============================================ -->
    <script src="../jquery.min.js"></script>
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
    <script src="js/user.js"></script>
</body>

</html>