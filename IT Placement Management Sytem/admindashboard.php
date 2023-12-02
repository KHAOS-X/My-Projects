<?php
ob_clean();
session_start();
require_once "adminConfig.php";


if(!isset($_SESSION["admin_name"] ) ){
    header("location: adminsignup.php");
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/pagestyles.css">
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/5e8ee69a86.js" crossorigin="anonymous"></script>
    <title>Dashboard: Administrator</title>
</head>
<body>
    <div class="body_container">
        <div class="mother_container">
            <div class="navbar" id="navbar">
                <ul>
                    <a href="javascript:void(0)" class="closenav" onclick="closeNav()"><li>&times;</li></a>
                    <a href="">
                        <li><i class="fa-solid fa-house"></i> Dashboard</li>
                    </a><a href="">
                        <li><i class="fa-solid fa-book"></i> Progress Reports</li>
                    </a><a href="">
                        <li><i class="fa-solid fa-people-group"></i> Communication Room</li>
                    </a><a href="">
                        <li><i class="fa-solid fa-sliders"></i> Settings</li>
                    </a><a href="logout.php">
                        <li><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</li>
                    </a>
                </ul>
            </div>
            <div class="display_page">
                <button type="button" id="opennav" class="opennav" onclick="openNav()"><i class="fa-solid fa-bars"></i></button>
                <h2>Welcome, <?php echo $_SESSION['admin_name'];?></h2>
                <div class="dashboard">
                    <div class="dashboard_header">
                        <p>Student Information Retriever</p>
                        <button type="button" onclick="fetchrecords()">Retrieve All Records</button>
                        <br>
                        <form action="" class="student_info_checker">
                            <label for="matric_no">Input Student Matric Number:</label>
                            <input type="text" name="matric_no" id="matric_no" class="input">
                            <button type="button" onclick="retrieveRecord()">Retrieve</button>
                            
                        </form>
                    </div>
                    <div class="info_display_container">
                        <table id="student_info_display" class="student_info_display">
                             <tr>
                                <td colspan="2"><b><center>Student Information</center></b></td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" id="full_name"></td>
                            </tr>
                            <tr>
                                <td>Faculty:</td>
                                <td><input type="text" id="faculty"></td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td><input type="text" id="department"></td>
                            </tr>
                            <tr>
                                <td>Level:</td>
                                <td><input type="text" id="level"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><center>Internship Placement Information</center></b></td>
                            </tr>
                            <tr>
                                <td>Internship Type:</td>
                                <td><select name="it_type" id="it_type" class="select">
                                    <option value="summer">Summer</option>
                                    <option value="semester_long">Semester Long</option>
                                    <option value="long_term">Long Term</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Internship Duration: </td>
                                <td><input type="number" id="it_duration"></td>
                            </tr>
                            <tr>
                                <td>Start Date:</td>
                                <td><input type="date" id="start_dates"></td>
                            </tr>
                            <tr>
                                <td>End Date:</td>
                                <td><input type="date" id="end_dates"></td>
                            </tr>
                            <tr>
                                <td>State of Placement:</td>
                                <td><input type="text" id="state_of_placement"></td>
                            </tr>
                            <tr>
                                <td>Company Or Organization Name:</td>
                                <td><input type="text" id="company_name"></td>
                            </tr>
                            <tr>
                                <td>Company or Organization Address:</td>
                                <td><input type="text" id="company_address"></td>
                            </tr>
                            <tr>
                                <td>Type of Company or Organization:</td>
                                <td><input type="text" id="company_type"></td>
                            </tr>
                            <tr>
                                <td>Supervisor's Name:</td>
                                <td><input type="text" id="supervisor_name"></td>
                            </tr>
                            <tr>
                                <td>Supervisor's Contact:</td>
                                <td><input type="text" id="supervisor_contact"></td>
                            </tr>
                        </table>
                        <table class="student_info_display_all" id="student_info_display_all">
                            <tbody id="info_display">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

			function retrieveRecord(){
                $('#student_info_display_all').css("display", "none");
				var matricno = $("#matric_no").val().trim();
				var url = "matric_no="+matricno;
				$.post("display.php",url).done(function(data){
					if (data!=0){
						var row = $.parseJSON(data);						
						$("#full_name").val(row.full_name);
						$("#faculty").val(row.faculty);	
						$("#department").val(row.department);
                        $("#level").val(row.level);
                        $("#it_type").val(row.internship_type);
                        $("#it_duration").val(row.internship_duration);
                        $("#start_date").val(row.start_date);
                        $("#end_date").val(row.end_date);
                        $("#state_of_placement").val(row.state_of_placement);
                        $("#company_name").val(row.company_name);
                        $("#company_address").val(row.company_address);
                        $("#company_type").val(row.company_type);
                        $("#supervisor_name").val(row.supervisor_name);
                        $("#supervisor_contact").val(row.supervisor_contact);
					}else{
						$("#full_name").val('');
						$("#faculty").val('');	
						$("#department").val('');
                        $("#level").val('');
                        $("#it_type").val('');
                        $("#it_duration").val('');
                        $("#start_date").val('');
                        $("#end_date").val('');
                        $("#state_of_placement").val('');
                        $("#company_name").val('');
                        $("#company_address").val('');
                        $("#company_type").val('');
                        $("#supervisor_name").val('');
                        $("#supervisor_contact").val('');
					}
				});				
                $('#student_info_display').css("display", "block");
			};
		

        function fetchrecords(){
            $('#student_info_display').css("display", "none");
			$("#info_display").empty();
			$.get("getrecords.php",function(data){
				if (data!=0){
					$("#info_display").append(data);
				}
			})
            $('#student_info_display_all').css("display", "block");
		};

        function openNav(){
            document.getElementById("navbar").style.width = "55vw";
            document.getElementById("opennav").style.visibility = "hidden";
        };

        function closeNav(){
            document.getElementById("navbar").style.width = "0px";
            document.getElementById("opennav").style.visibility = "visible";
        };
    </script>
</body>
</html>