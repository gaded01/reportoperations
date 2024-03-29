<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php'?>
      <script src="../asset/js/modernizr.js"></script>
      <script src="../asset/js/vue.min.js"></script>
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

    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2><i class="fa fa-user"></i> Face Enrollment</h2>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">ID Numner</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" Value="ID Number">
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Type</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="nk-int-st">
                                        <select class="form-control input-sm" data-live-search="true">
											<option>Student</option>
											<option>Faculty</option>
											<option>Employee</option>
										</select>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Scan Face</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="nk-int-st">
                                        
                                        <div class="col-xs-12 preview-container">
                                            <figure class="box frame" style="width:100px;height:100px"> </figure>
                                            <video id="preview" class="camera" autofocus></video>
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
                                    <button class="btn btn-success notika-btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
    </div>
    <!-- Form Element area End-->
   
<?php include 'includes/footer.php'?>
<script src="../asset/js/instascan.min.js"></script>
<script src="../asset/js/main.js"></script>
</body>

</html>