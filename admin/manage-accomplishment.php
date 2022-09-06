<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php';
session_start();

if(!$_SESSION["loggedin"])
{
    header("Location: ../index.php");
       
}
elseif ($_SESSION["role"] !== "BAR1-OPCR Admin" &&  $_SESSION["role"] !== "SUPER Admin") {
    header("Location: ../admin/index.php");
}
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
                    <?php include 'layouts/navbar.php'?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><i class="fa fa-building"></i> Accomplishment Lists</h2>
                        </div>
                        <input id="myInput" type="text" placeholder="Search..">
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Number</th>
                                        <th>File Name</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete -->
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
                                                    <input type="hidden" class="filename" name="filename">
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
                                

    <?php include 'includes/footer.php'?>
    <!-- datapicker JS
		============================================ -->
    <script src="../jquery.min.js"></script>
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
    <script src="js/accomplishment.js"></script>
    <script src="js/search.js"></script>
    <script>
    $(document).ready(function() {
        document.querySelector('.accomplishment').classList.add('active');
        document.querySelector('#accomplishment').classList.add('active');
    })
    </script>
</body>

</html>