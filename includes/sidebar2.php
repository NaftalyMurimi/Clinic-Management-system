<!-- This is mother's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../images/ava2.png" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select Mother_name from register_mum where id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['Mother_name'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboardMUM.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                     
           <li class=""><a href="bookappointment.php"><em class="fa fa-pencil">&nbsp;</em>Book Appointment</a></li>
           <li class=""><a href="viewAPPOINTMENTS.php"><em class="fa fa-calendar">&nbsp;</em>View Appointments</a></li>
           <li class=""><a href="viewVISITS.php"><em class="fa fa-calendar">&nbsp;</em> Scheduled Visits</a></li>
            <li class=""><a href="bedbooking.php"><em class="fa fa-bed">&nbsp;</em> Bed Booking</a></li>
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>