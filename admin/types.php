<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php'?>
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
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Department</a>
                        </li>
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
                        </li>
                        <li><a data-toggle="tab" href="#user"><i class="fa fa-graduation-cap"></i> Users</a>
                        </li>
                        <li><a data-toggle="tab" href="#ipdo"><i class="fa fa-user-plus"></i> IPDO </a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Reports</a>
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
                        <div id="report" class="tab-pane in active notika-tab-menu-bg animated flipInX">
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
                            <h2>Adding of Types</h2>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Types Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm code" placeholder="ex Engineering" name="types">
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
<script src="../js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["Event 1","Event 2","Event 3","Event 4","Event 5","Event 6","Event 7","Event 8","Event 9","Event 10"],
            datasets: [{
               label: 'Total Present',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [85,90,60,50,75,85,75,50,60,90]
            },{
               label: 'Total Absent',
               backgroundColor: 'rgb(123,233,234)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [15,10,40,50,25,15,25,50,40,10]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: true,
               }
            }
         });

      });
   </script>
</body>

</html>