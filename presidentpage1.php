<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'practice';
mysqli_select_db($conn,$dbname);

$query = "SELECT * FROM tenantview";
$result = mysqli_query($conn,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 
<td width=100>Block No:</td> 
<td width=100>Flat No:</td> 
<td width=100>House No:</td> 
<td width=100>Tenant Name:</td> 
<td width=100>Joining Date:</td> 
<td width=100>No of Tenants:</td> 
<td width=100>Phone1:</td> 
<td width=100>Phone2:</td>
<td width=100>Emailid:</td>  
<td width=100>Leaving Date:</td> 
</tr>"; 

while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['blockno'] . "</td>"; 
print "<td>" . $row['flatno'] . "</td>"; 
print "<td>" . $row['houseno'] .  "</td>"; 
print "<td>" . $row['tname'] . "</td>";
print "<td>" . $row['tjoined'] . "</td>"; 
print "<td>" . $row['notenants'] . "</td>"; 
print "<td>" . $row['phone1'] . "</td>"; 
print "<td>" . $row['phone2'] . "</td>"; 
print "<td>" . $row['emailid'] . "</td>"; 
print "<td>" . $row['tleft'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>