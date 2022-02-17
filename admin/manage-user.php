<!doctype html>
<html class="no-js" lang="">

<?php include 'includes/header.php'?>
<style>
    .bg-success{
        background-color:rgb(120,187,123);
    }
    .bg-danger{
        background-color:rgb(227,171,154);
    }
</style>
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
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a>
                        </li>
                        <li><a data-toggle="tab" href="#ipdo"><i class="fa fa-user-plus"></i> IPDO </a>
                        </li>
                        <li><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Reports</a>
                        </li>
                        <li><a data-toggle="tab" href="#account"><i class="fa fa-user-secret"></i> Account</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
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
                        <div id="user" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-user.php">Add User</a>
                                </li>
                                <li><a href="manage-user.php">Manage User</a>
                                </li>
                            </ul>
                        </div>
                        <div id="ipdo" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="#">add IPDO</a>
                                </li>
                                <li><a href="#">manage IPDO</a>
                                </li>
                            </ul>
                        </div>
                        <div id="report" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="reports.php">Event Report</a>
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
                            <h2><i class="fa fa-user"></i> User Lists</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Account Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gloria Little</td>
                                        <td>Nursing</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jennifer Chang</td>
                                        <td>Entrepreneurship</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Gavin Joyce</td>
                                        <td>Engineering</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-danger">inactive</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Angelica Ramos</td>
                                        <td>Nursing</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Doris Wilder</td>
                                        <td>Entrepreneurship</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Caesar Vance</td>
                                        <td>Engineering</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Yuri Berry</td>
                                        <td>Engineering</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-danger">inactive</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Jenette Caldwell</td>
                                        <td>Nursing</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Dai Rios</td>
                                        <td>Nursing</td>
                                        <td>09878787876</td>
                                        <td>email@gmail.com</td>
                                        <td><span class="badge bg-success">active</span></td>
                                        <td class="text-right">
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fa fa-trash"></i> delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
<?php include 'includes/footer.php'?>
<!-- Data Table JS============================================ -->
<script src="../js/data-table/jquery.dataTables.min.js"></script>
<script src="../js/data-table/data-table-act.js"></script>

</body>

</html>