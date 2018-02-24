<?php

define('DB_NAME', 'groupproj');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysqli_select_db($link,DB_NAME);

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$meals = $_POST['meals'];



$sql = "INSERT INTO passengerdet (fname, lname, age, gender,meals) VALUES ('$fname', '$lname', '$age', '$gender','$meals')";

if (!mysqli_query($link,$sql)) {
    die('Error: ' . mysql_error()); 
}

echo"<center><br><br><br><br><b><h2><i>Passengers details have been recorded sucessfully";
?>