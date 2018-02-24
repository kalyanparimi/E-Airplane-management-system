<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"groupproj")or die("Connection Failed");
$query = "select*from passengerdet";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#b3ecff\">
<tr> 

<td width=100><b>First Name:</td> 
<td width=100><b>Last Name:</td>
<td width=100><b>Age:</td> 
<td width=100><b>Gender:</td> 
 
<td width=100><b>Meals Type:</td> 

</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
 
print "<td>" . $row['fname'] .  "</td>"; 
print "<td>" . $row['lname'] . "</td>";
print "<td>" . $row['age'] . "</td>";
print "<td>" . $row['gender'] .  "</td>"; 
print "<td>" . $row['meals'] . "</td>";
print "</tr>"; 
}
print "</table>"; 
?>