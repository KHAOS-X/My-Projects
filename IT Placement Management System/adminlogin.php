<?php

session_start();
 @include "adminconfig.php";

 $error = $admin_id = $admin_password = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    
    $admin_id = trim($_POST["admin_id"]);
    $admin_password = trim($_POST["admin_password"]);

        $sql = "SELECT * FROM admin_information WHERE admin_id = '$admin_id' and admin_password = '$admin_password'";
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
        $cnt = mysqli_num_rows($query);
    if ($cnt == 1) {
        $row = mysqli_fetch_array($query);
        

            $_SESSION["admin_name"] = $row['admin_name'];
            header("Location: admindashboard.php");
            if ($_SESSION["admin_name"] = $row['admin_name']) {
                # code...
                echo ("It works");
            }else{
                echo("It does not");
            }
            
        
            
    }else{
      $error = 'Incorrect email or password!';
     };
};

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        body{
            height: 100vh;
        }
        .error_msg{
            color: red;
            font-size: 14px;
        }
    </style>
    <title>Login: Administrator</title>
</head>
<body>
    <div class="body_container">
        <h3>Administrator Login</h3>
        <div class="mother_container">
           <span class="error_msg"> <?php echo $error; ?></span>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="adminlogin">
                <label for="admin_id">Administrator's ID</label><br>
                <input type="text" name="admin_id" id="admin_id" class="input" required>
                <br>
                <label for="admin_password">Password</label><br>
                <input type="password" name="admin_password" id="admin_password" class="input" required>
                <br>
                <br>
                <button type="submit" name = submit class="button">Login</button>
            </form>
        </div>
        <p>Click <a href="adminsignup.php">here</a> to sign up</p>
    </div>
</body>
</html>