<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!$_SESSION["loggedin"]){
    header("location: ../index.php");
    exit;
}
?>

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
                    <?php include 'layouts/navbar.php'?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->


    <div class="modal fade" id="editmodal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Edit Campus</h2>
                <div class="form-example-wrap mg-t-30">
                    <form id="editform">
                    <input type="hidden" class="id" name="id">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-* col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Campus Code:</label>
                                    </div>
                                    <div class="col-lg-* col-md-7 col-sm-7 col-xs-12">
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
                                    <div class="col-lg-* col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Campus Name:</label>
                                    </div>
                                    <div class="col-lg-* col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm name" placeholder="ex Can-avid" name="name">
                                        </div>
                                    </div>
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

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><i class="fa fa-building"></i> Campus Lists</h2>
                        </div>
                        <input id="myInput" type="text" placeholder="Search..">
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Campus Name</th>
                                        <th>Code</th>
                                        <th>Actions</th>
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




<?php include 'includes/footer.php'?>
<!-- Data Table JS============================================ -->
<script src="../jquery.min.js"></script>
<!-- Data Table JS============================================ -->
<script src="js/campus.js"></script>
<script src="js/search.js"></script>
<script>
    $(document).ready(function() {
        document.querySelector('.campus').classList.add('active');
        document.querySelector('#campus').classList.add('active');
    })
</script>

</body>

</html>