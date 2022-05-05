<!-- This is Doctor's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../images/nurse2.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class=""><a href="registerMUM.php">&nbsp;</em> Register mum</a></li>
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>Views $ Reports <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="viewPATIENTS.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Patients
                    </a></li>
                    <li><a class="" href="viewAPPOINTMENTS.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Appointments
                    </a></li>
                    <li><a class="" href="viewbookedBEDS.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Bed Bookings
                    </a></li>
                </ul>

            </li>
            
           <li class=""><a href="assignscheduleVISIT.php">&nbsp;</em> Assign Schedule Visits</a></li>
            <li class=""><a href="viewscheduleVISIT.php">&nbsp;</em> View Schedule Visits</a></li>
           <li class=""><a href="#">&nbsp;</em> Delivery dates</a></li>
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>