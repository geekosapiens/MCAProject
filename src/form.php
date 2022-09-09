<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
//other form elements



// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["UserName"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_@.]+$/', trim($_POST["UserName"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM formdata WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["UserName"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["UserName"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["Password1"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["Password1"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["Password1"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["Password2"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["Password2"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    echo "3";
    echo $username_err;
    echo $password_err;
    echo $confirm_password_err;
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        echo "2";
        // Prepare an insert statement
        $sql = "INSERT INTO formdata (username, password,name, fname, mname, dob, gender, mobile, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         echo"1";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssssis", $param_username, $param_password,$param_name, $param_fname, $param_mname, $param_dob, $param_gender, $param_mobile, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
      
            $dob=$_POST["dobdd"]."-".$_POST["dobmm"]."-".$_POST["dobyy"];
            $param_name = $_POST["CandidateName"];
            $param_fname = $_POST["FatherName"];
            $param_mname = $_POST["MotherName"];
            $param_dob = $dob;
            $param_gender = $_POST["Gender"];
            $param_mobile = (int) $_POST["Mobile"];
            $param_email = $_POST["Email"];
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                // header("location: login.php");
                echo "<script type=\"text/javascript\">alert(\"Data Saved!!\")</script>"; 
                echo "<script type='text/javascript'>document.location.href='./login.php';</script>";
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                echo $mysqli -> error;
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>