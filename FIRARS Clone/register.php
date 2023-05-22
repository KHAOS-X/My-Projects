<?php 

session_start();

include 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    <title>Student Registration</title>
    <script src="register.js" async></script>

</head>

<body>
    <div class="parent_container">
        <div class="logo_container">
            <img src="./asset/F__1_-removebg-preview.png" alt="logo" class="logo" />
        </div>

        <h1 class="heading_1">Student Registration</h1>

        <div class="page_container">
          <?php 
          if (isset($_SESSION['status']) && $_SESSION['status'] === 'error') : 
            $errors = $_SESSION['errors'];       
          ?>
          <ul class="errors">
            <?php
             foreach($errors as $e) :
              ?>
              <li><?= $e ?></li>
            <?php
             endforeach; 
             ?>  
          </ul>
          <?php
        endif;
        ?>
        <?php
         if (isset($_SESSION['status']) && $_SESSION['status'] === 'success') : 
            $data = $_SESSION['data'];       
          ?>
          <div class="success">
            <p>Registration Completed Successfully</p>
            <p>Here are your details as inputted</p>
            <ul>
              <li>Name: <em><?= esc_str($data['f_name']) ?> <?= esc_str($data['m_name']) ?> <?= esc_str($data['l_name']) ?></em></li>
              <li>Date of Birth: <em><?= esc_str($data['d_o_b']) ?></em></li>
              <li>Registration Number: <em><?= esc_str($data['r_number']) ?></em></li>
              <li>Gender: <em><?= esc_str($data['gender']) ?></em></li>
              <li>School Admitted into: <em><?= esc_str($data['school_admitted']) ?></em></li>
              <li> <em></em></li>
            </ul>
          </div>
        <?php
         endif; 
        ?>
            <header>
                <button class="nav_button" onclick="showForm(0, '#f6f6c9')">
                    Biodata
                </button>
                <button class="nav_button" onclick="showForm(1, '#f6f6c9')">
                    Travelling Passport (Optional)
                </button>
                <button class="nav_button" onclick="showForm(2, '#f6f6c9')">
                    Counselling
                </button>
                <button class="nav_button" onclick="showForm(3, '#f6f6c9')">
                    Academics
                </button>
                <button class="nav_button" onclick="showForm(4, '#f6f6c9')">
                    Uploads
                </button>
                <button class="nav_button" onclick="showForm(5, '#f6f6c9')">
                    Finalize
                </button>
            </header>
            <div class="form_container">
                <form action="form_handler.php" method="post" class="biodata_info" enctype="multipart/form-data">
                    <div class="form_panel">
                        <!-- BIO-DATA INFORMATION FORM -->

                        <!-- FIRST SECTION -->
                        <h1>Bio-Data</h1>
                        <br />
                        <div class="form_group">
                            <label for="title">Title</label>
                            <select name="title" id="title">
                                <option value="" disabled selected> --Select a title--</option>
                                <option value="mr">Mr</option>
                                <option value="mrs">Mrs</option>
                                <option value="miss">Miss</option>
                            </select>

                            <label for="f_name">First Name</label>
                            <input type="text" name="f_name" id="f_name" />
                        </div>
                        <br />

                        <div class="form_group">
                            <label for="l_name">Last Name</label>
                            <input type="text" name="l_name" id="l_name" />

                            <label for="m_name">Middle Name</label>
                            <input type="text" name="m_name" id="m_name" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="d_o_b">Date of Birth</label>
                            <input type="date" name="d_o_b" id="d_o_b" />
                            <label for="r_number" class="long_label">Registration Number/Matric Number</label>
                            <input type="text" name="r_number" id="r_number" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="" disabled selected></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="p_number">Phone Number</label>
                            <input type="text" name="p_number" id="p_number" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="email"> Email Address</label>
                            <input type="text" name="email" id="email" />
                            <label for="place_o_birth">Place of Birth</label>
                            <input type="text" name="place_o_birth" id="place_o_birth" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="mode_o_entry">Mode of Entry</label>
                            <select name="mode_o_entry" id="mode_o_entry">
                                <option value="" disabled selected>--Select a Mode of Entry--</option>
                                <option value="JAMB">JAMB</option>
                                <option value="Direct Entry">Direct Entry</option>
                            </select>
                            <label for="marital">Marital Status</label>
                            <select name="marital" id="marital">
                                <option value="" disabled selected>--Select an option--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Complicated">It's Complicated</option>
                            </select>
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="religion">Religion</label>
                            <select name="religion" id="religion">
                                <option value="" disabled selected>--Select a Religion--</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Islam">Islam</option>
                                <option value="Others">Others</option>
                            </select>
                            <label for="nationality">Nationality</label>
                            <select name="nationality" id="nationality">
                                <option value="" disabled selected>--Select a Nationality--</option>
                                <option value="nigerian">Nigerian</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="state_o_origin">State of Origin</label>
                            <select name="state_o_origin" id="state_o_origin">
                                <option value="" disabled selected>--Select a State--</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwa_ibom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross_river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                                <option value="fct">F.C.T</option>
                            </select>
                            <label for="home_town">Home Town</label>
                            <input type="text" name="home_town" id="home_town" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="local_government_area" class="long_label">Local Government Area</label>
                            <input type="text" name="local_government_area" id="local_government_area" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="home_address">Home Address</label>
                            <input type="text" name="home_address" id="home_address" class="address" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="postal_address">Postal Address</label>
                            <input type="text" name="postal_address" id="postal_address" class="address" />
                        </div>
                        <br />
                        <!-- NEW SECTION -->
                        <h2>Admission Information</h2>
                        <br />
                        <div class="form_group">
                            <label for="school_admitted" class="long_label">School Admitted into</label>
                            <select name="school_admitted" id="school_admitted" class="school"
                                onchange="chooseDepartment()">
                                <option value="" disabled selected>Choose Your School</option>
                                <option value="saat">
                                    School Agriculture and Agricultural Technology
                                </option>
                                <option value="sbms">School of Basic Medical Sciences</option>
                                <option value="sbcs">
                                    School of Basic Clinical Sciences
                                </option>
                                <option value="scs">School of Clinical Sciences</option>
                                <option value="seet">
                                    School of Engineering and Engineering Technology
                                </option>
                                <option value="sems">
                                    School of Earth and Mineral Sciences
                                </option>
                                <option value="set">
                                    School of Environmental Technology
                                </option>
                                <option value="slit">
                                    School of Logistics and Innovation Technology
                                </option>
                                <option value="sls">School of Life Sciences</option>
                                <option value="soc">School of Computing</option>
                                <option value="sps">School of Physical Sciences</option>
                            </select>
                            <label for="department">Department</label>
                            <select name="department" id="department" class="department">
                                <option value="null" disabled selected>
                                    Choose Your Department
                                </option>
                            </select>
                        </div>
                        <br />
                        <!-- NEW SECTION -->
                        <h2>Previous Educational History</h2>
                        <br />
                        <div class="form_group">
                            <label for="previous_history" class="long_label">Have You Matriculated Before?</label>
                            <select name="previous_history" id="previous_history">
                                <option value="" disabled selected></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <label for="if_yes">If Yes, where?</label>
                            <input type="text" name="if_yes" id="if_yes" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="matric_no">Matriculation Number</label>
                            <input type="text" name="matric_no" id="matric_no" />
                            <label for="reason">Reason For Leaving</label>
                            <input type="text" name="reason" id="reason" class="address" />
                        </div>
                        <br />
                        <!-- NEW SECTION -->
                        <h2>Next of Kin Information</h2>
                        <br />
                        <div class="form_group">
                            <label for="next_of_kin">Next of Kin</label>
                            <input type="text" name="next_of_kin" id="next_of_kin" />
                            <label for="n_o_k_address">Address</label>
                            <input type="text" name="n_o_k_address" id="n_o_k_address" />
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="n_o_k_p_number">Phone Number</label>
                            <input type="number" name="n_o_k_p_number" id="n_o_k_p_number" />
                            <label for="n_o_k_relationship">Relationship</label>
                            <input type="text" name="n_o_k_relationship" id="n_o_k_relationship" />
                        </div>
                        <br />
                        <!-- NEW SECTION -->
                        <h2>Parent/Guardian Information</h2>
                        <br />
                        <div class="form_group">
                            <label for="father_name">Father's Name</label>
                            <input type="text" name="father_name" id="father_name" />
                            <label for="father_address">Address</label>
                            <input type="text" name="father_address" id="father_address">
                        </div>
                        <br />
                        <div class="form_group">
                            <label for="father_number">Phone Number</label>
                            <input type="text" name="father_number" id="father_number" />
                            <label for="father_occupation">Occupation</label>
                            <input type="text" name="father_occupation" id="father_occupation" />
                        </div>
                        <br />

                        <div class="form_group">
                            <label for="mother_name">Mother's Name</label>
                            <input type="text" name="mother_name" id="mother_name" />
                            <label for="mother_address">Address</label>
                            <input type="text" name="mother_address" id="mother_address" />
                        </div>
                        <br />

                        <div class="form_group">
                            <label for="mother_number">Phone Number</label>
                            <input type="text" name="mother_number" id="mother_number" />
                            <label for="mother_occupation">Occupation</label>
                            <input type="text" name="mother_occupation" id="mother_occupation" />
                        </div>
                        <br />

                        <div class="form_group">
                            <label for="guardian_name">Guardian's Name</label>
                            <input type="text" name="guardian_name" id="mother_name" />
                            <label for="guardian_address">Address</label>
                            <input type="text" name="guardian_address" id="guardian_address" />
                        </div>
                        <br />

                        <div class="form_group">
                            <label for="guardian_number">Phone Number</label>
                            <input type="text" name="guardian_number" id="guardian_number" />
                            <label for="mother_occupation">Occupation</label>
                            <input type="text" name="guardian_occupation" id="guardian_occupation" />
                        </div>
                        <br />

                        <button class="next" onclick="showForm(1, '#f6f6c9')" type="button">NEXT</button>


                    </div>
                    <div class="form_panel">
                        <!-- INTERNATIONAL STUDENT'S IFORMATION FORM -->
                        <div>
                            <h1>International Students' Information</h1>
                            <br />
                            <h2>Passport Information</h2>
                            <br />
                            <div class="form_group">
                                <label for="passport_number" class="long_label">Passport Number</label>
                                <input type="number" name="passport_number" id="passport_number" />
                                <label for="issue_date">Date Issued</label>
                                <input type="date" name="issue_date" id="issue_date" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="issued_where">Where Issued</label>
                                <input type="text" name="issued_where" id="issued_where" />
                                <label for="passport_value">Passport Valued</label>
                                <input type="text" name="passport_value" id="passport_value" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="visa_expiry_date" class="long_label">VISA Residence Permit Valid
                                    Till</label>
                                <input type="date" name="visa_expiry_date" id="visa_expiry_date" />
                            </div>
                            <br />
                            <button class="next" onclick="showForm(2, '#f6f6c9')" type="button">NEXT</button>
                        </div>

                    </div>
                    <div class="form_panel">
                        <!-- COUNSELLING INFORMATION -->
                        <div>
                            <h1>Counselling Information</h1>
                            <br />
                            <h2>Family Information</h2>
                            <br />
                            <div class="form_group">
                                <label for="family_type">Type of Family</label>
                                <select name="family_type" id="family_type">
                                    <option value="" disabled selected></option>
                                    <option value="mono">Monogamous</option>
                                    <option value="poly">Polygamous</option>
                                </select><br />
                                <label for="no_children">Number of Children</label>
                                <input type="number" name="no_children" id="no_children" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="position_in_family">Position in Family</label>
                                <input type="number" name="position_in_family" id="position_in_family" /><br />
                                <label for="parent_condition" class="long_label">Are your Parents Living
                                    Together?</label>
                                <select name="parent_condition" id="parent_condition">
                                    <option value="" disabled selected></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="reason_for_split" class="long_label">If no, Why are they living
                                    seperately?</label>
                                <input type="text" name="reason_for_split" id="reason_for_split" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="sponsor_parent" class="long_label">Who is responsible for your school
                                    fees?</label>
                                <select name="sponsor_parent" id="sponsor_parent">
                                    <option value="" disabled selected></option>
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="guardian">Guardian</option>
                                </select>
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="sponsorship_benefit" class="long_label">State any other sponsorship you
                                    benefit from from</label>
                                <input type="text" name="sponsorship_benefit" id="sponsorship_benefit" />
                            </div>
                            <br />

                            <h2>Services or Social Activities</h2>
                            <br />
                            <div class="form_group">
                                <label for="club_name">Club</label>
                                <input type="text" name="club_name" id="club_name" placeholder="Name of Club" />
                                <label for="post_club">Post Held</label>
                                <input type="text" name="post_club" id="post_club" placeholder="Post held in club" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="club_remark">Remark</label>
                                <input type="text" name="club_remark" id="club_remark"
                                    placeholder="Club remarks on achievements" />
                                <label for="organization_name">Organization</label>
                                <input type="text" name="organization_name" id="organization_name"
                                    placeholder="Name of Organization" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="post_organization">Post Held</label>
                                <input type="text" name="post_organization" id="post_organization"
                                    placeholder="Post held in Organization" />
                                <label for="organization_remark">Remark</label>
                                <input type="text" name="organization_remark" id="organization_remark"
                                    placeholder="Organization remark  on achievements" />
                            </div>
                            <br />

                            <h2>Sport/Athletic Information</h2>
                            <br />
                            <div class="form_group">
                                <label for="fav_sport_name">Favorite sport</label>
                                <input type="text" name="fav_sport_name" id="fav_sport_name"
                                    placeholder="Your favorite sport" />
                                <label for="achievements_main_sport">Achievement</label>
                                <input type="text" name="achievements_main_sport" id="achievements_main_sport"
                                    placeholder="Team, Trophies or medals and so on" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="other_sport">Any other sport</label>
                                <input type="text" name="other_sport" id="other_sport"
                                    placeholder="What other sports do you play" />
                                <label for="achievement_other_sport">Achievement</label>
                                <input type="text" name="achievement_other_sport" id="achievement_other_sport" />
                            </div>
                            <br />

                            <h2>Medical Information</h2>
                            <br />
                            <div class="form_group" met>
                                <label for="medical_condition" class="long_label">Any Special or Continuous Medical
                                    treatment being
                                    recieved?</label>
                                <select name="medical_condition" id="medical_condition">
                                    <option value="" disabled selected></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <label for="treament_description" class="long_label">Description of the Treatment (if
                                    Yes)</label>
                                <input type="text" name="treatment_description" id="treatment_description"
                                    placeholder="what is/are your prescription" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="medical_area">Where? (if Yes)</label>
                                <input type="text" name="medical_area" id="medical_area"
                                    placeholder="Where is/are your prescription from?" />
                            </div>
                            <br />
                            <h2>Life Ambition</h2>
                            <br />
                            <div class="form_group">
                                <label for="ambitions" class="long_label">What is/are your ambition(s) or
                                    goal(s)?</label><br />
                                <textarea name="ambition" id="ambition"></textarea>
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="efforts" class="long_label">What personal effort(s) are you making to
                                    achieve your
                                    ambition(s) and goal(s)?</label><br />
                                <textarea name="efforts" id="efforts"></textarea>
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="private_info" class="long_label">What other personal information about
                                    yourself do you think
                                    is relevant to the Counselling Unit?</label><br />
                                <textarea name="private_info" id="private_info"></textarea>
                            </div>
                            <br />

                            <button class="next" onclick="showForm(3, '#f6f6c9')" type="button">NEXT</button>
                        </div>

                    </div>
                    <div class="form_panel">
                        <!-- ACADEMIC INFORMATION FORM -->
                        <div>
                            <h1>Academic Information</h1>
                            <br />
                            <h2>Primary School information</h2>
                            <br />
                            <table>
                                <tr>
                                    <th>Primary School(s) Attended</th>
                                    <th>From(Year)</th>
                                    <th>To(Year)</th>
                                    <th>Qualification Expected</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="First School"
                                            name="first_primary_school" />
                                    </td>
                                    <td>
                                        <select name="first_admission_year_pri" id="first_admission_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_graduation_year_pri" id="first_graduation_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_pri_1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Second School"
                                            name="second_primary_school" />
                                    </td>
                                    <td>
                                        <select name="second_admission_year_pri" id="second_admission_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_graduation_year_pri" id="second_graduation_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_pri_2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Third School"
                                            name="third_primary_school" />
                                    </td>
                                    <td>
                                        <select name="third_admission_year_pri" id="third_admission_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="third_graduation_year_pri" id="third_graduation_year_pri"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_pri_3" />
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <h2>Secondary School Information</h2>
                            <br />
                            <table>
                                <tr>
                                    <th>Secondary School(s) Attended</th>
                                    <th>From(Year)</th>
                                    <th>To(Year)</th>
                                    <th>Qualification Expected</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="First School"
                                            name="first_secondary_school" />
                                    </td>
                                    <td>
                                        <select name="first_admission_year_sec" id="first_admission_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_graduation_year_sec" id="first_graduation_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_sec_1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Second School"
                                            name="second_secondary_school" />
                                    </td>
                                    <td>
                                        <select name="second_admission_year_sec" id="second_admission_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_graduation_year_sec" id="second_graduation_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_sec_2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Third School"
                                            name="third_secondary_school" />
                                    </td>
                                    <td>
                                        <select name="third_admission_year_sec" id="third_admission_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="third_graduation_year_sec" id="third_graduation_year_sec"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_sec_3" />
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <h2>
                                Tertiary(Polytechnic/University) Institution(s) Information
                            </h2>
                            <br />
                            <table>
                                <tr>
                                    <th>Tertiary Institution(s) Attended</th>
                                    <th>From(Year)</th>
                                    <th>To(Year)</th>
                                    <th>Qualification Expected</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="First Institution"
                                            name="first_institution" />
                                    </td>
                                    <td>
                                        <select name="first_admission_year_tet" id="first_admission_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_graduation_year_tet" id="first_graduation_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_tet_1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Second Institution" />
                                    </td>
                                    <td>
                                        <select name="second_admission_year_tet" id="second_admission_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_graduation_year_tet" id="second_graduation_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_tet_2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Third Institution"
                                            name="third_institution" />
                                    </td>
                                    <td>
                                        <select name="third_admission_year_tet" id="third_admission_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="third_graduation_year_tet" id="third_graduation_year_tet"
                                            class="select_table">
                                            <option value="" disabled selected></option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="input_table" placeholder="Qualifications Awarded"
                                            name="qualifications_tet_3" />
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <h2>Result Selection with Dates</h2>
                            <h4>(Complete the rows and column below as appropriate)</h4>
                            <br />
                            <p class="warning">
                                All inputted information will be verified from the relevant
                                examination body(ies). Any falsification will lead to
                                cancellation of your provisional admission and all payments made
                                will be fortified.
                            </p>
                            <br />
                            <table>
                                <tr>
                                    <th class="s_n"></th>
                                    <th></th>
                                    <th>1st Sitting</th>
                                    <th>2nd Sitting</th>
                                </tr>
                                <tr>
                                    <td class="s_n"></td>
                                    <th>Examination Number</th>
                                    <td>
                                        <input type="text" name="exam_number_1st_sitting" id="exam_number_1st_sitting"
                                            class="input_table" />
                                    </td>
                                    <td>
                                        <input type="text" name="exam_number_2nd_sitting" id="exam_number_2nd_sitting"
                                            class="input_table" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n"></td>
                                    <td>Examination Year</td>
                                    <td>
                                        <select name="first_examination_year" id="first_examination_year"
                                            class="select_table_result">
                                            <option value="" disabled selected>YYYY</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_examination_year" id="second_examination_year"
                                            class="select_table_result">
                                            <option value="" disabled selected>YYYY</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n"></td>
                                    <td>Examination Body</td>
                                    <td>
                                        <select name="exam_body_1" id="exam_body_1" class="select_table_result">
                                            <option value="" disabled selected></option>
                                            <option value="waec">WAEC</option>
                                            <option value="waec_gce">WAEC GCE</option>
                                            <option value="neco">NECO</option>
                                            <option value="neco_gce">NECO GCE</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="exam_body_2" id="exam_body_2" class="select_table_result">
                                            <option value="" disabled selected></option>
                                            <option value="waec">WAEC</option>
                                            <option value="waec_gce">WAEC GCE</option>
                                            <option value="neco">NECO</option>
                                            <option value="neco_gce">NECO GCE</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blank_cells"></td>
                                    <td class="blank_cells"></td>
                                    <td class="blank_cells"></td>
                                    <td class="blank_cells"></td>
                                </tr>
                                <tr>
                                    <td class="s_n"></td>
                                    <th>Subjects</th>
                                    <th>Grade</th>
                                    <th>Grade</th>
                                </tr>
                                <tr>
                                    <td class="s_n">1</td>
                                    <td>
                                        <select name="subjects_1" id="subjects_1" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_1" id="first_grade_1" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_1" id="second_grade_1" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">2</td>
                                    <td>
                                        <select name="subjects_2" id="subjects_2" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_2" id="first_grade_2" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_2" id="second_grade_2" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">3</td>
                                    <td>
                                        <select name="subjects_3" id="subjects_3" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_3" id="first_grade_3" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_3" id="second_grade_3" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">4</td>
                                    <td>
                                        <select name="subjects_4" id="subjects_4" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_4" id="first_grade_4" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_4" id="second_grade_4" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">5</td>
                                    <td>
                                        <select name="subjects_5" id="subjects_5" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_5" id="first_grade_5" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="second_grade_5" id="second_grade_5" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">6</td>
                                    <td>
                                        <select name="subjects_6" id="subjects_6" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_6" id="first_grade_6" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_6" id="second_grade_6" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">7</td>
                                    <td>
                                        <select name="subjects_7" id="subjects_7" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_7" id="first_grade_7" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_7" id="second_grade_7" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">8</td>
                                    <td>
                                        <select name="subjects_8" id="subjects_8" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_8" id="first_grade_8" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_8" id="second_grade_8" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="s_n">9</td>
                                    <td>
                                        <select name="subjects_9" id="subjects_9" class="select_table_result">
                                            <option value="" disabled selected>SUB</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="accounting">Financial Accounting</option>
                                            <option value="crs">Christian Religious Studies</option>
                                            <option value="economics">Economics</option>
                                            <option value="geography">Geography</option>
                                            <option value="government">Government</option>
                                            <option value="history">History</option>
                                            <option value="irs">Islamic Studies</option>
                                            <option value="literature">Literature in English</option>
                                            <option value="civic">Civic Education</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="english">English Language</option>
                                            <option value="french">French</option>
                                            <option value="hausa">Hausa</option>
                                            <option value="igbo">Igbo</option>
                                            <option value="yoruba">Yoruba</option>
                                            <option value="f_maths">Further Mathematics</option>
                                            <option value="maths">General Mathematics</option>
                                            <option value="agric_sci">Agricultural Science</option>
                                            <option value="biology">Biology</option>
                                            <option value="chemistry">Chemistry</option>
                                            <option value="pe">Physical Education</option>
                                            <option value="physics">Physics</option>
                                            <option value="he">Health Education</option>
                                            <option value="auto_mech">Auto Mechanics</option>
                                            <option value="building">Building Construction</option>
                                            <option value="metal_work">Metal Work</option>
                                            <option value="t_drawing">Technical Drawing</option>
                                            <option value="woodwork">Woodwork</option>
                                            <option value="b_electricity">Basic Electricity</option>
                                            <option value="b_electronic">Basic Electronics</option>
                                            <option value="clothing">Clothing and Textiles</option>
                                            <option value="food_nut">Food and Nutrition</option>
                                            <option value="home_mgmnt">Home Management</option>
                                            <option value="v_arts">Visual Arts</option>
                                            <option value="husbandry">Animal Husbandry</option>
                                            <option value="computer_sci">Computer Science</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="first_grade_9" id="first_grade_9" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="second_grade_9" id="second_grade_9" class="select_table_result">
                                            <option value="" disableld selected>GRD</option>
                                            <option value="a1">A1</option>
                                            <option value="b2">B2</option>
                                            <option value="b3">B3</option>
                                            <option value="c4">C4</option>
                                            <option value="c5">C5</option>
                                            <option value="c6">C6</option>
                                            <option value="d7">D7</option>
                                            <option value="e8">E8</option>
                                            <option value="f9">F9</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <br />

                        </div>
                        <button class="next" onclick="showForm(4, '#f6f6c9')" type="button">NEXT</button>
                    </div>
                    <div class="form_panel">
                        <!-- FILE UPLOAD FORM -->
                        <div>

                            <h1>Passport and Document Upload</h1>
                            <br />
                            <p class="warning">
                                Passport Photograph File should not be more than 16kb and must
                                have been taken in the last month. Every other document should
                                not be more 50kb and must be in JPEG or .jpg format only. All
                                documents uploaded should be visible and not blurry.<br />
                                Any Falsification will lead to withdrawal of your provisonal
                                admission
                            </p>
                            <br />
                            <br />
                            <div class="form_group">
                                <label for="passport_photo" class="long_label">Recent Passport Photograph</label>
                                <input type="file" name="passport_photo" id="passport_photo" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="birth_certificate">Birth Certificate</label>
                                <input type="file" name="birth_certificate" id="birth_certificate" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="certificate_of_origin">Certificate of Origin</label>
                                <input type="file" name="certificate_of_origin" id="certificate_of_origin"
                                    class="input_file" accept="image/jpg, image/png, image/jpeg, image/gif" />
                                <br />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="court_affidavit">Court Affidavit</label>
                                <input type="file" name="court_affidavit" id="court_affidavit" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="attestation_letter" class="long_label">Letter of Attestation</label>
                                <input type="file" name="attestation_letter" id="attestation_letter" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="admission_letter" class="long_label">Jamb Admission Lettter</label>
                                <input type="file" name="admission_letter" id="admission_letter" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="olevel_result_1" class="long_label">O'Level Result 1</label>
                                <input type="file" name="olevel_result_1" id="olevel_result_1" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />
                            <div class="form_group">
                                <label for="olevel_result_2" class="long_label">O'Level Result 2</label>
                                <input type="file" name="olevel_result_2" id="olevel_result_2" class="input_file"
                                    accept="image/jpg, image/png, image/jpeg, image/gif" />
                            </div>
                            <br />

                            

                        </div>
                        <button class="final_submit next" type="submit">SUBMIT</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php 

unset($_SESSION['status']);
unset($_SESSION['errors']);
// unset($_SESSION['data']);

?>