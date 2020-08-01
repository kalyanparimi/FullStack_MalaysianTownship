<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'practice';
mysqli_select_db($conn,$dbname);

$query = "SELECT * FROM ownerview";
$result = mysqli_query($conn,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 
<td width=100><b><i><h3>BLOCKNO:</td> 
<td width=100><b><i><h3>FLATNO:</td> 
<td width=100><b><i><h3>HOUSENO:</td> 
<td width=100><b><i><h3>Resident Name:</td> 
<td width=100><b><i><h3>Registration No:</td> 
<td width=100><b><i><h3>Registration Date:</td> 
<td width=100><b><i><h3>PHONE1:</td> 
<td width=100><b><i><h3>PHONE2:</td>
<td width=100><b><i><h3>EMAILID:</td>  
</tr>"; 

while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['BLOCKNO'] . "</td>"; 
print "<td>" . $row['FLATNO'] . "</td>"; 
print "<td>" . $row['HOUSENO'] .  "</td>"; 
print "<td>" . $row['RESNAME'] . "</td>";
print "<td>" . $row['REGNO'] . "</td>"; 
print "<td>" . $row['REGDATE'] . "</td>"; 
print "<td>" . $row['PHONE1'] . "</td>"; 
print "<td>" . $row['PHONE2'] . "</td>"; 
print "<td>" . $row['EMAILID'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>