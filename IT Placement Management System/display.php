<?php
	$database_host = 'db4free.net:3306';
	$database_username ='khaos_x';
	$database_password = 'Jaybo$$007';
	$database_name = 'myonlinedb1';
	
	$con = mysqli_connect($database_host, $database_username, $database_password, $database_name);
	$matric_no = $_POST['matric_no'];
	$str = "SELECT * FROM placement_information WHERE matric_no='$matric_no'";
	$query = mysqli_query($con,$str) or die(mysqli_error($con));
	$cnt = mysqli_num_rows($query);
	if ($cnt==1){
		$row = mysqli_fetch_array($query);
		echo json_encode($row);
	}else{
		echo 0;
	}
	
?>