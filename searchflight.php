<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"groupproj")or die("Connection Failed");
$deptcity = $_POST['deptcity'];
$arrivalcity = $_POST['arrivalcity'];
$class = $_POST['class'];

$query = "select * from flightdet where deptcity = '$deptcity' AND arrivalcity = '$arrivalcity' AND class = '$class'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#b3d9ff\">
<tr> 
<td width=100>Journey Date:</td> 
<td width=100>Departure Time:</td> 
<td width=100>Flight Number:</td> 
<td width=100>Departure City:</td> 
<td width=100>Arrival City:</td> 
<td width=100>Travel Class:</td> 
<td width=100>Charges:</td> 
<td width=100>Company:</td> 
  
</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['jdate'] . "</td>"; 
print "<td>" . $row['depttime'] . "</td>"; 
print "<td>" . $row['flightno'] .  "</td>"; 
print "<td>" . $row['deptcity'] . "</td>";
print "<td>" . $row['arrivalcity'] . "</td>"; 
print "<td>" . $row['class'] . "</td>"; 
print "<td>" . $row['charge'] . "</td>";
print "<td>" . $row['company'] . "</td>";

print "</tr>"; 
}
print "</table>"; 
?>