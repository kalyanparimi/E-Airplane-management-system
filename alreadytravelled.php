<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"groupproj")or die("Connection Failed");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$query = "select*from booking where fname = '$fname' AND lname = '$lname'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
echo "<br><center><br>";
print " 
<table border=\"3\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#b3ecff\"><tr> 
<td width=100>Ticket No</td>
<td width=100>First Name</td> 
<td width=100>Last Name </td> 
<td width=100>Age</td> 
<td width=100>Gender</td> 
<td width=100>Meals</td> 
<td width=100>Journey Date</td>
<td width=100>Company</td>
<td width=100>Flight Number</td>

</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 

print "<td>" . $row['ticketno'] . "</td>"; 
print "<td>" . $row['fname'] . "</td>"; 
print "<td>" . $row['lname'] . "</td>"; 
print "<td>" . $row['age'] .  "</td>"; 
print "<td>" . $row['gender'] . "</td>";
print "<td>" . $row['meals'] . "</td>"; 
print "<td>" . $row['bdate'] . "</td>"; 
print "<td>" . $row['company'] . "</td>"; 
print "<td>" . $row['flightno'] . "</td>"; 
print "</tr>"; 
}
print "</table>"; 
?>