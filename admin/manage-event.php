<!doctype html>
<html class="no-js" lang="">

<?php include 'includes/header.php'?>
<!-- Data Table JS============================================ -->
<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
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
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Department</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <li><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a>
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
                        <div id="event" class="tab-pane active notika-tab-menu-bg animated flipInX">
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
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><i class="fa fa-calendar"></i> Event Lists</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Banner</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Event 1</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                        <td>Dec 09, 2021</td>
                                        <td><img src="../img/widgets/2.png" alt="" width="150" /></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Event 11</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                        <td>Dec 09, 2021</td>
                                        <td><img src="../img/widgets/2.png" alt="" width="150" /></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Event 12</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                        <td>Dec 09, 2021</td>
                                        <td><img src="../img/widgets/2.png" alt="" width="150" /></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Event 4</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                        <td>Dec 13, 2021</td>
                                        <td><img src="../img/widgets/2.png" alt="" width="150" /></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Banner</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'?>
<!-- Data Table JS============================================ -->
<script src="../js/data-table/jquery.dataTables.min.js"></script>
<script src="../js/data-table/data-table-act.js"></script>

</body>

</html>