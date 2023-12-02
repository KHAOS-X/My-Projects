<?php

require_once "adminConfig.php";
 

$admin_name= $admin_id = $admin_contact = $password = $confirm_password = "";
$admin_name_err = $admin_id_err = $admin_contact_err = $password_err = $confirm_password_err = $success_alert = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["admin_id"]))){
        $admin_id_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["admin_id"]))){
        $admin_id_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $admin_id = trim($_POST["admin_id"]);
        $sql = "SELECT admin_id FROM admin_information WHERE admin_id = '$admin_id'";
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
        $cnt = mysqli_num_rows($query);
        if ($cnt>0){
            $admin_id_err = "ID already exists";
        }
        
    }
    if(empty(trim($_POST["admin_name"]))){
        $admin_name_err = "Please enter a Name.";
    } 
       
    
    if(empty(trim($_POST["admin_contact"]))){
        $admin_contact_err = "Please enter your phone number.";
    
    } else{
       $admin_contact = trim($_POST["admin_contact"]);
        $sql = "SELECT admin_contact FROM admin_information WHERE admin_contact = '$admin_contact'";
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
        $cnt = mysqli_num_rows($query);
        if ($cnt>0){
            $admin_contact_err = "Contact has already been used";
        }
       
           
            
    }
    
    
   
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    
    if(empty($admin_name_err) && empty($password_err) && empty($confirm_password_err) && empty($admin_contact_err) && empty($admin_id_err)){
     
        $admin_id = trim($_POST["admin_id"]);
        $admin_name = trim($_POST["admin_name"]);
        $admin_contact = trim($_POST["admin_contact"]);
        $admin_password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);

        $sql = "INSERT INTO admin_information ( admin_name, admin_contact, admin_id, admin_password ) VALUES ('$admin_name', '$admin_contact', '$admin_id', '$admin_password')";
         
        mysqli_query($con,$sql) or 
        die('Record not Inserted: ' . mysqli_error($con));

        $admin_name= $admin_id = $admin_contact = $password = $confirm_password = "";
        $success_alert = "Sign Up Successful";
        header("Location: adminlogin.php");
    }
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    
    <style>
        body{ display: flex; align-items: center; justify-content: center; font: 14px sans-serif; background-image: linear-gradient( to bottom right, red, orange, purple, blue );
    background-size: cover; }
        .wrapper{ width: 360px; padding: 20px; }
        .mother_container{ display: flex; align-items: center; justify-content: center; margin-top: 10vh; 
            background: rgba(257, 257, 257, 0.5); border: 2px solid rgb(0, 47, 255); border-radius: 25px;
            width: 40%; padding-top: 5vh;
        }
    </style>
</head>
<body>
    <div class="mother_container">
    <div class="wrapper">
        <h2>Sign Up: Administrator</h2>
        <span class="valid-feedback"><?php echo $success_alert; ?></span>
        <p>Please fill this form to create an admin account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="admin_name" class="form-control <?php echo (!empty($admin_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $admin_name; ?>">
                <span class="invalid-feedback"><?php echo $admin_name_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Username or ID </label>
                <input type="text" name="admin_id" class="form-control <?php echo (!empty($admin_id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $admin_id; ?>">
                <span class="invalid-feedback"><?php echo $admin_id_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Phone Number </label>
                <input type="text" name="admin_contact" class="form-control <?php echo (!empty($admin_contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $admin_contact; ?>">
                <span class="invalid-feedback"><?php echo $admin_contact_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="adminlogin.php">Login here</a>.</p>
        </form>
    </div>    
    </div>
</body>
</html>