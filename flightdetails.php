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


$jdate = $_POST['jdate'];
$depttime = $_POST['depttime'];
$flightno = $_POST['flightno'];
$deptcity = $_POST['deptcity'];
$arrivalcity = $_POST['arrivalcity'];
$class = $_POST['class'];
$charge = $_POST['charge'];
$company = $_POST['company'];



$sql = "INSERT INTO flightdet (jdate, depttime, flightno, deptcity, arrivalcity, class, charge,company) VALUES ('$jdate', '$depttime', '$flightno', '$deptcity', '$arrivalcity', '$class', '$charge','$company')";

if (!mysqli_query($link,$sql)) {
    die('Error: ' . mysql_error()); 
}
echo "<br><br><center><strong>";
echo 'Flight details have been recorded sucessfully';
?>