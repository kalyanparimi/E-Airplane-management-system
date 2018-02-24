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


$ticketno = $_POST['ticketno'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bdate = $_POST['bdate'];
$bdate = $_POST['company'];
$bdate = $_POST['flightno'];



$sql = "INSERT INTO booking (ticketno, fname, lname, age, gender, bdate,company,flightno) VALUES ('$ticketno', '$fname', '$lname', '$age', '$gender', '$bdate','$company','$flightno')";

if (!mysqli_query($link,$sql)) {
    die('This Ticket Number has already been booked ! please increment: ' . mysql_error()); 
}
echo "<br><br><br><center><h1>";
echo"ticket has been booked";

?>