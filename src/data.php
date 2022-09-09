<?php
require_once "config.php";
session_start();
$username = $_SESSION["username"];
$sql = "SELECT id, username, name, fname, mname, dob, gender, mobile, email FROM formdata WHERE username = ?";

$stmt= $mysqli->prepare($sql);
$stmt -> bind_param("s", $username);

// $stmt= $mysqli->query($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $name, $fname, $mname, $dob, $gender, $mobile, $email);
$stmt->fetch();
// while ($stmt->fetch()) {
//     echo 'ID: '.$id.'<br>';
//     echo 'Username: '.$username.'<br><br>';
// echo $username.'<br>';

// echo $name  .'<br>';
// echo $fname  .'<br>';
// echo $mname  .'<br>';
// echo $dob    .'<br>';
// echo $gender .'<br>';
// echo $mobile .'<br>';
// echo $email.'<br>';
  
// }
// ?>

<html>

<link rel="stylesheet" href="./styles/css/bootstrap.min.css">
       <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
    <noscript><meta http-equiv="refresh" content="0; URL=javascript.php"/></noscript>
    <script src="./scripts/js/jquery.min.js"></script>
    <script src="./scripts/js/popper.min.js"></script>
    <script src="./scripts/js/bootstrap.min.js"></script>
    <script src="./scripts/js/validator.min.js"></script>
    <script src="./scripts/js/form.js"></script>
  

<body>
                <a href="index.html"> <img src="download.png" class="mx-auto d-block"></a>
                <h1 class="text-center mt-3 text-primary">Govt. Engineering College, Bikaner</h1>
                <h6 class="text-center mb-1 mt-3">Online Application Portal</h6>
                <hr class="mb-3">

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <header class="card-header">
                
                <h4 class="card-title mt-0">Form Data</h4>
            </header>
            <article class="card-body">    
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Name </div>
                    <div class="col-8"> <? echo $name;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Father's Name </div>
                    <div class="col-8"> <? echo $fname;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Mother's Name </div>
                    <div class="col-8"> <? echo $mname;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Date Of Birth </div>
                    <div class="col-8"> <? echo $dob;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Gender </div>
                    <div class="col-8"> <? echo $gender;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Mobile </div>
                    <div class="col-8"> <? echo $mobile;?> </div>
                </div>
                <div class="row m-4">
                    <div class="col-4 font-weight-bold"> Email </div>
                    <div class="col-8"> <? echo $email;?> </div>
                </div>
            
            <a href="logout.php" class="float-right btn btn-danger mt-3" >Logout</a>
                <div style="font-family:'Arial';">   </div>

</article>

        </div>
    </div>
    </div>
    
    </div>
</body>
</html>

