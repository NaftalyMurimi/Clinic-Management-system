
<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
$sql="SELECT * FROM booking_appointments";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My clinic</title>
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
	<?php include_once('../includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Views & Reports</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">View Booked Appointments</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					
       



<table class="table table-success table-striped table-hover">
<tr>
<th>#</th>
<th>Mother's name</th>
<th>Mother number</th>
<th>Phone number</th>
<th>Age</th>
<th>Reason</th>
<th>Date</th>

<th colspan=2>Action</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res))
{

echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['Mother_name'];
echo "</td><td>";
echo $row['M_no'];
echo "</td><td>";
echo $row['Phone_no'];
echo "</td><td>";
echo $row['Age'];
echo "</td><td>";
echo $row['Reason'];
echo "</td><td>";
echo $row['Date'];
echo "
<td><a href=\"User/delete.php?data=".$row['id']."\">delete</a></td>
<td><a href=\"#\" onclick=\"getPage('User/Edit.php?data=".$row['id']."')\">edit</a></td></tr>";
}
mysqli_close($con);
?>
</table>

</div>

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
