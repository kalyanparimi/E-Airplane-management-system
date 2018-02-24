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
$bdate = $_POST['bdate'];
$company = $_POST['company'];
$flightno = $_POST['flightno'];



$sql = "INSERT INTO booking (fname, lname, age, gender, meals,bdate,company,flightno) VALUES ('$fname', '$lname', '$age', '$gender', '$meals','$bdate','$company','$flightno')";

if (!mysqli_query($link,$sql)) {
    die('This Ticket Number has already been booked ! please increment: ' . mysql_error()); 
}
echo "<br><br><br><center><h3>";
echo"Ticket has been booked";
echo "<br><br><br>";
echo "To check details about ticket booked go through the menu";


?>