<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'practice';
mysqli_select_db($conn,$dbname);

$query = "SELECT * FROM malaysiantownship";
$result = mysqli_query($conn,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 
<td width=100>blockno:</td> 
<td width=100>flatno:</td> 
<td width=100>houseno:</td> 
<td width=100>resident name:</td> 
<td width=100>registration no:</td> 
<td width=100>registration date:</td> 
<td width=100>phone1:</td> 
<td width=100>phone2:</td>
<td width=100>emailid:</td>  
</tr>"; 

while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['blockno'] . "</td>"; 
print "<td>" . $row['flatno'] . "</td>"; 
print "<td>" . $row['houseno'] .  "</td>"; 
print "<td>" . $row['resname'] . "</td>";
print "<td>" . $row['regno'] . "</td>"; 
print "<td>" . $row['regdate'] . "</td>"; 
print "<td>" . $row['phone1'] . "</td>"; 
print "<td>" . $row['phone2'] . "</td>"; 
print "<td>" . $row['emailid'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>