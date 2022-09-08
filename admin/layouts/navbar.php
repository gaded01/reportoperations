<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
    <li class="Home"><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
    </li>
    <li class="office"><a data-toggle="tab" href="#office"><i class="fa fa-building"></i> Office</a>
    </li>
    <li class="event"><a data-toggle="tab" href="#event"><i class="fa fa-calendar"></i> Event</a>
    </li>
    <li class="campus"><a data-toggle="tab" href="#campus"><i class="fa fa-building"></i>Campus</a>
    </li>
    <?php
    if ($_SESSION["role"] == "SUPER Admin" || $_SESSION["role"] == "BAR1-OPCR Admin" ) {
        echo '<li class="user"><a data-toggle="tab" href="#user"><i class="fa fa-user"></i> Users</a></li>';
    }
    if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "DPCR Admin" || $_SESSION["role"] == "Department Admin" ||  $_SESSION["role"] == "SUPER Admin") {
        echo '<li class="opcr"><a data-toggle="tab" href="#opcr"><i class="fa fa-file"></i> OPCR </a></li>';
        echo '<li class="bar1"><a data-toggle="tab" href="#bar1"><i class="fa fa-file"></i> BAR1 </a></li>';
    }
    // if ($_SESSION["role"] == "DPCR Admin" || $_SESSION["role"] == "SUPER Admin") {
    //     echo '<li class="dpcr"><a data-toggle="tab" href="#dpcr"><i class="fa fa-user-plus"></i> DPCR </a></li>';
    // }
    // if($_SESSION["role"] == "BAR1 Admin" || $_SESSION["role"] == "SUPER Admin"){
    //     echo '<li class="active"><a data-toggle="tab" href="#bar1"><i class="fa fa-user-plus"></i> BAR1 </a></li>';
    // }
    // if ($_SESSION["role"] == "Department Admin" || $_SESSION["role"] == "SUPER Admin") {
    //     echo '<li><a data-toggle="tab" href="#department"><i class="fa fa-bar-chart"></i> Department</a>';
    // }
    ?>
    <li class="accomplishment"><a data-toggle="tab" href="#accomplishment"><i class="fa fa-folder"></i> Accomplishment </a></li>
    <li class="report"><a data-toggle="tab" href="#report"><i class="fa fa-cog"></i> Settings</a>
    </li>
    <li class="account"><a data-toggle="tab" href="#account"><i class="fa fa-user-secret"></i> Account</a>
    </li>
</ul>
<div class="tab-content custom-menu-content">
    <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="index.php">Dashboard</a>
            </li>
        </ul>
    </div>
    <div id="office" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-office.php">Add Office</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-office.php">Manage Offices</a>'
            ?>
            </li>

        </ul>
    </div>
    <div id="event" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-event.php">Add Event</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-event.php">Manage Events</a>'
            ?>
            </li>
        </ul>
    </div>
    <div id="campus" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-campus.php">Add Campus</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-campus.php">Manage Campus</a>'
            ?>
            </li>
        </ul>
    </div>
    <div id="user" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-user.php">Add User</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-user.php">Manage User</a>'
            ?>
            </li>
        </ul>
    </div>
    <div id="opcr" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-opcr-form.php">Add Form</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
             echo '<li><a href="manage-opcr-form.php">Manage Forms</a>';
            ?>
            </li>
        </ul>
    </div>
    <div id="dpcr" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-dpcr-form.php">Add Form</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-dpcr-form.php">Manage Forms</a>'
            ?>
            </li>
        </ul>
    </div>
    <div id="bar1" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-bar1-form.php">Add Form</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-bar1-form.php">Manage Forms</a>'
            ?>
            </li>
        </ul>
    </div>
    <div id="accomplishment" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <?php
            if ($_SESSION["role"] == "Department Admin" || $_SESSION["role"] == "DPCR Admin")
                echo  '<li><a href="add-accomplishment.php">Add Accomplishment</a>'
            ?>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-accomplishment.php">Manage Accomplishment</a>'
            ?>
            </li>
        </ul>
    </div>
    <!-- <div id="department" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-department-form.php">Add Form</a>
            </li>
            <li><a href="manage-department-form.php">Manage Forms</a>
            </li>
        </ul>
    </div> -->
    <div id="report" class="tab-pane notika-tab-menu-bg animated flipInX">
        <ul class="notika-main-menu-dropdown">
            <li><a href="add-types.php">Add Types</a>
            </li>
            <?php
            if ($_SESSION["role"] == "BAR1-OPCR Admin" || $_SESSION["role"] == "SUPER Admin")
                echo '<li><a href="manage-types.php">Manage Types</a>'
            ?>
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