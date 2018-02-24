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




$sql = "delete from passengerdet WHERE fname = '$fname' AND lname = '$lname'";

if (!mysqli_query($link,$sql)) {
    die('Passenger does not exist ' . mysql_error()); 
}
echo "TICKET HAS BEEN CANCELLED";

?>