<?php
	$con = mysqli_connect('localhost','root','','itm2023') or die('Database not Connected');
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