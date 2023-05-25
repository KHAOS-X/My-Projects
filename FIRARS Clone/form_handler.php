<?php 
session_start();

// Local Variable List
    $title ='';
    $f_name ='';
    $l_name ='';
    $m_name ='';
    $d_o_b ='';
    $r_number ='';
    $gender ='';
    $p_number ='';
    $email ='';
    $place_o_birth ='';
    $mode_o_entry ='';
    $marital ='';
    $religion ='';
    $nationality ='';
    $state_o_origin ='';
    $home_town ='';
    $home_address ='';
    $postal_address ='';
    $school_admitted ='';
    $department ='';
    $previous_history ='';
    $if_yes ='';
    $matric_no ='';
    $next_of_kin ='';
    $n_o_k_address ='';
    $n_o_k_p_number ='';
    $n_o_k_relationship ='';
    $father_name ='';
    $father_address ='';
    $father_name ='';
    $father_number ='';
    $father_occupation ='';
    $mother_name ='';
    $mother_address ='';
    $mother_number ='';
    $mother_occupation ='';
    $guardian_name ='';
    $guardian_address ='';
    $guardian_number ='';
    $guardian_occupation ='';
    $passport_number ='';
    $issue_date ='';
    $issued_where ='';
    $visa_expiry_date ='';
    $family_type ='';
    $no_children ='';
    $position_in_family ='';
    $parent_condition ='';
    $reason_for_split ='';
    $sponsor_parent ='';
    $sponsorship_benefit ='';
    $club_name =''; // Non compulsory
    $post_club =''; // Non compulsory 
    $club_remark =''; // Non compulsory
    $organization_name =''; // Non compulsory
    $post_organization =''; // Non compulsory
    $organization_remark =''; // Non compulsory
    $fav_sport_name =''; // Non compulsory
    $achievement_main_sport =''; // Non compulsory
    $other_sport =''; // Non compulsory
    $achievement_other_sport =''; // Non compulsory
    $medical_condition ='';
    $treatment_description ='';
    $medical_area ='';
    $ambitions ='';
    $efforts ='';
    $private_info ='';
    $first_primary_school='';
    $first_admission_year_pri='';
    $first_graduation_year_pri ='';
    $qualification_pri_1 ='';
    $second_primary_school ='';
    $second_admission_year_pri ='';
    $second_graduation_year_pri ='';
    $qualifications_pri_2 ='';
    $third_primary_school ='';
    $third_admission_year_pri ='';
    $third_graduation_year_pri ='';
    $qualifications_pri_3 ='';
    $first_secondary_school ='';
    $first_admission_year_sec ='';
    $first_graduation_year_sec ='';
    $qualifications_sec_1 ='';
    $second_secondary_school ='';
    $second_admission_year_sec ='';
    $second_graduation_year_sec ='';
    $qualifications_sec_2 ='';
    $third_secondary_school ='';
    $third_admission_year_sec ='';
    $third_graduation_year_sec ='';
    $qualifications_sec_3 ='';
    $first_institution ='';
    $first_admission_year_tet ='';
    $first_graduation_year_tet ='';
    $qualifications_tet_1 ='';
    $second_admission_year_tet ='';
    $qualifications_tet_2 ='';
    $third_institution ='';
    $third_admission_year_tet ='';
    $third_graduation_year_tet ='';
    $qualifications_tet_3 ='';
    $exam_number_1st_sitting ='';
    $exam_number_2nd_sitting ='';
    $first_examination_year ='';
    $second_examination_year ='';
    $exam_body_1 ='';
    $exam_body_2 ='';
    $subjects_1 ='';
    $first_grade_1 ='';
    $second_grade_1 ='';
    $subjects_2 ='';
    $first_grade_2 ='';
    $second_grade_2 ='';
    $subjects_3 ='';
    $first_grade_3 ='';
    $second_grade_3 ='';
    $subjects_4 ='';   
    $first_grade_4 ='';
    $second_grade_4 ='';
    $subjects_5 ='';   
    $first_grade_5 ='';
    $second_grade_5 ='';
    $subjects_6 ='';
    $first_grade_6 ='';
    $second_grade_6 ='';
    $subjects_7 ='';
    $first_grade_7 ='';
    $second_grade_7 ='';
    $subjects_8 ='';
    $first_grade_8 ='';
    $second_grade_8 ='';
    $subjects_9 ='';  
    $first_grade_9 ='';
    $second_grade_9 ='';
    $passport_photo ='';
    $birth_certificate ='';
    $certificate_of_origin ='';
    $court_affidavit ='';
    $attestation_letter ='';
    $admission_letter ='';
    $olevel_result_1 ='';
    $olevel_result_2 ='';

    
    $data = [];

// VALIDATION FOR LOCAL VARIABLES
   // __         __    
   // \ \       / / 
   //  \ \     / /
   //   \ \   / /
   //    \ \_/ /
   //     \___/




$errors = [];
// BIO-DATA

//Title

if(!empty($_POST['title'])){
    $title = $_POST['title'];
    $allowed_titles = ["mr", "mrs", "miss"];
    if(!in_array($title, $allowed_titles)){
        $errors[] = "Title chosen not valid";
    };
}
else{
    $errors[] = "Title can not be blank";
}


// For Names: First Name

if(!empty($_POST['f_name'])){
    $f_name = $_POST['f_name'];
    if(ctype_alpha(str_replace(" ","", $f_name)) === false){
        $errors[] = "Name should contain only alphabets and spaces!";
    }
}
else {
    $errors[] = "First Name field cannot be empty";
}


// Last Name

if(!empty($_POST['l_name'])){
    $l_name = $_POST['l_name'];
    if(ctype_alpha(str_replace(" ","", $l_name)) === false){
        $errors[] = "Name should contain only alphabets and spaces";
    }
}
else {
    $errors[] = "Last Name field cannot be empty";
}



// Middle Name

if(!empty($_POST['m_name'])){
    $m_name = $_POST['m_name'];
    if(ctype_alpha(str_replace(" ","", $m_name)) === false){
        $errors[] = "Name should contain only alphabets and spaces";
    }
}
else {
    $errors[] = "Middle Name field cannot be empty";
}


// Date of Birth
if (empty($_POST['d_o_b'])) {
    $errors[] = "Date of Birth has not been chosen";
}



// Registration Number
if (!empty($_POST['r_number'])) {
    $r_number =$_POST['r_number'];
    if (strlen($r_number) > 10) {
        $errors[] = " Registration Number is not valid";
    }
}
else {
    $errors[] = "Registration Number has not be inputted";
}


//Gender

if (!empty($_POST['gender'])) {
   $gender = $_POST['gender'];
   $allowed_genders = ["Male", "Female"];
   if (!in_array($gender, $allowed_genders)){
    $errors[] = "Please Select a gender from the given options";
   }
}
else{
    $errors[] = "Gender has not been selected";
}



// Phone Number

if (!empty($_POST['p_number'])) {
    $p_number = $_POST['p_number'];
    if (!preg_match('/^[0-9]{11}+$/', $p_number)) {
        $errors[] = "Phone number not valid";
    }

}
else {
    $errors[] = "Please input your phone number";
}





// Email

if (!empty($_POST['email'])) {
    $email =$_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL) !== $email){
        $error[] = "Email is not valid";
    }

}
else{
    $errors[] = "Email cannot be empty";
}


// Place of Birth

if (empty($_POST['place_o_birth'])) {
    $errors[] = "Please fill in your place of birth in the appropriate field";
}


//Mode of Entry

if (!empty($_POST['mode_o_entry'])) {
    $mode_o_entry = $_POST['mode_o_entry'];
    $allowed_entries = ["JAMB", "Direct Entry"];
    if (!in_array($mode_o_entry, $allowed_entries)) {
        $errors[] = "Please select a mode of entry from the available options";
    }
}
else{
    $errors[] = "Mode of Entry has not been selected";
}


// Marital Status
if (!empty($_POST['marital'])) {
    $marital_status = $_POST['marital'];
    $allowed_statuses = ["Single", "Married", "Widowed", "Divorced", "Complicated"];
    if (!in_array($marital_status, $allowed_statuses)) {
        $errors[] = "Please select a marital status from the available options";
    }
}
else{
    $errors[]= "Marital Status has not been selected";
}


// Religion
if (!empty($_POST['religion'])) {
    $religion = $_POST['religion'];
    $allowed_religions = ["Christianity", "Islam", "Others"];
    if (!in_array($religion, $allowed_religions)) {
        $errors[] = "Select a religion from the given options";
    }
}
else{
    $errors[] = "Religion field cannot be left empty";
}


// Nationality

if (!empty($_POST['nationality'])) {
    $nationality = $_POST['nationality'];
    $allowed_nationalities = ["nigerian", "others"];
    if (!in_array($nationality, $allowed_nationalities)) {
        $errors[] = "Select your Nationality";
    }
}



// State of Origin

if (!empty($_POST['state_o_origin'])) {
    $state_o_origin = $_POST['state_o_origin'];
    $allowed_states = ["abia", "adamawa", "akwa_ibom", "anambra", "bauchi", "bayelsa", "benue", "borno", "cross_river", "delta", "ebonyi", "edo", "ekiti", "enugu", "gombe", "imo", "jigawa", "kaduna", "kano", "katsina", "kebbi", "kwara", "lagos", "nasarawa", "niger", "ogun", "ondo", "osun", "oyo", "plateau", "rivers", "sokoto", "taraba", "yobe", "zamfara", "fct"];
    if (!in_array($state_o_origin, $allowed_states)) {
        $errors[] = "Please select a state from the given option";
    }
}
else{
    $errors[] = " State of Origin field has not been selected";
}


// Home Town
if (empty($_POST['home_town'])) {
    $errors[] = "Home town has not been inputted";
}


// Home Address
if (empty($_POST['home_address'])) {
    $errors[] = "Please input your home address";
}


// Postal Address
if (empty($_POST['postal_address'])) {
    $errors[] = "Please input your postal address";
}


// School Admiited Into
if (!empty($_POST['school_admitted'])) {
    $school_admitted = $_POST['school_admitted'];
    $allowed_option_school = ["SEET", "SAAT", "SET", "SEMS", "SOC", "SBMS", "SCS", "SBCS", "SLIT", "SLS", "SPS"];
    if (!in_array($school_admitted, $allowed_option_school)) {
        $errors[] = "Please select the school you were admitted into";
    }
}
else{
    $errors[] = "School has not been chosen";
}


// // Department
// if (!empty($_POST['department'])) {
//     $department = $_POST['department'];
//     $disallowed_option_department = ["", " "];
//     if (in_array($department, $disallowed_option_department)) {
//         $errors[] = "Please select your department";
//     }
// }
// else{
//     $errors[] = "Department has not been selected";
// }


// Previous History
if (!empty($_POST['previous_history'])) {
    $previous_history = $_POST['previous_history'];
    $allowed_options_history = ["yes", "no"];
    $if_where = $_POST['if_yes'];
    $previous_matric_no = $_POST['matric_no'];
    if (!in_array($previous_history, $allowed_options_history)) {
        $errors[] = "Do you have a previous educational history";
    }
    if ($previous_history === "yes" ) {
         if (empty($if_where)) {
             $errors[] = "Where did you school previously?";
         }
         if (empty($previous_matric_no)) {
             $errors[] = "What was your previous matriculation number?";
         }
    }

}
else{
    $errors[] = "Do you have a previous educational history";
}


// Next of Kin
if (!empty($_POST['next_of_kin'])) {
    $next_of_kin = $_POST['next_of_kin'];
    $n_o_k_address = $_POST['n_o_k_address'];
    $n_o_k_p_number = $_POST['n_o_k_p_number'];
    $n_o_k_relationship = $_POST['n_o_k_relationship'];
    if (empty($n_o_k_address)) {
        $errors[] = "Next of Kin address cannot be left empty";
    }
    if (empty($n_o_k_p_number)) {
        $errors[] = "Next of Kin phone number cannot be left empty";
    }
    if (empty($n_o_k_relationship)) {
        $errors[] = "Next of Kin relationship has not been identified";
    }
}
else{
    $errors[] = "Next of Kin field cannot be empty";
}

// Parent Information Validation
// Father
if (!empty($_POST['father_name'])) {
    $father_name = $_POST['father_name'];
    $father_number = $_POST['father_number'];
    $father_address = $_POST['father_address'];
    $father_occupation =$_POST['father_occupation'];
    if (empty($father_number)) {
        $errors[] = "Father's contact information is required";
    }
    if (empty($father_address)) {
        $errors[] = "Father's Address information is required";
    }
    if (empty($father_occupation)) {
        $errors[] = "Father's Occupation information is required";
    }
}
else{
    $errors[] = "Father's Name field has not been filled";
}

if (!empty($_POST['father_number'])) {
    $father_number = $_POST['father_number'];
    if (!preg_match('/^[0-9]{11}+$/', $father_number)) {
        $errors[] = "Father's contact information appears to be invalid";
    }

}


// Mother
if (!empty($_POST['mother_name'])) {
    $mother_name = $_POST['mother_name'];
    $mother_number = $_POST['mother_number'];
    $mother_address = $_POST['mother_address'];
    $mother_occupation =$_POST['mother_occupation'];
    if (empty($mother_number)) {
        $errors[] = "Mother's contact information is required";
    }
    if (empty($mother_address)) {
        $errors[] = "Mother's Address information is required";
    }
    if (empty($mother_occupation)) {
        $errors[] = "Mother's Occupation information is required";
    }
}
else{
    $errors[] = "Mother's Name field has not been filled";
}

if (!empty($_POST['mother_number'])) {
    $mother_number = $_POST['mother_number'];
    if (!preg_match('/^[0-9]{11}+$/', $mother_number)) {
        $errors[] = "Mother's contact information appears to be invalid";
    }

}
// Guardian
if (!empty($_POST['guardian_name'])) {
    $guardian_name = $_POST['guardian_name'];
    $guardian_number = $_POST['guardian_number'];
    $guardian_address = $_POST['guardian_address'];
    $guardian_occupation =$_POST['guardian_occupation'];
    if (empty($guardian_number)) {
        $errors[] = "Guardian's contact information is required";
    }
    if (empty($guardian_address)) {
        $errors[] = "Guardian's Address information is required";
    }
    if (empty($guardian_occupation)) {
        $errors[] = "Guardian's Occupation information is required";
    }
}
else{
    $errors[] = "Guardian's Name field has not been filled";
}

if (!empty($_POST['guardian_number'])) {
    $guardian_number = $_POST['guardian_number'];
    if (!preg_match('/^[0-9]{11}+$/', $guardian_number)) {
        $errors[] = "Guardian's contact information appears to be invalid";
    }

}
 

// TRAVELLING INFORMATION

if (!empty($_POST['passport_number'])) {
    $passport_number = $_POST['passport_number'];
    $issue_date = $_POST['issue_date'];
    $issued_where = $_POST['issued_where'];
    $visa_expiry_date = $_POST['visa_expiry_date'];
    if (empty($issue_date)) {
        $errors[] = "Please select your passport issue date";
    }
    if (empty($issued_where)) {
        $errors[] = "Please input where your VISA was issued";
    }
    if (empty($visa_expiry_date)) {
        $errors[] = "Please input when your VISA would be expiring";
    }
    if (!preg_match('/^[0-9]{8}+$/', $passport_number)) {
        $errors[] = "Passport number appears to be invalid";
    }
}


// FILE UPLOADS

// Passport Photo

if (isset($_FILES['passport_photo'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['passport_photo']['size'] >= $max_size)) {
        $errors[] = " Passport Photograph file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['passport_photo']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(Passport Photograph) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// Birth Certificate

if (isset($_FILES['birth_certificate'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['birth_certificate']['size'] >= $max_size)) {
        $errors[] = " Birth Certificate file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['birth_certificate']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(Birth Certificate) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// Certificate of Origin

if (isset($_FILES['certificate_of_origin'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['certificate_of_origin']['size'] >= $max_size)) {
        $errors[] = " Certificate of Origin file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['certificate_of_origin']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(Certificate of Origin) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// Court Affidavit

if (isset($_FILES['certificate_of_origin'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['certificate_of_origin']['size'] >= $max_size)) {
        $errors[] = " Court Affidavit file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['certificate_of_origin']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(Court Affidavit) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// Letter of Attestation

if (isset($_FILES['attestation_letter'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['attestation_letter']['size'] >= $max_size)) {
        $errors[] = " Letter of Attestation file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['attestation_letter']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(Letter of Attestation) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// JAMB Admission Letter

if (isset($_FILES['admission_letter'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['admission_letter']['size'] >= $max_size)) {
        $errors[] = " JAMB Admission Letter file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['admission_letter']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(JAMB Admission Letter) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}



// O'Level Result 1

if (isset($_FILES['olevel_result_1'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['olevel_result_1']['size'] >= $max_size)) {
        $errors[] = " O'level Result (1) file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['olevel_result_1']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(O'level Result (1)) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
}


// O'Level Result 2

if (isset($_FILES['olevel_result_2'])) {
    $max_size = 50000;
    $acceptable_format = ["application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/png"];

    if (($_FILES['olevel_result_2']['size'] >= $max_size)) {
        $errors[] = " O'Level Result (2) file too large. File must be less than 50kb";
    }
    if (!in_array($_FILES['olevel_result_2']['type'], $acceptable_format)) {
        $errors[] = "Invalid or empty file(O'Level Result (2)) type. Only PDF, JPEG, GIF and PNG are  acceptable";
    }
};

if ($errors) {
    
    $_SESSION['status'] = "error";
    $_SESSION['errors'] = $errors;
    header('Location:register.php?result=validation_error');
    die();
}
else {
    

    $data = [
     "name" =>  $title,  
     "f_name" => $f_name,
     "l_name" => $l_name,
     "m_name" => $m_name,
     "d_o_b" => $d_o_b,
     "r_number" => $r_number,
     "gender" => $gender,
     "p_number" => $p_number,
     "email" => $email,
     "place_o_birth" => $place_o_birth,
     "mode_o_entry" => $mode_o_entry,
     "marital" => $marital,
     "religion" => $religion,
     "nationality" => $nationality,
     "state_o_origin" => $state_o_origin,
     "home_town" => $home_town,
     "home_address" => $home_address,
     "postal_address" => $postal_address,
     "school_admitted" => $school_admitted,
     "department" => $department,
     "previous_history" => $previous_history,
     "if_yes" => $if_yes,
     "matric_no" => $matric_no ,
     "next_of_kin" => $next_of_kin,
     "n_o_k_address" => $n_o_k_address,
     "n_o_k_p_number" => $n_o_k_p_number,
     "n_o_k_relationship" => $n_o_k_relationship,
     "father_name" => $father_name,
     "father_address" => $father_address,
     "father_number" => $father_number,
     "father_occupation" => $father_occupation,
     "mother_name" => $mother_name,
     "mother_address" => $mother_address,
     "mother_number" => $mother_number,
     "mother_occupation" => $mother_occupation,
     "guardian_name" => $guardian_name,
     "guardian_address" => $guardian_address,
     "guardian_number" => $guardian_number,
     "guardian_occupation" => $guardian_occupation,
     "passport_number" => $passport_number,
     "issue_date" => $issue_date,
     "issued_where" => $issued_where,
     "visa_expiry_date" => $visa_expiry_date,
     "family_type" => $family_type,
     "no_children" => $no_children,
     "position_in_family" => $position_in_family,
     "parent_condition" => $parent_condition,
     "reason_for_split" => $reason_for_split,
     "sponsor_parent" => $sponsor_parent,
     "sponsorship_benefit" => $sponsorship_benefit,
     "club_name" => $club_name,
     "post_club" => $post_club ,
     "club_remark" => $club_remark,
     "organization_name" => $organization_name,
     "post_organization" => $post_organization,
     "organization_remark" => $organization_remark,
     "fav_sport_name" => $fav_sport_name,
     "achievement_main_sport" => $achievement_main_sport,
     "other_sport" => $other_sport,
     "achievement_other_sport" => $achievement_other_sport,
     "medical_condition" => $medical_condition,
     "treatment_description" => $treatment_description,
     "medical_area" => $medical_area,
     "ambitions" => $ambitions,
     "efforts" => $efforts,
     "private_info" => $private_info,
     "first_primary_school" => $first_primary_school,
     "first_admission_year_pri" => $first_admission_year_pri,
     "first_graduation_year_pri" => $first_graduation_year_pri,
     "qualifications_pri_1" => $qualification_pri_1,
     "second_primary_school" => $second_primary_school,
     "second_admission_year_pri" => $second_admission_year_pri,
     "second_graduation_year_pri" => $second_graduation_year_pri,
     "qualifications_pri_2" => $qualifications_pri_2,
     "third_primary_school" => $third_primary_school,
     "third_admission_year_pri" => $third_admission_year_pri,
     "third_graduation_year_pri" => $third_graduation_year_pri,
     "qualifications_pri_3" => $qualifications_pri_3,
     "first_secondary_school" => $first_secondary_school,
     "first_admission_year_sec" => $first_admission_year_sec,
     "first_graduation_year_sec" => $first_graduation_year_sec,
     "qualifications_sec_1" => $qualifications_sec_1,
     "second_secondary_school" => $second_secondary_school,
     "second_admission_year_sec" => $second_admission_year_sec,
     "second_graduation_year_sec" => $second_graduation_year_sec,
     "qualifications_sec_2" => $qualifications_sec_2,
     "third_secondary_school" => $third_secondary_school,
     "third_admission_year_sec" => $third_admission_year_sec,
     "third_graduation_year_sec" => $third_graduation_year_sec,
     "qualifications_sec_3" => $qualifications_sec_3,
     "first_institution" => $first_institution,
     "first_admission_year_tet" => $first_admission_year_tet,
     "first_graduation_year_tet" => $first_graduation_year_tet,
     "qualifications_tet_1" => $qualifications_tet_1,
     "second_admission_year_tet" => $second_admission_year_tet,
     "qualifications_tet_2" => $qualifications_tet_2,
     "third_institution" => $third_institution,
     "third_admission_year_tet" => $third_admission_year_tet,
     "third_graduation_year_tet" => $third_graduation_year_tet,
     "qualifications_tet_3" => $qualifications_tet_3,
     "exam_number_1st_sitting" => $exam_number_1st_sitting,
     "exam_number_2nd_sitting" => $exam_number_2nd_sitting,
     "first_examination_year" => $first_examination_year,
     "second_examination_year" => $second_examination_year,
     "exam_body_1" => $exam_body_1,
     "exam_body_2" => $exam_body_2,
     "subjects_1" => $subjects_1,
     "first_grade_1" => $first_grade_1,
     "second_grade_1" => $second_grade_1,
     "subjects_2" => $subjects_2,
     "first_grade_2" => $first_grade_2,
     "second_grade_2" => $second_grade_2,
     "subjects_3" => $subjects_3,
     "first_grade_3" => $first_grade_3,
     "second_grade_3" => $second_grade_3,
     "subjects_4" => $subjects_4  ,
     "first_grade_4" => $first_grade_4,
     "second_grade_4" => $second_grade_4,
     "subjects_5" => $subjects_5,
     "first_grade_5" => $first_grade_5,
     "second_grade_5" => $second_grade_5,
     "subjects_6" => $subjects_6,
     "first_grade_6" => $first_grade_6,
     "second_grade_6" => $second_grade_6,
     "subjects_7" => $subjects_7,
     "first_grade_7" => $first_grade_7,
     "second_grade_7" => $second_grade_7,
     "subjects_8" => $subjects_8,
     "first_grade_8" => $first_grade_8,
     "second_grade_8" => $second_grade_8,
     "subjects_9" => $subjects_9,
     "first_grade_9" => $first_grade_9,
     "second_grade_9" => $second_grade_9,
     "passport_photo" => $passport_photo,
     "birth_certificate" => $birth_certificate,
     "certificate_of_origin" => $certificate_of_origin,
     "court_affidavit" => $court_affidavit,
     "attestation_letter" => $attestation_letter,
     "admission_letter" => $admission_letter,
     "olevel_result_1" => $olevel_result_1,
     "olevel_result_2" => $olevel_result_2
    ];

    $_SESSION['status'] = "success";
    $_SESSION['data'] = $data;
    header('Location:register.php?result=success');
    die();
}


 ?>