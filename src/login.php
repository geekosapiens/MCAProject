<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo "1";
    echo "<script type='text/javascript'>document.location.href='./data.php';</script>";
    // header("Location: data.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if(empty(trim(@$_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim(@$_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        echo "4";
        $sql = "SELECT id, username, password FROM formdata WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            echo "5";
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
               if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        echo "stmt fetch";
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            echo "3";
                            // Redirect user to welcome page
                            // header("Location: data.php");
                           echo $_SESSION["username"];
                            echo "<script type='text/javascript'>document.location.href='./data.php';</script>";

                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
               } else{
                    // Username doesn't exist, display a generic error message
                   $login_err = "Invalid username or password.";
               }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    echo $login_err;
    echo "Login";
    // Close connection
    $mysqli->close();
}
?>





<html lang="en"><head>
        <meta charset="utf-8">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
       	<link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
		
        <script src="./scripts/js/jquery.min.js"></script>
		<script src="./scripts/js/popper.min.js"></script>
		<script src="./scripts/js/bootstrap.min.js"></script>
		<script src="./scripts/js/validator.min.js"></script>
        <script src="./scripts/js/form.js"></script>
		<script type="text/javascript">
			document.addEventListener("contextmenu", function(e){
				e.preventDefault();
				}, false);
			window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
		</script>
		<style type="text/css">
			 .control-label:after {
 			 	content:"*";
  				color:red;
			}
		</style>
        
        
	</head>
    <body>
                <a href="index.html"> <img src="download.png" class="mx-auto d-block"></a>
                <h1 class="text-center mt-3 text-primary">Govt. Engineering College, Bikaner</h1>
                <h6 class="text-center mb-1 mt-5">Online Application Portal</h6>
                
        <div class="container py-0">
            <div class="row">
			<div class="col-md-12">
				

				<hr class="mb-1">
			</div>
			</div>
		</div>  <style type="text/css">
	input[type=submit] {
    width: 8em;  height: 2em;
}
</style>
<style type="text/css">
	.c1{color: red; font-style: italic;}
</style>
<div class="row">
                <div class="col-md-4 offset-md-4">
                    <span class="anchor" id="formLogin"></span>
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h5 class="mb-0">Login Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="login" method="post" autocomplete="off">
                                <div class="col-sm-12 pb-1">
                            		<label for="">Username:<font color="#FF0000">*</font></label>
                            			<div class="input-group">
                                			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                			<input required="" type="text" class="form-control" minlength="6" maxlength="30" id="username" name="username" placeholder="User Name" value="">
                            			</div>
                            			<span class="c1" id="errun"></span>
                        		</div>
								<div class="col-sm-12 pb-1">
                            		<label for="">Password:<font color="#FF0000">*</font></label>
                            			<div class="input-group">
                                			<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                                			<input required="" type="password" minlength="5" maxlength="15" class="form-control" id="password" name="password" placeholder="Password">
                            			</div>
                        		</div>
                        		<div class="col-sm-12 pb-3">
                        		
                   				</div>
								   
                               		<p align="center"> <input name="Submit" id="Submit" type="submit" value="Login →" class="button1">
                           			</p>
                            </form>
                           
                        </div>
                    </div>
                </div>
</div>
	<div class="container py-9">
            <div class="row">		
				<div class="col-md-12">
					<hr class="mb-2">
					
				</div>
			</div>
	</div>
    

<!-- <script src="./scripts/js/validatelogin.js"></script>
<script type="text/javascript" language="javascript">
	function SubmitForm(){
		var tf=validateLogin(event);
		if(tf==true)
			{
				var pw1 = document.getElementById('password').value;
				var Salt = '1083147738'
				let encrypted = CryptoJSAesJson.encrypt(pw1, Salt);
				document.getElementById('password').value=encrypted;
				return true;
			}
			else
			{
				return false;
			}
	}
</script> -->
</body></html>

