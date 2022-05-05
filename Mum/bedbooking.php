<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
  	$userid=$_SESSION['detsuid'];
    $mumname=$_POST['mumname'];
    $mumno=$_POST['mumno'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $duration=$_POST['duration'];

    $check=mysqli_query($con, "select M_no from bed_booking where M_no='$mumno'");
    $result=mysqli_fetch_array($check);
    if($result>0){
    $msg="You have already booked a bed";
}
else{
    $query=mysqli_query($con, "INSERT INTO `bed_booking`(`id`, `Mother_name`, `M_no`, `Phone_no`, `Date`, `Duration`) VALUES ('null','$mumname','$mumno',' $phone','$date','$duration')");
if($query){
echo "<script>alert('You have successfully booked a bed with Smart Clinic');</script>";
echo "<script>window.location.href='dashboardMUM.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
	  }
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mother</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebar2.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Mother</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Bed Booking</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
							 <form name="Myform" id="Myform" action="" method="post">
       <!-- <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>-->
    <div class="col-md-8">
    <label for="name" class="form-label">Mother's Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="mumname" required>
    </div>
  <div class="col-md-8">
    <label for="regno" class="form-label">Mum's Reg No:</label>
    <input type="text" class="form-control"  name="mumno" required>
  </div>
  <div class="col-md-8">
    <label for="phone" class="form-label">Phone no.</label>
    <input type="number" class="form-control"  name="phone" required>
  </div>

   
   <div class="col-md-8">
    <label for="date" class="form-label">Date:</label>
    <input type="date" class="form-control"  name="date" required>
  </div>
  <div class="col-md-8">
    <label for="duration" class="form-label">Duration.</label>
    <input type="number" class="form-control"  name="duration" required>
  </div>
  
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary" name ="submit">Submit </button>
  </div>
        
    </form>     
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('../includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>