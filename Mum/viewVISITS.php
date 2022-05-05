<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

  

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mother - Dashboard</title>
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
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<!-- Hold the head -->
		<div class="col-md-12">
			
			<h3 class="text-center"> View Assigned Schedules</h3>
			<h5 class="text-center"> Type your Number below to view your scheduled visit days</h5>
		</div>
		<!-- create a search bar to fetch the visiting days -->
		<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

<?php

$con = new PDO("mysql:host=localhost;dbname=killed",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `assign_schedules` WHERE M_no = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		
		
<?php 
	}
		
		
		else{
			//$msg="Something Went Wrong. Please try again";
			echo "You have not been assigned a scheduled visit plan yet";
		}


}
?>
<div class="col-md-12 bg-success" style="display: flex; flex-direction: row;">
	<div class="card" class="bg-info" style="border: 3px solid white; width: 300px; margin: 20px;">
  	<div class="card-body">
    <h3 class="card-title">First Visit</h3>
    <p><em class="fa fa-calendar"></em> &nbsp <?php echo $row->First_Visit;?></p>
    
  	</div>
  </div>
  <div class="card" class="col-md-3" style="border: 3px solid white; width: 300px; margin: 20px;">
  	<div class="card-body">
    <h3 class="card-title fw-bold ">Second Visit</h3>
    <p><em class="fa fa-calendar"></em> &nbsp <?php echo $row->Second_Visit;?></p>
   
  	</div>
  </div>
  <div class="" class="col-md-3" style="border: 3px solid white; width: 300px; margin: 20px; align-items: center;">
  	<div class="">
    <h3>Third Visit</h3>
   <p><em class="fa fa-calendar"></em> &nbsp <?php echo $row->Third_Visit;?></p>
    
  	</div>
  </div>
  <div class="card" class="col-md-3" style="border: 3px solid white; width: 300px; margin: 20px;">
  	<div class="card-body">
    <h3 class="card-title fw-bold">Fourth Visit</h3>
    <p class="card-text"><em class="fa fa-calendar"></em> &nbsp <?php echo $row->Fourth_Visit;?></p>
    
  	</div>
  </div>
</div>







	</div>
	<!--/.row-->
	<!--/.main-->
	<?php include_once('../includes/footer.php');?>
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
<?php } ?>