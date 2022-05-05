

<!doctype html>
<html class="no-js" lang="">
<?php include 'includes/header.php'?>
<body>
<?php
include_once('../configs/Database.php');

$output = array('error' => false);

$database = new Connection();
$db = $database->open();

session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!$_SESSION["loggedin"]){
    header("location: ../index.php");
    exit;
}
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
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#office"><i class="fa fa-building"></i> Office</a>
                        </li>
                        <li><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
                        </li>
                        <li><a data-toggle="tab" href="#campus"><i class="fa fa-users"></i> Campus</a>
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
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
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
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php
                                try{
                                    $stmt = $db->prepare("SELECT * FROM office");
                                    $stmt->execute();
                                    $count = $stmt->rowCount();
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                }
                                echo '<h2><span class="counter">'. $count .'</span></h2>';
                                $database->close();
                            ?>
                            
                            <p>Number of Offices</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-building fa-4x text-success"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php
                                try{
                                    $stmt = $db->prepare("SELECT * FROM campus");
                                    $stmt->execute();
                                    $count_campus = $stmt->rowCount();
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                }
                                echo '<h2><span class="counter">'. $count_campus .'</span></h2>';
                                $database->close();
                            ?>
                            <p>Number of Campuses</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-users fa-4x text-info"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <?php
                                try{
                                    $stmt = $db->prepare("SELECT * FROM users");
                                    $stmt->execute();
                                    $count_users = $stmt->rowCount();
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                }
                                echo '<h2><span class="counter">'. $count_users .'</span></h2>';
                                $database->close();
                            ?>
                            <p>Number of Users</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-user fa-4x text-warning"></i></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                        <?php
                                try{
                                    $stmt = $db->prepare("SELECT * FROM events");
                                    $stmt->execute();
                                    $count_users = $stmt->rowCount();
                                }
                                catch(PDOException $e){
                                    $output['error'] = true;
                                    $output['message'] = $e->getMessage();
                                }
                                echo '<h2><span class="counter">'. $count_users .'</span></h2>';
                                $database->close();
                            ?>
                            <p>Number of Events</p>
                        </div>
                        <div style="margin-left:15px"><i class="fa fa-calendar fa-4x text-danger"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <br/>
        <br/>
        <h3>Events</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $count = 0;
                $db = $database->open();
                try{
                    $sql = 'SELECT * FROM events ORDER BY id DESC';
                    foreach ($db->query($sql) as $row) {
                        if($count == 0){
                            echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                        } else{
                            echo '<li data-target="#myCarousel" data-slide-to="1"></li>';
                        }
                        $count++;
                    }
                }
                catch(PDOException $e){
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                $database->close();
            ?>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <?php
            $num = 0;
            $db = $database->open();
                try{	
                    $sql = 'SELECT * FROM events ORDER BY id DESC';
                    foreach ($db->query($sql) as $row) {
                        if($num == 0){ ?>
                        <div class="item active">
                            <img src="assets/events/<?php echo $row['filepath']; ?>" alt="<?php echo $row['name']; ?>" style="width:100%;">
                            <div class="carousel-caption">
                                <h3><?php echo $row['name']; ?></h3>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                        <?php
                        } else{ ?>
                        <div class="item">
                            <img src="assets/events/<?php echo $row['filepath']; ?>" alt="<?php echo $row['name']; ?>" style="width:100%;">
                            <div class="carousel-caption">
                                <h3><?php echo $row['name']; ?></h3>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                        <?php
                        }
                        $num++;
                    }
                }
                catch(PDOException $e){
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                $database->close();
            ?>
            </div>
            
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    </div>
    
    
<?php include 'includes/footer.php'?>
</body>

</html>