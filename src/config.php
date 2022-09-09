<?php
$mysqli = new mysqli("db","root","root","db");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
