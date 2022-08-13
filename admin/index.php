

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
                    <?php include 'layouts/navbar.php'?>
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
<script>
    $(document).ready(function() {
        document.querySelector('.Home').classList.add('active');
        document.querySelector('#Home').classList.add('active');
    })
</script>
</body>

</html>