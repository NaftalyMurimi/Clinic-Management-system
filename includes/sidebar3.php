<!-- This is mother's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            Smart Clinic
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="#"><em class="fa fa-h-square">&nbsp;</em> About Hospital</a></li>
                     
           <li class=""><a href="#"><em class="fa fa-user-md ">&nbsp;</em>Team and Specialities</a></li>
           
           <li class=""><a href="#"><em class="fa fa-building-o">&nbsp;</em> Doctors by department</a></li>
            
            <li class=""><a href="#"><em class="fa fa-location-arrow">&nbsp;</em>Location</a></li>
            <li class=""><a href="#"><em class="fa fa-address-card-o">&nbsp;</em> Hospital Adress</a></li>
 



            
            <li><a href="#"><em class="fa fa-ambulance">&nbsp;</em> Ambulance</a></li>
            <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Sign In</li>

        </ul>
    </div>