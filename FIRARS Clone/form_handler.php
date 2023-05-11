<?php 
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
    $if_where ='';
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
    $club_name ='';
    $post_club ='';
    $club_remark ='';
    $organization_name ='';
    $post_organization ='';
    $organization_remark ='';
    $fav_sport_name ='';
    $achievement_main_sport ='';
    $other_sport ='';
    $achievement_other_sport ='';
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


// VALIDATION FOR LOCAL VARIABLES
   // __         __    
   // \ \       / / 
   //  \ \     / /
   //   \ \   / /
   //    \ \_/ /
   //     \___/

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
   $allowed_genders = ["male", "female"];
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

 

   if ($errors) {
var_dump($errors);
}
;