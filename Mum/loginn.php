<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $name=$_POST['name'];
    $mumid=$_POST['mumid'];
    $query=mysqli_query($con,"select id from register_mum where  Mother_name='$name' && M_no='$mumid' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['detsuid']=$ret['id'];
     header('location:dashboardMUM.php');
    }
    else{
     $msg="Invalid Details.";

    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mother Login</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
</head>
<body>

	<div class="row">
			<h2 align="center">Mother's Login</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Name" name="name" type="text" autofocus="" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Mother ID" name="mumid" type="text" value="" required="true">
							</div>
							<!-- <div class="form-group">
								<select class="form-control" >
									<option>Doctor</option>
									<option>Nurse</option>
									<option>Mum</option>
									<option>Clinic Admin</option>

								</select>
							</div> -->
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">login</button>
							</div>
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
