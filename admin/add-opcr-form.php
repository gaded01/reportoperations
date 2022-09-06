<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php'


?>
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
<body>
    <?php
    include_once('../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
    session_start();

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
                    <?php include 'layouts/navbar.php'?>
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
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Add OPCR</h2>
                        </div>  
                        <form id="addForm" action="file_uploads/add.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="role_id" value="opcr">
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">File Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="filename" class="form-control input-sm" placeholder="File Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">From</label>
                                    </div>
                                    <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="from_date" id="from_select" class="form-control">
                                                <option value="July-December">July - December</option>
                                                <option value="January-June">January - June</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">To</label>
                                    </div>
                                    <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="to_date" id="to_select" class="form-control">
                                                <option value="1st Semester">1st Semester</option>
                                                <option value="2nd Semester">2nd  Semester</option>
                                               
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
                                        <label class="hrzn-fm">Year</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group nk-datapk-ctm form-elet-mg">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Year" name="year">
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
                                        <label class="hrzn-fm">Office</label>
                                    </div>
                                    <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="office_id" id="from_select" class="form-control">
                                            <?php
                                                $sql = 'SELECT * FROM office';
                                                foreach ($db->query($sql) as $row) {
                                            ?>
                                                <option value=" <?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Type</label>
                                    </div>

                                    <div class="col-lg-3 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select name="type_id" id="from_select" class="form-control">
                                            <?php
                                                $sql = 'SELECT * FROM types';
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
                                        <label class="hrzn-fm">Upload File</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="file" class="form-control input-sm fileToUpload" name="file">
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
    <script>
    $(document).ready(function() {
        document.querySelector('.opcr').classList.add('active');
        document.querySelector('#opcr').classList.add('active');
    })
    </script>
</body>

</html>