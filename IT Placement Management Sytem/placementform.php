<?php
$database_host = 'db4free.net:3306';
$database_username ='khaos_x';
$database_password = 'Jaybo$$007';
$database_name = 'myonlinedb1';

$con = mysqli_connect($database_host, $database_user, $database_password, $database_name) or die('Database not connected');



extract($_POST);
$str = "INSERT INTO placement_information (full_name, faculty, department, matric_no, level, internship_type, internship_duration, start_date, end_date, state_of_placement, company_name, company_address, company_type, supervisor_name, supervisor_contact)
 VALUES ('$full_name', '$faculty', '$department', '$matric_no', '$level', '$it_type', '$it_duration', '$start_date', '$end_date', '$state_of_placement', '$company_name', '$company_address', '$company_type', '$supervisor_name', '$supervisor_contact')";

$query = mysqli_query($con, $str) or die ('Record not inserted sucessfully: '.mysqli_error($con));
echo "Record Inserted Sucessfully";

?>























?>