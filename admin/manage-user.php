<!doctype html>
<html class="no-js" lang="">

<?php include 'includes/header.php';
    include_once('../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
    session_start();

    if(!$_SESSION["loggedin"])
    {
        header("Location: ../index.php");
           
    }
    if ($_SESSION["role"] === "DPCR Admin" || $_SESSION["role"] === "Department Admin") {
        header("Location: ../admin/index.php");
    }

?>
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
                    <?php include 'layouts/navbar.php'?>
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
                        <input id="myInput" type="text" placeholder="Search..">
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Delete -->
<div class="modal fade" id="deletemodal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>Are you sure you want to delete this data?</h5>
                <div class="form-example-wrap mg-t-50">
                    <form id="deleteform">
                    <input type="hidden" class="id" name="id">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

    <div class="modal fade" id="editmodal" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form id="editform">
                                                <div class="modal-body">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>User Information</h2>
                                                    </div>
                                                    <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                            <input type="hidden" class="id" name="id">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">User ID No.</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm id_no" placeholder="ex. user-234-21" name="id_no">
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
                                            <input type="text" class="form-control input-sm firstname" placeholder="First Name" name="firstname">
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
                                            <input type="text" class="form-control input-sm lastname" placeholder="Last Name" name="lastname">
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
                                            <input type="text" class="form-control input-sm middlename" placeholder="Middle Name" name="middlename">
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
                                            <select class="form-control input-sm gender" data-live-search="true" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="hrzn-fm">Campus</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="nk-int-st">
                                                <select class="form-control campus" name="campus_id" id="campus_id">
                                                    <?php
                                                    $sql = 'SELECT * FROM campus';
                                                    foreach ($db->query($sql) as $row) {
                                                    ?>  
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Role</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                            <select class="form-control input-sm role" data-live-search="true" name="role_id">
                                                <option value="BAR1-OPCR Admin">BAR1/OPCR Admin</option>
                                                <option value="DPCR Admin">DPCR Admin</option>
                                                <option value="Department Admin">Department Admin</option>
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
                                        <input type="text" class="form-control input-sm contact" name="contact">
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="hrzn-fm">Email</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm email" name="email">
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
                                            <input type="text" class="form-control input-sm username" name="username">
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
                                            <input type="password" class="form-control input-sm password" name="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>




<?php include 'includes/footer.php'?>
<!-- Data Table JS============================================ -->
<script src="../jquery.min.js"></script>
<script src="../js/data-table/jquery.dataTables.min.js"></script>
<script src="../js/data-table/data-table-act.js"></script>
<script src="js/search.js"></script>

    <script src="js/user.js"></script>
    <script>
    $(document).ready(function() {
        document.querySelector('.user').classList.add('active');
        document.querySelector('#user').classList.add('active');
    })
    </script>
</body>

</html>