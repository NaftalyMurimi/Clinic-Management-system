
<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

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
		<br><br><br>
		<table>
			<tr>
				<th>Mother_No</th>
				<th>First Visit</th>
				<th>Second Visit</th>
				<th>Third Visit</th>
				<th>Fourth Visit</th>
			</tr>
			<tr>
				<td><?php echo $row->M_no; ?></td>
				<td><?php echo $row->First_Visit;?></td>
				<td><?php echo $row->Second_Visit;?></td>
				<td><?php echo $row->Third_Visit;?></td>
				<td><?php echo $row->Fourth_Visit;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			//$msg="Something Went Wrong. Please try again";
			echo "Name Does not exist";
		}


}
?>
<!-- <div>
	<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
</div> -->
</body>
</html>


