<?php
	$con = mysqli_connect('localhost','root','','itm2023') or die('Database not Connected');
	$str = "SELECT * FROM placement_information ORDER BY full_name ASC";
	$query = mysqli_query($con,$str) or die(mysqli_error($con));
	$cnt = mysqli_num_rows($query);
	if ($cnt>0){
		$tbrow="";
		$sn = 0;
		while($row = mysqli_fetch_assoc($query)){
			$sn++;
			$full_name 	= 	$row['full_name'];
			$faculty 	= 	$row['faculty'];
			$department = 	$row['department'];
			$matric_no 	= 	$row['matric_no'];
			$level	=	$row['level'];
            $internship_type	=	$row['internship_type'];
            $internship_duration	=	$row['internship_duration'];
            $start_date	=	$row['start_date'];
            $end_date	=	$row['end_date'];
            $state_of_placement	=	$row['state_of_placement'];
            $company_name	=	$row['company_name'];
            $company_address	=	$row['company_address'];
            $company_type	=	$row['company_type'];
            $supervisor_name	=	$row['supervisor_name'];
            $supervisor_contact	=	$row['supervisor_contact'];
			$tbrow.="
                 <tr>
                    <td colspan='2'><b><center>$sn</center></b></td>
                 </tr>
                 <tr>
                 <td colspan='2'><b><center>Student Information</center></b></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>$full_name</td>
                </tr>
                <tr>
                    <td>Faculty:</td>
                    <td>$faculty</td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>$department</td>
                </tr>
                <tr>
                    <td>Level:</td>
                    <td>$level</td>
                </tr>
                <tr>
                    <td>Matric Number:</td>
                    <td>$matric_no</td>
                </tr>
                <tr>
                <b><center>Internship Placement Information</center>
                </tr>
                <tr>
                    <td>Internship Type:</td>
                    <td>$internship_type</td>
                </tr>
                <tr>
                    <td>Internship Duration: </td>
                    <td>$internship_duration</td>
                </tr>
                <tr>
                    <td>Start Date:</td>
                    <td>$start_date</td>
                </tr>
                <tr>
                    <td>End Date:</td>
                    <td>$end_date</td>
                </tr>
                <tr>
                    <td>State of Placement:</td>
                    <td>$state_of_placement</td>
                </tr>
                <tr>
                    <td>Company Or Organization Name:</td>
                    <td>$company_name</td>
                </tr>
                <tr>
                    <td>Company or Organization Address:</td>
                    <td>$company_address</td>
                </tr>
                <tr>
                    <td>Type of Company or Organization:</td>
                    <td>$company_type</td>
                </tr>
                <tr>
                    <td>Supervisor's Name:</td>
                    <td>$supervisor_name</td>
                </tr>
                <tr>
                    <td>Supervisor's Contact:</td>
                    <td>$supervisor_contact</td>
                </tr>
                <tr>
                </tr>
                    ";			
		}
		echo $tbrow;
	}else{
		echo 0;
	}

    
	
?>
